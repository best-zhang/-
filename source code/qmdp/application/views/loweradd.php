﻿<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<!--
BeyondAdmin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 1.0.0
Purchase: http://wrapbootstrap.com
-->

<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->
<head>
    <meta charset="utf-8"/>
    <title>人员列表</title>

    <meta name="description" content="form validation"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="assets/img/favicon.png"
          type="image/x-icon">

    <!--Basic Styles-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link id="bootstrap-rtl-link" href="" rel="stylesheet"/>
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="assets/css/weather-icons.min.css" rel="stylesheet"/>

    <!--Beyond styles-->
    <link id="beyond-link" href="assets/css/beyond.min.css" rel="stylesheet"/>
    <link href="assets/css/demo.min.css" rel="stylesheet"/>
    <link href="assets/css/typicons.min.css" rel="stylesheet"/>
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    <link id="skin-link" href="" rel="stylesheet" type="text/css"/>

    <!--Page Related styles-->
    <link href="assets/css/dataTables.bootstrap.css" rel="stylesheet"/>

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="assets/js/skins.min.js"></script>

    <style type="text/css">
        body:before, .page-body {
            background: #ffffff;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Microsoft YaHei', 'Open Sans', 'Segoe UI';
        }

        .navbar {
            font-size: 17px;
            height: auto;
        }

        .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover,
        .navbar-default .navbar-nav > .active > a:focus {
            color: #ff000c;
            background-color: rgba(255, 255, 255, 0);
        }

        .navbar-default .navbar-nav > li > a:hover {
            color: #ff000c;
            border-bottom: solid 2px #16caff;
        }

        .navbar-default .navbar-nav > li > a {
            color: #060606;
        }

        .navbar .navbar-brand {
            padding: 15px;
            color: #666666;
        }

        .navbar .pull-right {
            font-size: 13px;
            line-height: 50px;
        }

        .img-user-header img {
            width: 100px;
            height: 100px;
        }

        .well-nav {
            max-width: 250px;
            background-color: #EBF5EA;
        }

        .well-nav .nav-title {
            background-color: #99ccff;
            font-size: 16px;
            font-weight: bold;
            padding: 5px;
            color: #fbfbfb;
        }

        .well-nav .nav-link a {
            font-size: 14px;
            color: #000000;
        }

        .well-detail {
            padding-top: 5px;
            padding-bottom: 30px;
        }

        #simpledatatable_filter, #simpledatatable_length, #simpledatatable_info {
            display: none;
        }

    </style>
</head>
<!-- /Head -->
<!-- Body -->
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header margin-right-50">
            <a class="navbar-brand" href="home">全民当铺</a>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li><a href="home">首页</a></li>
                <li><a href="about">关于我们</a></li>
                <li><a href="shopindex" target="_blank">当铺商城</a></li>
            </ul>
        </div>

        <div class="pull-right">
            <?php
            if ($userinfo) {
                echo '欢迎您，<span>' . $userinfo->name . '</span> <span class="margin-left-10"> <a id="logout" onclick="logout();"  href="#">退出</a></span>';
            } else {
                echo '<span> <a href="userlogin">登录</a> </span>';
            }
            ?>
        </div>
    </div>
