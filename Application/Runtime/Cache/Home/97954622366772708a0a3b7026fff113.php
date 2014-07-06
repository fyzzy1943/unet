<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
	<title>Welcome</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/unet/Public/css/bootstrap.css" />
</head>
<body>
      
<div class="container">
<div class="row">
	<div class="col-md-1" style="border:solid red 1px;"></div>
	<div class="col-md-10">
		<?php echo ($info["name"]); ?>
		<h1>edit</h1>
		<form role="form" class="form-horizontal" id="form1" action="/unet/index.php/Home/Main/update" method="post">
		<div class="form-group">
			<label class="sr-only" for=姓名>姓名</label>
			<input type="text" class="form-control" id="姓名" name="姓名" placeholder="姓名" value="<?php echo ($info["name"]); ?>" />
		</div>
		<!-- <div class="form-group">
			<label class="sr-only" for="性别">性别</label>
			<input type="text" class="form-control" id="性别" placeholder="性别" />
		</div> -->
		<div class="form-group">
			<?php switch($info["gender"]): case "1": ?><input type="radio" name="性别" value="1" checked="checked" />男 
					<input type="radio" name="性别" value="2" />女<?php break;?>
				<?php case "2": ?><input type="radio" name="性别" value="1" />男 
					<input type="radio" name="性别" value="2" checked="checked" />女<?php break;?>
				<?php default: ?>
					<input type="radio" name="性别" value="1" />男 
					<input type="radio" name="性别" value="2" />女<?php endswitch;?>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-default" value="修改" />
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

});
</script>
</body>
</html>