<?php
 include("../conn.php");
include("check_login.php");

$zt=$_POST[yfh];


 if(($zt==""))
  {
    echo "<script>alert('请选择处理状态!');history.back();</script>";
	exit;
  }


 $sql3=mysql_query("select * from orders where id='".$_GET[id]."'",$conn);
 $info3=mysql_fetch_array($sql3);
 if(trim($info3[zt])=="未作任何处理")
 {
 $sql=mysql_query("select * from orders where id='".$_GET[id]."'",$conn);
 $info=mysql_fetch_array($sql);
 $array=explode("@",$info[spc]);
 $arraysl=explode("@",$info[slc]);

   for($i=0;$i<count($array);$i++)
    { $id=$array[$i];
     $num=$arraysl[$i];
      mysql_query("update goods set cishu=cishu+'".$num."' ,shuliang=shuliang-'".$num."' where id='".$id."'",$conn);
    }
  }
  mysql_query("update orders set zt='".$zt."'where id='".$_GET[id]."'",$conn);
 header("location:order.php");
?>