</nav>
<!-- Main Container -->
<div class="page-body">
    <div class="row margin-top-50">
        <div class="contianer">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">
                <div class="well well-nav text-center no-padding padding-top-10">
                    <div class="img-user-header">
                        <img src="<?php
                        if ($userinfo->img) {
                            echo 'uploads/' . $userinfo->img;
                        } else {
                            echo 'assets/img/avatars/John-Smith.jpg';
                        }
                        ?>" class="img-circle">
                    </div>
                    <div class="margin-top-20 nav-title">个人信息</div>
                    <div class="nav-link padding-5">
                        <a href="userupdate">个人资料</a>
                    </div>
                    <div class="nav-link padding-5">
                        <a href="userpwd">密码修改</a>
                    </div>
                    <div class="margin-top-10 nav-title">人员信息管理</div>
                    <div class="nav-link padding-5">
                        <a href="lowerlist">人员列表</a>
                    </div>
                    <div class="nav-link padding-5">
                        <a href="lowerarch">人员架构</a>
                    </div>
                    <div class="nav-link padding-5">
                        <a href="loweradd">信息录入</a>
                    </div>
                    <div class="margin-top-10 nav-title">项目支持</div>
                    <div class="nav-link padding-10">
                        <a href="userpro">已投项目</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                <div class="row well well-detail">
                    <div class="padding-10 text-align-right"><a id="addUser" href="#myModal" data-toggle="modal"
                                                                data-target="#myModal">新增</a></div>
                    <table class="table table-striped table-bordered table-hover" id="simpledatatable">
                        <thead>
                        <tr>
                            <th>
                                姓名
                            </th>
                            <th>
                                性别
                            </th>
                            <th>
                                年龄
                            </th>
                            <th>
                                联系方式
                            </th>
                            <th>
                                级别
                            </th>
                            <th>
                                操作
                            </th>
                        </tr>
                        </thead>
                        <tbody id="list">

                        </tbody>
                    </table>
					<div class="text-center padding-10" style="color:#666666;">(注：只能修改A级用户。)</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
     data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    新增用户
                </h4>
            </div>
            <div class="modal-body">
                <form id="inputform" method="post" action=""
                      class="form-horizontal"
                      data-bv-message="填写不正确"
                      data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                      data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                      data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">

                    <div class="form-group">
                        <label class="col-lg-3 col-md-3 col-sm-3 control-label padding-right-5">用户名:</label>
                        <div class="col-lg-6 col-md-6 col-sm-6 padding-left-5 no-padding-right">
                            <input type="text" class="form-control input-sm" name="username" id="username"
                                   placeholder="请输入用户名"
                                   data-bv-notempty="true"
                                   data-bv-notempty-message="用户名不能为空"
								   data-bv-regexp="true"
                                   data-bv-regexp-regexp="[0-9a-z_-]{1,}"
                                   data-bv-regexp-message="用户名只能填写数字,小写字母和下划线组合"
                                   data-bv-stringlength="true"
                                   data-bv-stringlength-min="1"
                                   data-bv-stringlength-max="20"
                                   data-bv-stringlength-message="用户名长度范围为1-20字符"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 col-md-3 col-sm-3 control-label padding-right-5">姓名:</label>
                        <div class="col-lg-6 col-md-6 col-sm-6 padding-left-5 no-padding-right">
                            <input type="text" class="form-control input-sm" name="uname" id="uname"
                                   placeholder="请输入姓名"
                                   data-bv-notempty="true"
                                   data-bv-notempty-message="姓名不能为空"
                                   data-bv-stringlength="true"
                                   data-bv-stringlength-min="1"
                                   data-bv-stringlength-max="20"
                                   data-bv-stringlength-message="姓名长度范围为1-20字符"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 col-md-3 col-sm-3 control-label padding-right-5">性别:</label>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9">
                            <label class="radio-inline">
                                <input name="sex" type="radio" value="0" checked="checked">
                                <span class="text">男</span>
                            </label>
                            <label class="radio-inline">
                                <input name="sex" type="radio" value="1">
                                <span class="text">女</span>
                            </label>
                            <label class="radio select2-display-none">
                                <input name="sex" type="radio">
                                <span class="text"></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 col-md-3 col-sm-3 control-label padding-right-5">年龄:</label>
                        <div class="col-lg-6 col-md-6 col-sm-6 padding-left-5 no-padding-right">
                            <input type="text" class="form-control input-sm" name="age" id="age"
                                   placeholder="请输入年龄"
                                   data-bv-message="年龄填写不正确"
                                   data-bv-notempty="false"
                                   data-bv-notempty-message="年龄不能为空"
                                   data-bv-regexp="true"
                                   data-bv-regexp-regexp="[1-9][0-9]*"
                                   data-bv-regexp-message="年龄只允许填写数字"
                                   data-bv-stringlength="true"
                                   data-bv-stringlength-min="0"
                                   data-bv-stringlength-max="5"
                                   data-bv-stringlength-message="年龄长度范围为0-5"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 col-md-3 col-sm-3 control-label padding-right-5">联系方式:</label>
                        <div class="col-lg-6 col-md-6 col-sm-6 padding-left-5 no-padding-right">
                            <input type="text" class="form-control input-sm" name="tel" id="tel"
                                   placeholder="请输入联系方式"
                                   data-bv-message="联系方式格式不正确"
                                   data-bv-stringlength="true"
                                   data-bv-stringlength-min="1"
                                   data-bv-stringlength-max="30"
                                   data-bv-stringlength-message="联系方式长度范围为1-30"/>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="toVaild();">
                    保存
                </button>
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    取消
                </button>				
				<input type="hidden" id="userid" value="" />
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- 模态框（Modal） 删除用户-->
<div class="modal fade" id="delModal" tabindex="-1" role="dialog" aria-labelledby="delModalLabel" aria-hidden="true"
     data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                </button>
                <h4 class="modal-title" id="delModalLabel">
                    删除用户
                </h4>
            </div>
            <div class="modal-body text-center">
                你确定要删除该用户吗？
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="delUser();">
                    确定
                </button>
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    取消
                </button>				
				<input type="hidden" id="delid" value="" />
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--Basic Scripts-->
<script src="assets/js/jquery-2.0.3.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!--Beyond Scripts-->
<script src="assets/js/beyond.min.js"></script>

