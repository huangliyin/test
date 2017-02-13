<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC >
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
    <script type="text/javascript" src="/ThinkPHP/test/Public/h/js/n_nav.js"></script>

    <script type="text/javascript" src="/ThinkPHP/test/Public/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/ThinkPHP/test/Public/js/menu.js"></script>    
            
    <script type="text/javascript" src="/ThinkPHP/test/Public/js/lrscroll_1.js"></script>   
     
    
    <script type="text/javascript" src="/ThinkPHP/test/Public/js/n_nav.js"></script>
    
    <link rel="stylesheet" type="text/css" href="/ThinkPHP/test/Public/css/ShopShow.css" />
    <link rel="stylesheet" type="text/css" href="/ThinkPHP/test/Public/css/MagicZoom.css" />
    <script type="text/javascript" src="/ThinkPHP/test/Public/js/MagicZoom.js"></script>
    
    <script type="text/javascript" src="/ThinkPHP/test/Public/js/num.js">
        var jq = jQuery.noConflict();
    </script>
        
    <script type="text/javascript" src="/ThinkPHP/test/Public/js/p_tab.js"></script>
    
    <script type="text/javascript" src="/ThinkPHP/test/Publicjs/shade.js"></script>
    
<title>尤洪前台商品详情</title>
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
    <div class="logo"><a href="/ThinkPHP/test/index.php/Home/Web/index"><img src="/ThinkPHP/test/Public/h/images/logo.png" /></a></div>
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
<!--公共-->
<!--列表站位-->


<!--百度编辑器-->
<script type="text/javascript" charset="utf-8" src="/ThinkPHP/test/Public/b/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/ThinkPHP/test/Public/b/ueditor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="/ThinkPHP/test/Public/b/ueditor/lang/zh-cn/zh-cn.js"></script>

