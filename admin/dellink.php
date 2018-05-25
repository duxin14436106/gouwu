<?php
include("check_login.php");
include("../conn.php");
while(list($name,$value)=each($_POST)){
 mysql_query("delete from links where id='".$value."'",$conn);
 }
 header("location:link.php");
?>