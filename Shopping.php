<?php
session_start();
include("conn.php");

if($_SESSION[username]=="")
 {
  echo "<script>alert('���ȵ�¼����!');history.back();</script>";
  exit;
 }
  $id=strval($_GET[id]);
$sql=mysql_query("select * from goods where id='".$id."'",$conn);
$info=mysql_fetch_array($sql);
if($info[shuliang]<=0)
 {

   echo "<script>alert('����Ʒ�Ѿ�����!');history.back();</script>";
   exit;

 }

  $array=explode("@",$_SESSION[producelist]);
  for($i=0;$i<count($array)-1;$i++)
    {
	 if($array[$i]==$id)
	  {
	     echo "<script>alert('����Ʒ�Ѿ������Ĺ��ﳵ��!');history.back();</script>";
		 exit;
	  }
	}
  $_SESSION[producelist]=$_SESSION[producelist].$id."@";
  $_SESSION[quatity]=$_SESSION[quatity]."1@";
echo "<script>location.href='mychart.php';</script>";
  //header("location:mychart.php");
?>