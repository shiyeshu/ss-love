<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body >
	<div class="bg" style="background-image:url(1.jpg);"></div>
	<a href="admin"><button type="button" class="btn btn-warning" style="opacity: 0.5">登陆</button></a>
<div class="container">
   <div class="row">
      <div class="col-lg-12" style="top: 100px;height: 80vh"><center>


</center>


			<?php 
foreach($_COOKIE as $key=>$value){
 setCookie($key,"",time()-60);
} 

include "config/config.php";
			
$sql = "SELECT  * FROM message order by  id desc limit 18";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
$shu=rand(1,3);
		echo "
		<div class='col-lg-$shu' style='background:rgba(255,255,255,0.4);: red;float: left;margin: 5px;word-break: break-all;'>
<text><td>{$row["message"]}</text>
<h3 style='float:right'>by:{$row["user"]}</h3>
</div>";
		echo '</tr>';
				
    }
}else {
    echo "数据库中无结果";
}
      


				
			?>
      </div>

            
   </div>

</div>
</body>
<style>
		.bg {
			background-size: cover;
			background-attachment: fixed;
			background-position: center;
			position: fixed;
			top: 0;
			left: 0;
			z-index: -1;
			height: 100vh;
			width: 100vw;
		}

</style>
</html>