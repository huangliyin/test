<?php
namespace Admin\Controller;
use Think\Controller;
class AllowController extends Controller {
    public function _initialize(){
        //检测session
		if(!$_SESSION['islogin']){
			$this->error('请先登陆后台',U('Login/login'));
		}
	}

	
}





