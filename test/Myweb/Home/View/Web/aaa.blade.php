@extends('Web.public')
@section('aaa')
<div class="mem_tit">订单详情</div>
              <table border="0" class="order_tab" style="width:930px; text-align:center; margin-bottom:30px;" cellspacing="0" cellpadding="0">
              <tr>                                                                                                                                                   
                <td width="20%">订单号</td>
                <td width="25%">商品名字</td>
                <td width="15%">数量</td>
                <td width="25%">型号</td>
                <td width="25%">颜色</td>
                <td width="25%">图片</td>
              </tr>
             @foreach($jj as $row)
              <tr>
                <td><font color="#ff4e00">{{$row->order_id}}</font></td>
                <td>{{$row->goods_id}}</td>
                <td>{{$row->num}}</td>
                <td>{{$row->type}}</td>
                <td>{{$row->color}}</td>
                <td><img src="{{$row->pic}}"></td>
                </tr>
              @endforeach
            </table>
@endsection