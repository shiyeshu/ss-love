<?php
    

if (isset($_COOKIE['username'])) {
        

echo "<script>window.location.href='admin/index.php';</script>";
}
?>


<!DOCTYPE html>

<html lang="zn"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/font-awesome.css">
	
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
	
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>后台登录</title>
</head>
<body>

    <div>
        <div class="be-content pren">

            <div class="ioc_text">
                
                <span>请登录您的用户</span>
            </div>

            <div>
                <form action="ok.php" method="post">
                    <div class="br-content">

                         <div class="input-group mb-4 bootint">
                             <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="fa fa-user"></i></span>
                             </div>
                             <input type="text" name="name" class="form-control" placeholder="请输入账号">
                         </div>

                         <div class="input-group mb-4 bootint">
                             <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="fa fa-unlock-alt"></i></span>
                             </div>
                             <input type="password" name="password" class="form-control" placeholder="请输入密码">
                         </div>

                        <div class="br-text">
                            <p>
                                <span>忘记密码?</span>
                                <a href="adduser.php">注册账号</a>
                            </p>
                        </div>
                        <div style="padding-top: 10px">
                            <input type="submit" class="btn" value="登录">
                        </div>
                        <div class="be-con">
                           
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
	

</body></html>