<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <title>商品管理</title>
    </head>
    <body>
		<center><h2>商品管理系统</h2>
<a href="/ThinkPHP/test/index.php/Admin/Shop/add">添加商品</a>|
<a href="/ThinkPHP/test/index.php/Admin/Shop/index">浏览商品信息</a>|
<a href="/ThinkPHP/test/index.php/Admin/Shop/index1">分页加搜索浏览信息</a>
<hr></center>

		<form action="show.php" method="get">
								
				商品名称搜索：<input type="text" name="name">
				
				状态搜索：<select name="state">
					<option value="">--全部--</option>
					<option value="1">--新添加--</option>
					<option value="2">--在售--</option>
					<option value="3">--下架--</option>
					</select>
				<input type="submit" value="搜索">
			</form><br>
        <center>
            <table width="100%" border="1"> 
                <tr>
					<th>商品图片</th>
                    <th>商品分类</th>
                    <th>商品名称</th>
                    <th>生产厂家</th>
                    <th>简介</th>
                   
                    <th>单价</th>
					<th>状态</th>
                    <th>库存量</th>
                    <th>被购买数量</th>
                    <th>点击次数</th>
                    <th>添加时间</th>
					<th>操作</th>
                </tr>
				<?php if(is_array($list)): foreach($list as $key=>$row): ?><tr align='center'>
						<td><img src='./Public/Uploads/<?php echo ($row['pic']); ?>'></td>
						<td><?php echo ($row['type']); ?></td>
						<td><?php echo ($row['goods']); ?></td>
						<td><?php echo ($row['company']); ?></td>
						<td><?php echo ($row['descr']); ?></td>
						<td><?php echo ($row['price']); ?></td>
						
						<td><?php echo ($row['state']); ?></td>
						<td><?php echo ($row['store']); ?></td>
						<td><?php echo ($row['num']); ?></td>
						<td><?php echo ($row['clicknum']); ?></td>
						<td><?php echo ($row['addtime']); ?></td>
						<td><a href=''>修改</a>|<a href=''>删除</a></td>
						</tr><?php endforeach; endif; ?>
			</table>
			
		</center>
	</body>
</html>