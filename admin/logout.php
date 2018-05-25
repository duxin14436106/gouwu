
<?php
//注销登录
session_start();
$_SESSION['admin']="";
$_SESSION['username']="";

echo "<script language='javascript'>alert('注销登录成功！');location='login.php';</script>";
?>

