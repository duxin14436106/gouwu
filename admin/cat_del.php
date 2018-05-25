<?php
include("check_login.php");
include("../conn.php");
 mysql_query("delete from type where id=$id",$conn);
 header("location:cat.php");
?>