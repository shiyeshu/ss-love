<?php 





$user=$_POST['user'];
$passwd=$_POST['passwd'];

include "config/config.php";

    if ($user && $passwd){//如果用户名和密码都不为空
             $sql = "select user from user where user = '$user'";//检测数据库是否有对应的username的sql
             $result = mysqli_query($conn,$sql);//执行sql
             @$rows=mysqli_num_rows($result);//返回一个数值
             if($rows){//0 false 1 true

    echo "<script>alert('此用户名已存在');</script>";
    echo "<script>window.location.href='index.php';</script>";
             }else{
                mysqli_query($conn,"
INSERT INTO user (user, passwd) VALUES ('$user', '$passwd')");

mysqli_close($conn);
             }
             

    }else{//如果用户名或密码有空
              
                echo "<script>alert('表单填写不完整');</script>";
                echo "<script>window.location.href='index.php';</script>";
    }


echo "注册成功！正在返回主页";
sleep(3);
echo "<script>window.location.href='index.php';</script>";
?>