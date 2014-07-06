<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller
{
	public function index(){
		$this->display(T('Index/index'));
		echo __MODULE__ . '<br />';
		echo __ACTION__;
// 		$this->redirect('Main/index');
	}
	
	public function login(){
		$username=I('username');
		$password=I('password');
		
		//登录验证
		$data='failed';
		$user=M('user');
		$result=$user->where('username=\'%s\' AND password=\'%s\'', array($username, $password))->find();
		if($result!=false){
			if($result!=null){
				//登录成功
				$data='success';
				session('username', $username);
				session('uid', $result['id']);
// 				$this->redirect('Main/index');
			}else{
				
			}
		}else{
			
		}
		$this->ajaxReturn($data);
	}
}