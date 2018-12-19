<?php







foreach($_COOKIE as $key=>$value){
 setCookie($key,"",time()-60);
}

header('location:../index.php');


?>
