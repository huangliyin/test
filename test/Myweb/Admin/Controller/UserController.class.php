<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
    //用户模块操作
    Public function userindex(){
        //实例化Model类
        $mod=M('users');
    	//做查询操作
    	$where=array();
    	//获取搜索的条件内容
    	// var_dump($_GET);
    	if(!empty($_GET['username'])){
    		$where['username']=array('like',"%{$_GET['username']}%");
    	}
    	
    	//实例化分页类
    	$page=new \Think\Page($mod->where($where)->Count(),4);
    	//设置分页效果
    	$page->setConfig('prev','上一页');
    	$page->setConfig('next','下一页');

    	// limit 8，4
    	// $mod->query('');
    	// $page->firstRow分页的起始总行数 分页的偏移量 $page->listRows每页数据的大小
    	$list=$mod->where($where)->limit($page->firstRow,$page->listRows)->select();
    	// echo $mod->getLastSql();

    	// var_dump($list);
    	$this->assign('list',$list);
    	//分配分页效果输出变量
    	$this->assign('page',$page->show());
    	//加载模板
    	$this->display('User/index');
    }
    //加载用户删除模块 
    Public function userdel(){
    	$id=$_GET['id'];
		// echo $id;
		//实例化Model类
		$mod = M('users');
		if($mod->delete($id)){
			$this->success('删除成功',U('User/userindex'));
		}else{
			$this->error('删除失败');
		}
    }
    //用户模块 执行修改
    Public function useredit(){
		//获取id
		$id=$_GET['id'];
		// echo $id;
		//需要修改的数据获取到
		//实例化Model类
		$mod = M('users');
		$user=$mod->find($id);
		// var_dump($user);
		//分配数据
		$this->assign('user',$user);
		//加载模板
		$this->display('User/edit');
	}
	//执行修改
	public function update(){
		//实例化Model类
		$mod =M('users');
		//封装信息
		//var_dump($mod->create());
		$mod->create();
		//执行修改
		if($mod->save()){
			//跳转
			$this->success('修改成功',U('User/userindex'));
		}else{
			$this->error('修改失败');
		}
	}
    //用户添加
    Public function useradd(){
    	 $this->display('User/add');
    }
    //执行添加
    Public function userinsert(){
    	// var_dump($_POST);
		//实例化Model类
		$mod = M('users');
		// $mod->insert($_POST);
		//封装插入信息
		$data=$mod->create();
		$data['status']=1;
        // var_dump($data);exit;
		//执行添加
		if($mod->add($data)){
			//跳转 U 用来生成新的url地址
			$this->success('添加成功',U('User/userindex'));
		}else{
			$this->error('添加失败');
		}
    }






    //分类模块操作
    Public function cateindex(){
    	//做查询操作
    	$where=array();
    	//获取搜索的条件内容
    	// var_dump($_GET);
    	if(!empty($_GET['name'])){
    		$where['name']=array('like',"%{$_GET['name']}%");
    	}
    	//实例化Model类
    	$mod=M('cate');
    	//实例化分页类
    	$page=new \Think\Page($mod->where($where)->Count(),4);
    	//设置分页效果
    	$page->setConfig('prev','上一页');
    	$page->setConfig('next','下一页');

    	// limit 8，4
    	// $mod->query('');
    	// $page->firstRow分页的起始总行数 分页的偏移量 $page->listRows每页数据的大小
    	$list=$mod->where($where)->limit($page->firstRow,$page->listRows)->select();
    	// echo $mod->getLastSql();

    	// var_dump($list);
    	$this->assign('list',$list);
    	//分配分页效果输出变量
    	$this->assign('page',$page->show());
    	//加载模板
    	$this->display('Cate/index');
    }

    //分类模块 加载分类模板
    Public function cateadd(){
    	//实例化Model类
		$mod = M('cate');
		$cate=$mod->select();
		//分配数据
		$this->assign('cate',$cate);
    	$this->display('Cate/add');
    }
    //分类模块 执行添加
    Public function cateinsert(){
    	//实例化Model类
        $mod = M('cate');
        // $mod->insert($_POST);
        //封装插入信息
        $data=$mod->create();
        $id=$data['pid'];
        $info=$mod->query("select * from cate where id = $id");

        foreach($info as $aa){

            //添加类别是顶级分类
            if($id==0){
                 $data['path']='0';
            }else{
                //子类
                //获取父类的信息
                $data['path']=$aa['path'].','.$aa['id'];
            }
        }
        // var_dump($data);
        // exit;
        //执行添加
        if($mod->add($data)){
            
            $this->success('添加成功',U('User/cateindex'));
        }else{
            $this->error('添加失败');
        }
    }

    //分类模块 执行删除
    Public function catedel(){
    	$id=$_GET['id'];
		// echo $id;
		//实例化Model类
		$mod = M('cate');
		if($mod->delete($id)){
			$this->success('删除成功',U('User/cateindex'));
		}else{
			$this->error('删除失败');
		}
    }
    //分类模块 修改页面
    Public function cateedit(){
    	//获取id
		$id=$_GET['id'];
		// echo $id;
		//需要修改的数据获取到
		//实例化Model类
		$mod = M('cate');
		
		$cate=$mod->find($id);
		$cates=$mod->select();
		// var_dump($cate);
        // exit;
		//分配数据
		$this->assign('cate',$cate);
		$this->assign('cates',$cates);
		//加载模板
		$this->display('Cate/edit');
    }
    //分类模块 执行修改
    Public function cateupdate(){
        //实例化Model类
        $mod =M('cate');
        //封装信息
        // var_dump($mod->create());
        // exit;
        $data=$mod->create();
        $id=$data['pid'];
        $info=$mod->query("select * from cate where id = $id");

        foreach($info as $aa){

            //添加类别是顶级分类
            if($id==0){
                 $data['path']='0';
            }else{
                //子类
                //获取父类的信息
                $data['path']=$aa['path'].','.$aa['id'];
            }
        }
        // var_dump($data);
        // exit;
       
        //执行修改
        if($mod->save($data)){
            //跳转
            $this->success('修改成功',U('User/cateindex'));
        }else{
            $this->error('修改失败');
        }
    }
}