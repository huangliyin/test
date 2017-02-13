<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link type="text/css" rel="stylesheet" href="/ThinkPHP/project/test/Public/h/css/style.css" />

    <!--[if IE 6]>
    <script src="js/iepng.js" type="text/javascript"></script>
        <script type="text/javascript">
           EvPNG.fix('div, ul, img, li, input, a'); 
        </script>
    <![endif]-->    
    <script type="text/javascript" src="/ThinkPHP/project/test/Public/h/js/jquery-1.11.1.min_044d0927.js"></script>
	<script type="text/javascript" src="/ThinkPHP/project/test/Public/h/js/jquery.bxslider_e88acd1b.js"></script>
    
    <script type="text/javascript" src="/ThinkPHP/project/test/Public/h/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/ThinkPHP/project/test/Public/h/js/menu.js"></script>    
        
	<script type="text/javascript" src="/ThinkPHP/project/test/Public/h/js/select.js"></script>
    
	<script type="text/javascript" src="/ThinkPHP/project/test/Public/h/js/lrscroll.js"></script>
    
    <script type="text/javascript" src="/ThinkPHP/project/test/Public/h/js/iban.js"></script>
    <script type="text/javascript" src="/ThinkPHP/project/test/Public/h/js/fban.js"></script>
    <script type="text/javascript" src="/ThinkPHP/project/test/Public/h/js/f_ban.js"></script>
    <script type="text/javascript" src="/ThinkPHP/project/test/Public/h/js/mban.js"></script>
    <script type="text/javascript" src="/ThinkPHP/project/test/Public/h/js/bban.js"></script>
    <script type="text/javascript" src="/ThinkPHP/project/test/Public/h/js/hban.js"></script>
    <script type="text/javascript" src="/ThinkPHP/project/test/Public/h/js/tban.js"></script>
    
	<script type="text/javascript" src="/ThinkPHP/project/test/Public/h/js/lrscroll_1.js"></script>
    <script type="text/javascript" src="/ThinkPHP/project/test/Public/h/js/n_nav.js"></script>

    <script type="text/javascript" src="/ThinkPHP/project/test/Public/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/ThinkPHP/project/test/Public/js/menu.js"></script>    
            
    <script type="text/javascript" src="/ThinkPHP/project/test/Public/js/lrscroll_1.js"></script>   
     
    
    <script type="text/javascript" src="/ThinkPHP/project/test/Public/js/n_nav.js"></script>
    
    <link rel="stylesheet" type="text/css" href="/ThinkPHP/project/test/Public/css/ShopShow.css" />
    <link rel="stylesheet" type="text/css" href="/ThinkPHP/project/test/Public/css/MagicZoom.css" />
    <script type="text/javascript" src="/ThinkPHP/project/test/Public/js/MagicZoom.js"></script>
    
    <script type="text/javascript" src="/ThinkPHP/project/test/Public/js/num.js">
        var jq = jQuery.noConflict();
    </script>
        
    <script type="text/javascript" src="/ThinkPHP/project/test/Public/js/p_tab.js"></script>
    
    <script type="text/javascript" src="/ThinkPHP/project/test/Publicjs/shade.js"></script>
    
<title>尤洪前台购物车</title>
</head>
<body>  
    <img src="" id="imgid">
    <script type="text/javascript">
        //onscroll  滚动事件
        window.onscroll=function(){
            //获取可视区域的高度
            seeheight=document.documentElement.clientHeight; 
            //alert(seeheight);
            //获取已经滚动的高度
            scrollheight=document.documentElement.scrollTop;
            //alert(scrollheight);
            //总高度 结合滚动的高度
            allheight=document.documentElement.scrollHeight;
            //alert(allheight);
            if(seeheight+scrollheight>allheight-100){
                //给img节点赋src
                imgid=document.getElementById('imgid');
                imgid.src="/h/images/40.jpg";
                imgid.style.display="block";
                //给img绑定单击事件
                imgid.onclick=function(){
                    //定义定时器
                    mytime=setInterval(fun,100);
                }
                function fun(){
                    document.documentElement.scrollTop-=10;
                    //alert(document.documentElement.scrollTop);
                    if(document.documentElement.scrollTop==0){
                        //清除定时器
                        clearInterval(mytime);
                    }
                }
            }
        }
    </script>