<!--Page Related Scripts-->
<script src="assets/js/datatable/jquery.dataTables.min.js"></script>
<script src="assets/js/datatable/ZeroClipboard.js"></script>
<script src="assets/js/datatable/dataTables.tableTools.min.js"></script>
<script src="assets/js/datatable/dataTables.bootstrap.min.js"></script>
<script src="assets/js/validation/bootstrapValidator.js"></script>
<script src="assets/js/_js/home.common.js"></script>

<script>
    $(document).ready(function () {
        getlist();

        $("#inputform").bootstrapValidator({
            excluded: [":disabled"]//关键配置，表示只对于禁用域不进行验证，其他的表单元素都要验证
        });
        $("#myModal").modal('hide');
		$("#delModal").modal('hide');

        $('#myModal').on('hide.bs.modal', function () {
			$("#userid").val("");
			$("#username").val("");
			$("#uname").val("");
			$("#age").val("");
			$("#tel").val("");
			$("input[name='sex'][value=0]").prop("checked",true);
			
			getlist();
            $('#inputform').bootstrapValidator('resetForm');			
        });
		
		$('#delModal').on('hide.bs.modal', function () {			
			getlist();
        });
    });

    function inittable() {
        //Datatable Initiating
        var oTable = $('#simpledatatable').dataTable({
            //"sDom": "Tflt<'row DTTTFooter'<'col-sm-6'i><'col-sm-6'p>>",
			"retrieve":true,
            "bPaginate": false,//显示（使用）分页器
            "iDisplayLength": 15,
            "oTableTools": {
                "aButtons": [],
                "sSwfPath": "assets/swf/copy_csv_xls_pdf.swf"
            },
            "language": {
                "search": "",
                "sLengthMenu": "_MENU_",
                "oPaginate": {
                    "sPrevious": "往前",
                    "sNext": "往后"
                }
            },
            "aoColumns": [
                {"bSortable": false},
                {"bSortable": false},
                {"bSortable": false},
                {"bSortable": false},
                {"bSortable": false},
                {"bSortable": false}
            ],
            "aaSorting": []
        });

        //Check All Functionality
        jQuery('#simpledatatable .group-checkable').change(function () {
            var set = $(".checkboxes");
            var checked = jQuery(this).is(":checked");
            jQuery(set).each(function () {
                if (checked) {
                    $(this).prop("checked", true);
                    $(this).parents('tr').addClass("active");
                } else {
                    $(this).prop("checked", false);
                    $(this).parents('tr').removeClass("active");
                }
            });

        });
        jQuery('#simpledatatable tbody tr .checkboxes').change(function () {
            $(this).parents('tr').toggleClass("active");
        });
    }

    function getlist() {
        $.ajax({
            type: 'POST',
            url: '../loweradd/getLowerList',//路径
            data: {},
            success: function (data) {
                var str = "";
                if (data) {
                    for (i = 0; i < data.length; i++) {
                        str += '<tr>' +
                            '<td>' + (data[i]["name"] ? data[i]["name"] : "") + '</td>' +
                            '<td>' + data[i]["sex"] + '</td>' +
                            '<td>' + data[i]["age"] + ' </td>' +
                            '<td>' + data[i]["tel"] + '</td>' +
                            '<td>' + (data[i]["level"] ? data[i]["level"] : "") + '</td>' +
							(data[i]["level"]=="A"?
                            ('<td> <a href="javascript:void(0);" onclick="update(' + data[i]["id"] + ',\'' + data[i]["username"] + '\',\'' + data[i]["name"] + '\',\'' + data[i]["sex"] + '\',' + data[i]["age"] + ',\'' + data[i]["tel"] + '\')">修改</a>/<a href="javascript:void(0);" onclick="del(' + data[i]["id"] + ')">删除</a></td>')
							: "<td>不可操作</td>") +
                            '</tr>';
                    }
                }
                if (!str) {
                    str = '<tr class="odd"><td valign="top" colspan="8" class="dataTables_empty">暂无数据</td></tr>';
                }

                $("#list").html(str);
                inittable();
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert("获取项目数据出错：" + XMLHttpRequest.status + "," + textStatus);
            }
        });
    }

    function toVaild() {
        $('#inputform').data('bootstrapValidator').validate();
        if ($('#inputform').data('bootstrapValidator').isValid()) {
            save();
        } else {
            alert("数据填写不正确,请检查");
        }
    }

    function save() {
        $.ajax({
            type: 'POST',
            url: '../loweradd/save',//路径
            data: {
                "id": $("#userid").val(),
                "username": $("#username").val(),
                "uname": $("#uname").val(),
                "sex": $('input:radio:checked').val(),
                "age": $("#age").val(),
                "tel": $("#tel").val()
            },
            success: function (data) {
                if (data) {
                    alert(data);
					if(data.indexOf("成功") >= 0){
						$('#myModal').modal('hide');
					}
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert("保存数据出错：" + XMLHttpRequest.status + "," + textStatus);
            }
        });
    }
	
	function update(id,username,uname,sex,age,tel){
		$('#myModal').modal('show');
		
		$("#userid").val(id);
		$("#username").val(username);
		$("#uname").val(uname);
		$("#age").val(age);
		$("#tel").val(tel);
		
		if(sex=="男"){
			$("input[name='sex'][value=0]").prop("checked",true);
			//$("input[name='sex'][value=1]").removeAttr("checked");
		}else{
			$("input[name='sex'][value=1]").prop("checked",true);
			//$("input[name='sex'][value=0]").removeAttr("checked");
		}
	}
	function del(id){
		$("#delid").val(id);
		$('#delModal').modal('show');
	}
	
	function delUser(){
		$.ajax({
            type: 'POST',
            url: '../loweradd/delUser',//路径
            data: {
                "id": $("#delid").val()
            },
            success: function (data) {
                if (data) {
                    alert(data);
					$('#delModal').modal('hide');
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert("删除用户出错：" + XMLHttpRequest.status + "," + textStatus);
            }
        });
	}

</script>
</body>
<!--  /Body -->
</html>
