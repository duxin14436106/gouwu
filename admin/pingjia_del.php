<?php
include("check_login.php");
include("../conn.php");
while(list($name,$value)=each($_POST))
 {
     $id=$value;
     mysql_query("delete from pingjia where id=".$id."",$conn);

 }
header("location:pinglun.php");
?>