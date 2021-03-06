<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loweradd extends CI_Controller
{

    /**
     * Home Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /home.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $data['userinfo'] = $this->session->userdata('user_info_home');
        $this->load->view('loweradd', $data);
    }

    public function __construct()
    {
        parent::__construct();

        $this->load->library('MYHomeController');

        $this->load->database();
    }

    function getLowerList()
    {
        $session_user = $this->session->userdata('user_info_home');
        $sqlselect = "SELECT id,username,name,age,if(sex=0,'男','女') AS sex,tel,level FROM ("

            . " SELECT id,username,name,sex,age,tel,'A' as level FROM user WHERE superior = {$session_user->id}"
            . " UNION ALL"

            . " SELECT id,username,name,sex,age,tel,'B' as level"
            . " FROM user WHERE id in ("
            . " select t1.id from user t1"
            . " inner join user  t2  on t1.superior = t2.id"
            . " where t2.superior= {$session_user->id}"
            . " )"
            . " UNION ALL"

            . " SELECT id,username,name,sex,age,tel,'C' as level"
            . " FROM user WHERE id in("
            . " select t1.id from user t1"
            . " inner join ("
            . " select t1.id,t1.superior from user t1"
            . " inner join user  t2 on t1.superior = t2.id"
            . " where t2.superior= {$session_user->id}"
            . " ) t2 on t1.superior = t2.id"
            . " )"
            . " )m;";

        $query = $this->db->query($sqlselect);

        $this->response_data($query->result());
    }
	
	function save()
    {
		$id = trim($_POST['id']);
        $username = trim($_POST['username']);
        $uname = trim($_POST['uname']);
        $sex = trim($_POST['sex']);
        $age = trim($_POST['age']);
        $tel = trim($_POST['tel']);

        $user = $this->session->userdata('user_info_home');

		$exist = null;
		if(!$id){
			$sqlselect = "SELECT * FROM user WHERE username = '{$username}' ;";
			$query = $this->db->query($sqlselect);			
			
			foreach ($query->result() as $row) {
				$exist = $row;
			}			
		}
		if ($exist) {
			echo "该用户名已存在.";
		}
		else{
			$sql = "";
			if(!$id){
				$sql = "INSERT INTO user(username,password,name,sex,age,tel,superior,createby,dtinsert) " .
					"VALUES('{$username}','123456','{$uname}','{$sex}','{$age}','{$tel}',{$user->id},'{$user->name}',NOW());";
			}else{
				$sql = "UPDATE user SET username='{$username}',name='{$uname}',sex='{$sex}',age='{$age}',tel='{$tel}' WHERE id = {$id} AND superior = {$user->id} ;";
			}

			$this->db->query($sql);
			if ($this->db->affected_rows() > 0) {
				echo "保存成功";
			} else {
				echo "保存失败";
			}
		}
    }
	
	function delUser()
    {
		$id = trim($_POST['id']);
        $user = $this->session->userdata('user_info_home');		

		$sql = "DELETE FROM user WHERE id = {$id} AND superior = {$user->id} ;";
			
		$this->db->query($sql);
		if ($this->db->affected_rows() > 0) {
			echo "删除成功";
		} else {
			echo "删除失败";
		}
    }

    /**
     * @param $data 数组
     * 构造json字符串并返回
     */
    function response_data($data)
    {
        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data, JSON_UNESCAPED_UNICODE);//该方法中第二个参数，必须php5.4版本以上才支持
    }

}
