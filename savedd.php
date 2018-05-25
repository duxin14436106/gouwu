<?php
include("conn.php");
session_start();
$sql=mysql_query("select * from user where name='".$_SESSION[username]."'",$conn);
$info=mysql_fetch_array($sql);
$ordershao=date("YmjHis").$info[id];
$spc=$_SESSION[producelist];
$slc= $_SESSION[quatity];
$shouhuoren=$_POST[name2];
$sex=$_POST[sex];
$dizhi=$_POST[dz];
$youbian=$_POST[yb];
$tel=$_POST[tel];
$email=$_POST[email];
$shff=$_POST[shff];
$zfff=$_POST[zfff];
if(trim($_POST[ly])=="")
 {
   $liuyan="";
 }
 else
 {
   $liuyan=$_POST[ly];
 }
 $xiadanren=$_SESSION[username];
 $time=date("Y-m-j H:i:s");
 $zt="未作任何处理";
 $total=$_SESSION[total];
 $sql="insert into orders(dingdanhao ,spc,slc,shouhuoren,sex,dizhi,youbian,tel,email,shff,zfff,liuyan,time,xiadanren,zt,total) values ('$ordershao','$spc','$slc','$shouhuoren','$sex','$dizhi','$youbian','$tel','$email','$shff','$zfff','$liuyan','$time','$xiadanren','$zt','$total')";
 mysql_query($sql,$conn);

 header("location:showdd.php?dd=$ordershao");
?>
