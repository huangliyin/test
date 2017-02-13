<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login(){
       // 加载登陆界面

    	$this->display('Login/login');
	}
	//加载验证码
	// public function verify(){
	// 	//实例化验证码类
	// 	$verify = new \Think\Verify();
	// 	//设置信息
	// 	$verify->fontsize = 20; //字体大小
	// 	$verify->length = 4;  //位数
	// 	$verify->useNoise = true;  //是否使用干扰素
	// 	// $verify->useZh=false;  ////开启中文验证码     一般不建议用
	// 	// $verify->zhSet="天气好今天";
	// 	$verify->entry(); //生成验证码
	// }
	//检测
	public function check(){
		//获取输入的验证码
		// $fcode = $_POST['fcode'];
		// echo $fcode;
		//实例化验证码类
		// $verify = new \Think\Verify();
		// if($verify->check($fcode,'')){
			////检测用户名
    		//获取输入的用户名和密码
    		$username = $_POST['username'];
    		$password = $_POST['password'];
    		// echo $username.".".$password;
    		// exit;
    		//实例化Model类
    		$mod = M('users');
    		$row = $mod->where("username = '{$username}' and password = '{$password}'")->select();
    		// var_dump($row);exit;
    		if($row){
    			//设置session信息  存session里
    			$_SESSION['islogin'] = 2;
    			$_SESSION['username'] = $username;
    			$this->success('成功登陆',U('Index/index'));
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





