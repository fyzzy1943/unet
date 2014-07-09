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
	
	public function newInfo(){
		$this->display(T('Info/add'));
	}
	
	public function addInfo(){
		$data['name']=I('name');
		$data['used_name']=I('used_name');
		$data['alias']=I('alias');
		$data['pen_name']=I('pen_name');
		$data['sex']=I('sex');
		$data['nationality']=I('nationality');
		$data['citizenship']=I('citizenship');
		$data['marital_status']=I('marital_status');
		$data['blood_type']=I('blood_type');
		$data['health_status']=I('health_status');
		$data['birthday']=I('birthday');
		$data['birth_place']=I('birth_place');
		$data['native_place']=I('native_place');
		$data['political_status']=I('political_status');
		$data['education']=I('education');
		$data['degree']=I('degree');
		$data['major']=I('major');
		$data['minor']=I('minor');
		$data['position']=I('position');
		$data['used_position']=I('used_position');
		$data['home_phone']=I('home_phone');
		$data['office_phone']=I('office_phone');
		$data['mobile_phone']=I('mobile_phone');
		$data['used_mobile_phone']=I('used_mobile_phone');
		$data['email']=I('email');
		$data['id_card']=I('id_card');
		$data['address']=I('address');
		$data['used_address']=I('used_address');
		$data['remark']=I('remark');
		
		$personal_info=M('personal_info');
		$personal_info->create($data);
		
		$this->ajaxReturn('success');
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