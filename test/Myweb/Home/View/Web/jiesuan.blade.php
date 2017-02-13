@extends('Web.public')
@section('jiesuan')
<link rel="stylesheet" href="/bs/css/bootstrap.min.css">
<script src="/bs/js/jquery.min.js"></script>
<script src="/bs/js/bootstrap.min.js"></script>
<script src="/bs/js/holder.min.js"></script>
<style type="text/css">
*{
	padding:0px;
	margin:0px;
}
#did{
	width:100%;
	height:400px;
	border:1px solid red;
}
.did2{
	width:100px;
	height:150px;
	background-color: #ccc;
	border:1px solid pink;
}
.active{
	background-color: green;
}
</style>
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
                    <li><a href="" class="now">收货地址</a></li>
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
	<div class="container">
        <button class="btn btn-success" data-toggle="modal" data-target="#myModal">
			添加收货地址
		</button>
		<!-- 模态框设计 -->
		<div class="modal fade" id="myModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<!-- modal头 -->
					<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">添加收货地址</h4>
					</div>
					<!-- body体 -->
					<div class="modal-body">
						<form role="form" action="/address/insert" method="post">
							<div class="form-group has-success">
								<label>收货人:</label>
								<input type="text" name="name" class="form-control input-lg" placeholder="请输入收货人">
							</div>
							<div class="form-group has-error">
								<label>电话:</label>
								<input type="text" name="phone" placeholder="请输入电话" class="form-control input-sm">
							</div>
							<div class="form-group has-error">
								<label>收货地址:</label>
								<input type="text" name="adds" placeholder="请输入地址" class="form-control input-sm">
							</div>
							{{csrf_field()}}
							<input type="submit" class="btn btn-success" value="提交">
							<input type="reset" class="btn btn-info" value="重置">
					</form>

					</div>

				</div>
			</div>
		</div>
		<form action="/order/create" method="post">
			<div id="did">
				@foreach($ss as $row)
				
					<table border="0" class="did2" aid="{{$row->id}}" style="width:930px;"  cellspacing="0" cellpadding="0" >
			              <tr>
			                <td width="135" align="right">收货人姓名</td>
			                <td><input type="text" value="{{$row->name}}" class="add_ipt" />（必填）</td>
			              </tr>
			              <tr>
			                <td align="right">详细地址</td>
			                <td style="font-family:'宋体';"><input type="text" value="{{$row->adds}}" class="add_ipt" />（必填）</td>
			              </tr>
			              <tr>
			                <td align="right">手机</td>
			                <td style="font-family:'宋体';"><input type="text" value="{{$row->phone}}" class="add_ipt" />（必填）</td>
			              </tr>
			        </table>
			        <p align="right">
			        	<a href="/address/qqxx?id={{$row->id}}">删除</a>&nbsp; &nbsp; <a href="/address/xxgg?id={{$row->id}}" class="add_b" >确认修改</a>
							
		         @endforeach
	     	</div>
	     	<input type="hidden" value="" name="address_id">
			支付方式：
			<input type="radio" name="ss" value="支付宝">支付宝
			<input type="radio" name="ss" value="快捷支付">快捷支付
			{{csrf_field()}}
			<input type="submit" value="提交">
		</form>
		<div id="did5">
			<table border="0" class="did2" aid="" style="width:930px;"  cellspacing="0" cellpadding="0" >
              <tr>
                <td width="135" align="right">收货人姓名</td>
                <td><input type="text" value="" class="add_ipt" />（必填）</td>
              </tr>
              <tr>
                <td align="right">详细地址</td>
                <td style="font-family:'宋体';"><input type="text" value="" class="add_ipt" />（必填）</td>
              </tr>
              <tr>
                <td align="right">手机</td>
                <td style="font-family:'宋体';"><input type="text" value="" class="add_ipt" />（必填）</td>
              </tr>

        	</table></hr>
        	<input type="submit" value="修改">
		</div>
		<script type="text/javascript">
			//给收货地址绑定单击事件
			$(".did2").click(function(){
				// alert('1111');
				$(this).siblings().removeClass('active');
				$(this).addClass('active');
				//获取aid属性值
				id=$(this).attr('aid');
				 // alert(id);
				$("input[name='address_id']").val(id);
			})
		</script>
		<script type="text/javascript">
			did4 = document.getElementById('did4');
			function fun(){
				did5.style.display='block';
			}
		</script>
        </div>
    </div>
	<!--End 用户中心 End--> 
@endsection
@section('title','前台的结算页面')