<!--结束-->
<!--End Menu End--> 
<div class="i_bg">
	<div class="postion">
    	<span class="fl">全部 ><?php echo ($yy['name']); ?> > </span>
    </div>    
    <div class="content">
    	                    
        <div id="tsShopContainer">
            <div id="tsImgS"><a href="/ThinkPHP/test/Public/<?php echo ($yy['pic']); ?>" title="Images" class="MagicZoom" id="MagicZoom"><img src="/ThinkPHP/test/Public/<?php echo ($yy['pic']); ?>" width="390" height="390" /></a></div>
            <div id="tsPicContainer">
                <div id="tsImgSArrL" onclick="tsScrollArrLeft()"></div>
                <div id="tsImgSCon">
                    <ul>
                        <li onclick="showPic(0)" rel="MagicZoom" class="tsSelectImg"><img src="/ThinkPHP/test/Public/<?php echo ($yy['pic']); ?>" tsImgS="/ThinkPHP/test/Public/<?php echo ($yy['pic']); ?>" width="79" height="79" /></li>
                        <li onclick="showPic(1)" rel="MagicZoom"><img src="/ThinkPHP/test/Public/<?php echo ($yy['pic']); ?>" tsImgS="/ThinkPHP/test/Public/<?php echo ($yy['pic']); ?>" width="79" height="79" /></li>
                        <li onclick="showPic(2)" rel="MagicZoom"><img src="/ThinkPHP/test/Public/<?php echo ($yy['pic']); ?>" tsImgS="/ThinkPHP/test/Public/h/images/ps3.jpg" width="79" height="79" /></li>
                        <li onclick="showPic(3)" rel="MagicZoom"><img src="/ThinkPHP/test/Public/images/ps4.jpg" tsImgS="/ThinkPHP/test/Public/h/images/ps4.jpg" width="79" height="79" /></li>
                        <li onclick="showPic(4)" rel="MagicZoom"><img src="/ThinkPHP/test/Public/images/ps1.jpg" tsImgS="/ThinkPHP/test/Public/h/images/ps1.jpg" width="79" height="79" /></li>
                        <li onclick="showPic(5)" rel="MagicZoom"><img src="/ThinkPHP/test/Public/images/ps2.jpg" tsImgS="/ThinkPHP/test/Public/h/images/ps2.jpg" width="79" height="79" /></li>
                        <li onclick="showPic(6)" rel="MagicZoom"><img src="/ThinkPHP/test/Public/images/ps3.jpg" tsImgS="/ThinkPHP/test/Public/h/images/ps3.jpg" width="79" height="79" /></li>
                        <li onclick="showPic(7)" rel="MagicZoom"><img src="/ThinkPHP/test/Public/images/ps4.jpg" tsImgS="/ThinkPHP/test/Public/h/images/ps4.jpg" width="79" height="79" /></li>
                    </ul>
                </div>
                <div id="tsImgSArrR" onclick="tsScrollArrRight()"></div>
            </div>
            <img class="MagicZoomLoading" width="16" height="16" src="/ThinkPHP/test/Public/<?php echo ($yy['pic']); ?>" alt="Loading..." />				
        </div>
        
        <div class="pro_des">
        	<div class="des_name">
            	<p id="qq" name="{<?php echo ($info->id); ?>}"><?php echo ($yy['name']); ?></p>
                <h3><?php echo ($yy['descr']); ?></h3>
            </div>
            <div class="des_price"> 
            	本店价格：<b>￥<?php echo ($yy['price']); ?></b><br />
                库存量：<span><?php echo ($yy['num']); ?></span>
            </div>
            <div class="des_choice">
            	<span class="fl">型号选择：</span>
                <ul>
                    <?php $__FOR_START_5129__=0;$__FOR_END_5129__=7;for($i=$__FOR_START_5129__;$i < $__FOR_END_5129__;$i+=3){ ?><li class="" id="did<?php echo ($i); ?>"   name="<?php echo ($shoptail[$i]['type']); ?>"><?php echo ($shoptail[$i]['type']); ?><div class="ch_img"></div></li><?php } ?>
                    
                </ul>
            </div>
            <!--型号特效开始-->
            <script type="text/javascript">                
                $('#did0').click(function(){
                    // alert('111');
                    $(this).addClass('checked'); 
                    n=$(this).attr('name');
                    // alert(n);
                    $('#did3').removeClass('checked');
                    $('#did6').removeClass('checked');   
                })
                $('#did3').click(function(){
                    $(this).addClass('checked');
                    m=$(this).attr('name');
                     // alert(m);
                    $('#did0').removeClass('checked');
                    $('#did6').removeClass('checked');
                })
                 $('#did6').click(function(){
                    $(this).addClass('checked');
                    b=$(this).attr('name');
                    // alert(b);
                    $('#did0').removeClass('checked');
                    $('#did3').removeClass('checked');
                })
            </script>
            <!--结束-->
            <div class="des_choice">
            	<span class="fl">颜色选择：</span>
                <ul>
                    <?php $__FOR_START_30222__=0;$__FOR_END_30222__=3;for($i=$__FOR_START_30222__;$i < $__FOR_END_30222__;$i+=1){ ?><li id="d<?php echo ($i); ?>" name="<?php echo ($shoptail[$i]['color']); ?>"><?php echo ($shoptail[$i]['color']); ?><div class="ch_img"></div></li><?php } ?>
                </ul>
            </div>
            <!--颜色特效开始-->
            <script type="text/javascript">                
                $('#d0').click(function(){
                    // alert('111');
                    $(this).addClass('checked');
                    w=$(this).attr('name');
                    // session('w'=>$rate);
                     // alert(w); 
                    $('#d1').removeClass('checked');
                    $('#d2').removeClass('checked');   
                })
                $('#d1').click(function(){
                    $(this).addClass('checked');
                    z=$(this).attr('name');
                    // alert(z); 
                    $('#d0').removeClass('checked');
                    $('#d2').removeClass('checked');
                })
                 $('#d2').click(function(){
                    $(this).addClass('checked');
                    d=$(this).attr('name');
                    // alert(d); 
                    $('#d0').removeClass('checked');
                    $('#d1').removeClass('checked');
                })
                 
            </script>
            
            <!--结束-->
            <div class="des_share">
            	<div class="d_sh">
                	分享
                    <div class="d_sh_bg">
                    	<a href="#"><img src="/ThinkPHP/test/Public/h/images/sh_1.gif" /></a>
                        <a href="#"><img src="/ThinkPHP/test/Public/h/images/sh_2.gif" /></a>
                        <a href="#"><img src="/ThinkPHP/test/Public/h/images/sh_3.gif" /></a>
                        <a href="#"><img src="/ThinkPHP/test/Public/h/images/sh_4.gif" /></a>
                        <a href="#"><img src="/ThinkPHP/test/Public/h/images/sh_5.gif" /></a>
                    </div>
                </div>
                <div class="d_care"><a onclick="ShowDiv('MyDiv','fade')">关注商品</a></div>
            </div>
            <div class="des_join">
            	<div class="j_nums">
                	<input type="text" value="1"  id="jianshu" name="" class="n_ipt" />
                    <input type="button" value="" onclick="addUpdate(jq(this));" class="n_btn_1" />
                    <input type="button" value="" onclick="jianUpdate(jq(this));" class="n_btn_2" />   
                </div>
                
                <span class="fl" id="yy"><a href="javascript:void(0)" ><img src="/ThinkPHP/test/Public/h/images/j_car.png" /></a></span>
            </div>            
        </div>    
        
        <div class="s_brand">
        	<div class="s_brand_img"><img src="/ThinkPHP/test/Public/h/images/sbrand.jpg" width="188" height="132" /></div>
            <div class="s_brand_c"><a href="#">进入品牌专区</a></div>
        </div>    
        
        <script type="text/javascript">
            $("#yy").click(function(){
                // alert(111);
                n=[];
                $('.checked').each(function(){
                    n.push($(this).attr('name'));  
                    // alert($(this).attr('name')); 
                }) 
                n[2]=$('#jianshu').val();
                // n[3]=$('#qq').attr('name');
              // alert(n);
                $.get('/ThinkPHP/test/index.php/Home/Web/bay',{n:n},function(data){
                      if(data==1){
                       
                       window.location.href='/ThinkPHP/test/index.php/Home/Web/bycar';
                      }
                    
                })
             })

        </script>
    </div>
    <div class="content mar_20">
    	<div class="l_history">
        	<div class="fav_t">用户还喜欢</div>
        	<ul>
            	<li>
                    <div class="img"><a href="#"><img src="/ThinkPHP/test/Public/h/images/his_1.jpg" width="185" height="162" /></a></div>
                	<div class="name"><a href="#">Dior/迪奥香水2件套装</a></div>
                    <div class="price">
                    	<font>￥<span>368.00</span></font> &nbsp; 18R
                    </div>
                </li>
                <li>
                    <div class="img"><a href="#"><img src="/ThinkPHP/test/Public/h/images/his_2.jpg" width="185" height="162" /></a></div>
                	<div class="name"><a href="#">Dior/迪奥香水2件套装</a></div>
                    <div class="price">
                    	<font>￥<span>768.00</span></font> &nbsp; 18R
                    </div>
                </li>
                <li>
                    <div class="img"><a href="#"><img src="/ThinkPHP/test/Public/h/images/his_3.jpg" width="185" height="162" /></a></div>
                	<div class="name"><a href="#">Dior/迪奥香水2件套装</a></div>
                    <div class="price">
                    	<font>￥<span>680.00</span></font> &nbsp; 18R
                    </div>
                </li>
                <li>
                    <div class="img"><a href="#"><img src="/ThinkPHP/test/Public/h/images/his_4.jpg" width="185" height="162" /></a></div>
                	<div class="name"><a href="#">Dior/迪奥香水2件套装</a></div>
                    <div class="price">
                    	<font>￥<span>368.00</span></font> &nbsp; 18R
                    </div>
                </li>
                <li>
                    <div class="img"><a href="#"><img src="/ThinkPHP/test/Public/h/images/his_5.jpg" width="185" height="162" /></a></div>
                	<div class="name"><a href="#">Dior/迪奥香水2件套装</a></div>
                    <div class="price">
                    	<font>￥<span>368.00</span></font> &nbsp; 18R
                    </div>
                </li>
        	</ul>
        </div>
        <div class="l_list">        	
            <div class="des_border">
            	<div class="des_tit">
                	<ul>
                    	<li class="current">推荐搭配</li>
                    </ul>
                </div>
                <div class="team_list">
                	<div class="img"><a href="#"><img src="/ThinkPHP/test/Public/h/images/mat_1.jpg" width="160" height="140" /></a></div>
                	<div class="name"><a href="#">倩碧补水组合套装8折促销</a></div>
                    <div class="price">
                    	<div class="checkbox"><input type="checkbox" name="zuhe" checked="checked" /></div>
                    	<font>￥<span>768.00</span></font> &nbsp; 18R
                    </div>
                </div>
                <div class="team_icon"><img src="/ThinkPHP/test/Public/h/images/jia_b.gif" /></div>
                <div class="team_list">
                	<div class="img"><a href="#"><img src="/ThinkPHP/test/Public/h/images/mat_2.jpg" width="160" height="140" /></a></div>
                	<div class="name"><a href="#">香奈儿邂逅清新淡香水50ml</a></div>
                    <div class="price">
                    	<div class="checkbox"><input type="checkbox" name="zuhe" /></div>
                    	<font>￥<span>749.00</span></font> &nbsp; 18R
                    </div>
                </div>
                <div class="team_icon"><img src="/ThinkPHP/test/Public/h/images/jia_b.gif" /></div>
                <div class="team_list">
                	<div class="img"><a href="#"><img src="/ThinkPHP/test/Public/h/images/mat_3.jpg" width="160" height="140" /></a></div>
                	<div class="name"><a href="#">香奈儿邂逅清新淡香水50ml</a></div>
                    <div class="price">
                    	<div class="checkbox"><input type="checkbox" name="zuhe" checked="checked" /></div>
                    	<font>￥<span>749.00</span></font> &nbsp; 18R
                    </div>
                </div>
                <div class="team_icon"><img src="/ThinkPHP/test/Public/h/images/equl.gif" /></div>
                <div class="team_sum">
                	套餐价：￥<span>1517</span><br />
                    <input type="text" value="1" class="sum_ipt" /><br />
                    <a href="#"><img src="/ThinkPHP/test/Public/h/images/z_buy.gif" /></a> 
                </div>
                
            </div>
            <div class="des_border">
                <div class="des_tit">
                	<ul>
                    	<li class="current"><a href="#p_attribute">商品属性</a></li>
                        <li><a href="#p_details">商品详情</a></li>
                        <li><a href="#p_comment">商品评论</a></li>
                    </ul>
                </div>
                <div class="des_con" id="p_attribute">
                	
                	<table border="0" align="center" style="width:100%; font-family:'宋体'; margin:10px auto;" cellspacing="0" cellpadding="0">
                      <tr>
                        <td>商品名称：迪奥香水</td>
                        <td>商品编号：1546211</td>
                        <td>品牌： 迪奥（Dior）</td>
                        <td>上架时间：2015-09-06 09:19:09 </td>
                      </tr>
                      <tr>
                        <td>商品毛重：160.00g</td>
                        <td>商品产地：法国</td>
                        <td>香调：果香调香型：淡香水/香露EDT</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>容量：1ml-15ml </td>
                        <td>类型：女士香水，Q版香水，组合套装</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                    </table>                                               
                                            
                        
                </div>
          	</div>  
            
            <div class="des_border" id="p_details">
                <div class="des_t">商品详情</div>
                <div class="des_con">
                	<table border="0" align="center" style="width:745px; font-size:14px; font-family:'宋体';" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="265"><img src="{<?php echo ($info->pic); ?>}" width="206" height="412" /></td>
                        <td>
                        	<b>{<?php echo ($info->name); ?>}</b><br />
                            【商品描述】：{!!$info->descr!!}<br />
                            【商品质地】：液体<br />
                            【商品状态】：{<?php echo ($info->status); ?>}<br />
                            【商品产地】：法国<br />
                            【商品包装】：无外盒 无塑封<br />
                            【商品香调】：花束花香调<br />
                            【适用人群】：适合女性（都市白领，性感，有女人味的成熟女性）<br />
                        </td>
                      </tr>
                    </table>
                </div>
          	</div>  
            
            <div class="des_border" id="p_comment">
            	<div class="des_t">商品评论</div>
                
                <table border="0" class="jud_tab" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="175" class="jud_per">
                    	<p>80.0%</p>好评度
                    </td>
                    <td width="300">
                    	<table border="0" style="width:100%;" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="90">好评<font color="#999999">（80%）</font></td>
                            <td><img src="images/pl.gif" align="absmiddle" /></td>
                          </tr>
                          <tr>
                            <td>中评<font color="#999999">（20%）</font></td>
                            <td><img src="images/pl.gif" align="absmiddle" /></td>
                          </tr>
                          <tr>
                            <td>差评<font color="#999999">（0%）</font></td>
                            <td><img src="images/pl.gif" align="absmiddle" /></td>
                          </tr>
                        </table>
                    </td>
                    <td width="185" class="jud_bg">
                    	购买过雅诗兰黛第六代特润精华露50ml的顾客，在收到商品才可以对该商品发表评论
                    </td>
                    <td class="jud_bg">您可对已购买商品进行评价<br /><img src="/ThinkPHP/test/Public/images/btn_jud.gif" id="pinglun" onclick="fun()"/></td>
                  </tr>

                  
                </table>
                <!--评论开始-->
                    <div id="pp">评论内容：<textarea name="content" value="content"></textarea><a href="/pinglun">提交</a><script id="editor" name="content" type="text/plain" style="width:700px;height:500px;"></script></div>
                    <script type="text/javascript">
                         pinglun=document.getElementById('pinglun');
                        pp=document.getElementById('pp');
                          function fun(){
                           pp.style.display="block";

                            // alert('11111');
                          }
                        
                    </script>
                <!--评论结束-->
                				
                <table border="0" class="jud_list" style="width:100%; margin-top:30px;" cellspacing="0" cellpadding="0">
                    @foreach($aa as $row)
                  <tr valign="top">
                    <td width="160"><img src="/ThinkPHP/test/Public/images/peo1.jpg" width="20" height="20" align="absmiddle" />&nbsp;{<?php echo ($row->author); ?>}</td>
                    <td width="180">
                    	颜色分类：<font color="#999999">粉色</font> <br />
                        型号：<font color="#999999">50ml</font>
                    </td>
                    <td>
                    	{!!$row->content!!}<br />
                        <font color="#999999">{<?php echo ($row->addtime); ?>}</font>
                    </td>
                  </tr>
                  @endforeach
                </table>

                	
                    
                <div class="pages">
                    <a href="#" class="p_pre">上一页</a><a href="#" class="cur">1</a><a href="#">2</a><a href="#">3</a>...<a href="#">20</a><a href="#" class="p_pre">下一页</a>
                </div>
                
          	</div>
            
            
        </div>
    </div>
    
    
    <!--Begin 弹出层-收藏成功 Begin-->
    <div id="fade" class="black_overlay"></div>
    <div id="MyDiv" class="white_content">             
        <div class="white_d">
            <div class="notice_t">
                <span class="fr" style="margin-top:10px; cursor:pointer;" onclick="CloseDiv('MyDiv','fade')"><img src="/ThinkPHP/test/Public/images/close.gif" /></span>
            </div>
            <div class="notice_c">
           		
                <table border="0" align="center" style="margin-top:;" cellspacing="0" cellpadding="0">
                  <tr valign="top">
                    <td width="40"><img src="/ThinkPHP/test/Public/images/suc.png" /></td>
                    <td>
                    	<span style="color:#3e3e3e; font-size:18px; font-weight:bold;">您已成功收藏该商品</span><br />
                    	<a href="#">查看我的关注 >></a>
                    </td>
                  </tr>
                  <tr height="50" valign="bottom">
                  	<td>&nbsp;</td>
                    <td><a href="#" class="b_sure">确定</a></td>
                  </tr>
                </table>
                    
            </div>
        </div>
    </div>    
    <!--End 弹出层-收藏成功 End-->
    
    
    <!--Begin 弹出层-加入购物车 Begin-->
    <div id="fade1" class="black_overlay"></div>
    <div id="MyDiv1" class="white_content">             
        <div class="white_d">
            <div class="notice_t">
                <span class="fr" style="margin-top:10px; cursor:pointer;" onclick="CloseDiv_1('MyDiv1','fade1')"><img src="/ThinkPHP/test/Public/images/close.gif" /></span>
            </div>
            <div class="notice_c">
           		
                <table border="0" align="center" style="margin-top:;" cellspacing="0" cellpadding="0">
                  <tr valign="top">
                    <td width="40"><img src="/ThinkPHP/test/Public/images/suc.png" /></td>
                    <td>
                        <span style="color:#3e3e3e; font-size:18px; font-weight:bold;">宝贝已成功添加到购物车</span><br />
                    	购物车共有1种宝贝 &nbsp; &nbsp; 
                      
                    </td>
                  </tr>
                  <tr height="50" valign="bottom">
                  	<td>&nbsp;</td>
                    <td>
                        <input type="hidden" value="checked" name="did1">
                        <a href="/baycar" class="b_sure">去购物车结算</a><a href="#" class="b_buy">继续购物</a>
                    </td>
                  </tr>
                </table>
                    
            </div>
        </div>
    </div>    
    <!--End 弹出层-加入购物车 End-->
    
    
    
    <!--Begin Footer Begin -->
    <div class="b_btm_bg bg_color">
        <div class="b_btm">
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="/ThinkPHP/test/Public/images/b1.png" width="62" height="62" /></td>
                <td><h2>正品保障</h2>正品行货  放心购买</td>
              </tr>
            </table>
			<table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="/ThinkPHP/test/Public/images/b2.png" width="62" height="62" /></td>
                <td><h2>满38包邮</h2>满38包邮 免运费</td>
              </tr>
            </table>
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="/ThinkPHP/test/Public/images/b3.png" width="62" height="62" /></td>
                <td><h2>天天低价</h2>天天低价 畅选无忧</td>
              </tr>
            </table>
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="/ThinkPHP/test/Public/images/b4.png" width="62" height="62" /></td>
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
            <div class="b_er_c"><img src="/ThinkPHP/test/Public/images/er.gif" width="118" height="118" /></div>
            <img src="/ThinkPHP/test/Public/images/ss.png" />
        </div>
    </div>    
    <div class="btmbg">
		<div class="btm">
        	备案/许可证编号：蜀ICP备12009302号-1-www.dingguagua.com   Copyright © 2015-2018 尤洪商城网 All Rights Reserved. 复制必究 , Technical Support: Dgg Group <br />
            <img src="/ThinkPHP/test/Public/images/b_1.gif" width="98" height="33" /><img src="/ThinkPHP/test/Public/images/b_2.gif" width="98" height="33" /><img src="/ThinkPHP/test/Public/images/b_3.gif" width="98" height="33" /><img src="/ThinkPHP/test/Public/images/b_4.gif" width="98" height="33" /><img src="/ThinkPHP/test/Public/images/b_5.gif" width="98" height="33" /><img src="/ThinkPHP/test/Public/images/b_6.gif" width="98" height="33" />
        </div>    	
    </div>
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
                <td width="72"><img src="/h/images/b3.png" width="62" height="62" /></td>
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
    <div class="btmbg">
		<div class="btm">
        	备案/许可证编号：蜀ICP备12009302号-1-www.dingguagua.com   Copyright © 2015-2018 尤洪商城网 All Rights Reserved. 复制必究 , Technical Support: Dgg Group <br />
            <img src="/ThinkPHP/test/Public/h/images/b_1.gif" width="98" height="33" /><img src="/ThinkPHP/test/Public/h/images/b_2.gif" width="98" height="33" /><img src="/ThinkPHP/test/Public/h/images/b_3.gif" width="98" height="33" /><img src="/ThinkPHP/test/Public/h/images/b_4.gif" width="98" height="33" /><img src="/ThinkPHP/test/Public/h/images/b_5.gif" width="98" height="33" /><img src="/ThinkPHP/test/Public/h/images/b_6.gif" width="98" height="33" />
        </div>    	
    </div>
    <!--End Footer End -->    
</div>

</body>


<!--[if IE 6]>
<script src="//letskillie6.googlecode.com/svn/trunk/2/zh_CN.js"></script>
<![endif]-->
</html>