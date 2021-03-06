<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
	<title>Welcome</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/unet/Public/css/bootstrap.min.css" />
</head>
<body>
      
<div class="container">
<div class="row">
	<div class="col-md-1" style="border:solid red 1px;"></div>
	<div class="col-md-10">
		<div class="page-header">
			<h1>add</h1>
		</div>
		
		<form class="form-horizontal" role="form" id="form1" style="border:solid red 1px;">
		<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="name" class="col-sm-3 control-label">姓名 </label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="name" />
				</div>
			</div>
			<div class="form-group">
				<label for="note_name" class="col-sm-3 control-label">备注 </label>
				<div class="col-sm-7">
				<div class="input-group">
					<input type="text" class="form-control" id="note_name" />
					<div class="btn input-group-addon" data-toggle="collapse" data-target="#otherName"><span class="caret"></span></div>
				</div>
				</div>
			</div>
			
			<div id="otherName" class="collapse">
			<div class="form-group">
				<label for="used_name" class="col-sm-3 control-label">曾用名 </label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="used_name" />
				</div>
			</div>
			<div class="form-group">
				<label for="alias" class="col-sm-3 control-label">别名</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="alias" />
				</div>
			</div>
			<div class="form-group">
				<label for="pen_name" class="col-sm-3 control-label">笔名 </label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="pen_name" />
				</div>
			</div>
			</div><!-- id="otherName" -->
			
			<div class="form-group">
				<label for="sex" class="col-sm-3 control-label">性别 </label>
				<div class="col-sm-7">
					<label class="radio-inline">
						<input type="radio" name="sex" value="0" /> 男
					</label>
					<label class="radio-inline">
						<input type="radio" name="sex" value="1" /> 女
					</label>
				</div>
			</div>
			<div class="form-group">
				<label for="birthday" class="col-sm-3 control-label">生日 </label>
				<div class="col-sm-7">
				<div class="input-group">
					<input type="text" class="form-control" id="birthday" />
					<div class="btn input-group-addon" data-toggle="collapse" data-target="#dateSelector"><span class="caret"></span></div>
				</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-7">
				<div id="dateSelector" class="collapse">
					<select id="idYear" name="idYear" data="1943"></select>年 
					<select id="idMonth" name="idMonth" data="1"></select>月 
					<select id="idDay" name="idDay" data="1"></select>日
					<button class="btn btn-default" id="dateOK">确定</button>
				</div>
				</div>
			</div>
			<div class="form-group">
				<label for="nationality" class="col-sm-3 control-label">民族 </label>
				<div class="col-sm-7">
				<div class="input-group">
					<input type="text" class="form-control" id="nationality" />
					<div class="btn input-group-addon" data-toggle="collapse" data-target="#nationalitySelector"><span class="caret"></span></div>
				</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-7">
				<div id="nationalitySelector" class="collapse">
					<select id="nationalityList" class="form-control" size="5">
						<option value="汉族">汉族</option>
						<option value="满族">满族</option>
						<option value="蒙古族">蒙古族</option>
						<option value="回族">回族</option>
						<option value="藏族">藏族</option>
						<option value="维吾尔族">维吾尔族</option>
						<option value="哈萨克族">哈萨克族</option>
						<option value="苗族">苗族</option>
						<option value="彝族">彝族</option>
						<option value="壮族">壮族</option>
						<option value="布依族">布依族</option>
						<option value="朝鲜族">朝鲜族</option>
						<option value="怒族">怒族</option>
					</select>
				</div>
				</div>
			</div>
			<div class="form-group">
				<label for="email" class="col-sm-3 control-label">电子邮箱 </label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="email" />
				</div>
			</div>
			<div class="form-group">
				<label for="id_card" class="col-sm-3 control-label">身份证号 </label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="id_card" />
				</div>
			</div>
		</div><!-- class="col-md-6" -->
		
		<div class="col-md-6">
			
			<div class="form-group">
				<label for="citizenship" class="col-sm-3 control-label">国籍 </label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="citizenship" />
				</div>
			</div>
			<div class="form-group">
				<label for="blood_type" class="col-sm-3 control-label">血型 </label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="blood_type" />
				</div>
			</div>
			<div class="form-group">
				<label for="marital_status" class="col-sm-3 control-label">婚姻状况 </label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="marital_status" />
				</div>
			</div>
			<div class="form-group">
				<label for="health_status" class="col-sm-3 control-label">健康状况 </label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="health_status" />
				</div>
			</div>
			<div class="form-group">
				<label for="political_status" class="col-sm-3 control-label">政治面貌 </label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="political_status" />
				</div>
			</div>
			<hr />
			<div class="form-group">
				<label for="education" class="col-sm-3 control-label">学历 </label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="education" />
				</div>
			</div>
			<div class="form-group">
				<label for="degree" class="col-sm-3 control-label">学位 </label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="degree" />
				</div>
			</div>
			<div class="form-group">
				<label for="major" class="col-sm-3 control-label">主修 </label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="major" />
				</div>
			</div>
			<div class="form-group">
				<label for="minor" class="col-sm-3 control-label">辅修 </label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="minor" />
				</div>
			</div>
			<hr />
			<div class="form-group">
				<label for="position" class="col-sm-3 control-label">现任职务 </label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="position" />
				</div>
			</div>
			<div class="form-group">
				<label for="used_position" class="col-sm-3 control-label">曾任职务 </label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="used_position" />
				</div>
			</div>
			<hr />
			<div class="form-group">
				<label for="home_phone" class="col-sm-3 control-label">住宅电话 </label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="home_phone" />
				</div>
			</div>
			<div class="form-group">
				<label for="office_phone" class="col-sm-3 control-label">办公电话 </label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="office_phone" />
				</div>
			</div>
			<div class="form-group">
				<label for="mobile_phone" class="col-sm-3 control-label">手机号码 </label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="mobile_phone" />
				</div>
			</div>
			<div class="form-group">
				<label for="used_mobile_phone" class="col-sm-3 control-label">曾用手机号码 </label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="used_mobile_phone" />
				</div>
			</div>
			<hr />
			<div class="form-group">
				<label for="birth_place" class="col-sm-3 control-label">出生地 </label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="birth_place" />
				</div>
			</div>
			<div class="form-group">
				<label for="native_place" class="col-sm-3 control-label">籍贯 </label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="native_place" />
				</div>
			</div>
			<div class="form-group">
				<label for="address" class="col-sm-3 control-label">住址 </label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="address" />
				</div>
			</div>
			<div class="form-group">
				<label for="used_address" class="col-sm-3 control-label">曾住址 </label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="used_address" />
				</div>
			</div>
			<div class="form-group">
				<label for="remark" class="col-sm-3 control-label">备注 </label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="remark" />
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-7">
					<input type="submit" class="btn btn-default" value="添加" /> 
					<a href="/unet/index.php/Home/Main/index" class="btn btn-default">返回</a>
				</div>
			</div>
		</div>
		</div>
		</form>
	</div>
	<div class="col-md-1" style="border:solid red 1px;"></div>
