<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link type="text/css" rel="stylesheet" href="/ThinkPHP/test/Public/h/css/style.css" />
    <!--[if IE 6]>
    <script src="js/iepng.js" type="text/javascript"></script>
        <script type="text/javascript">
           EvPNG.fix('div, ul, img, li, input, a'); 
        </script>
    <![endif]-->    
    <script type="text/javascript" src="/ThinkPHP/test/Public/h/js/jquery-1.11.1.min_044d0927.js"></script>
	<script type="text/javascript" src="/ThinkPHP/test/Public/h/js/jquery.bxslider_e88acd1b.js"></script>
    
    <script type="text/javascript" src="/ThinkPHP/test/Public/h/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/ThinkPHP/test/Public/h/js/menu.js"></script>    
        
	<script type="text/javascript" src="/ThinkPHP/test/Public/h/js/select.js"></script>
    
	<script type="text/javascript" src="/ThinkPHP/test/Public/h/js/lrscroll.js"></script>
    
    <script type="text/javascript" src="/ThinkPHP/test/Public/h/js/iban.js"></script>
    <script type="text/javascript" src="/ThinkPHP/test/Public/h/js/fban.js"></script>
    <script type="text/javascript" src="/ThinkPHP/test/Public/h/js/f_ban.js"></script>
    <script type="text/javascript" src="/ThinkPHP/test/Public/h/js/mban.js"></script>
    <script type="text/javascript" src="/ThinkPHP/test/Public/h/js/bban.js"></script>
    <script type="text/javascript" src="/ThinkPHP/test/Public/h/js/hban.js"></script>
    <script type="text/javascript" src="/ThinkPHP/test/Public/h/js/tban.js"></script>
    
	<script type="text/javascript" src="/ThinkPHP/test/Public/h/js/lrscroll_1.js"></script>
    
    
<title>尤洪</title>
</head>
<body>  
<!--Begin Header Begin-->
<div class="soubg">
	<div class="sou">
        <span class="fr">
        	<span class="fl">你好，请<a href="/ThinkPHP/test/index.php/Home/Login/login">登录</a>&nbsp; <a href="/ThinkPHP/test/index.php/Home/Register/register" style="color:#ff4e00;">免费注册</a>&nbsp; </span>
            <span class="fl">|&nbsp;关注我们：</span>
            <span class="s_sh"><a href="#" class="sh1">新浪</a><a href="#" class="sh2">微信</a></span>
            <span class="fr">|&nbsp;<a href="#">手机版&nbsp;<img src="/ThinkPHP/test/Public/h/images/s_tel.png" align="absmiddle" /></a></span>
        </span>
    </div>
</div>
<!--End Header End--> 
<!--Begin Login Begin-->
<div class="log_bg">	
    <div class="top">
        <div class="logo"><a href="/d"><img src="/ThinkPHP/test/Public/h/images/logo.png" /></a></div>
    </div>
	<div class="regist">
    	<div class="log_img"><img src="/ThinkPHP/test/Public/h/images/l_img.png" width="611" height="425" /></div>
		<div class="reg_c">
        	<form action="/ThinkPHP/test/index.php/Home/Register/check" method="post" >
            
            <table border="0" style="width:420px; font-size:14px; margin-top:20px;" cellspacing="0" cellpadding="0">
              <tr height="50" valign="top">
              	<td width="95">&nbsp;</td>
                <td>
                	<span class="fl" style="font-size:24px;">注册</span>
                    <span class="fr">已有商城账号，<a href="/ThinkPHP/test/index.php/Home/Login/login" style="color:#ff4e00;">我要登录</a></span>
                </td>
              </tr>
              <tr height="50">
                <td align="right"><font color="#ff4e00">*</font>&nbsp;用户名 &nbsp;</td>
                <td><input type="text" value="" name="username"  class="l_user" id="uname" onfocus="funu()" onblur="funuu()"/><span id="aa"></td>
              </tr>
              <tr height="50">
                <td align="right"><font color="#ff4e00">*</font>&nbsp;密码 &nbsp;</td>
                <td><input type="password" value=""  name="password" class="l_pwd" id="pass" onfocus="funp()" onblur="funpp()"/><span id="pp"></td>
              </tr>
              <tr height="50">
                <td align="right"><font color="#ff4e00">*</font>&nbsp;确认密码 &nbsp;</td>
                <td><input type="password" value="" name= "repassword"class="l_pwd" id="repass" onfocus="funq()" onblur="funqq()"/><span id="qq"></td>
              </tr>
              <tr height="50">
                <td align="right"><font color="#ff4e00">*</font>&nbsp;邮箱 &nbsp;</td>
                <td><input type="text" value="" name="email" class="l_email" id="emails" onfocus="fune()" onblur="funee()"/><span id="ee"></td>
              </tr>
              <tr height="50">
                <td align="right"><font color="#ff4e00">*</font>&nbsp;手机 &nbsp;</td>
                <td><input type="text" value="" name="phone" class="l_tel" id="phones" onfocus="fun()" onblur="func()"/><span id="ss"></td>
              </tr>
              <tr height="50">

                <td align="right"> <font color="#ff4e00">*</font>&nbsp;验证码 &nbsp;</td>
                <td>
                    <input type="text" value="" name="fcode" class="l_ipt" />
                    <img src="/ThinkPHP/test/index.php/Home/Register/verify" onclick="this.src=this.src+'?a=1'">
                </td>
              </tr>
              <tr>
              	<td>&nbsp;</td>
                <td style="font-size:12px; padding-top:20px;">
                	<span style="font-family:'宋体';" class="fl">
                    	<label class="r_rad"><input type="checkbox" /></label><label class="r_txt">我已阅读并接受《用户协议》</label>
                    </span>
                </td>
              </tr>
              <tr height="60">
              	<td>&nbsp;</td>
                
                <td>
                  
                  <input type="submit" value="立即注册" class="log_btn" />
                </td>
              </tr>
            </table>
            </form>
        </div>
    </div>
