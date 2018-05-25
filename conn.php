<?php
error_reporting(E_ALL ^ E_NOTICE);

     $conn=mysql_connect("localhost","root","123456") or die("数据库服务器连接错误".mysql_error());
     mysql_select_db("shop",$conn) or die("数据库访问错误".mysql_error());
     mysql_query("set names gbk");
@extract($_POST);
@extract($_GET);
?>
