@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <title>注册</title>
    <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="format-detection" content="telephone=no">
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="alternate icon" type="image/png" href="images/favicon.png">
<link rel='icon' href='favicon.ico' type='image/x-ico' />
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" href="{{asset('css/default.min.css?t=227')}}" />
<link rel="stylesheet" href="{{asset('css/back.css')}}" />
<!--[if (gte IE 9)|!(IE)]><!-->
<script type="text/javascript" src="{{asset('lib/jquery/jquery.min.js')}}"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="lib/amazeui/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script type="text/javascript" src="{{asset('lib/handlebars/handlebars.min.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/iscroll/iscroll-probe.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/amazeui/amazeui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/raty/jquery.raty.js')}}"></script>
<script type="text/javascript" src="{{asset('js/main.min.js?t=1')}}"></script>
</head>
<body>
   

     <div class="user">
         <div class="cgs">
             <div class="am-u-sm-12 am-u-md-12 am-u-lg-7">
                 <div class="user-div">
                     <h1>用户注册</h1>
                     <form action="{{ route('register') }}" method="post" id="auth-reister">
                         <ul>
                             <!-- <li><i>&#xe681;</i><input type="text" name="username" value="" placeholder="请输入邮箱" /></li> -->
                             <li><i>&#xe6ed;</i><input type="text" name="mobile" value="" placeholder="请输入手机号"/></li>
                             <li><i>&#xe680;</i><input type="password" name="password" value="" placeholder="请输入密码" /></li>
                             <li><i>&#xe680;</i><input type="password" name="confirm_pwd" value="" placeholder="请输入确认密码"/></li>
                         </ul>
                     </form>
                     <span><input type="checkbox" name="name" value="" />我已阅读并接受<a href="#">版权说明和隐私保护条款</a></span>  
                     <button onclick="event.preventDefault();document.getElementById('auth-reister').submit();" >注册</button>
                 </div>
             </div>
             <div class="am-hide-sm am-hide-md am-u-lg-5">
                 <div class="user-right">
                     <a href="#">已有帐号</a>
                     <button>立即登录</button>
                 </div>
             </div>
         </div>
     </div>
</body>
</html>
@endsection
