<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link type="text/css" rel="stylesheet" href="/ThinkPHP/test/Public/css/style.css" />
    <!--[if IE 6]>
    <script src="js/iepng.js" type="text/javascript"></script>
        <script type="text/javascript">
           EvPNG.fix('div, ul, img, li, input, a'); 
        </script>
    <![endif]-->    
    <script type="text/javascript" src="/ThinkPHP/test/Public/h/js/jquery-1.11.1.min_044d0927.js"></script>
	<script type="text/javascript" src="/ThinkPHP/test/Public/h/js/jquery.bxslider_e88acd1b.js"></script>
    
    <script type="text/javascript" src="/ThinkPHP/test/Public/h/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/ThinkPHP/test/Publicj/h/s/menu.js"></script>    
        
	<script type="text/javascript" src="/ThinkPHP/test/Public/h/js/select.js"></script>
    
	<script type="text/javascript" src="/ThinkPHP/test/Public/h/js/lrscroll.js"></script>
    
    <script type="text/javascript" src="/ThinkPHP/test/Public/h/js/iban.js"></script>
    <script type="text/javascript" src="/ThinkPHP/test/Public/h/s/fban.js"></script>
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
        	<span class="fl">你好，请<a href="/login">登录</a>&nbsp; <a href="/home/register" style="color:#ff4e00;">免费注册</a>&nbsp; </span>
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
        <div class="logo"><a href="/ThinkPHP/test/index.php/Home/Web/index"><img src="/ThinkPHP/test/Public/h/images/logo.png" /></a></div>
    </div>
	<div class="login">
    	<div class="log_img"><img src="/ThinkPHP/test/Public/h/images/l_img.png" width="611" height="425" /></div>
		<div class="log_c">
        	<form action="/ThinkPHP/test/index.php/Home/Login/check" method="post">
             
            <table border="0" style="width:370px; font-size:14px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr height="50" valign="top">
              	<td width="55">&nbsp;</td>
                <td>
                	<span class="fl" style="font-size:24px;">登录</span>
                    <span class="fr">还没有商城账号，<a href="/home/register" style="color:#ff4e00;">立即注册</a></span>
                </td>
              </tr>
              <tr height="70">
                <td>邮箱</td>
                <td><input type="text" name="email" value="" class="l_user" title="邮箱不能为空,请输入正确的邮箱号"/></td>
              </tr>
              <tr height="70">
                <td>密&nbsp; &nbsp; 码</td>
                <td><input type="password" name="password" value="" class="l_pwd" title="密码不能为空,请正确输入您的密码"/></td>
              </tr>
              <tr>
              	<td>&nbsp;</td>
                <td style="font-size:12px; padding-top:20px;">
                	<span style="font-family:'宋体';" class="fl">
                    	<label class="r_rad"><input type="checkbox" /></label><label class="r_txt">请保存我这次的登录信息</label>
                    </span>
                    <span class="fr"><a href="/forget" style="color:#ff4e00;">忘记密码</a></span>
                </td>
              </tr>
              <tr height="60">
              	<td>&nbsp;</td>
                <td>
                  
                  <input type="submit" value="登录" class="log_btn" />
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
        <img src="/h/images/b_1.gif" width="98" height="33" /><img src="/ThinkPHP/test/Public/h/images/b_2.gif" width="98" height="33" /><img src="/ThinkPHP/test/Public/h/images/b_3.gif" width="98" height="33" /><img src="/ThinkPHP/test/Public/h/images/b_4.gif" width="98" height="33" /><img src="/ThinkPHP/test/Public/h/images/b_5.gif" width="98" height="33" /><img src="/ThinkPHP/test/Public/h/images/b_6.gif" width="98" height="33" />
    </div>    	
</div>
<!--End Footer End -->    

</body>


<!--[if IE 6]>
<script src="//letskillie6.googlecode.com/svn/trunk/2/zh_CN.js"></script>
<![endif]-->
<script type="text/javascript">
  //ajax+jquery
  //JQuery的入口文件
  $(function(){
    //获取input框  绑定获取焦点事件
    $("input[type='text']").focus(function(){
      //alert('我是获取焦点事件');
      //；获取事件作用本对象的title属性值
      ss = $(this).attr('title');
      //后入式一
      $(this).after("<span style='color:#ff4e00;'>"+ss+"</span>");
      //后入式二
      //$("<span>"+ss+"</span>").insertAfter($(this));
    }).blur(function(){
      //取得一个包含匹配的元素集合中每一个元素紧邻的后面同辈元素的元素集合。
      //remove 从DOM中删除匹配到的元素
      $(this).next("span").remove();
    })

    $("input[type='password']").focus(function(){
      //alert('我是获取焦点事件');
      //；获取事件作用本对象的title属性值
      ss = $(this).attr('title');
      //后入式一
      $(this).after("<span style='color:#ff4e00;'>"+ss+"</span>");
      //后入式二
      //$("<span>"+ss+"</span>").insertAfter($(this));
    }).blur(function(){
      //取得一个包含匹配的元素集合中每一个元素紧邻的后面同辈元素的元素集合。
      //remove 从DOM中删除匹配到的元素
      $(this).next("span").remove();
    })

  })
</script>
</html>