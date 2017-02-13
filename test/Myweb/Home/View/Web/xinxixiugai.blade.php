@extends('Web.public')
@section('xinxixiugai')
<form action="/xinxixiugaim?id={{$dd->id}}" method="post">
<div class="mem_t">账号信息</div>



<table border="0" class="did2" aid="" style="width:930px;"  cellspacing="0" cellpadding="0" >
      <tr>
        <td width="135" align="right">姓名</td>
        <td><input type="text" name="username" value="{{$dd->username}}" class="add_ipt" /></td>
      </tr>
      <tr>
        <td align="right">详细地址</td>
        <td style="font-family:'宋体';"><input type="text" name="address" value="{{$dd->address}}" class="add_ipt" />（必填）</td>
      </tr>
      <tr>
        <td align="right">电话</td>
        <td style="font-family:'宋体';"><input name="phone" type="text" value="{{$dd->phone}}" class="add_ipt" />（必填）</td>
      </tr>
      <tr>
        <td align="right">邮箱</td>
        <td style="font-family:'宋体';"><input name="email" type="text" value="{{$dd->email}}" class="add_ipt" />（必填）</td>
      </tr>
	</table></hr>
<input type="submit" value="修改">
{{csrf_field()}}
<input type="hidden" value="{{$dd->id}}" name="id">
</form>
@endsection