</div>
<!--End Login End--> 
<!--Begin Footer Begin-->
<div class="btmbg">
    <div class="btm">
        备案/许可证编号：蜀ICP备12009302号-1-www.dingguagua.com   Copyright © 2015-2018 尤洪商城网 All Rights Reserved. 复制必究 , Technical Support: Dgg Group <br />
        <img src="/ThinkPHP/test/Public/h/images/b_1.gif" width="98" height="33" /><img src="/ThinkPHP/test/Public/h/images/b_2.gif" width="98" height="33" /><img src="/ThinkPHP/test/Public/h/images/b_3.gif" width="98" height="33" /><img src="/ThinkPHP/test/Public/h/images/b_4.gif" width="98" height="33" /><img src="/ThinkPHP/test/Public/h/images/b_5.gif" width="98" height="33" /><img src="/ThinkPHP/test/Public/h/images/b_6.gif" width="98" height="33" />
    </div>    	
</div>
<!--End Footer End -->    

</body>


<!--[if IE 6]>
<script src="//letskillie6.googlecode.com/svn/trunk/2/zh_CN.js"></script>
<![endif]-->

 <script type="text/javascript">

  // //获取焦点事件
  function fun(){
     //alert('1111');
    //获取span元素对象
    ss = document.getElementById('ss');
    ss.innerHTML="请输入您真实的手机号码！";

    ss.style.color="red";  }

  //失去焦点事件

  function func(){
      //alert('1122');
      //手机验证
    //获取input元素对象的value值
    //获取input元素对象
    inputid=document.getElementById('phones');
    //获取值
    s=inputid.value;
    // alert(s); 拿到input框的值
    //正则匹配
    if(s.match(/^1[34578][0-9]{9}$/)==null){
      ss.innerHTML="手机号格式有误，请重新输入！";
      ss.style.color="red";
      return false;
      // alert('你还没有填写手机号哦!');
    }else{
      ss.innerHTML="√";
      ss.style.color="green";
      return true;
    }

  }
    //邮箱验证
     //获取焦点事件
  function fune(){
     //alert('1111');
    //获取span元素对象
    ee = document.getElementById('ee');
    ee.innerHTML="请输入您的qq邮箱！";

    ee.style.color="red";
  }

  // //失去焦点事件
  function funee(){
     //alert('1111');
    //获取input元素对象的value值
    //获取input元素对象
    inputid=document.getElementById('emails');
    //获取值
    e=inputid.value;
    // alert(s); 拿到input框的值
    //正则匹配
    if(e.match(/^[0-9]{6,12}@qq\.com$/)==null){
      ee.innerHTML="邮箱格式有误，请重新输入！";
      ee.style.color="red";
      return false;
      // alert('你还没有填写手机号哦!');
    }else{
      ee.innerHTML="√";
      ee.style.color="green";
      return true;
    }
  }

  //用户验证
  //获取焦点
  function funu(){
     //alert('1111');
    //获取span元素对象
    aa = document.getElementById('aa');
    aa.innerHTML="用户名不能为空";
    aa.style.color="red";
  }
  //失去焦点事件

  function funuu(){
      //alert('1122');
      //手机验证
    //获取input元素对象的value值
    //获取input元素对象
    unameid=document.getElementById('uname');
    //获取值
    a=unameid.value;
    // alert(a); 拿到input框的

    //正则匹配
    if(a.match(/\w{4,8}/)==null){
      aa.innerHTML="请输入4-8位任意的数字字母下划线！";
      aa.style.color="red";
      return false;
      // alert('你还没有填写手机号哦!');
    }else{
      aa.innerHTML="√";
      aa.style.color="green";
      return true;
    }

  }

  //密码验证
  //获取焦点
  function funp(){
     //alert('1111');
    //获取span元素对象
    pp = document.getElementById('pp');
    pp.innerHTML="密码不能为空";
    pp.style.color="red";
  }
  // //失去焦点事件

  function funpp(){
      //alert('1122');
      //密码验证
    //获取input元素对象的value值
    //获取input元素对象
    passid=document.getElementById('pass');
    //获取值
    p=passid.value;
    // alert(a); 拿到input框的

    //正则匹配
    if(p.match(/\w{2,8}/)==null){
      pp.innerHTML="请输入2-8位任意的数字字母下划线！";
      pp.style.color="red";
      return false;
      // alert('你还没有填写手机号哦!');
    }else{
      pp.innerHTML="√";
      pp.style.color="green";
      return true;
    }
  }

  //确认密码验证
  //获取焦点
  function funq(){
     //alert('1111');
    //获取span元素对象
    qq = document.getElementById('qq');
    qq.innerHTML="请重新输入密码！";
    qq.style.color="red";
  }
  //失去焦点事件

  function funqq(){
      //alert('1122');
      //手机验证
    //获取input元素对象的value值
    //获取input元素对象
    repassid=document.getElementById('repass');
    //获取值
    q=repassid.value;
    // alert(a); 拿到input框的

    //正则匹配
    if(q!==p){
      qq.innerHTML="两次输入的密码不一致，请重新输入！";
      qq.style.color="red";
      return false;
      // alert('你还没有填写手机号哦!');
    }else{
      qq.innerHTML="√";
      qq.style.color="green";
      return true;
    }
  }
</script>
</html>