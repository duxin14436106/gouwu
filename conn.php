<?php
error_reporting(E_ALL ^ E_NOTICE);

     $conn=mysql_connect("localhost","root","123456") or die("���ݿ���������Ӵ���".mysql_error());
     mysql_select_db("shop",$conn) or die("���ݿ���ʴ���".mysql_error());
     mysql_query("set names gbk");
@extract($_POST);
@extract($_GET);
?>
