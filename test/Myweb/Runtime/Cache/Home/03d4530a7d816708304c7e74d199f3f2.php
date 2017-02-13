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
    
    <script type="text/javascript" src="/ThinkPHP/test/Public/h/js/jquery-1.8.2.min.js"></script>
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

    <!--返回顶部开始-->
    <!--  -->
    <img src="/ThinkPHP/test/Public/h/images/40.jpg" id="imgid">
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
                imgid.src="/ThinkPHP/test/Public/h/images/40.jpg";
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
    <!--返回顶部结束-->

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
            
            <?php if($_SESSION['email']): ?><span class="fl">你好，<span style="color:#ff4e00;"><a href="/users/xinxi"><?php echo ($_SESSION['email']); ?></a></span>请<a href="/ThinkPHP/test/index.php/Home/Login/login" style="color:#ff4e00;">登录</a>&nbsp; <a href="/ThinkPHP/test/index.php/Home/Login/logout" style="color:#ff4e00;">退出</a>&nbsp;<a href="/home/register" style="color:#ff4e00;">免费注册</a>&nbsp;|&nbsp;<a href="#">我的订单</a>&nbsp;|</span><?php endif; ?>
            
            <span class="fl">你好，<span style="color:#ff4e00;"></span>请<a href="/ThinkPHP/test/index.php/Home/Login/login" style="color:#ff4e00;">登录</a>&nbsp; &nbsp;<a href="/home/register" style="color:#ff4e00;">免费注册</a>&nbsp;|&nbsp;<a href="/order/chakan">我的订单</a>&nbsp;|</span>

        
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
            <span class="fr">|&nbsp;<a href="#">手机版&nbsp;<img src="/ThinkPHP/test/Public/h/images/s_tel.png" align="absmiddle" /></a></span>
        </span>
    </div>
</div>
<div class="top">
    <div class="logo"><a href="/d"><img src="/ThinkPHP/test/Public/h/images/logo.png" /></a></div>
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
            <div class="price_sum">共计&nbsp; <font color="#ff4e00">￥</font><span>@foreach($kk as $row)@endforeach</span></div>
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
                        	<span class="n_img"><span></span><img src="/ThinkPHP/test/Public/h/images/nav1.png" /></span>
                           
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
                                <a href="#"><img src="/ThinkPHP/test/Public/h/images/n_img1.jpg" width="236" height="200" /></a>
                                <a href="#"><img src="/ThinkPHP/test/Public/h/images/n_img2.jpg" width="236" height="200" /></a>
                            </div>
                        </div>
                    </li><?php endforeach; endif; ?>             	
                </ul>            
            </div>
        </div>  
        <!--End 商品分类详情 End-->                                                     
    	<ul class="menu_r">   
            <li><a href="">首页</a></li>
            <?php if(is_array($info)): foreach($info as $key=>$rows): ?><li><a href="/ThinkPHP/test/index.php/Home/Web/liebiao?id=<?php echo ($rows['id']); ?>"><?php echo ($rows['name']); ?></a></li><?php endforeach; endif; ?>                                                                                                                                          
        	
            
        </ul>
        <div class="m_ad"><a href=""><span style="color:#ff4e00;">新年送好礼！</span></a></div>
        </>
    </div>
