<?php 
session_start();
$_SESSION=[];
session_unset();
session_destroy();
setcookie('id','', time()-3611);
setcookie('key','',time() -3611);

header("Location: login.php");
exit();


 ?>