<!--Begin Header Begin-->
<div class="soubg">
	<div class="sou">
    	<!--Begin 所在收货地区 Begin-->
    	<span class="s_city_b">
        	<span class="fl">送货至：</span>
            <span class="s_city">
            	<span>四川</span>
                <div class="s_city_bg">
                	<div class="s_city_t"></div>
                    <div class="s_city_c">
                    	<h2>请选择所在的收货地区</h2>
                        <table border="0" class="c_tab" style="width:235px; margin-top:10px;" cellspacing="0" cellpadding="0">
                          <tr>
                            <th>A</th>
                            <td class="c_h"><span>安徽</span><span>澳门</span></td>
                          </tr>
                          <tr>
                            <th>B</th>
                            <td class="c_h"><span>北京</span></td>
                          </tr>
                          <tr>
                            <th>C</th>
                            <td class="c_h"><span>重庆</span></td>
                          </tr>
                          <tr>
                            <th>F</th>
                            <td class="c_h"><span>福建</span></td>
                          </tr>
                          <tr>
                            <th>G</th>
                            <td class="c_h"><span>广东</span><span>广西</span><span>贵州</span><span>甘肃</span></td>
                          </tr>
                          <tr>
                            <th>H</th>
                            <td class="c_h"><span>河北</span><span>河南</span><span>黑龙江</span><span>海南</span><span>湖北</span><span>湖南</span></td>
                          </tr>
                          <tr>
                            <th>J</th>
                            <td class="c_h"><span>江苏</span><span>吉林</span><span>江西</span></td>
                          </tr>
                          <tr>
                            <th>L</th>
                            <td class="c_h"><span>辽宁</span></td>
                          </tr>
                          <tr>
                            <th>N</th>
                            <td class="c_h"><span>内蒙古</span><span>宁夏</span></td>
                          </tr>
                          <tr>
                            <th>Q</th>
                            <td class="c_h"><span>青海</span></td>
                          </tr>
                          <tr>
                            <th>S</th>
                            <td class="c_h"><span>上海</span><span>山东</span><span>山西</span><span class="c_check">四川</span><span>陕西</span></td>
                          </tr>
                          <tr>
                            <th>T</th>
                            <td class="c_h"><span>台湾</span><span>天津</span></td>
                          </tr>
                          <tr>
                            <th>X</th>
                            <td class="c_h"><span>西藏</span><span>香港</span><span>新疆</span></td>
                          </tr>
                          <tr>
                            <th>Y</th>
                            <td class="c_h"><span>云南</span></td>
                          </tr>
                          <tr>
                            <th>Z</th>
                            <td class="c_h"><span>浙江</span></td>
                          </tr>
                        </table>
                    </div>
                </div>
            </span>
        </span>
        <!--End 所在收货地区 End-->
        <span class="fr">
        	<?php if($_SESSION['email']): ?><span class="fl">你好，<span style="color:#ff4e00;"><a href="/users/xinxi"><?php echo ($_SESSION['email']); ?></a></span>请<a href="/ThinkPHP/project/test/index.php/Home/Login/login" style="color:#ff4e00;">登录</a>&nbsp; <a href="/ThinkPHP/project/test/index.php/Home/Login/logout" style="color:#ff4e00;">退出</a>&nbsp;<a href="/home/register" style="color:#ff4e00;">免费注册</a>&nbsp;|&nbsp;<a href="#">我的订单</a>&nbsp;|</span><?php endif; ?>
            
            <span class="fl">你好，<span style="color:#ff4e00;"></span>请<a href="/ThinkPHP/project/test/index.php/Home/Login/login" style="color:#ff4e00;">登录</a>&nbsp; &nbsp;<a href="/home/register" style="color:#ff4e00;">免费注册</a>&nbsp;|&nbsp;<a href="/order/chakan">我的订单</a>&nbsp;|</span>
        	<span class="ss">
            	<div class="ss_list">
                	<a href="#">收藏夹</a>
                    <div class="ss_list_bg">
                    	<div class="s_city_t"></div>
                        <div class="ss_list_c">
                        	<ul>
                            	<li><a href="#">我的收藏宝贝</a></li>
                                <li><a href="#">我的收藏店铺</a></li>
                            </ul>
                        </div>
                    </div>     
                </div>
                <div class="ss_list">
                	<a href="#">商家支持</a>
                    <div class="ss_list_bg">
                    	<div class="s_city_t"></div>
                        <div class="ss_list_c">
                        	<ul>
                            	<li><a href="#">商家中心</a></li>
                                <li><a href="#">商家入住</a></li>
                                <li><a href="#">商家规则</a></li>
                                <li><a href="#">运营服务</a></li>
                            </ul>
                        </div>
                    </div>    
                </div>
                <div class="ss_list">
                	<a href="#">网站导航</a>
                    <div class="ss_list_bg">
                    	<div class="s_city_t"></div>
                        <div class="ss_list_c">
                        	<ul>
                            	<li><a href="#">女装新品</a></li>
                                <li><a href="#">男装新品</a></li>
                                <li><a href="#">童装新品</a></li>
                                <li><a href="#">特色服务</a></li>

                            </ul>
                        </div>
                    </div>    
                </div>
            </span>
            <span class="fl">|&nbsp;关注我们：</span>
            <span class="s_sh"><a href="#" class="sh1">新浪</a><a href="#" class="sh2">微信</a></span>
            <span class="fr">|&nbsp;<a href="#">手机版&nbsp;<img src="/ThinkPHP/project/test/Public/h/images/s_tel.png" align="absmiddle" /></a></span>
        </span>
    </div>
