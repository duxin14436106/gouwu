<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
if($_SESSION[username]==""){
	echo "<script>alert('���ȵ�¼!');window.top.location.href='login.php';</script>";
}
?>
