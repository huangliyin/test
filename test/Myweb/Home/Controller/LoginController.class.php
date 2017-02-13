<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login(){
       // 加载登陆界面

    	$this->display('Login/login');
	}
	//检测
	public function check(){
    		//获取输入的用户邮编和密码
    		$email = $_POST['email'];
    		$password = $_POST['password'];
    		// echo $username.".".$password;
    		// exit;
    		//实例化Model类
    		$mod = M('users');
    		$row = $mod->where("email = '{$email}' and password = '{$password}'")->select();
    		// var_dump($row);exit;
    		// var_dump($row[0]['id']);exit;
    		$id=$row[0]['id'];
    		$email=$row[0]['email'];
    		// var_dump($id);var_dump($email);exit;
    		if($row){
    			//设置session信息  存session里
    			$_SESSION['id'] = $id;
    			$_SESSION['email'] = $email;
    			$this->success('成功登陆',U('Web/index'));
    		}else{
    			$this->error('用户名或者密码有误',U('Login/login'));
    		}
		}
	
	//退出
	public function logout(){
		// setcookie(session_name(),'',time()-1,'/');  //方式一
		// $_SESSION = array();   //方法二
		session_destroy();    //方法三
		$this->success('退出成功',U('Login/login'));
	}
}





