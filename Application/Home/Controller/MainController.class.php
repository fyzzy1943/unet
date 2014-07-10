<?php
namespace Home\Controller;
use Think\Controller;

/**
 * 中央控制器
 * @author Administrator
 *
 */
class MainController extends Controller
{
	public function index(){
		$info_relation=M('info_relation');
		//查出所有info_id
		$infoList=$info_relation->field('info_id')->where("user_id='%s'", array(session('uid')))->select();
		$infoList=array_column($infoList, 'info_id');
		var_dump($infoList);
		
		//组合查询条件，查出所有info
		$cond='';
		foreach($infoList as $value){
			$cond.="$value,";
		}
		$cond=rtrim($cond, ',');
		
		$friend_info=M('friend_info');
		$friendList=$friend_info->where("id IN ($cond)")->select();
		var_dump($friendList);
		$this->assign('friendList', $friendList);
		
		$this->display(T('Main/index'));
	}
	
	public function showAddInfo(){
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
		
		$personal_info=M('friend_info');
		$insertID=$personal_info->add($data);
		if($insertID){
			//插入到数据库成功
			//插入关系
			$info_relation=M('info_relation');
			unset($data);
			$data['user_id']=session('uid');
			$data['info_id']=$insertID;
			$insertID=$info_relation->add($data);

			$this->ajaxReturn('success');
		}
		$this->ajaxReturn('failed');
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