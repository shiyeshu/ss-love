
<?php
		if (!isset($_COOKIE['username'])) {
		
header('Refresh:0,Url=../login.php');
exit();
}
$name=$_COOKIE['username'];	

?>
<!DOCTYPE html>
<html>
<head><link href="https://cdn.bootcss.com/bootstrap/4.1.1/css/bootstrap.css" rel="stylesheet">
	
	<link href="../css/layui.css" rel="stylesheet">
	<meta charset="UTF-8" />
	<title></title>
</head>
<body>	




<div class="layui-row layui-col-space10">
  <div class="layui-col-md4">

  </div>
  <div class="layui-col-md4">

   <div class="layui-card" style="margin-top: 100px; background-color: #e2e2e2;">
  <div class="layui-card-header">编辑内容</div>
  <div class="layui-card-body">
 <form class="form-horizontal " action='ok.php?name=<?php echo "$name";?>' method="post">

<div class="form-group">
			<input type="text" name="text" class="form-control" id="firstname" placeholder="请输入内容"><br>
			<input type="submit" name="" value="确定" class="btn btn-primary"> <a href="index.php"><button type="button" class="btn btn-primary">返回</button></a>
			<br>

			<br></div>
		</form>
  </div>
</div>
  </div>
  <div class="layui-col-md4">

  </div>
</div>
</body>
</html>


