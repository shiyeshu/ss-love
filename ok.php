<!DOCTYPE html>
<html>


<head>
	<meta charset="UTF-8" />
	<title></title>
</head>
<body>

</body>
</html>
<?php  
include "config/config.php";

$name = $_POST['name'];//post获得用户名表单值
    $passowrd = $_POST['password'];//post获得用户密码单值

    if ($name && $passowrd){//如果用户名和密码都不为空
             $sql = "select * from user where user = '$name' and passwd='$passowrd'";//检测数据库是否有对应的username和password的sql
             $result = mysqli_query($conn,$sql);//执行sql
             @$rows=mysqli_num_rows($result);//返回一个数值
             if($rows){//0 false 1 true

    setcookie("username","$name",time()+3600);
                   header("refresh:0;url=admin/index.php");//如果成功跳转至welcome.html页面
                   exit;
             }else{
                echo "用户名或密码错误";
                echo "
                    <script>
                            setTimeout(function(){window.location.href='login.php';},1000);
                    </script>

                ";//如果错误使用js 1秒后跳转到登录页面重试;
             }
             

    }else{//如果用户名或密码有空
                echo "表单填写不完整";
                echo "
                      <script>
                            setTimeout(function(){window.location.href='login.php';},1000);
                      </script>";

                        //如果错误使用js 1秒后跳转到登录页面重试;
    }

   




