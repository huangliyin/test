<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC>
<HTML>
<HEAD>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<LINK href="/ThinkPHP/test/Public/css/admin.css" type="text/css" rel="stylesheet">
</HEAD>
<BODY>
<TABLE cellSpacing=0 cellPadding=0 width="100%" 
background:red; border=0>
  <TR height=56>
    <TD width=260><a href="../index.php"target="_top"><IMG height=56 src="/ThinkPHP/test/Public/images/l.jpg"</a> 
    width=260></TD>
    <TD style="FONT-WEIGHT: bold; COLOR: #0ff; PADDING-TOP: 20px" 
      align=middle>当前用户：<?php echo ($_SESSION['username']); ?> &nbsp&nbsp  <A style="COLOR: #0ff" 
      href="admin/edit.php" 
      target=main>修改口令</A> &nbsp;&nbsp; <A style="COLOR: #0ff" 
      onclick="if (confirm('确定要退出吗？')) return true; else return false;" 
      href="/ThinkPHP/test/index.php/Admin/Login/logout" target='_top' style="color:#0ff">退出系统</A> 
      <a href=login.htm target="main"style="color:#0ff" >登录界面演示</a>
    </TD>
    <TD align=right width=268></TD></TR></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TR bgColor=red height=4>
    <TD></TD></TR></TABLE></BODY></HTML>