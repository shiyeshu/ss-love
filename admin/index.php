<?php
/*
	作者：sshuo
	时间：2018-12-19
	blog：www.sshuo.cc
 */		

if (!isset($_COOKIE['username'])) {
		

echo "<script>window.location.href='../login.php';</script>";
exit();
}
$name=$_COOKIE['username'];
//echo "<script>alert('$name')</script>";

?>
<!DOCTYPE html>
<html>
<head><script src="../js/jquery.js"></script>
		<link href="../css/bootstrap.css" rel="stylesheet">
		<link href="../css/layui.css" rel="stylesheet">
		

			<meta charset="UTF-8" />
	<title></title>
</head>
<body >
	
<div class="layui-col-md3" style="float: left;height: 100%;"> </div>

	<div class="container  layui-col-md6 " style="top: 100px">

<ul class="nav nav-pills nav-stacked" style="float: left;width: 20%;">
  <li class="class="bg-primary text-white""><a href="../index.php">返回首页</a></li>
  <li><a href="index.php" class="bg-success text-white">我的列表</a></li>
  <li><a href="add.php" class="bg-info text-white">添加信息</a></li>
  <li><a href="tuichu.php" class="bg-danger text-white">退出</a></li>

</ul>

<table class="table table-bordered" style="float: right;width: 75%;margin-left: : 10px;">
			<tr><thead><th>id</th>
<th>用户</th>
<th>内容</th>


<th>操作</th></thead>

			</tr>
		

			<?php 
include "../config/a.php";
@$db = mysql_connect($servername, $username, $password ) or

    die("Could not connect to database.");//连接数据库

mysql_query("set names 'utf8'");//输出中文

mysql_select_db($dbname );    //选择数据库
include "page.php";

$sql = "SELECT * FROM message  WHERE `user`='$name' order by id"; //一个简单的查询

$page = new Page('',$sql,$_GET['page'],5,"?page=");

$rows = $page->list;

foreach($rows as $row)

{

 echo '<tr>';
		echo "<td>{$row["id"]}</td>";
echo "<td>{$row["user"]}</td>";
echo "<td>{$row["message"]}</td>";


		echo "<td><div class='btn-group'>
<a href='shanchu.php?id={$row["id"]}'><button type='button' class='layui-btn layui-btn-danger'>删除</button></a>
		</td>";
		echo '</tr>';

}



























/*


	
include "../config/config.php";
			
$sql = "SELECT * FROM message  WHERE `user`='$name' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo '<tr>';
		echo "<td>{$row["id"]}</td>";
echo "<td>{$row["user"]}</td>";
echo "<td>{$row["message"]}</td>";


		echo "<td><div class='btn-group'>
<a href='shanchu.php?id={$row["id"]}'><button type='button' class='layui-btn layui-btn-danger'>删除</button></a>
		</td>";
		echo '</tr>';
				
    }
}else {
    echo "数据库中无结果";
}
      

*/
				
			?>

		</table>


	<div style="float:right;width: 75%;"> 
		<ul class="pagination">
			<li>
<?php

echo $page->getPageList(); //输出分页列表

?></li>
</ul>
</div>
	</div>
	




<style>
html,body{height:100%}

</style>

</body>
</html>