﻿<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!--
BeyondAdmin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 1.0.0
Purchase: http://wrapbootstrap.com
-->

<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<!-- Head -->
<head>
    <meta charset="utf-8"/>
    <title>商品设置</title>

    <meta name="description" content="project setting"/>
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

    <link href="assets/css/fileinput.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/summernote.css" rel="stylesheet" type="text/css">

    <style type="text/css">
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

        .input-textarea {
            width: 100%;
        }

        .file-preview {
            padding: 0px;
        }

        .file-drop-zone {
            margin: 0px;
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
                <li class="open">
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-table"></i>
                        <span class="menu-text"> 商城管理 </span>

                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu">
                        <li class="active">
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
                        <a href="#">商品管理</a>
                    </li>
                    <li class="active">商品设置</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">
                <div class="row">
                    <form id="inputform" method="post" action="../proset/save"
                          class="form-horizontal"
                          data-bv-message="填写不正确"
                          data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                          data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                          data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                        <div class="input-group-title">基本信息</div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-2 control-label padding-right-5">商品名称:</label>
                            <div class="col-lg-4 col-md-4 col-sm-4 padding-left-5">
                                <input type="text" class="form-control input-sm" name="gname" id="gname"
                                       placeholder=""
                                       data-bv-message="商品名称格式不正确"
                                       data-bv-notempty="true"
                                       data-bv-notempty-message="商品名称不能为空"
                                       data-bv-stringlength="true"
                                       data-bv-stringlength-min="1"
                                       data-bv-stringlength-max="50"
                                       data-bv-stringlength-message="商品名称长度范围为1-50"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-2 control-label padding-right-5">商品编号:</label>
                            <div class="col-lg-4 col-md-4 col-sm-4 padding-left-5">
                                <input type="text" class="form-control input-sm" name="gcode" id="gcode"
                                       placeholder=""/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-2 control-label padding-right-5">价格:</label>
                            <div class="col-lg-4 col-md-4 col-sm-4 padding-left-5">
                                <input type="text" class="form-control input-sm" name="price" id="price"
                                       placeholder=""
                                       data-bv-message="价格填写不正确"
                                       data-bv-notempty="true"
                                       data-bv-notempty-message="价格不能为空"
                                       data-bv-regexp="true"
                                       data-bv-regexp-regexp="(^[1-9]([0-9]+)?(\.[0-9]{1,2})?$)|(^(0){1}$)|(^[0-9]\.[0-9]([0-9])?$)"
                                       data-bv-regexp-message="价格填写不正确"
                                       data-bv-stringlength="true"
                                       data-bv-stringlength-min="1"
                                       data-bv-stringlength-max="10"
                                       data-bv-stringlength-message="价格长度范围为1-10"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-2 control-label padding-right-5">积分:</label>
                            <div class="col-lg-4 col-md-4 col-sm-4 padding-left-5">
                                <input type="text" class="form-control input-sm" name="jifen" id="jifen"
                                       placeholder=""
                                       data-bv-message="积分填写不正确"
                                       data-bv-notempty="false"
                                       data-bv-notempty-message="积分不能为空"
                                       data-bv-regexp="true"
                                       data-bv-regexp-regexp="[1-9][0-9]*"
                                       data-bv-regexp-message="积分只允许填写数字"
                                       data-bv-stringlength="true"
                                       data-bv-stringlength-min="1"
                                       data-bv-stringlength-max="10"
                                       data-bv-stringlength-message="积分长度范围为1-10"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-2 control-label padding-right-5">商品种类:</label>
                            <div class="col-lg-4 col-md-4 col-sm-4 padding-left-5">
                                <select class="form-control" id="gtype" name="gtype" data-bv-field="gtype">
                                    <option value="">请选择</option>
                                </select>
                                <i class="form-control-feedback" data-bv-field="gtype" style="display: none;"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-2 control-label padding-right-5">归类:</label>
                            <div class="col-lg-4 col-md-4 col-sm-4 padding-left-5">
                                <select class="form-control" id="basetype" name="basetype" data-bv-field="basetype">
                                    <option value="">请选择</option>
                                </select>
                                <i class="form-control-feedback" data-bv-field="basetype" style="display: none;"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-2 control-label padding-right-5">店铺:</label>
                            <div class="col-lg-4 col-md-4 col-sm-4 padding-left-5">
                                <select class="form-control" id="project" name="project" data-bv-field="project">
                                    <option value="">请选择</option>
                                </select>
                                <i class="form-control-feedback" data-bv-field="project" style="display: none;"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-2 control-label padding-right-5">联系电话:</label>
                            <div class="col-lg-4 col-md-4 col-sm-4 padding-left-5">
                                <input type="text" class="form-control input-sm" name="tel" id="tel"
                                       placeholder=""
                                       data-bv-message="联系电话格式不正确"
                                       data-bv-stringlength="true"
                                       data-bv-stringlength-min="1"
                                       data-bv-stringlength-max="30"
                                       data-bv-stringlength-message="联系电话长度范围为1-30"/>
                            </div>
                        </div>
                        <div class="input-group-title">商品规格</div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-2 control-label padding-right-5">证书:</label>
                            <div class="col-lg-4 col-md-4 col-sm-4 padding-left-5">
                                <input type="text" class="form-control input-sm" name="certificate" id="certificate"
                                       placeholder=""
                                       data-bv-message="证书填写不正确"
                                       data-bv-stringlength="true"
                                       data-bv-stringlength-min="0"
                                       data-bv-stringlength-max="100"
                                       data-bv-stringlength-message="证书长度范围为0-100"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-2 control-label padding-right-5">大小:</label>
                            <div class="col-lg-4 col-md-4 col-sm-4 padding-left-5">
                                <input type="text" class="form-control input-sm" name="size" id="size"
                                       placeholder=""
                                       data-bv-message="大小填写不正确"
                                       data-bv-stringlength="true"
                                       data-bv-stringlength-min="0"
                                       data-bv-stringlength-max="100"
                                       data-bv-stringlength-message="大小长度范围为0-100"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-2 control-label padding-right-5">重量:</label>
                            <div class="col-lg-4 col-md-4 col-sm-4 padding-left-5">
                                <input type="text" class="form-control input-sm" name="weight" id="weight"
                                       placeholder=""
                                       data-bv-message="重量填写不正确"
                                       data-bv-stringlength="true"
                                       data-bv-stringlength-min="0"
                                       data-bv-stringlength-max="100"
                                       data-bv-stringlength-message="重量长度范围为0-100"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-2 control-label padding-right-5">材质:</label>
                            <div class="col-lg-4 col-md-4 col-sm-4 padding-left-5">
                                <input type="text" class="form-control input-sm" name="material" id="material"
                                       placeholder=""
                                       data-bv-message="材质填写不正确"
                                       data-bv-stringlength="true"
                                       data-bv-stringlength-min="0"
                                       data-bv-stringlength-max="100"
                                       data-bv-stringlength-message="材质长度范围为0-100"/>
                            </div>
                        </div>
                        <div class="input-group-title">商品主图</div>
                        <div class="form-group">
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                <input id="imgs" class="select2-display-none" name="imgs" value="">
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                <input type="file" class="file" id="img_url" name="image_data"
                                       accept="image/jpg,image/jpeg,image/png,image/gif" multiple>
                            </div>
                        </div>
                        <div class="input-group-title">商品描述</div>
                        <div class="form-group">
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                                <div id="summernote"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-5 col-lg-8 col-md-offset-5 col-md-8">
                                <input class="btn btn-palegreen" type="button" onclick="toVaild();" value="提 交"/>
                            </div>
                        </div>
                    </form>
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
<!--Summernote Scripts-->
<script src="assets/js/editors/summernote/summernote.min.js"></script>
<script src="assets/js/editors/summernote/lang/summernote-zh-CN.min.js"></script>
<script src="assets/js/validation/bootstrapValidator.js"></script>

<script src="assets/js/fileinput/fileinput.min.js"></script>
<script src="assets/js/fileinput/fileinput_locale_zh.js"></script>
<script>
    $(document).ready(function () {
        $("#inputform").bootstrapValidator();
        getpros();
        getgtype();
        getbasetype();

        //设置富文本编辑器
        $('#summernote').summernote({
            minheight: 300, height: 350, lang: 'zh-CN',
            fontNames: ['微软雅黑', '宋体', '黑体', '新宋体', '楷体', '隶书', '幼圆', '华文细黑',
                '华文行楷', '华文新魏', 'Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
            fontSizes: ["8", "9", "10", "11", "12", "13", "14", "18", "24", "36", "48", "56"],
            toolbar: [["style", ["style"]], ["font", ["bold", "italic", "strikethrough", "underline", "clear"]], ["fontname", ["fontname"]], ['fontsize', ['fontsize']], ["color", ["color"]], ["para", ["ul", "ol", "paragraph"]], ["table", ["table"]], ["insert", ["hr", "link", "picture"]], ["view", ["fullscreen", "codeview", "help"]]],
            callbacks: {
                onImageUpload: function (files, editor, $editable) {
                    sendFile(files);
                }
            }
        });
    });
    //初始化上传插件
    $("#img_url").fileinput({
        language: 'zh',
        showCaption: false,  //不显示文字表述
        showRemove: false, //不显示移除按钮
        showUpload: false, //不显示上传按钮
        uploadUrl: "../proset/uploadimg", //上传后台操作的方法
//        uploadAsync: false, //设置上传同步异步 此为同步
        maxFileSize: 8 * 1024, //单位为kb，如果为0表示不限制文件大小
        allowedFileExtensions: ['jpg', 'jpeg', 'png', 'gif'], //限制上传文件后缀
        layoutTemplates: {
            actionUpload: "" //设置为空可去掉上传按钮
            //actionDelete:"" //设置为空可去掉删除按钮
        },
        dropZoneTitle: '图片上传 <br/>限定上传4张',
        minImageWidth: 400, //图片的最小宽度
        minImageHeight: 400,//图片的最小高度
        maxImageWidth: 2000,//图片的最大宽度
        maxImageHeight: 2000,//图片的最大高度
        //minFileCount: 0,
        maxFileCount: 4 //表示允许同时上传的最大文件个数
    }).on("filebatchselected", function (event, files) {
        $(this).fileinput("upload");
    }).on("fileuploaded", function (event, data) {
        if (data.response) {
            console.log(data.response);
            var oriname = data.response.upload_data.client_name;
            var newname = data.response.upload_data.file_name;
            $("img[title$='" + oriname + "']").attr("newname", newname);
            var imgs = $("#imgs").val();
            if (!checkimg(newname)) {
                $("#imgs").val(imgs + "," + newname);
            }
        }
    }).on("filesuccessremove", function (event, data) {
        console.log("删除了");
        var delname = $("#" + data + " .kv-file-content img").attr("newname");
        var imgs = $("#imgs").val();
        imgs = imgs.replace("," + delname, "");
        $("#imgs").val(imgs);
    }).on("filecleared", function (event, data) {
        console.log("清空了");
        $("#imgs").val("");
    });

    function checkimg(name) {
        var imgs = $("#imgs").val();
        var strs = new Array(); //定义一数组
        strs = imgs.split(","); //字符分割
        for (i = 0; i < strs.length; i++) {
            if (strs[i] == name)
                return true;
        }
        return false;
    }

    function toVaild() {
        $('#inputform').data('bootstrapValidator').validate();
        if (!$('#inputform').data('bootstrapValidator').isValid()) {
            alert("数据填写不正确,请检查");
        } else {
            save();
        }
    }

    function save() {
        $.ajax({
            type: 'POST',
            url: '../goodsset/save',//路径
            data: {
                "gname": $("#gname").val(),
                "gcode": $("#gcode").val(),
                "price": $("#price").val(),
                "jifen": $("#jifen").val(),
                "gtype": $("#gtype").val(),
                "basetype": $("#basetype").val(),
                "project": $("#project").val(),
                "tel": $("#tel").val(),
                "certificate": $("#certificate").val(),
                "size": $("#size").val(),
                "weight": $("#weight").val(),
                "material": $("#material").val(),
                "imgs": $("#imgs").val(),
                "discrible": $('#summernote').summernote('code')
            },
            success: function (data) {
                if (data) {
                    alert(data);
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert("保存数据出错：" + XMLHttpRequest.status + "," + textStatus);
            }
        });
    }

    function getpros() {
        $.ajax({
            type: 'POST',
            url: '../protrade/getProjects',//路径
            data: {},
            success: function (data) {
                if (data) {
                    var str = '';
                    for (i = 0; i < data.length; i++) {
                        str += '<option value="' + data[i]["id"] + '">' + data[i]["name"] + '</option>';
                    }

                    $("#project").html(str);
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert("获取项目数据出错：" + XMLHttpRequest.status + "," + textStatus);
            }
        });
    }

    function getgtype() {
        $.ajax({
            type: 'POST',
            url: '../goodsset/getGoodsType',//路径
            data: {},
            success: function (data) {
                if (data) {
                    var str = '';
                    for (i = 0; i < data.length; i++) {
                        str += '<option value="' + data[i]["id"] + '">' + data[i]["name"] + '</option>';
                    }

                    $("#gtype").html(str);
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert("获取项目数据出错：" + XMLHttpRequest.status + "," + textStatus);
            }
        });
    }

    function getbasetype() {
        $.ajax({
            type: 'POST',
            url: '../goodsset/getBaseType',//路径
            data: {},
            success: function (data) {
                if (data) {
                    var str = '';
                    for (i = 0; i < data.length; i++) {
                        str += '<option value="' + data[i]["id"] + '">' + data[i]["name"] + '</option>';
                    }

                    $("#basetype").html(str);
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert("获取项目数据出错：" + XMLHttpRequest.status + "," + textStatus);
            }
        });
    }

    function sendFile(files, editor, $editable) {
        var data = new FormData();
        data.append("files", files[0]);
        $.ajax({
            data: data,
            type: "POST",
            url: "../proset/uploaddetailimg", //上传图片请求的路径
            cache: false,
            contentType: false,
            processData: false,
            //dataType : "json",
            success: function (data) {//data是返回的hash,key之类的值，key是定义的文件名
                if (data && data.upload_data) {
                    $('#summernote').summernote('insertImage', "../uploads/" + data.upload_data.file_name);
                }
            },
            error: function () {
                alert("上传失败");
            }
        });
    }

</script>

</body>
<!--  /Body -->
</html>
