<?php
include("check_login.php");
$n1=$_POST[n1];
$p0=md5($_POST[p0]);
$p1=trim($_POST[p1]);
include("../conn.php");

  $sql=mysql_query("select * from admin where name='".$_SESSION[username]."'",$conn);
  $info=mysql_fetch_array($sql);

    if($info[pwd]==$p0)
	 {

	  if($p1!="")
	   {
	    $p1=md5($p1);
	     mysql_query("update admin set pwd='".$p1."' where id=".$info[id]."",$conn);

	   }
	 }
	 else
	 {
	   echo "<script>alert('ԭ�����������!');history.back();</script>";
       exit;
	 }



echo "<script>alert('���ĳɹ�!');history.back();</script>";




?>