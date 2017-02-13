<div class="list_c">
            	
                <ul class="cate_list">
                    @foreach($w as $k)
                	<li>
                    	<div class="img"><a href="#"><img src="{{$k->pic}}" width="210" height="185" /></a></div>
                        <div class="price">
                            <font>￥<span>{{$k->price}}</span></font> &nbsp; 26R
                        </div>
                        <div class="name"><a href="#">{{$k->name}}</a></div>
                        <div class="carbg">
                        	<a href="#" class="ss">收藏</a>
                            <a href="#" class="j_car">加入购物车</a>
                        </div>
                    </li>
                    @endforeach
                                        
                </ul>
                
                <div class="pages">
                	<a href="#" class="p_pre">上一页</a><a href="#" class="cur">1</a><a href="#">2</a><a href="#">3</a>...<a href="#">20</a><a href="#" class="p_pre">下一页</a>
                </div>
                
                
                
            </div>
