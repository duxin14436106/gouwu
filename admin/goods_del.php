<?php
 include("check_login.php");
 include("../conn.php");
	  //ɾ����Ʒ
      mysql_query("delete from goods where id='".$id."'",$conn);
	  //ɾ������
	  mysql_query("delete from pingjia where spid='".$id."'",$conn);

 header("location:goods.php");
?>