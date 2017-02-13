<?php
namespace Admin\Controller;
use Think\Controller;
class CommentController extends Controller {
    public function index(){
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>[ 您现在访问的是Home模块的Index控制器 ]</div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
		//echo "这是tp框架后台用户模块";
		//获取用户的信息
		$mod = new \Think\Model('comments');
		// var_dump($mod);
		//获取搜索条件
		$where = array();
		if(!empty($_GET['name'])){
			$where['name']=array('like',"%{$_GET['name']}%");
		}

		//获取用户的信息
		$mod = new \Think\Model('comments');
		// var_dump($mod);
		//获取数据总条数
		$tot = $mod->where($where)->Count();
		//实例化分页类
		$page = new \Think\Page($tot,3);
		//设置分页样式
		$page->setConfig('prev','上一页');
		$page->setConfig('next','下一页');
		//firstRow 起始总条数 listRows  煤业显示的条数
		$list = $mod->where($where)->limit($page->firstRow,$page->listRows)->select();
		// $list = $mod->where($where)->limit($page->firstRow,$page->listRows)->table('users','shops')->join('comments','users.id','=','comments.user_id')->join('comments','shops.id','=','comments.shop_id')->select('*,users.id as uid,shops.id as sid');
		// table('cates')->join('shops','cates.id','=','shops.cate_id')->select(DB::raw('*,shops.name as sname,cates.name as cname,cates.id as cid,shops.id as sid'))->paginate(3);
		// var_dump($list);exit;
		//加载模板  分配变量
		$this->assign('list',$list);
		$this->assign('page',$page->show());
		$this->display('Comment/index');
		
	}
	//执行删除
	public function delete(){
		//获取删除的id
		$id = $_GET['id'];
		// echo $id;exit;
		//实例化Model类 M是实例化Model类
		$mod = M('comments');
		//获取需要删除的数据
		$info = $mod->select($id);
		// var_dump($info);exit;
		foreach($info as $row){
			// var_dump($row);exit;
			$aa=$row['pic'];
			$hh=substr($aa,0,20);
			// var_dump($hh);exit;
			$cc = substr($aa,22);
			//拼装原图片路径
			$dd = "./Public".$hh.$cc;
			// var_dump($dd);exit;
			unlink($dd);
			// $ss=__ROOT__."/Public/".$row['pic'];
			//拼装缩放后的路径
			$ss="./Public".$row['pic'];
			// echo $ss;exit;
			//销毁原图片和缩放后的图片
			
			unlink($ss);
		}
		
		
		if($mod->delete($id)){
			
			//U 生成新的URL
			$this->success('删除成功',U('Comment/index'));
		}else{
			// echo "00000";
			$this->error('删除失败',U('Comment/index'));
		}
	}
	//加载添加模板
	public function add(){
		// echo "111";
		$this->display('Comment/add');
	}
	//执行添加
	public function insert(){
		// var_dump($_POST);
		//实例化文件上传类
		$upload = new \Think\Upload();
		// var_dump($upload);
		//设置信息
		$upload->maxSize=0;//文件大小
		$upload->exts=array('jpg','jpeg','png','gif');//类型
		$upload->rootPath="./Public/Uploads/";//保存路径
		//执行上传
		$info = $upload->upload();
		// var_dump($info);//获取上传图片信息
		if(!$info){
			//显示错误信息
			$this->error($upload->getError());
		}else{
			// echo "文件上传成功";
			//输出图片拿到路径
			// var_dump($info);exit;
			$image = new \Think\Image();
			foreach($info as $key=>$file){
				//实例化图像处理
				// var_dump($file['savepath'].$file['savename']);exit;
				// 打开需要处理的图片
				$image->open('./Public/Uploads/'.$file['savepath'].$file['savename']);
				//缩放图片
				// var_dump($image);exit;
				$image->thumb(50,50)->save('./Public/Uploads/'.$file['savepath']."w_".$file['savename']);
				
				 // echo $path;exit;  //ThinkPHP/test/Public/Uploads/2017-02-08/589b2bf6082e8.gif
				// echo "<img src='{$path}' width='50px' height='50px'>";
			}
		}

		$path=__ROOT__."/Public/Uploads/".$file['savepath']."w_".$file['savename'];
		//实例化Model
		$mod=M('comments');
		//封装$mod里
		$data=array();
		$data=$mod->create();
		$data['pic']=substr($path,21);
		// echo $data['pic'];exit; //    /Uploads/2017-02-08/589b329be9b3d.png		
		$data['addtime']=date('Y-m-d h:i:s');
		$data['content']=str_replace('&lt;','<',$data['content']);
		$data['content']=str_replace('&gt;','>',$data['content']);
		$data['content']=str_replace('&quot;','"',$data['content']);
		 // var_dump($mod->create());exit;//获取需要添加的数据
		// var_dump($data);exit;
		//执行添加操作  数据库
		if($mod->add($data)){

			$this->success('添加成功',U('Comment/index'));
		}else{
			$this->error('添加失败');
		}
	}
	//获取修改信息
	public function edit(){
		//获取id
		$id=$_GET['id'];
		// echo $id;exit;
		//获取需要修改的信息
		//实例化
		$mod=M('comments');
		//获取单条数据
		$info = $mod->find($id);
		//加载模板  分配变量
		$this->assign('info',$info);
		$this->display('Comment/edit');
	}
	//执行修改
	public function update(){

		//实例化
		$mod=M('comments');
		$upload = new \Think\Upload();
		//设置信息
		$upload->maxSize=0;//文件大小
		$upload->exts=array('jpg','jpeg','png','gif');//类型
		$upload->rootPath="./Public/Uploads/";//保存路径
		//执行上传
		$info = $upload->upload();
		// var_dump($info);//获取上传图片信息
		//封装信息
		$data=array();
		// var_dump($mod->create());exit;//修改后的信息
		$data = $mod->create();
		$data['addtime']=date('Y-m-d h:i:s');
		$data['content']=str_replace('&lt;','<',$data['content']);
		$data['content']=str_replace('&gt;','>',$data['content']);
		$data['content']=str_replace('&quot;','"',$data['content']);	
		//两种修改情况  一种是修改图片  一种是不修改图片
		if($info){
			//获取需要删除的数据
			$gg = $mod->select($list['id']);
			// var_dump($gg);exit;	
			foreach($gg as $tt){
				// var_dump($tt['pic']);exit;
				//拼装原缩放图路径
				$yy ="./Public".$tt['pic'];
				// echo $yy;exit;
				
				$jj = substr($yy,0,28);
				// echo $jj;exit;
				$cc = substr($yy,30);
				// echo $cc;exit;
				$dd = $jj.$cc;
				// echo $dd;exit;
				//销毁原图片和原缩放图
				unlink($yy);
				unlink($dd);
			}
			//上传图片
			$image = new \Think\Image();
			foreach($info as $key=>$file){
				//实例化图像处理
				// var_dump($file['savepath'].$file['savename']);exit;
				// 打开需要处理的图片
				$image->open('./Public/Uploads/'.$file['savepath'].$file['savename']);
				//缩放图片
				// var_dump($image);exit;
				$image->thumb(50,50)->save('./Public/Uploads/'.$file['savepath']."w_".$file['savename']);
			}
			$path=__ROOT__."/Public/Uploads/".$file['savepath']."w_".$file['savename'];
			//实例化Model
			$mod=M('comments');
			//封装$mod里
			$data=array();
			
			// var_dump($data);
			
			$data=$mod->create();
			$data['pic']=substr($path,21);
			// echo $data['pic'];exit; //    /Uploads/2017-02-09/w_589c39a17f4c7.jpg		
			$data['addtime']=date('Y-m-d h:i:s');
			$data['content']=str_replace('&lt;','<',$data['content']);
			$data['content']=str_replace('&gt;','>',$data['content']);
			$data['content']=str_replace('&quot;','"',$data['content']);
			 // var_dump($mod->create());exit;//获取需要添加的数据
			// var_dump($data);exit;
			//执行添加操作  数据库
			if($mod->save($data)){
				$this->success('修改成功',U('Comment/index'));
			}else{
				$this->error('修改失败');
			}
			//输出图片拿到路径
			// var_dump($info);exit;
		}else{
			//save  修改
			if($mod->save($data)){
				$this->success('修改成功',U('Comment/index'));
			}else{
				$this->error('修改失败');
			}
		}
	}	
	

	//分页
	 public function index1(){
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>[ 您现在访问的是Home模块的Index控制器 ]</div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
		//echo "这是tp框架后台用户模块";
		//获取搜索条件
		$where = array();
		if(!empty($_GET['name'])){
			$where['name']=array('like',"%{$_GET['name']}%");
		}
		if(!empty($_GET['sex'])){
			$where['sex']=$_GET['sex'];
		}
		//获取用户的信息
		$mod = new \Think\Model('ad');
		// var_dump($mod);
		//获取数据总条数
		$tot = $mod->where($where)->Count();
		//实例化分页类
		$page = new \Think\Page($tot,3);
		//设置分页样式
		$page->setConfig('prev','上一页');
		$page->setConfig('next','下一页');
		//firstRow 起始总条数 listRows  煤业显示的条数
		$list = $mod->where($where)->limit($page->firstRow,$page->listRows)->select();
		// var_dump($list);
		//加载模板  分配变量
		$this->assign('list',$list);
		$this->assign('page',$page->show());
		$this->display('Ad/index');
	}
}