</div><!-- row end -->
</div><!-- container end -->

<script src="/unet/Public/js/jquery.min.js"></script>
<script src="/unet/Public/js/bootstrap.min.js"></script>
<script src="/unet/Public/js/calender.js"></script>
<script>
$(document).ready(function(){
	var myDate = new Date();
	$("#dateSelector").DateSelector({
		ctlYearId: 'idYear',
		ctlMonthId: 'idMonth',
		ctlDayId: 'idDay',
		defYear: myDate.getFullYear(),
		defMonth: (myDate.getMonth()+1),
		defDay: myDate.getDate(),
		minYear: 1800,
		maxYear: (myDate.getFullYear()+1)
	});
	
	/* 生日点击确定 */
	$('#dateOK').click(function(){
		var $year=$('#idYear').children('option:selected').val();
		var $month=$('#idMonth').children('option:selected').val();
		var $day=$('#idDay').children('option:selected').val();
		var date=$year+'年'+$month+'月'+$day+'日';
		$('#birthday').val(date);
		$('#dateSelector').collapse('hide');
	});
	
	/* 选择民族 */
	$('#nationalityList').change(function(){
		$('#nationality').val($('#nationalityList').children('option:selected').val());
		$('#nationalitySelector').collapse('hide');
	});
	
	$('#form1').on('submit', function(){
		$.post('/unet/index.php/Home/Main/addInfo',{
			'name':$('#name').val(),
			'used_name':$('#used_name').val(),
			'alias':$('#alias').val(),
			'pen_name':$('#pen_name').val(),
			'sex':$('#sex').val(),
			'nationality':$('#nationality').val(),
			'citizenship':$('#citizenship').val(),
			'marital_status':$('#marital_status').val(),
			'blood_type':$('#blood_type').val(),
			'health_status':$('#health_status').val(),
			'birthday':$('#birthday').val(),
			'birth_place':$('#birth_place').val(),
			'native_place':$('#native_place').val(),
			'political_status':$('#political_status').val(),
			'education':$('#education').val(),
			'degree':$('#degree').val(),
			'major':$('#major').val(),
			'minor':$('#minor').val(),
			'position':$('#position').val(),
			'used_position':$('#used_position').val(),
			'home_phone':$('#home_phone').val(),
			'office_phone':$('#office_phone').val(),
			'mobile_phone':$('#mobile_phone').val(),
			'used_mobile_phone':$('#used_mobile_phone').val(),
			'email':$('#email').val(),
			'id_card':$('#id_card').val(),
			'address':$('#address').val(),
			'used_address':$('#used_address').val(),
			'remark':$('#remark').val()
		},
		function(data, textStatus, jqXHR){
			alert(data);
			var s='';
			for(i in data ){
				s+=i+':'+data[i]+'\n';
			}
			alert(s);
			if(data=='success'){
				alert('ok');
			}else{
				alert('failed');
			}
		},'json');
		return false;
	});
});
</script>
</body>
</html>