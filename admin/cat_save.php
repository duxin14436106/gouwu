<?php
include("check_login.php");
$leibie=$_POST[leibie];
include("../conn.php");
$sql=mysql_query("select * from type where typename='".$leibie."'",$conn);
$info=mysql_fetch_array($sql);
if($info!=false){
 echo"<script>alert('������Ѿ�����!');window.location.href='cat_add.php';</script>";
exit;
}
mysql_query("insert into type(typename) values ('$leibie')",$conn);
echo"<script>alert('�������ӳɹ�!');window.location.href='cat.php';</script>";
?>