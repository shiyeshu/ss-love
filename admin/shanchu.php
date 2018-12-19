<?php
		if (!isset($_COOKIE['username'])) {
		
header('Refresh:0,Url=../login.php');

exit();
}
	
include "../config/config.php";
$id=$_GET['id'];

$query=mysqli_query($conn,"DELETE FROM message WHERE id='$id'");

mysqli_close($conn);


echo"稍后返回首页";
header('Refresh:2,Url=index.php');




    
?>