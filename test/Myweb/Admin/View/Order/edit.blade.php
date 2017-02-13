@extends('AdminPublic.public')
@section('orderedit')
<div class="mws-panel grid_8">
<div class="mws-panel-header">
	<span>订单修改</span>
</div>
<div class="mws-panel-body no-padding">
	<form class="mws-form" action="/admins/order/update" method="post">
		@if (count($errors) > 0)
			<div class="mws-form-message warning">                            
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
		    </div>
		@endif
		<div class="mws-form-inline">
			
			<div class="mws-form-row">
                <label class="mws-form-label">状态</label>
                <div class="mws-form-item">
                     <input  type="radio" name="status"  value="1" @if($info->status==1) 
                                                                          checked
                                                                          @endif >新订单&nbsp;&nbsp;&nbsp;&nbsp;
                     <input  name="status" type="radio"  value="2" @if($info->status==2) 
                                                                          checked
                                                                           @endif>已发货&nbsp;&nbsp;&nbsp;&nbsp;
               		
                </div>
           </div>
		</div>
		<div class="mws-button-row">
			{{csrf_field()}}
			<input type="hidden" value="{{$info->id}}" name="id">
			<input value="Submit" class="btn btn-danger" type="submit" value="提交">
			<input value="Reset" class="btn " type="reset" value="重置">
		</div>
	</form>
</div>    	
</div>
@endsection
@section('title','用户的修改')