</div>
<div class="top">
    <div class="logo"><a href="/ThinkPHP/project/test/index.php/Home/Web/index"><img src="/ThinkPHP/project/test/Public/h/images/logo.png" /></a></div>
    <div class="search">
    	<form>
        	<input type="text" value="" class="s_ipt" />
            <input type="submit" value="搜索" class="s_btn" />
        </form>  
         <?php if(is_array($info)): foreach($info as $key=>$row): ?><span class="fl"><a href=""><?php echo ($row['name']); ?></a></span><?php endforeach; endif; ?> 
    </div>
    <div class="i_car">
    	<div class="car_t">购物车 [ <span>3</span> ]</div>
        <div class="car_bg">
       		<!--Begin 购物车未登录 Begin-->
        	<div class="un_login">还未登录！<a href="Login.html" style="color:#ff4e00;">马上登录</a> 查看购物车！</div>
            <!--End 购物车未登录 End-->
            <!--Begin 购物车已登录 Begin-->
            <ul class="cars">
                

            	<li>
                	<div class="img"><a href="#"><img src="" width="58" height="58" /></a></div>
                    <div class="name"><a href="#">法颂浪漫梦境50ML 香水女士持久清新淡香 送2ML小样3只</a></div>
                    <div class="price"><font color="#ff4e00">￥</font> X</div>
                </li>
              
            </ul>
            <div class="price_sum">共计&nbsp; <font color="#ff4e00">￥</font><span></span></div>
            <div class="price_a"><a href="/jiesuan">去购物车结算</a></div>
            <!--End 购物车已登录 End-->
        </div>
    </div>
