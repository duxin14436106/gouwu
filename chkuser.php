<?php
session_start();
include("conn.php");
$username=$_POST[username];
$userpwd=md5($_POST[userpwd]);
$yz=$_POST[yz];
$num=$_POST[num];
if(strval($yz)!=strval($num)){
  echo "<script>alert('验证码输入错误!');history.go(-1);</script>";
  exit;
 }
$sql="select * from `user` where name='$username' and pwd='$userpwd'";
$res=mysql_query($sql);
   $info=mysql_fetch_array($res);
if($info==false){
          echo "<script language='javascript'>alert('帐号或者密码错误！');history.back();</script>";
          exit;
       }
	   else
		   {
		   $_SESSION[username]=$username;
 echo "<script language='javascript'>alert('登录成功！');location.href='index.php';</script>";
	   }
?>