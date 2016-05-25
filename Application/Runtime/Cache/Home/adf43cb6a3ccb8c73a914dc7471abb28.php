<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>欢迎登录</title>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
    <meta content="no-cache" http-equiv="pragma">
    <meta content="0" http-equiv="expires">
    <meta content="telephone=no, address=no" name="format-detection">
    <link rel="stylesheet" href="/Public/Css/Home/User_Login/reset.css" />
    <link rel="stylesheet" href="/Public/Css/Home/User_Login/login.css" />
    <script type="text/javascript" src="/Public/Js/Home/User_Login/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="/Public/Js/md5.js"></script>
    <script type="text/javascript" src="/Public/Js/Home/User_Login/index.js"></script>
</head>
<body>
<div class="wrap">
    <div class="content" style="color:#ffffff;margin-left: 10px;">
        55555555555555555555
    </div>
</div>
</body>
<!--全屏背景高度自适应-->
<script type="text/javascript">
    $(function(){
        var height=document.body.scrollHeight;//动态获取屏幕高度，兼容360和谷歌
        $(".wrap").css("height",height)
        var height=document.documentElement.scrollHeight;//动态获取屏幕高度，兼容IE
        $(".wrap").css("height",height)
        window.onresize=function(){
            location.reload();
        };
    })
    //输入框点击样式
    $(".import").click(function(){
        $(this).css({"opacity":"1","color":"#333"});
    });
    $(".import").mouseout(function(){
        $(this).css({"opacity":"0.5","color":"#b0b6b8"});
    });
</script>
</html>