</div>
<!--End Header End--> 
<!--Begin Menu Begin-->
<div class="menu_bg">
    <div class="menu">
        <!--Begin 商品分类详情 Begin-->    
        <div class="nav">
            <div class="nav_t">全部商品分类</div>
            <div class="leftNav">
                <ul>   
                    <?php if(is_array($list)): foreach($list as $key=>$row): ?><li>
                        
                        <div class="fj">
                            <span class="n_img"><span></span><img src="/ThinkPHP/project/test/Public/h/images/nav1.png" /></span>
                           
                            <span class="fl"><?php echo ($row['name']); ?></span>
                        </div>
                        <div class="zj">
                            <div class="zj_l">
                                <div class="zj_l_c">
                                    
                                    <h2>----</h2>
                                    <?php if(is_array($info)): foreach($info as $key=>$row): ?><a href="/aa?did={<?php echo ($row->id); ?>}&id={<?php echo ($rows->id); ?>}&pid={<?php echo ($rows->pid); ?>}"><?php echo ($row['name']); ?></a>
                                        <!--二级分类-->
                                         <a href=""></a>
                                        <!----><?php endforeach; endif; ?>
                                </div>
                            </div>
                            <div class="zj_r">
                                <a href="#"><img src="/ThinkPHP/project/test/Public/h/images/n_img1.jpg" width="236" height="200" /></a>
                                <a href="#"><img src="/ThinkPHP/project/test/Public/h/images/n_img2.jpg" width="236" height="200" /></a>
                            </div>
                        </div>
                    </li><?php endforeach; endif; ?>               
                </ul>            
            </div>
        </div>  
        <!--End 商品分类详情 End-->                                                     
        <ul class="menu_r">   
            <li><a href="">首页</a></li>
            <?php if(is_array($info)): foreach($info as $key=>$rows): ?><li><a href="/ThinkPHP/project/test/index.php/Home/Web/liebiao?id=<?php echo ($rows['id']); ?>"><?php echo ($rows['name']); ?></a></li><?php endforeach; endif; ?>                                                                                                                                          
            
            
        </ul>
        <div class="m_ad"><a href=""><span style="color:#ff4e00;">新年送好礼！</span></a></div>
        </>
    </div>
</div>
<!--End Menu End--> 
<!--公共-->
<!--列表站位-->



<div class="i_bg">  
    <div class="content mar_20">
    	<img src="/ThinkPHP/project/test/Public/h/images/img1.jpg" />        
    </div>
    
    <!--Begin 第一步：查看购物车 Begin -->
    <div class="content mar_20">
    	<table border="0" class="car_tab" id="cars" style="width:1200px; margin-bottom:50px;" cellspacing="0" cellpadding="0">
          <tr>

            <td class="car_th" width="490">商品名称</td>
            <td class="car_th" width="140">属性</td>
            <td class="car_th" width="140">型号</td>
            <td class="car_th" width="150">购买数量</td>
            <td class="car_th" width="130">小计</td>
            
            <td class="car_th" width="150">操作</td>
          </tr>
          <?php if(!empty(session('rr'))): if(is_array($nn1)): foreach($nn1 as $key=>$row): ?><tr> 

            <td>
              <input type="checkbox" value="<?php echo ($row['id']); ?>">
            	<div class="c_s_img"><img src="/ThinkPHP/project/test/Public/<?php echo ($row['pic']); ?>" width="73" height="73" /></div>
                <?php echo ($row['name']); ?>
            </td>
            <td align="center">颜色:<?php echo ($row['color']); ?></td>
             <td align="center"><?php echo ($row['type']); ?></td>
            <td align="center">
            	<div class="c_num">
                    <a href="/jian?id={<?php echo ($value['id']); ?>}"><input type="button" value="" onclick="jianUpdate1(jq(this));" class="car_btn_1" /></a>
                	<input type="text" value="<?php echo ($row['num']); ?>" name="" class="car_ipt" />  
                    <a href="/jia?id={<?php echo ($value['id']); ?>}"><input type="button" value="" onclick="addUpdate1(jq(this));" class="car_btn_2" /></a>
                </div>
            </td>
            <td align="center" style="color:#ff4e00;">￥<?php echo ($row['xiaoji']); ?></td>
           
            <td align="center"><a href="/ThinkPHP/project/test/index.php/Home/Web/bydelete?id=<?php echo ($row['id']); ?>" >删除</a>&nbsp; &nbsp;<a href="#">加入收藏</a></td>
          </tr><?php endforeach; endif; endif; ?>
          <tr height="70">
          	<td colspan="6" style="font-family:'Microsoft YaHei'; border-bottom:0;">
              <a href="javascript:void(0)" class="alldel">全选</a> <a href="javascript:void(0)" class="nodel">全不选</a> <a href="javascript:void(0)" class="fdel">反选</a></br>
              <a href="javascript:void(0)" class="dodel">删除</a>
            	<!-- <label class="r_rad"><input type="checkbox" name="clear" checked="checked" /></label><label class="r_txt">清空购物车</label> -->
                <span class="fr">商品总价：<b style="font-size:22px; color:#ff4e00;">￥<?php echo ($_SESSION['aa']); ?></b></span>
            </td>
          </tr>
          <tr valign="top" height="150">
          	<td colspan="6" align="right">
               
            	<a href="/ThinkPHP/project/test/index.php/Home/Web/index"><img src="/ThinkPHP/project/test/Public/h/images/buy1.gif" /></a>&nbsp; &nbsp; <a href="/ThinkPHP/project/test/index.php/Home/Web/dizhi"><img src="/ThinkPHP/project/test/Public/h/images/buy2.gif" /></a>
            </td>
          </tr> 
        </table>
    </div>
    <script type="text/javascript">
 // alert($);