</div>
<!--End Menu End--> 
<div class="i_bg bg_color">
	<div class="i_ban_bg">
		<!--Begin Banner Begin-->
                	<div class="banner">    	
            <div class="top_slide_wrap">
                <ul class="slide_box bxslider">
                    <?php if(is_array($shops)): foreach($shops as $key=>$row): ?><li><a href="/xq?id={<?php echo ($k->id); ?>}"><img src="/ThinkPHP/test/Public/<?php echo ($row['pic']); ?>" width="740" height="401" /></a></li><?php endforeach; endif; ?>
                </ul>	
                <div class="op_btns clearfix">
                    <a href="#" class="op_btn op_prev"><span></span></a>
                    <a href="#" class="op_btn op_next"><span></span></a>
                </div>        
            </div>
        </div>
        
        <script type="text/javascript">
        //var jq = jQuery.noConflict();
        (function(){
            $(".bxslider").bxSlider({
                auto:true,
                prevSelector:jq(".top_slide_wrap .op_prev")[0],nextSelector:jq(".top_slide_wrap .op_next")[0]
            });
        })();
        </script>
        <!--End Banner End-->
        <div class="inews">
        	<div class="news_t">
            	<span class="fr"><a href="#">更多 ></a></span>新闻资讯
            </div>
            <ul>
            	<li><span>[ 特惠 ]</span><a href="#">掬一轮明月 表无尽惦念</a></li>
            	<li><span>[ 公告 ]</span><a href="#">好奇金装成长裤新品上市</a></li>
            	<li><span>[ 特惠 ]</span><a href="#">大牌闪购 · 抢！</a></li>
            	<li><span>[ 公告 ]</span><a href="#">发福利 买车就抢千元油卡</a></li>
            	<li><span>[ 公告 ]</span><a href="#">家电低至五折</a></li>
            </ul>
            <div class="charge_t">
            	话费充值<div class="ch_t_icon"></div>
            </div>
            <form>
            <table border="0" style="width:205px; margin-top:10px;" cellspacing="0" cellpadding="0">
              <tr height="35">
                <td width="33">号码</td>
                <td><input type="text" value="" class="c_ipt" /></td>
              </tr>
              <tr height="35">
                <td>面值</td>
                <td>
                	<select class="jj" name="city">
                      <option value="0" selected="selected">100元</option>
                      <option value="1">50元</option>
                      <option value="2">30元</option>
                      <option value="3">20元</option>
                      <option value="4">10元</option>
                    </select>
                    <span style="color:#ff4e00; font-size:14px;">￥99.5</span>
                </td>
              </tr>
              <tr height="35">
                <td colspan="2"><input type="submit" value="立即充值" class="c_btn" /></td>
              </tr>
            </table>
            </form>
        </div>
    </div>
    <!--Begin 热门商品 Begin-->
       <!--Begin 限时特卖 Begin-->
    <div class="i_t mar_10">
    	<span class="fl">限时特卖</span>
        <span class="i_mores fr"><a href="#">更多</a></span>
    </div>
    <div class="content">
    	<div class="i_sell">
            <div id="imgPlay">
                <ul class="imgs" id="actor">
                    <?php if(is_array($shops)): foreach($shops as $key=>$row): ?><li><a href="/xq?id={<?php echo ($k->id); ?>}"><img src="/ThinkPHP/test/Public/<?php echo ($row['pic']); ?>" width="211" height="357" /></a></li><?php endforeach; endif; ?>
                    
                </ul>
                <ul class="imgs" id="actor">
                    <?php if(is_array($shops)): foreach($shops as $key=>$row): ?><li><a href="/xq?id={<?php echo ($k->id); ?>}"><img src="{<?php echo ($k->pic); ?>}" width="211" height="357" /></a></li><?php endforeach; endif; ?>
                    
                </ul>
                <div class="previ">上一张</div>
                <div class="nexti">下一张</div>
            </div>        
        </div>
        <div class="sell_right">
            
        	<div class="sell_1">
            	<div class="s_img"><?php if(is_array($shops)): foreach($shops as $key=>$row): ?><a href="/xq?id={<?php echo ($k->id); ?>}"><img src="/ThinkPHP/test/Public/<?php echo ($row['pic']); ?>" width="185" height="155" /></a><?php endforeach; endif; ?></div>
            	<div class="s_price">￥<span>40</span></div>
                <div class="s_name">
                	<h2><a href="#"></a></h2>
                    倒计时：<span id="h1"></span> 时 <span id="m1"></span> 分 <span id="s1"></span> 秒
                    
                </div>
            </div>
            <div class="sell_2">
                <div class="s_img"><a href=""><?php if(is_array($shops)): foreach($shops as $key=>$row): ?><img src="/ThinkPHP/test/Public/<?php echo ($row['pic']); ?>" width="185" height="155" /><?php endforeach; endif; ?></a></div>
                <div class="s_price">￥<span>40</span></div>
                <div class="s_name">
                    <h2><a href="#"></a></h2>
                    倒计时：<span id="h2"></span> 时 <span id="m2"></span> 分 <span id="s2"></span> 秒
                    
                </div>
            </div>
            <div class="sell_b1">
                
                <div class="sb_img"><a href="#"><?php if(is_array($shops)): foreach($shops as $key=>$row): ?><img src="/ThinkPHP/test/Public/<?php echo ($row['pic']); ?>" width="242" height="356" /><?php endforeach; endif; ?></a></div>
                <div class="s_price">￥<span>289</span></div>
                <div class="s_name">
                    <h2><a href="#"></a></h2>
                    倒计时：<span id="h3"></span> 时 <span id="m3"></span> 分 <span id="s3"></span> 秒
                </div>
               
            </div>

            <script type="text/javascript">
                        //获取value值
                      
                        mytime=null;
                        hh=8;
                        mm=59;
                        ss=59;
                        function running(){
                            ss--;
                            if(ss<0){
                                mm--;
                                ss=59;
                                if(mm<0){
                                    hh--;
                                    mm=59;
                                    if(hh<0){
                                        alert('已过时！');
                                    }
                                }
                            }
                            
                            //将value值 赋值给div元素对象的文本值
                            for(var i=1;i<=6;i++){
                                document.getElementById('h'+i).innerHTML=hh;
                                document.getElementById('m'+i).innerHTML=mm;
                                document.getElementById('s'+i).innerHTML=ss;
                            }
                        }
                        //定时器
                        if(mytime==null){
                            mytime=setInterval(running,1000)
                        }
                    </script>
           
            
            <div class="sell_3">
                
            	<div class="s_img"><a href="#"><?php if(is_array($shops)): foreach($shops as $key=>$row): ?><img src="/ThinkPHP/test/Public/<?php echo ($row['pic']); ?>" width="185" height="155" /><?php endforeach; endif; ?></a></div>
            	<div class="s_price">￥<span>289</span></div>
                <div class="s_name">
                	<h2><a href="#"><?php if(is_array($shops)): foreach($shops as $key=>$row): echo ($row['name']); endforeach; endif; ?></a></h2>
                    倒计时：<span id="h4"></span> 时 <span id="m4"></span> 分 <span id="s4"></span> 秒
                </div>
                
            </div>
            <div class="sell_4">
                
                <div class="s_img"><a href="#"><?php if(is_array($shops)): foreach($shops as $key=>$row): ?><img src="/ThinkPHP/test/Public/<?php echo ($row['pic']); ?>" width="185" height="155" /><?php endforeach; endif; ?></a></div>
                <div class="s_price">￥<span>289</span></div>
                <div class="s_name">
                    <h2><a href="#"><?php if(is_array($shops)): foreach($shops as $key=>$row): echo ($row['name']); endforeach; endif; ?></a></h2>
                    倒计时：<span id="h5"></span> 时 <span id="m5"></span> 分 <span id="s5"></span> 秒
                </div>
                
            </div>
           
            <div class="sell_b2">
                
                <div class="sb_img"><a href="#"><?php if(is_array($shops)): foreach($shops as $key=>$row): ?><img src="/ThinkPHP/test/Public/<?php echo ($row['pic']); ?>" width="242" height="356" /><?php endforeach; endif; ?></a></div>
                <div class="s_price">￥<span>289</span></div>
                <div class="s_name">
                    <h2><a href="#"></a></h2>
                    倒计时：<span id="h6"></span> 时 <span id="m6"></span> 分 <span id="s6"></span> 秒
                </div>
                
            </div>
            
            
        </div>
    </div>
    <!--End 限时特卖 End-->
    <div class="content mar_20">
    	<img src="/ThinkPHP/test/Public/h/images/mban_1.jpg" width="1200" height="110" />
    </div>
	
    <!--Begin 食品饮料 Begin-->

    <?php if(is_array($list)): foreach($list as $key=>$row): ?><div class="i_t mar_10">
    	<span class="floor_num">2F</span>
    	<span class="fl"><?php echo ($row['name']); ?></span>
        
        <span class="i_mores fr" ><a href=""></a>&nbsp; &nbsp; | &nbsp; &nbsp;</span>
        
    </div>
    <div class="content">
    	<div class="food_left">
        	<div class="food_ban">
            	<div id="imgPlay2">
                    <ul class="imgs" id="actor2">
                        <li><a href="#"><img src="/ThinkPHP/test/Public/h/images/food_r.jpg" width="211" height="286" /></a></li>
                        <li><a href="#"><img src="/ThinkPHP/test/Public/h/images/food_r.jpg" width="211" height="286" /></a></li>
                        <li><a href="#"><img src="/ThinkPHP/test/Public/h/images/food_r.jpg" width="211" height="286" /></a></li>
                    </ul>
                    <div class="prev_f">上一张</div>
                    <div class="next_f">下一张</div> 
                </div>   
            </div>
            <div class="fresh_txt">
            	<div class="fresh_txt_c">
                	<a href="#">饼干糕点</a><a href="#">休闲零食</a><a href="#">饮料果汁</a><a href="#">牛奶乳品</a><a href="#">冲饮谷物</a><a href="#">营养保健</a><a href="#">冲饮谷物</a><a href="#">营养保健</a>
                </div>
            </div>
        </div>
        
        <div class="fresh_mid">
        	<ul>
                
                <?php if(is_array($shops)): foreach($shops as $key=>$row): ?><li>
                	<div class="name"><a href="#"><?php echo ($row['name']); ?></a></div>
                    <div class="price">
                    	<font>￥<span><?php echo ($row['price']); ?></span></font> &nbsp; 25R
                    </div>
                    <div class="img"><a href="/xq?id={<?php echo ($rows->sid); ?>}"><img src="/ThinkPHP/test/Public/<?php echo ($row['pic']); ?>" width="185" height="155" /></a></div>
                </li><?php endforeach; endif; ?>
          
            </ul>
        </div>
       
        <div class="fresh_right">
        	<ul>
            	<li><a href="#"><img src="/ThinkPHP/test/Public/h/images/food_b1.jpg" width="260" height="220" /></a></li>
                <li><a href="#"><img src="/ThinkPHP/test/Public/h/images/food_b2.jpg" width="260" height="220" /></a></li>
            </ul>
        </div>
    </div><?php endforeach; endif; ?>

    <!--End 食品饮料 End-->
    
    
   
    
    <!--Begin Footer Begin -->
    <div class="b_btm_bg b_btm_c">
        <div class="b_btm">
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="/ThinkPHP/test/Public/h/images/b1.png" width="62" height="62" /></td>
                <td><h2>正品保障</h2>正品行货  放心购买</td>
              </tr>
            </table>
			<table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="/ThinkPHP/test/Public/h/images/b2.png" width="62" height="62" /></td>
                <td><h2>满38包邮</h2>满38包邮 免运费</td>
              </tr>
            </table>
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="/ThinkPHP/test/Public/h/images/b3.png" width="62" height="62" /></td>
                <td><h2>天天低价</h2>天天低价 畅选无忧</td>
              </tr>
            </table>
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="/ThinkPHP/test/Public/h/images/b4.png" width="62" height="62" /></td>
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
            <div class="b_er_c"><img src="/ThinkPHP/test/Public/h/images/er.gif" width="118" height="118" /></div>
            <img src="/ThinkPHP/test/Public/h/images/ss.png" />
        </div>
    </div> 
    <div class="links">
        <div class="links_main">友情连接：&nbsp;<?php if(is_array($link)): foreach($link as $key=>$row): ?><a href="<?php echo ($row['url']); ?>"><?php echo ($row['name']); ?>&nbsp; |<?php endforeach; endif; ?></a>  </div>
    </div>   
    <div class="btmbg">
		<div class="btm">
        	备案/许可证编号：蜀ICP备12009302号-1-www.dingguagua.com   Copyright © 2015-2018 尤洪商城网 All Rights Reserved. 复制必究 , Technical Support: Dgg Group <br />
            <img src="/ThinkPHP/test/Public/h/images/b_1.gif" width="98" height="33" /><img src="/ThinkPHP/test/Public/h/images/b_2.gif" width="98" height="33" /><img src="/ThinkPHP/test/Public/h/images/b_3.gif" width="98" height="33" /><img src="/ThinkPHP/test/Public/h/images/b_4.gif" width="98" height="33" /><img src="/ThinkPHP/test/Public/h/images/b_5.gif" width="98" height="33" /><img src="/ThinkPHP/test/Public/h/images/b_6.gif" width="98" height="33" />
        </div>    	
    </div>
    <!--End Footer End -->    
</div>

<!--广告漂浮-->
    
    <div id="piaofu"><?php if(is_array($ad)): foreach($ad as $key=>$row): echo ($row['name']); ?>❤❤{<?php echo ($row['code']); ?><img src="/ThinkPHP/test/Public/<?php echo ($row['pic']); ?>"><?php endforeach; endif; ?></div>
    
    <!--结束-->

</body>


<!--[if IE 6]>
<script src="//letskillie6.googlecode.com/svn/trunk/2/zh_CN.js"></script>
<![endif]-->
</html>