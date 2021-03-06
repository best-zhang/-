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
    <title>项目状态</title>

    <meta name="description" content="form editors"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

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

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="assets/js/skins.min.js"></script>
    <style type="text/css">
        body:before {
            background-color: #ffffff;
        }

        .page-body {
            background: #ffffff;
        }

        .input-group-title {
            font-size: 18px;
            font-weight: bold;
            padding: 20px;
            line-height: 34px;
            color: #555;
        }

        .img-project {
            width: 100%;
            height: 0px;
            padding-bottom: 100%;
            background-size: 100% 100%;
            background-repeat: no-repeat;
        }

        .blank-img-label {
            height: 0px;
            padding-bottom: 75%;
        }

        .label-img {
            float: left;
            padding: 10px 5px;
            margin-right: 50px;
            font-size: 15px;
        }
    </style>
</head>
<!-- /Head -->
<!-- Body -->
<body>
<!-- Navbar -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="assets/img/logo.png" alt=""/>
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings --->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="assets/img/avatars/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span>系统管理员</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <!--/Theme Selector Area-->
                                <li class="dropdown-footer">
                                    <a href="../login">
                                        退 出
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                        no space must be between these elements-->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>
<!-- /Navbar -->
<!-- Main Container -->
<div class="main-container container-fluid">
    <!-- Page Container -->
    <div class="page-container">
        <!-- Page Sidebar -->
        <div class="page-sidebar" id="sidebar">
            <!-- Page Sidebar Header-->
            <div class="sidebar-header-wrapper">

            </div>
            <!-- /Page Sidebar Header -->
            <!-- Sidebar Menu -->
            <ul class="nav sidebar-menu">
                <!--UI Elements-->
                <li class="open">
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-desktop"></i>
                        <span class="menu-text"> 众筹管理 </span>
                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="../proset">
                                <span class="menu-text">项目设置</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="../prostatus">
                                <span class="menu-text">项目状态</span>
                            </a>
                        </li>
                        <li>
                            <a href="../protrade">
                                <span class="menu-text">交易录入</span>
                            </a>
                        </li>
                        <li>
                            <a href="../protradelist">
                                <span class="menu-text">交易列表</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--Tables-->
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-table"></i>
                        <span class="menu-text"> 商城管理 </span>

                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="../goodsset">
                                <span class="menu-text">商品设置</span>
                            </a>
                        </li>
                        <li>
                            <a href="../goodslist">
                                <span class="menu-text">商品列表</span>
                            </a>
                        </li>
                        <li>
                            <a href="../goodstrade">
                                <span class="menu-text">交易录入</span>
                            </a>
                        </li>
                        <li>
                            <a href="../goodstradelist">
                                <span class="menu-text">交易列表</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-table"></i>
                        <span class="menu-text"> 用户管理 </span>

                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="../user">
                                <span class="menu-text">用户设置</span>
                            </a>
                        </li>
                        <li>
                            <a href="../userlist">
                                <span class="menu-text">用户列表</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- /Sidebar Menu -->
        </div>
        <!-- /Page Sidebar -->
        <!-- Page Content -->
        <div class="page-content">
            <!-- Page Breadcrumb -->
            <div class="page-breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="#">首页</a>
                    </li>
                    <li>
                        <a href="#">众筹管理</a>
                    </li>
                    <li class="active">项目状态</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">
                <div class="row">
                    <div class="input-group-title">众筹中</div>
                    <div id="raising">

                    </div>
                </div>
                <div class="row">
                    <div class="input-group-title">计划中</div>
                    <div id="plan">

                    </div>
                </div>
                <div class="row">
                    <div class="input-group-title">已完成</div>
                    <div id="completed">

                    </div>
                </div>
            </div>
            <!-- /Page Body -->
        </div>
        <!-- /Page Content -->
    </div>
    <!-- /Page Container -->
    <!-- Main Container -->
</div>

<!--Basic Scripts-->
<script src="assets/js/jquery-2.0.3.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!--Beyond Scripts-->
<script src="assets/js/beyond.min.js"></script>

<!--Page Related Scripts-->
<!--Bootstrap  wysiwig Scripts-->
<script src="assets/js/editors/wysiwyg/jquery.hotkeys.js"></script>
<script src="assets/js/editors/wysiwyg/prettify.js"></script>
<script src="assets/js/editors/wysiwyg/bootstrap-wysiwyg.js"></script>

