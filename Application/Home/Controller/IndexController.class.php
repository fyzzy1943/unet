<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller
{
	public function index(){
		$user = M('user');
		$data = $user->select();
		dump($data);
		$this->display();
		echo __ROOT__;
		echo __ACTION__;
	}
	
	public function login(){
		$username=I('post.username');
		$password=I('post.password');
		$data[]=$username;
		$data[]=$password;
		$this->ajaxReturn($data);
	}
}