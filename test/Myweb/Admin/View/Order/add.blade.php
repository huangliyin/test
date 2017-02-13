@extends('AdminPublic.public')
@section('orderadd')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
		<span>订单添加</span>
     </div>
     <div class="mws-panel-body no-padding">
	<form class="mws-form" action="/admins/order/insert" method="post">
		@if(count($errors)>0)
			<div class="mws-form-message warning">                            
			    <div class="alert alert-danger">
			        <ul>
			            @foreach($errors->all() as $error)
			                <li>{{$error}}</li>
			            @endforeach
			        </ul>
			    </div>
			</div>
		@endif
        
		<div class="mws-form-inline">
			
               <div class="mws-form-row">
                    <label class="mws-form-label">联系人姓名</label>
                    <div class="mws-form-item">
                         <input class="large" type="text" name="name" value="{{old('name')}}">
                    </div>
               </div>
               <div class="mws-form-row">
                    <label class="mws-form-label">会员id号</label>
                    <div class="mws-form-item">
                        <select class="large" name="id">
                            <option value="0">--请选择--</option>
                            
                            <option value=""></option>
                           
                            
                        </select>
                    </div>
                </div>
              

             <div class="mws-form-row">
                    <label class="mws-form-label">地址</label>
                    <div class="mws-form-item">
                         <input class="large" type="text" name="address" value="{{old('address')}}">
                    </div>
              </div>  

			<div class="mws-form-row">
				<label class="mws-form-label">邮编</label>
				<div class="mws-form-item">
					<input class="large" type="text" name="code" value="{{old('code')}}">
				</div>
			</div>
			<div class="mws-form-row">
				<label class="mws-form-label">电话</label>
				<div class="mws-form-item">
					<input class="large" type="text" name="phone" value="{{old('phone')}}">
				</div>
			</div>

			<div class="mws-form-row">
				<label class="mws-form-label">总金额</label>
				<div class="mws-form-item">
					<input class="large" type="text" name="total" >
				</div>
			</div>
			<div class="mws-form-row">
				<label class="mws-form-label">状态</label>
				<div class="mws-form-item">
					<input  type="radio" name="status" value="1"><lable>新订单</lable>&nbsp;&nbsp;&nbsp;&nbsp;
					<input  name="status" type="radio" value="2" /><lable>已发货</lable>&nbsp;&nbsp;&nbsp;&nbsp;
					<input  name="status" type="radio" value="2" /><lable>已收货</lable>
				</div>
			</div>
			
			
		<div class="mws-button-row">
			{{csrf_field()}}
			<input value="Submit" class="btn btn-danger" type="submit" value="提交">
			<input value="Reset" class="btn " type="reset" value="重置">
		</div>
	</form>
</div>    	
</div>
@endsection
@section('title','用户的添加')