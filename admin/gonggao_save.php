<?php
 include("check_login.php");
 include("../conn.php");
 $title=$_POST[title];
 $content=$_POST[content];
 $time=date("Y-m-j");
 mysql_query("insert into gonggao (title,content,time) values ('$title','$content','$time')",$conn);
 echo "<script>alert('公告添加成功!');location.href='gonggao.php';</script>";
?>