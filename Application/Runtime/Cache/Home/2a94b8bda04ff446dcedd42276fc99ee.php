<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
	<title>Welcome</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/unet/Public/css/bootstrap.css" />
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Brand</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Link</a></li>
      <li><a href="#">Link</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
          <li class="divider"></li>
          <li><a href="#">One more separated link</a></li>
        </ul>
      </li>
    </ul>
    <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Link</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
      
<div class="container">
<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-6"></div>
	<div class="col-md-1"></div>
	<div class="col-md-3">
		<form role="form" class="form-horizontal" id="form1">
		<div class="form-group">
			<label class="sr-only" for="username">username</label>
			<input type="text" class="form-control" id="username" name="username" placeholder="username" />
		</div>
		<div class="form-group">
			<label class="sr-only" for="password">password</label>
			<input type="text" class="form-control" id="password" name="password" placeholder="password" />
		</div>
		<div class="form-group">
			<div class="checkbox">
				<label>
					<input type="checkbox"> Remember me
				</label>
			</div>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-default" value="登录" />
		</div>
		</form>
	</div>
	<div class="col-md-1" style="border:solid red 1px;"></div>
</div><!-- row end -->
</div><!-- container end -->

<script src="/unet/Public/js/jquery.js"></script>
<script src="/unet/Public/js/bootstrap.js"></script>
<script>
$(document).ready(function(){
	$('#form1').on('submit', function(){
		$.post('/unet/index.php/Home/Index/login',{
			'username':$('#username').val(),
			'password':$('#password').val()
		},
		function(data, textStatus, jqXHR){
			if(data=='success'){
				window.location.href='/unet/index.php/Home/Main/index';
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