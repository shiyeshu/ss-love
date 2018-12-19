<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.bootcss.com/bootstrap/4.1.1/css/bootstrap.css" rel="stylesheet">
			<meta charset="UTF-8" />
	<title></title>
</head>
<body>

</body>
</html>

<?php

		if (!isset($_COOKIE['username'])) {
		
header('Refresh:0,Url=../login.php');
exit();
}
	

include "../config/config.php";

$name=$_GET['name'];
$text=$_POST['text'];



mysqli_query($conn,"INSERT INTO `message` (`id`, `user`, `message`, `time`) VALUES (NULL, '$name', '$text', CURRENT_TIMESTAMP)");

mysqli_close($conn);
echo"稍后返回首页";
header('Refresh:2,Url=index.php');

?>