<?php
session_start();
  include("../conn.php");
     $sql=mysql_query("select * from admin where name='".$name."'",$conn);
     $info=mysql_fetch_array($sql);
     if($info==false){
          echo "<script language='javascript'>alert('�����ڴ˹���Ա��');history.back();</script>";
          exit;
       }
      else{
          $_SESSION[username]=$name;
          if($info[pwd]==md5($pwd)){
               header("location:index.php");
           }
          else{
             echo "<script language='javascript'>alert('�����������');history.back();</script>";
             exit;
           }
      }



?>