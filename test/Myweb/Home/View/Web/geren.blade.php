@extends('Web.public')
@section('xinxi')
<!--End Header End--> 
<div class="i_bg bg_color">
    <!--Begin 用户中心 Begin -->
	<div class="m_content">
   		<div class="m_left">
        	<div class="left_n">管理中心</div>
            <div class="left_m">
            	<div class="left_m_t t_bg1">订单中心</div>
                <ul>
                	<li><a href="/order/chakan">我的订单</a></li>
                    <li><a href="/jiesuan" class="now">收货地址</a></li>
                    <li><a href="#">缺货登记</a></li>
                    <li><a href="#">跟踪订单</a></li>
                </ul>
            </div>
            <div class="left_m">
            	<div class="left_m_t t_bg2">会员中心</div>
                <ul>
                	<li><a href="/users/xinxi">用户信息</a></li>
                    <li><a href="">我的收藏</a></li>
                    <li><a href="">我的留言</a></li>
                    <li><a href="">推广链接</a></li>
                    <li><a href="#">我的评论</a></li>
                </ul>
            </div>
            <div class="left_m">
            	<div class="left_m_t t_bg3">账户中心</div>
                <ul>
                	<li><a href="">账户安全</a></li>
                    <li><a href="">我的红包</a></li>
                    <li><a href="">资金管理</a></li>
                </ul>
            </div>
            <div class="left_m">
            	<div class="left_m_t t_bg4">分销中心</div>
                <ul>
                	<li><a href="Member_Member.html">我的会员</a></li>
                    <li><a href="Member_Results.html">我的业绩</a></li>
                    <li><a href="Member_Commission.html">我的佣金</a></li>
                    <li><a href="Member_Cash.html">申请提现</a></li>
                </ul>
            </div>
        </div>
		
		<div class="m_right">
        	<div class="m_des">
            	<table border="0" style="width:870px; line-height:22px;" cellspacing="0" cellpadding="0">
                  <tr valign="top">
                    <td width="115"><img src="{{$info->pic}}" width="90" height="90" /></td>
                    <td>

                        <form  action="/shangchuan?id={{$info->id}}" method="post" enctype="multipart/form-data">
                            <input type="file" name="pic">
                            <input type="submit" value="上传">
                            {{csrf_field()}}
                        </form>
                    </td>
                    <td>
                    	<div class="m_user">TRACY</div>
                        <p>
                            等级：注册用户 <br />
                            <font color="#ff4e00">您还差 270 积分达到 分红100</font><br />
                            上一次登录时间: 2015-09-28 18:19:47<br />
                            您还没有通过邮件认证 <a href="#" style="color:#ff4e00;">点此发送认证邮件</a>
                        </p>
                        <div class="m_notice">
                        	用户中心公告！
                        </div>
                    </td>
                  </tr>
                </table>	
            </div>
            
           

            <div class="mem_t">账号信息</div>
                       <table border="0" class="mon_tab" style="width:870px; margin-bottom:20px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="40%">用户ID：<span style="color:#555555;">{{$info->id}}</span></td>
                <td width="60%">邀请人：<span style="color:#555555;">{{$info->username}}</span></td>
              </tr>
              <tr>
                <td>电&nbsp; &nbsp; 话：<span style="color:#555555;">{{$info->phone}}</span></td>
                <td>邮&nbsp; &nbsp; 箱：<span style="color:#555555;">{{$info->email}}</span></td>
              </tr>
              <tr>
                <td>地址：<span style="color:#555555;">{{$info->address}}</span></td>
              </tr>
            </table>
   
            <a href="/geren/xinxixiugai?id={{$info->id}}">个人资料修改</a>
       
        </div>
    </div>
    </div>
	<!--End 用户中心 End--> 
@endsection