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
		<h1>friend</h1>
		<?php if(is_array($friend)): foreach($friend as $key=>$vo): echo ($vo["uid"]); ?> | <?php echo ($vo["fid"]); ?> <br /><?php endforeach; endif; ?>
		<a href="/unet/index.php/Home/Main/newInfo" class="btn btn-primary">添加</a>
	</div>
	<div class="col-md-1" style="border:solid red 1px;"></div>
</div><!-- row end -->
</div><!-- container end -->

<script src="/unet/Public/js/jquery.min.js"></script>
<script src="/unet/Public/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){

});
</script>
</body>
</html>