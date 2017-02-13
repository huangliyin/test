<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<HTML><HEAD>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<LINK href="/ThinkPHP/test/Public/css/admin.css" type="text/css" rel="stylesheet">
</HEAD>
<BODY>
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
  <TR height=28>
    <TD >当前位置: </TD></TR>
  <TR>
    <TD bgColor=red height=1></TD></TR>
  <TR height=20>
    <TD ></TD></TR></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width="90%" align=center border=0>
  <TR height=100>
    <TD align=middle width=100><IMG height=100 src="/ThinkPHP/test/Public/images/2.gif" 
      width=90></TD>
    <TD width=60>&nbsp;</TD>
    <TD>
      <TABLE height=100 cellSpacing=0 cellPadding=0 width="100%" border=0>
        
        <TR>
          <TD>当前时间：</TD></TR>
        <TR>
          <TD style="FONT-WEIGHT: bold; FONT-SIZE: 16px"><?php echo ($_SESSION['username']); ?></TD></TR>
        <TR>
          <TD>欢迎进入网站管理中心！</TD></TR></TABLE></TD></TR>
  <TR>
    <TD colSpan=3 height=10></TD></TR></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width="95%" align=center border=0>
  <TR height=20>
    <TD></TD></TR>
  <TR height=22>
    <TD style="PADDING-LEFT: 20px; FONT-WEIGHT: bold; COLOR: #ffffff;background-color: #CB1222" 
    align=middle >您的相关信息</TD></TR>
  <TR bgColor=white height=12>
    <TD></TD></TR>
  <TR height=20>
    <TD></TD></TR></TABLE>
<TABLE cellSpacing=0 cellPadding=2 width="95%" align=center border=0>
  <TR>
    <TD align=right width=100>登陆帐号：</TD>
    <TD style="COLOR: #880000"><?php echo ($_SESSION['username']); ?></TD></TR>
  <TR>
    <TD align=right>真实姓名：</TD>
    <TD style="COLOR: #880000"><?php echo ($_SESSION['username']); ?></TD></TR>
  
    </TR></TABLE></BODY></HTML>