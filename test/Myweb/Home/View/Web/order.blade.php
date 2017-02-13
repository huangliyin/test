@extends('Web.public')
@section('chakan')
<!--End Header End--> 
<div class="i_bg bg_color">
    <!--Begin 用户中心 Begin -->
	<div class="m_content">
   		<div class="m_left">
        	<div class="left_n">管理中心</div>
            <div class="left_m">
            	<div class="left_m_t t_bg1">订单中心</div>
                <ul>
                	<li><a href="#">我的订单</a></li>
                    <li><a href="/jiesuan" class="now">收货地址</a></li>
                    <li><a href="#">缺货登记</a></li>
                    <li><a href="#">跟踪订单</a></li>
                </ul>
            </div>
            <div class="left_m">
            	<div class="left_m_t t_bg2">会员中心</div>
                <ul>
                	<li><a href="/users/xinxi">用户信息</a></li>
                    <li><a href="#">我的收藏</a></li>
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
                	<li><a href="">我的会员</a></li>
                    <li><a href="">我的业绩</a></li>
                    <li><a href="">我的佣金</a></li>
                    <li><a href="">申请提现</a></li>
                </ul>
            </div>
        </div>
	<div class="container">
		<div class="m_right">
            <p></p>
            <div class="mem_tit">我的订单</div>
            <table border="0" class="order_tab" style="width:930px; text-align:center; margin-bottom:30px;" cellspacing="0" cellpadding="0">
              <tr>                                                                                                                                                    
                <td width="20%">订单号</td>
                <td width="25%">下单时间</td>
                <td width="15%">订单总金额</td>
                <td width="25%">订单状态</td>
                <td width="15%">操作</td>
              </tr>
              @foreach($a as $row)
              <tr>
                <td><font color="#ff4e00">{{$row->order_num}}</font></td>
                <td>{{$row->addtime}}</td>
                <td>￥{{$row->total}}</td>
                <td><a href="">{{$row->status}}</a></td>
                <td>@if($row->status=='新订单')<a href="/order/quxiao?id={{$row->id}}">取消订单</a>@endif  @if($row->status=='已发货')<a href="/order/shouhuo?id={{$row->id}}">确认收货</a>@endif  @if($row->status=='已收货')已收货@endif |<a href="/order/aaa?id={{$row->id}}">订单那详情</a></td>
              </tr>
              @endforeach
            </table>
             </hr>
             
   </div>
    </div>
   

        </div>
    </div>
	<!--End 用户中心 End--> 
@endsection