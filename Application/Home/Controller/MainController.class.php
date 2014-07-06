<?php
namespace Home\Controller;
use Think\Controller;

class MainController extends Controller
{
	public function index(){
		$friend=M('friend');
		$result=$friend->where("uid='%s'", array(session('uid')))->select();
		$this->assign('friend', $result);
		$this->display(T('Main/index'));
	}
	
	public function edit(){
		$info=M('user_information');
		$result=$info->where("uid='%s'", array(session('uid')))->find();
		$this->assign('info', $result);
		$this->display(T('Main/edit'));
	}
	
	public function update(){
		$name=I('姓名');
		$gender=I('性别');
		
		$info=M('user_information');
		$data['name']=$name;
		$data['gender']=$gender;
		$info->where("uid='%s'", array(session('uid')))->save($data);
		
		$this->redirect('edit');
	}
}