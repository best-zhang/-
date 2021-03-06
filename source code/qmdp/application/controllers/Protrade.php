<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Protrade extends CI_Controller
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
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('protrade');
    }

    public function __construct()
    {
        parent::__construct();

        $this->load->library('MYController');

        $this->load->database();
    }

    function getProjects()
    {
        $query = $this->db->query('SELECT id,name FROM raise ORDER BY dtinsert DESC;');

        $this->response_data($query->result());
    }

    function save()
    {
        $pname = trim($_POST['pname']);
        $project = trim($_POST['project']);
        $money = trim($_POST['money']);
        $jifen = trim($_POST['jifen']);
        $tradetime = trim($_POST['tradetime']);
        $address = trim($_POST['address']);
        $jingban = trim($_POST['jingban']);

		$money *= 10000;
		
        $user = $this->session->userdata('user_info');

        $sqladd = "INSERT INTO raisedeal(userid,projectid,money,integral,tradetime,address,jingban,createby,dtinsert)" .
            "VALUES('{$pname}','{$project}',{$money},'{$jifen}','{$tradetime}','{$address}','{$jingban}','{$user}',NOW());";			
        $this->db->query($sqladd);
        if ($this->db->affected_rows() > 0) {
			$sqlupdate = "UPDATE raise SET completed = completed + {$money} WHERE id = {$project};";
			$this->db->query($sqlupdate);
			
			$sqlupdate = "UPDATE raise SET prostatus = 2 WHERE dtend <= NOW() AND prostatus = 1 AND id = {$project};";
			$this->db->query($sqlupdate);
			
			$sqlupdate = "UPDATE user SET integral = integral + {$jifen} WHERE id = {$pname};";
			$this->db->query($sqlupdate);
			
            echo "保存成功";
        } else {
            echo "保存失败";
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
