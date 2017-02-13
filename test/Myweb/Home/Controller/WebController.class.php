<?php
namespace Home\Controller;
use Think\Controller;
class WebController extends Controller {
    public function index(){
       // 加载登陆界面
    	//实例化
    	$mod = new \Think\Model('cate');
    	$mod1 = new \Think\Model('shops');
        $mod2=M('ad');
        $mod3=M('link');
		$list = $mod->where('pid=0')->select();
		$info = $mod->where('pid>0')->select();
		$shops =$mod1->table('shops')->select(); 
        $ad=$mod2->select();
        $link=$mod3->select();
		// var_dump($shops);exit;
    	$this->assign('list',$list);
    	$this->assign('info',$info);
    	$this->assign('shops',$shops);
        $this->assign('ad',$ad);
        $this->assign('link',$link);
    	$this->display('Web/index');
	}
    //列表
    public function liebiao(){
      
        //实例化
        $mod = new \Think\Model('cate');
        $mod1 = new \Think\Model('shops');
        $list = $mod->where('pid=0')->select();
        $info = $mod->where('pid>0')->select();
        $shops =$mod1->table('shops')->select(); 
        $this->assign('list',$list);
        $this->assign('info',$info);
        $this->assign('shops',$shops);
        $id=$_GET['id'];
        //获取类别表信息
        // $cates=$mod->find($id);
        // var_dump($cates);exit;
        // var_dump($cates['id']);exit;
        // $ss=$cates['id'];
        // echo $ss;exit;
        // echo $id;
        //遍历
        
       //类别表和商品表关联
        $dd = $mod1->where('cate_id='.$id)->select();
        // var_dump($dd);exit;
        // foreach($dd as $ff){
        //     // var_dump($ff);exit;
        // }
          
        
        $this->assign('dd',$dd);
        $this->display('Web/meizhuang'); 
    }
	//详情
    public function xiangqing(){

        $mod = new \Think\Model('cate');
        $mod1 = new \Think\Model('shops');
        $mod2 = M('shoptails');
        $list = $mod->where('pid=0')->select();
        $info = $mod->where('pid>0')->select();
        $shops =$mod1->table('shops')->select(); 
        $shoptail=$mod2->select();
        // var_dump($shoptail);exit;
        $this->assign('list',$list);
        $this->assign('info',$info);
        $this->assign('shops',$shops);
        $this->assign('shoptail',$shoptail);
        $id=$_GET['id'];
        $yy=$mod1->where('id='.$id)->find();
        // var_dump($yy);exit;
        // var_dump($shoptail[0]['type']);exit;
        $_SESSION['yy']=$yy;
        $this->assign('yy',$yy);
        $this->display('Web/xiangqing');
    }
    //ajax请求添加数据
    public function bay(){
      $data=I('n');
        // echo $data[0];echo $data[1];echo $data[2];
        // $sid=$n[3];
        $type=$data[0];
        $color=$data[1];
        $num=$data[2];
        $nn=array();
        $nn['type']=$type;
        $nn['color']=$color;
        $nn['num']=$num;
        // var_dump($nn);
        $_SESSION['ss']=$nn;
        //取购买商品SESSION
        $yy=$_SESSION['yy'];
        $nn=$_SESSION['ss'];
        // var_dump($yy);exit;
        $nn['pic']=$yy['pic'];
        $nn['name']=$yy['name'];
        $nn['id']=$yy['id'];
        $nn['xiaoji']=$nn['num']*$yy['price'];
        $nn['type']=session('ss')['type'];
        $nn['color']=session('ss')['color'];
        $nn['num']=session('ss')['num'];
        $_SESSION['rr'][]=$nn;
        // Session::push('nn',$nn);
        echo 1;
    }
    //购物车
    public function bycar(){
       
        // $info=DB::table('shoptails')->where('sid','=',$sid)->where('type','=',$type)->where('color','=',$color)->first();
        // $snum=$info->num;
        // $info->num=$x[2];
        // $id=$info->id;
        // if(session('cart')){
        //     $s=session('cart');
        //     foreach($s as $k=>$v){
        //        if($v->id==$id){
        //         $b=1;
        //         $v->num+=$info->num;
        //        }
        //     }
        //     if(!empty($b) && $b==1){
        //         session(['cart'=>$s]);
        //     }else{
        //        $request->session()->push('cart',$info); 
        //     }
        // }else{
        //     $request->session()->push('cart',$info);
            
        // }
        // $request->session()->put('shid',$x[3]);
        // $a=session('shid');
        // echo json_encode($snum);
        $mod = new \Think\Model('cate');
        $mod1 = new \Think\Model('shops');
        $mod2 = M('shoptails');
        $list = $mod->where('pid=0')->select();
        $info = $mod->where('pid>0')->select();
        $shops =$mod1->table('shops')->select(); 
        $shoptail=$mod2->select();
        // var_dump($shoptail);exit;
        $this->assign('list',$list);
        $this->assign('info',$info);
        $this->assign('shops',$shops);
        $this->assign('shoptail',$shoptail);
        
        $nn1= $_SESSION['rr'];

        // echo $nn;

        // $_SESSION['nn'][]=$nn;
        // var_dump($nn);exit;
         $aa=0;
          foreach($nn1 as $v){
            // dd($row);
            // dd($value['xiaoji']);
            $aa+=$v['xiaoji'];
          }
          // dd($aa);
          //把总金额存入session
          session('aa',$aa);
         
        $this->assign('nn1',$nn1);
        $this->display('Web/BayCar');
        
    }
    //session清除方法
  public function clear(){
    session('rr',null);
    session('ss',null);

  }
  public function bydelete(){
    $id=$_GET['id'];
    // echo $id;exit;
    //获取session
    $s = $_SESSION['rr'];
        // var_dump($s);exit;
    // 遍历
    foreach($s as $key=>$value){
    
        // var_dump($s[$key]);
      if($value['id']==$id){
      //   //删除
        unset($s[$key]);
      }
    }
    //存储session
    session('rr',$s);
    // $_SESSION['rr']=$s;
    // var_dump(session('rr'));
   $this->success('删除成功',U('Web/bycar'));
   
  }
  public function dizhi(){
    
  }
}





