<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<title>文件上传</title>
		<meta charset="utf-8">
	</head>
	<body>
		<form action="/ThinkPHP/test/index.php/Admin/Index/doupload" method="post" enctype="multipart/form-data">
			<input type="file" name="pic">
			<input type="submit" value="上传">
		</form>
	</body>
</html>