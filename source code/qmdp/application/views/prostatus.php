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
        .page-body {
            background: #ffffff;
        }

        .input-group .input-group-addon {
            background-image: linear-gradient(to bottom, #fff 0, #fff 100%);
        }

        .input-group-addon {
            padding: 6px 5px;
            border: 1px solid #fff;
        }

        .input-group-qm .row {
            margin-bottom: 10px;
        }

        .widget-header > .widget-caption {
            font-size: 18px;
            font-weight: bold !important;
        }

        .img-project {
            width: 100%;
            height: 0px;
            padding-bottom: 100%;
            background-size: 100% 100%;
            background-image: url('assets/img/avatars/Stephanie-Walter.jpg');
            background-repeat: no-repeat;
        }

        .blank-img-label {
            height: 0px;
            padding-bottom: 75%;
        }

        .label-img {
            float: left;
            padding: 5px;
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
                                    <a href="login.html">
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
                <li>
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
                        <li>
                            <a href="#">
                                <span class="menu-text">项目状态</span>
                            </a>
                        </li>
                        <li>
                            <a href="alerts.html">
                                <span class="menu-text">交易录入</span>
                            </a>
                        </li>
                        <li>
                            <a href="modals.html">
                                <span class="menu-text">人员列表</span>
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
                            <a href="tables-simple.html">
                                <span class="menu-text">商品设置</span>
                            </a>
                        </li>
                        <li>
                            <a href="tables-data.html">
                                <span class="menu-text">商品列表</span>
                            </a>
                        </li>
                        <li>
                            <a href="tables-simple.html">
                                <span class="menu-text">交易录入</span>
                            </a>
                        </li>
                        <li>
                            <a href="tables-data.html">
                                <span class="menu-text">人员列表</span>
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
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget flat radius-bordered">
                            <div class="widget-header bordered-bottom">
                                <span class="widget-caption">筹备中</span>
                            </div>
                            <div class="widget-body input-group-qm">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <div class="img-project">
                                            <div class="blank-img-label"></div>
                                            <span class="label label-azure graded label-img">项目名称dadafsda</span>
                                            <span class="clearfix"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <div class="img-project">
                                            <div class="blank-img-label"></div>
                                            <span class="label label-azure graded label-img">项目名称dadafsda</span>
                                            <span class="clearfix"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <div class="img-project">
                                            <div class="blank-img-label"></div>
                                            <span class="label label-azure graded label-img">项目名称dadafsda</span>
                                            <span class="clearfix"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <div class="img-project">
                                            <div class="blank-img-label"></div>
                                            <span class="label label-azure graded label-img">项目名称dadafsda</span>
                                            <span class="clearfix"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget flat radius-bordered">
                            <div class="widget-header bordered-bottom">
                                <span class="widget-caption">计划中</span>
                            </div>
                            <div class="widget-body input-group-qm">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <div class="img-project">
                                            <div class="blank-img-label"></div>
                                            <span class="label label-azure graded label-img">项目名称dadafsda</span>
                                            <span class="clearfix"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <div class="img-project">
                                            <div class="blank-img-label"></div>
                                            <span class="label label-azure graded label-img">项目名称dadafsda</span>
                                            <span class="clearfix"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <div class="img-project">
                                            <div class="blank-img-label"></div>
                                            <span class="label label-azure graded label-img">项目名称dadafsda</span>
                                            <span class="clearfix"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <div class="img-project">
                                            <div class="blank-img-label"></div>
                                            <span class="label label-azure graded label-img">项目名称dadafsda</span>
                                            <span class="clearfix"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget flat radius-bordered">
                            <div class="widget-header bordered-bottom">
                                <span class="widget-caption">已完成</span>
                            </div>
                            <div class="widget-body input-group-qm">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <div class="img-project">
                                            <div class="blank-img-label"></div>
                                            <span class="label label-azure graded label-img">项目名称dadafsda</span>
                                            <span class="clearfix"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <div class="img-project">
                                            <div class="blank-img-label"></div>
                                            <span class="label label-azure graded label-img">项目名称dadafsda</span>
                                            <span class="clearfix"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <div class="img-project">
                                            <div class="blank-img-label"></div>
                                            <span class="label label-azure graded label-img">项目名称dadafsda</span>
                                            <span class="clearfix"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <div class="img-project">
                                            <div class="blank-img-label"></div>
                                            <span class="label label-azure graded label-img">项目名称dadafsda</span>
                                            <span class="clearfix"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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

    });
</script>

</body>
<!--  /Body -->
</html>