//全选
$(".alldel").click(function(){
    // alert('sss');
  $("#cars").find('tr').each(function(){
    // alert($(this));
    // alert($(this).find(":checkbox").val());
     $(this).find(":checkbox").attr('checked',true);
  })
})

//全不选
 $(".nodel").click(function(){
  $("#cars").find('tr').each(function(){
    $(this).find(':checkbox').attr('checked',false);
  })
 })

//反选
$(".fdel").click(function(){
  $("#cars").find('tr').each(function(){
    if($(this).find(":checkbox").attr('checked')){
      $(this).find(":checkbox").attr('checked',false);
    }else{
      $(this).find(":checkbox").attr('checked',true);
    }
  })
})

//获取删除 绑定单击事件
$(".dodel").click(function(){
  a=[];//存储选中数据的id值
  //获取选中数据的id
  $(":checkbox").each(function(){
    //判断是否被选中
    if($(this).attr('checked')){
      //获取id
      id=$(this).val();
      // alert(id);
      a.push(id);
    }
  })
// alert(a);

//Ajax $.get()
 s=confirm('你确定删除吗?');
  if(s){
     $.get('/dodels',{uname:a},function(data){
      alert(data);
    if(data==1){
      // alert('删除成功');
      //删除html样式
      for(var i=0;i<a.length;i++){
        //获取被选中的input

        $("input[value="+a[i]+"]").parents('tr').remove();
      }

    }
  });
  }

})
 </script>
	<!--End 第一步：查看购物车 End--> 
    
    
    <!--Begin 弹出层-删除商品 Begin-->
    <div id="fade" class="black_overlay"></div>
    <div id="MyDiv" class="white_content">             
        <div class="white_d">
            <div class="notice_t">
                <span class="fr" style="margin-top:10px; cursor:pointer;" onclick="CloseDiv('MyDiv','fade')"><img src="/ThinkPHP/project/test/Public/images/close.gif" /></span>
            </div>
            <div class="notice_c">
           		
                <table border="0" align="center" style="font-size:16px;" cellspacing="0" cellpadding="0">
                  <tr valign="top">
                    <td>您确定要把该商品移除购物车吗？</td>
                  </tr>
                  <tr height="50" valign="bottom">
                    <td><a href="" class="b_sure">确定</a><a href="#" class="b_buy">取消</a></td>
                  </tr>
                </table>
                    
            </div>
        </div>
    </div>    
    <!--End 弹出层-删除商品 End-->
    
    
    <!--Begin Footer Begin -->
   
    
    <!--End Footer End -->    
</div>


