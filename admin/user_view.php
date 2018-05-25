<?php include("check_login.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>用户信息管理</title>
<link rel="stylesheet" type="text/css" href="adminCss/admincp.css">
<link rel="stylesheet" type="text/css" href="adminCss/shopmanage.css">
</head>
<?php
include("../conn.php");
$id=$_GET[id];
$sql=mysql_query("select * from user where id=".$id."",$conn);
$info=mysql_fetch_array($sql);
?>
<body>
<table width="650" border="1" align="center" cellpadding="0" cellspacing="0">

    <p style="margin: 0 auto;text-align: left;width: 650px;font-size: 18px"><a href="user.php"><<返回</a></p>
 <form name="form1" method="post" action="djyh.php">
  <tr>
    <td height="50">

    <div class="user-edit">用户信息查看</div></td>

     <table width="650" border="1" align="center" cellpadding="0" cellspacing="1">
      <!--DWLayoutTable-->
      <tr>
        <td width="150" height="20"><div class="user-edit-menu">用户昵称：</div></td>
        <td width="180"><div align="left">&nbsp;&nbsp;<?php echo $info[name];?></div></td>
        <td width="150"><div class="user-edit-menu">用户状态：</div></td>
        <td width="266"><div align="left">&nbsp;&nbsp;<?php
   if($info[dongjie]==0)
    {
      echo "正常";
    }
    else
    {
     echo "锁定";
    }
    ?></div></td>
      </tr>
      <tr>
        <td height="20" ><div class="user-edit-menu">真实姓名：</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left">&nbsp;&nbsp;<?php echo $info[truename];?></div></td>
      </tr>
      <tr>
        <td height="20" ><div class="user-edit-menu">身份证号：</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left">&nbsp;&nbsp;<?php echo $info[sfzh];?></div></td>
      </tr>
    <tr>
        <td height="20" ><div class="user-edit-menu">E-mail：</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left">&nbsp;&nbsp;<?php echo $info[email];?></div></td>
      </tr>
    <tr>
        <td height="20" ><div class="user-edit-menu">联系电话：</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left">&nbsp;&nbsp;<?php echo $info[tel];?></div></td>
      </tr>
    <tr>
        <td height="20" ><div class="user-edit-menu">QQ号码：</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left">&nbsp;&nbsp;<?php echo $info[qq];?></div></td>
      </tr>
    <tr>
        <td height="20" ><div class="user-edit-menu">注册IP：</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left">&nbsp;&nbsp;<?php echo $info[ip];?></div></td>
      </tr>
    <tr>
        <td height="20"><div class="user-edit-menu">注册时间：</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left">&nbsp;&nbsp;<?php echo $info[regtime];?></div></td>
      </tr>
    </table>
      </td>
  </tr>

<!--  <tr>-->
<!--    <td height="20"><div class="user-edit-menu"><a href="dongjieuser.php?id=--><?php //echo $id;?><!--">-->
<!--  --><?php
//   $sql=mysql_query("select * from user where id=".$id."",$conn);
//   $info=mysql_fetch_array($sql);
//   if($info[dongjie]==0)
//    {
//      echo "正常";
//    }
//    else
//    {
//      echo "解除锁定";
//    }
//  ?><!--</a></div></td>-->
<!--  </tr>-->
  </form>
</table>
</body>
</html>
