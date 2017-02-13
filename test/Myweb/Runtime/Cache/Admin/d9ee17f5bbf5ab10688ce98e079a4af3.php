<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML >
<HTML><HEAD>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<LINK href="/ThinkPHP/test/Public/css/admin.css" type="text/css" rel="stylesheet">
<SCRIPT language=javascript>
	function expand(el)
	{
		childObj = document.getElementById("child" + el);

		if (childObj.style.display == 'none')
		{
			childObj.style.display = 'block';
		}
		else
		{
			childObj.style.display = 'none';
		}
		return;
	}
</SCRIPT>
</HEAD>
<BODY>
<TABLE height="100%" cellSpacing=0 cellPadding=0 width=170 
style="background-color: #CB1222;" border=0>
  <TR>
    <TD vAlign=top align=middle height="700px">
      <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0 >
        
        <TR>
          <TD height=10>
            
          </TD>
        </TR>
      </TABLE>

      <!-- 个人管理 -->
      <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background=/ThinkPHP/test/Public/images/menu_bt.jpg><A 
            class=menuParent onclick=expand(1) 
            href="javascript:void(0);">个人管理</A>
          </TD>
        </TR>
        <TR height=4><TD></TD></TR>
      </TABLE>

      <TABLE id=child1 style="DISPLAY: none" cellSpacing=0 cellPadding=0 
      width=150 border=0>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/ThinkPHP/test/Public/images/menu_icon.gif" width=9>
          </TD>
          <TD><A class=menuChild 
            href="admin/edit.php" 
            target=main>修改密码</A>
          </TD>
        </TR>
        <TR height=4>
          <TD colSpan=2>
            
          </TD>
        </TR>
      </TABLE>

      <!-- 用户管理 -->
      <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background=/ThinkPHP/test/Public/images/menu_bt.jpg><A 
            class=menuParent onclick=expand(2) 
            href="javascript:void(0);">用户管理</A>
          </TD>
        </TR>
        <TR height=4><TD></TD></TR>
      </TABLE>

      <TABLE id=child2 style="DISPLAY: none" cellSpacing=0 cellPadding=0 
      width=150 border=0>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/ThinkPHP/test/Public/images/menu_icon.gif" width=9>
          </TD>
          <TD><A class=menuChild 
            href="user/index.php" 
            target=main>查看用户</A>
          </TD>
        </TR>

        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/ThinkPHP/test/Public/images/menu_icon.gif" width=9>
          </TD>
          <TD><A class=menuChild 
            href="user/add.php" 
            target=main>添加用户</A>
          </TD>
        </TR>

        <TR height=4>
          <TD colSpan=2>
            
          </TD>
        </TR>
      </TABLE>
      <!-- 分类管理 -->
        <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background=/ThinkPHP/test/Public/images/menu_bt.jpg><A 
            class=menuParent onclick=expand(4) 
            href="javascript:void(0);">分类管理</A>
          </TD>
        </TR>
        <TR height=4><TD></TD></TR>
      </TABLE>

      <TABLE id=child4 style="DISPLAY: none" cellSpacing=0 cellPadding=0 
      width=150 border=0>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/ThinkPHP/test/Public/images/menu_icon.gif" width=9>
          </TD>
          <TD><A class=menuChild 
            href="class/index.php" 
            target=main>查看分类</A>
          </TD>
        </TR>

        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/ThinkPHP/test/Public/images/menu_icon.gif" width=9>
          </TD>
          <TD><A class=menuChild 
            href="class/add.php" 
            target=main>添加分类</A>
          </TD>
        </TR>

        <TR height=4>
          <TD colSpan=2>
            
          </TD>
        </TR>
      </TABLE>
       <!-- 商品管理 -->
        <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background=/ThinkPHP/test/Public/images/menu_bt.jpg><A 
            class=menuParent onclick=expand(6) 
            href="javascript:void(0);">商品管理</A>
          </TD>
        </TR>
        <TR height=4><TD></TD></TR>
      </TABLE>

      <TABLE id=child6 style="DISPLAY: none" cellSpacing=0 cellPadding=0 
      width=150 border=0>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/ThinkPHP/test/Public/images/menu_icon.gif" width=9>
          </TD>
          <TD><A class=menuChild 
            href="shop/index.php" 
            target=main>查看商品</A>
          </TD>
        </TR>

        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/ThinkPHP/test/Public/images/menu_icon.gif" width=9>
          </TD>
          <TD><A class=menuChild 
            href="shop/add.php" 
            target=main>添加商品</A>
          </TD>
        </TR>

        <TR height=4>
          <TD colSpan=2>
            
          </TD>
        </TR>
      </TABLE>
      <!-- 广告管理 -->
  <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background=/ThinkPHP/test/Public/images/menu_bt.jpg><A 
            class=menuParent onclick=expand(3) 
            href="javascript:void(0);">广告管理</A>
          </TD>
        </TR>
        <TR height=4><TD></TD></TR>
      </TABLE>

      <TABLE id=child3 style="DISPLAY: none" cellSpacing=0 cellPadding=0 
      width=150 border=0>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/ThinkPHP/test/Public/images/menu_icon.gif" width=9>
          </TD>
          <TD><A class=menuChild 
            href="ads/index.php" 
            target=main>查看广告</A>
          </TD>
        </TR>

        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/ThinkPHP/test/Public/images/menu_icon.gif" width=9>
          </TD>
          <TD><A class=menuChild 
            href="ads/add.php" 
            target=main>添加广告</A>
          </TD>
        </TR>

        <TR height=4>
          <TD colSpan=2>
            
          </TD>
        </TR>
      </TABLE>
      
      <!-- 品牌管理 -->
        <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background=/ThinkPHP/test/Public/images/menu_bt.jpg><A 
            class=menuParent onclick=expand(5) 
            href="javascript:void(0);">友情链接管理</A>
          </TD>
        </TR>
        <TR height=4><TD></TD></TR>
      </TABLE>

      <TABLE id=child5 style="DISPLAY: none" cellSpacing=0 cellPadding=0 
      width=150 border=0>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/ThinkPHP/test/Public/images/menu_icon.gif" width=9>
          </TD>
          <TD><A class=menuChild 
            href="brand/index.php" 
            target=main>查看链接</A>
          </TD>
        </TR>

        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/ThinkPHP/test/Public/images/menu_icon.gif" width=9>
          </TD>
          <TD><A class=menuChild 
            href="brand/add.php" 
            target=main>添加链接</A>
          </TD>
        </TR>

        <TR height=4>
          <TD colSpan=2>
            
          </TD>
        </TR>
      </TABLE>
     
      <!-- 评论管理 -->
        <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background=/ThinkPHP/test/Public/images/menu_bt.jpg><A 
            class=menuParent onclick=expand(7) 
            href="javascript:void(0);">评论管理</A>
          </TD>
        </TR>
        <TR height=4><TD></TD></TR>
      </TABLE>

      <TABLE id=child7 style="DISPLAY: none" cellSpacing=0 cellPadding=0 
      width=150 border=0>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/ThinkPHP/test/Public/images/menu_icon.gif" width=9>
          </TD>
          <TD><A class=menuChild 
            href="commit/index.php" 
            target=main>查看评论</A>
          </TD>
        </TR>

       <!--  <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/ThinkPHP/test/Public/images/menu_icon.gif" width=9>
          </TD>
          <TD><A class=menuChild 
            href="#" 
            target=main>添加评论</A>
          </TD>
        </TR>

        <TR height=4>
          <TD colSpan=2>
            
          </TD>
        </TR> -->
      </TABLE>
      <!-- 订单状态管理 -->
        <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background=/ThinkPHP/test/Public/images/menu_bt.jpg><A 
            class=menuParent onclick=expand(8) 
            href="javascript:void(0);">订单状态管理</A>
          </TD>
        </TR>
        <TR height=4><TD></TD></TR>
      </TABLE>

      <TABLE id=child8 style="DISPLAY: none" cellSpacing=0 cellPadding=0 
      width=150 border=0>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/ThinkPHP/test/Public/images/menu_icon.gif" width=9>
          </TD>
          <TD><A class=menuChild 
            href="status/index.php" 
            target=main>查看订单状态</A>
          </TD>
        </TR>

        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/ThinkPHP/test/Public/images/menu_icon.gif" width=9>
          </TD>
          <TD><A class=menuChild 
            href="status/add.php" 
            target=main>添加订单状态</A>
          </TD>
        </TR>

        <TR height=4>
          <TD colSpan=2>
            
          </TD>
        </TR>
      </TABLE>
      <!-- 订单状态 -->
        <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background=/ThinkPHP/test/Public/images/menu_bt.jpg><A 
            class=menuParent onclick=expand(9) 
            href="javascript:void(0);">订单管理</A>
          </TD>
        </TR>
        <TR height=4><TD></TD></TR>
      </TABLE>

      <TABLE id=child9 style="DISPLAY: none" cellSpacing=0 cellPadding=0 
      width=150 border=0>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/ThinkPHP/test/Public/images/menu_icon.gif" width=9>
          </TD>
          <TD><A class=menuChild 
            href="orders/index.php" 
            target=main>查看订单</A>
          </TD>
        </TR>

        
      </TABLE>
  </TR>
</TABLE>
</BODY>
</HTML>