<!--End Menu End--> 
<div class="i_bg bg_color">
	<div class="i_ban_bg"> 
    <!--Begin Footer Begin -->
    <div class="b_btm_bg b_btm_c">
        <div class="b_btm">
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="/ThinkPHP/project/test/Public/h/images/b1.png" width="62" height="62" /></td>
                <td><h2>正品保障</h2>正品行货  放心购买</td>
              </tr>
            </table>
			<table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="/ThinkPHP/project/test/Public/h/images/b2.png" width="62" height="62" /></td>
                <td><h2>满38包邮</h2>满38包邮 免运费</td>
              </tr>
            </table>
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="/h/images/b3.png" width="62" height="62" /></td>
                <td><h2>天天低价</h2>天天低价 畅选无忧</td>
              </tr>
            </table>
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="/ThinkPHP/project/test/Public/h/images/b4.png" width="62" height="62" /></td>
                <td><h2>准时送达</h2>收货时间由你做主</td>
              </tr>
            </table>
        </div>
    </div>
    <div class="b_nav">
    	<dl>                                                                                            
        	<dt><a href="#">新手上路</a></dt>
            <dd><a href="#">售后流程</a></dd>
            <dd><a href="#">购物流程</a></dd>
            <dd><a href="#">订购方式</a></dd>
            <dd><a href="#">隐私声明</a></dd>
            <dd><a href="#">推荐分享说明</a></dd>
        </dl>
        <dl>
        	<dt><a href="#">配送与支付</a></dt>
            <dd><a href="#">货到付款区域</a></dd>
            <dd><a href="#">配送支付查询</a></dd>
            <dd><a href="#">支付方式说明</a></dd>
        </dl>
        <dl>
        	<dt><a href="#">会员中心</a></dt>
            <dd><a href="#">资金管理</a></dd>
            <dd><a href="#">我的收藏</a></dd>
            <dd><a href="#">我的订单</a></dd>
        </dl>
        <dl>
        	<dt><a href="#">服务保证</a></dt>
            <dd><a href="#">退换货原则</a></dd>
            <dd><a href="#">售后服务保证</a></dd>
            <dd><a href="#">产品质量保证</a></dd>
        </dl>
        <dl>
        	<dt><a href="#">联系我们</a></dt>
            <dd><a href="#">网站故障报告</a></dd>
            <dd><a href="#">购物咨询</a></dd>
            <dd><a href="#">投诉与建议</a></dd>
        </dl>
        <div class="b_tel_bg">
        	<a href="#" class="b_sh1">新浪微博</a>            
        	<a href="#" class="b_sh2">腾讯微博</a>
            <p>
            服务热线：<br />
            <span>400-123-4567</span>
            </p>
        </div>
        <div class="b_er">
            <div class="b_er_c"><img src="/ThinkPHP/project/test/Public/h/images/er.gif" width="118" height="118" /></div>
            <img src="/ThinkPHP/project/test/Public/h/images/ss.png" />
        </div>
    </div>    
    <div class="btmbg">
		<div class="btm">
        	备案/许可证编号：蜀ICP备12009302号-1-www.dingguagua.com   Copyright © 2015-2018 尤洪商城网 All Rights Reserved. 复制必究 , Technical Support: Dgg Group <br />
            <img src="/ThinkPHP/project/test/Public/h/images/b_1.gif" width="98" height="33" /><img src="/ThinkPHP/project/test/Public/h/images/b_2.gif" width="98" height="33" /><img src="/ThinkPHP/project/test/Public/h/images/b_3.gif" width="98" height="33" /><img src="/ThinkPHP/project/test/Public/h/images/b_4.gif" width="98" height="33" /><img src="/ThinkPHP/project/test/Public/h/images/b_5.gif" width="98" height="33" /><img src="/ThinkPHP/project/test/Public/h/images/b_6.gif" width="98" height="33" />
        </div>    	
    </div>
    <!--End Footer End -->    
</div>

</body>


<!--[if IE 6]>
<script src="//letskillie6.googlecode.com/svn/trunk/2/zh_CN.js"></script>
<![endif]-->
</html>