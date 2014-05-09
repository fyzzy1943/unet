<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller
{
	public function index()
	{
		$user = M('user');
		$data = $user->select();
		dump($data);
		$this->display();
		echo __ROOT__;
		echo __ACTION__;
	}
	
	public function login(){
		$data[]='success';
		$data[]='failed';
		$this->ajaxReturn($data);
		
	}
}