<?php
session_start();
include("conn.php");
$username=$_POST[username];
$userpwd=md5($_POST[userpwd]);
$yz=$_POST[yz];
$num=$_POST[num];
if(strval($yz)!=strval($num)){
  echo "<script>alert('��֤���������!');history.go(-1);</script>";
  exit;
 }
$sql="select * from `user` where name='$username' and pwd='$userpwd'";
$res=mysql_query($sql);
   $info=mysql_fetch_array($res);
if($info==false){
          echo "<script language='javascript'>alert('�ʺŻ����������');history.back();</script>";
          exit;
       }
	   else
		   {
		   $_SESSION[username]=$username;
 echo "<script language='javascript'>alert('��¼�ɹ���');location.href='index.php';</script>";
	   }
?>