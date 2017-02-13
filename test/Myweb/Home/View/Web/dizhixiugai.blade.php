@extends('Web.public')
@section('xxgg')
<form action="/dizhixiugai?id={{$dd->id}}" method="post">
<div>
	<table border="0" class="did2" aid="" style="width:930px;"  cellspacing="0" cellpadding="0" >
      <tr>
        <td width="135" align="right">收货人姓名</td>
        <td><input type="text" name="name" value="{{$dd->name}}" class="add_ipt" />（必填）</td>
      </tr>
      <tr>
        <td align="right">详细地址</td>
        <td style="font-family:'宋体';"><input type="text" name="adds" value="{{$dd->adds}}" class="add_ipt" />（必填）</td>
      </tr>
      <tr>
        <td align="right">手机</td>
        <td style="font-family:'宋体';"><input name="phone" type="text" value="{{$dd->phone}}" class="add_ipt" />（必填）</td>
      </tr>

	</table></hr>
	<input type="submit" value="修改">
</div>
{{csrf_field()}}
<input type="hidden" value="{{$dd->id}}" name="id">
</form>
@endsection