<!--Summernote Scripts-->
<script src="assets/js/editors/summernote/summernote.js"></script>
<script>
    $(document).ready(function () {
        getraising();
        getplan();
        getcompleted();
    });

    function getraising() {
        $.ajax({
            type: 'POST',
            url: '../prostatus/getRaising',//路径
            data: {},
            success: function (data) {
                if (data) {
                    console.log(data);
                    var str = "";
                    for (i = 0; i < data.length; i++) {
                        str += '<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 margin-bottom-10">' +
                            '<div class="well padding-5">' +
                            '<div class="img-project" style="background-image: url(\'' + 'uploads/' + data[i]["cover"] + '\')">' +
                            '<div class="blank-img-label"></div>' +
                            '<span class="label label-azure graded label-img">' + data[i]["name"] + '</span>' +
                            '<span class="clearfix"></span>' +
                            '</div>' +
                            '<div class="text-align-right margin-top-5">' +
                            '<a href="javascript:void(0);" title="删除" onclick="del(\'' + data[i]["id"] + '\')" class="btn btn-default shiny padding-5 padding-left-10">' +
                            '<i class="fa fa-trash-o"></i>' +
                            '</a>' +
                            '</div>' + '</div>' +
                            '</div>';
                    }
                    if (!str) {
                        str = '<div class="padding-left-50">暂无数据</div>';
                    }
                    $("#raising").html(str);
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert("获取数据出错：" + XMLHttpRequest.status + "," + textStatus);
            }
        });
    }

    function getplan() {
        $.ajax({
            type: 'POST',
            url: '../prostatus/getPlan',//路径
            data: {},
            success: function (data) {
                if (data) {
                    console.log(data);
                    var str = "";
                    for (i = 0; i < data.length; i++) {
                        str += '<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 margin-bottom-10">' +
                            '<div class="well padding-5">' +
                            '<div class="img-project" style="background-image: url(\'' + 'uploads/' + data[i]["cover"] + '\')">' +
                            '<div class="blank-img-label"></div>' +
                            '<span class="label label-azure graded label-img">' + data[i]["name"] + '</span>' +
                            '<span class="clearfix"></span>' +
                            '</div>' +
                            '<div class="text-align-right margin-top-5">' +
                            '<a href="javascript:void(0);" title="发布" onclick="issue(\'' + data[i]["id"] + '\')" class="btn btn-default shiny padding-5">' +
                            '<i class="fa fa-cloud-upload"></i>' +
                            '</a>' +
                            '<a href="javascript:void(0);" title="删除" onclick="del(\'' + data[i]["id"] + '\')" class="btn btn-default shiny padding-5 padding-left-10">' +
                            '<i class="fa fa-trash-o"></i>' +
                            '</a>' +
                            '</div>' + '</div>' +
                            '</div>';
                    }
                    if (!str) {
                        str = '<div class="padding-left-50">暂无数据</div>';
                    }
                    $("#plan").html(str);
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert("获取数据出错：" + XMLHttpRequest.status + "," + textStatus);
            }
        });
    }

    function getcompleted() {
        $.ajax({
            type: 'POST',
            url: '../prostatus/getCompleted',//路径
            data: {},
            success: function (data) {
                if (data) {
                    console.log(data);
                    var str = "";
                    for (i = 0; i < data.length; i++) {
                        str += '<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 margin-bottom-10">' +
                            '<div class="well padding-5">' +
                            '<div class="img-project" style="background-image: url(\'' + 'uploads/' + data[i]["cover"] + '\')">' +
                            '<div class="blank-img-label"></div>' +
                            '<span class="label label-azure graded label-img">' + data[i]["name"] + '</span>' +
                            '<span class="clearfix"></span>' +
                            '</div>' +
                            '<div class="text-align-right margin-top-5">' +
                            '<a href="javascript:void(0);" title="删除" onclick="del(\'' + data[i]["id"] + '\')" class="btn btn-default shiny padding-5 padding-left-10">' +
                            '<i class="fa fa-trash-o"></i>' +
                            '</a>' +
                            '</div>' + '</div>' +
                            '</div>';
                    }
                    if (!str) {
                        str = '<div class="padding-left-50">暂无数据</div>';
                    }
                    $("#completed").html(str);
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert("获取数据出错：" + XMLHttpRequest.status + "," + textStatus);
            }
        });
    }

    function issue(id) {
        $.ajax({
            type: 'POST',
            url: '../prostatus/issue',//路径
            data: {"id": id},
            success: function (data) {
                if (data) {
                    console.log(data);
                    getraising();
                    getplan();
                    getcompleted();
                    alert(data);
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert("发布出错：" + XMLHttpRequest.status + "," + textStatus);
            }
        });
    }

    function del(id) {
        if (confirm("确定删除该项目?")) {
            $.ajax({
                type: 'POST',
                url: '../prostatus/delpro',//路径
                data: {"id": id},
                success: function (data) {
                    if (data) {
                        console.log(data);
                        getraising();
                        getplan();
                        getcompleted();
                        alert(data);
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    alert("删除失败：" + XMLHttpRequest.status + "," + textStatus);
                }
            });
        }
    }

</script>

</body>
<!--  /Body -->
</html>
