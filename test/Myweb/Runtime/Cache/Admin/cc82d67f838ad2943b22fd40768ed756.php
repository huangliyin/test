<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<title>学生管理系统</title>
		<meta charset="utf-8">
	</head>
	<center>
		<h2>学生管理系统</h2>
<a href="/ThinkPHP/test/index.php/Admin/User/add">添加学生</a>|
<a href="/ThinkPHP/test/index.php/Admin/User/index">浏览信息</a>|
<a href="/ThinkPHP/test/index.php/Admin/User/index1">分页加搜索浏览信息</a>
<hr>
		<h3>浏览信息</h3>
		<form action="/ThinkPHP/test/index.php/Admin/User/index1" method="get">
			用户名:<input type="text" name="name">
			性别:<select name="sex">
					<option value="">--请选择--</option>
					<option value="m">男</option>
					<option value="w">女</option>
				</select>
				<input type="submit" value="搜索">
		</form>
		<table width="700px" border="1px">
			<tr align="center">
				<th>学号</th>
				<th>姓名</th>
				<th>年龄</th>
				<th>性别</th>
				<th>班级</th>
				<th>操作</th>
			</tr>
			<?php if(is_array($list)): foreach($list as $key=>$row): ?><tr>
					<td><?php echo ($row['id']); ?></td>
					<td><?php echo ($row['name']); ?></td>
					<td><?php echo ($row['age']); ?></td>
					<td><?php echo ($row['sex']); ?></td>
					<td><?php echo ($row['classid']); ?></td>
					<td><a href="/ThinkPHP/test/index.php/Admin/User/delete?id=<?php echo ($row['id']); ?>">删除</a>|<a href="/ThinkPHP/test/index.php/Admin/User/edit?id=<?php echo ($row['id']); ?>">修改</td>
				</tr><?php endforeach; endif; ?>
			<!-- <img src="/ThinkPHP/test/Public/1.jpg"> -->
		</table>
		<?php echo ($page); ?>
	</center>
</html>