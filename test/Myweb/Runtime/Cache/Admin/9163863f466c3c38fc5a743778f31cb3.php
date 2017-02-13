<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/ThinkPHP/test/Public/b/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/ThinkPHP/test/Public/b/custom-plugins/wizard/wizard.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/ThinkPHP/test/Public/b/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/ThinkPHP/test/Public/b/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/ThinkPHP/test/Public/b/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/ThinkPHP/test/Public/b/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/ThinkPHP/test/Public/b/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/ThinkPHP/test/Public/b/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/ThinkPHP/test/Public/b/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/ThinkPHP/test/Public/b/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/ThinkPHP/test/Public/b/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/ThinkPHP/test/Public/b/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/ThinkPHP/test/Public/b/css/themer.css" media="screen">
<link rel="stylesheet" type="text/css" href="/ThinkPHP/test/Public/b/css/my.css" media="screen">


<title>后台--广告添加</title>

</head>

<body>
	<!-- Header -->
	<div id="mws-header" class="clearfix">
    
    	<!-- Logo Container -->
    	<div id="mws-logo/-container">
        
        	<!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
        	<div id="mws-logo-wrap">
            	<img src="/ThinkPHP/test/Public/b/images/mws-logo.png" alt="mws admin">
			</div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
        
        	<!-- Notifications -->
        	<div id="mws-user-notif" class="mws-dropdown-menu">
            	<a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-exclamation-sign"></i></a>
                
                <!-- Unread notification count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Notifications dropdown -->
                <div class="mws-dropdown-box">
                	<div class="mws-dropdown-content">
                        <ul class="mws-notifications">
                        	<li class="read">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="read">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
	                        <a href="#">View All Notifications</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Messages -->
            <div id="mws-user-message" class="mws-dropdown-menu">
            	<a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-envelope"></i></a>
                
                <!-- Unred messages count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Messages dropdown -->
                <div class="mws-dropdown-box">
                	<div class="mws-dropdown-content">
                        <ul class="mws-messages">
                        	<li class="read">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="read">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
	                        <a href="#">View All Messages</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
            	<!-- User Photo -->
            	<div id="mws-user-photo">
                	<img src="/ThinkPHP/test/Public/b/example/profile.jpg" alt="User Photo">
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                        Hello, <?php echo ($_SESSION['username']); ?>
                    </div>
                    <ul>
                    	<li><a href="">Profile</a></li>
                        <li><a href="#">Change Password</a></li>
                        <li><a href="/ThinkPHP/test/index.php/Admin/Login/logout">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
    	<!-- Necessary markup, do not remove -->
		<div id="mws-sidebar-stitch"></div>
		<div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
        	<!-- Searchbox -->
        	<div id="mws-searchbox" class="mws-inset">
            	<form action="typography.html">
                	<input type="text" class="mws-search-input" placeholder="Search...">
                    <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button>
                </form>
            </div>
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                    <li>
                        <a href="#"><i class="icon-user"></i> 用户管理</a>
                        <ul class="closed">
                            <li><a href="/ThinkPHP/test/index.php/Admin/User/useradd">用户添加</a></li>
                            <li><a href="/ThinkPHP/test/index.php/Admin/User/userindex">用户列表</a></li>
                        </ul>
                    </li>


                    <li>
                        <a href="#"><i class="icon-th-list"></i> 分类管理</a>
                        <ul class="closed">
                            <li><a href="/ThinkPHP/test/index.php/Admin/User/cateadd">分类添加</a></li>
                            <li><a href="/ThinkPHP/test/index.php/Admin/User/cateindex">分类列表</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-file"></i> 文章管理</a>
                        <ul class="closed">
                            <li><a href="/admins/article/add">文章添加</a></li>
                            <li><a href="/admins/article/index">文章列表</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-file"></i> 商品管理</a>
                        <ul class="closed">
                            <li><a href="/ThinkPHP/test/index.php/Admin/Shop/add">商品添加</a></li>
                            <li><a href="/ThinkPHP/test/index.php/Admin/Shop/index">商品列表</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-file"></i> 评论管理</a>
                        <ul class="closed">
                            <li><a href="/ThinkPHP/test/index.php/Admin/Comment/add">评论添加</a></li>
                            <li><a href="/ThinkPHP/test/index.php/Admin/Comment/index">评论列表</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-file"></i> 友情链接</a>
                        <ul class="closed">
                            <li><a href="/ThinkPHP/test/index.php/Admin/Link/add">友情链接添加</a></li>
                            <li><a href="/ThinkPHP/test/index.php/Admin/Link/index">友情链接列表</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-file"></i> 广告管理</a>
                        <ul class="closed">
                            <li><a href="/ThinkPHP/test/index.php/Admin/Ad/add">广告添加</a></li>
                            <li><a href="/ThinkPHP/test/index.php/Admin/Ad/index">广告列表</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-file"></i> 图片轮播管理</a>
                        <ul class="closed">
                            <li><a href="/admins/lunbo/add">图片轮播添加</a></li>
                            <li><a href="/admins/lunbo/index">图片轮播列表</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-file"></i> 订单表管理</a>
                        <ul class="closed">
                            <li><a href="/ThinkPHP/test/index.php/Admin/Order/add">订单添加</a></li>
                            <li><a href="/ThinkPHP/test/index.php/Admin/Order/index">订单列表</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-file"></i> 订单详情</a>
                        <ul class="closed">
                            <li><a href="/admins/detail/add">订单详情添加</a></li>
                            <li><a href="/admins/detail/index">订单详情列表</a></li>
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="icon-file"></i> 地址表</a>
                        <ul class="closed">
                            <li><a href="/admins/address/add">地址添加</a></li>
                            <li><a href="/admins/address/index">地址详情列表</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-file"></i> 用户管理2</a>
                        <ul class="closed">
                            <li><a href="/admins/user/add">用户添加</a></li>
                            <li><a href="/page">用户列表</a></li>
                        </ul>
                    </li>



                </ul>
            </div>         
        </div>
        
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
            	<div class="container">
                    <!--用户管理管理-->
                    
                    
                    
                    <!--分类管理-->
                    
                    
                    
                    <!--商品管理-->
                    
                    
                    
                   <!--公共站位广告-->
              		
                    
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
		<span>广告添加</span>
     </div>
     <div class="mws-panel-body no-padding">
	<form class="mws-form" action="/ThinkPHP/test/index.php/Admin/Ad/insert" method="post" enctype="multipart/form-data">
		<!--验证-->
			<div class="mws-form-message warning">                            
			    <div class="alert alert-danger">
			        <ul>
			            
			                <li></li>
			           
			        </ul>
			    </div>
			</div>
		<!---->
        
		<div class="mws-form-inline">
			<div class="mws-form-row">
				<label class="mws-form-label">广告名称</label>
				<div class="mws-form-item">
					<input class="large" type="text" name="name" value="">
				</div>
			</div>

          <div class="mws-form-row">
				<label class="mws-form-label">投放范围</label>
				<div class="mws-form-item">
					<input  type="radio" name="fanwei" value="1" /><lable>底部</lable>&nbsp;&nbsp;&nbsp;&nbsp;
					<input  name="fanwei" type="radio" value="2" /><lable>左侧</lable>
				</div>
			</div>

           <div class="mws-form-row">
				<label class="mws-form-label">是否限时</label>
				<div class="mws-form-item">
					<input  type="radio" name="expire" value="1" /><lable>不限时</lable>&nbsp;&nbsp;&nbsp;&nbsp;
					<input  name="expire" type="radio" value="2" /><lable>限时</lable>
				</div>
			</div>

           <div class="mws-form-row">
                <label class="mws-form-label">结束时间</label>
                <div class="mws-form-item">
                     <input class="large" type="text" name="endtime" value="">
                </div>
           </div>

           
           <div class="mws-form-row">
    				<label class="mws-form-label">内容</label>
    				<div class="mws-form-item">
    					<textarea rows="" cols="" class="large" name="code" value=""></textarea>
    				</div>
    			</div>
           <div class="mws-form-row">
                <label class="mws-form-label">文件上传</label>
                <div class="mws-form-item">
		           
					文件上传:<input type="file" name="pic" value="">
                </div>
            </div>

           
		<div class="mws-button-row">
			{{csrf_field()}}
			<input class="btn btn-danger" type="submit" value="提交">
			<input  class="btn " type="reset" value="重置">
		</div>
	</form>
