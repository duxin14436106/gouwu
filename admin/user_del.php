<?php
include("check_login.php");
include("../conn.php");
while(list($name,$value)=each($_POST))
  {
    mysql_query("delete from user where id=".$value."",$conn);
	mysql_query("delete from pingjia where userid=".$value."");
	mysql_query("delete from liuyan where userid=".$value."",$conn);
  }
header("location:user.php");
?>