</div>    	
</div>

                    
                    <!--友情链接-->
                    
                    
                    
                     <!--评论管理-->
                    
                    
                    
                     <!--订单表管理-->
                    
                    
                    
                    
                    <!-- Panels End -->
                </div>
                <!-- footer -->
                <div id="mws-footer">
                    Copyright Your Website 2012. All Rights Reserved.
                </div>
        </div>
        <!-- Main Container End -->
        
    </div>

    <!-- JavaScript Plugins -->
    <script src="/ThinkPHP/test/Public/b/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/ThinkPHP/test/Public/b/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/ThinkPHP/test/Public/b/js/libs/jquery.placeholder.min.js"></script>
    <script src="/ThinkPHP/test/Public/b/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/ThinkPHP/test/Public/b/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/ThinkPHP/test/Public/b/jui/jquery-ui.custom.min.js"></script>
    <script src="/ThinkPHP/test/Public/b/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/ThinkPHP/test/Public/b/plugins/datatables/jquery.dataTables.min.js"></script>
    <!--[if lt IE 9]>
    <script src="js/libs/excanvas.min.js"></script>
    <![endif]-->
    <script src="/ThinkPHP/test/Public/b/plugins/flot/jquery.flot.min.js"></script>
    <script src="/ThinkPHP/test/Public/b/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="/ThinkPHP/test/Public/b/plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="/ThinkPHP/test/Public/b/plugins/flot/plugins/jquery.flot.stack.min.js"></script>
    <script src="/ThinkPHP/test/Public/b/plugins/flot/plugins/jquery.flot.resize.min.js"></script>
    <script src="/ThinkPHP/test/Public/b/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/ThinkPHP/test/Public/b/plugins/validate/jquery.validate-min.js"></script>
    <script src="/ThinkPHP/test/Public/b/custom-plugins/wizard/wizard.min.js"></script>

    <!-- Core Script -->
    <script src="/ThinkPHP/test/Public/b/bootstrap/js/bootstrap.min.js"></script>
    <script src="/ThinkPHP/test/Public/b/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/ThinkPHP/test/Public/b/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/ThinkPHP/test/Public/b/js/demo/demo.dashboard.js"></script>

</body>
</html>