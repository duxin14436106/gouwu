<?php include("check_login.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�û���Ϣ����</title>
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

    <p style="margin: 0 auto;text-align: left;width: 650px;font-size: 18px"><a href="user.php"><<����</a></p>
 <form name="form1" method="post" action="djyh.php">
  <tr>
    <td height="50">

    <div class="user-edit">�û���Ϣ�鿴</div></td>

     <table width="650" border="1" align="center" cellpadding="0" cellspacing="1">
      <!--DWLayoutTable-->
      <tr>
        <td width="150" height="20"><div class="user-edit-menu">�û��ǳƣ�</div></td>
        <td width="180"><div align="left">&nbsp;&nbsp;<?php echo $info[name];?></div></td>
        <td width="150"><div class="user-edit-menu">�û�״̬��</div></td>
        <td width="266"><div align="left">&nbsp;&nbsp;<?php
   if($info[dongjie]==0)
    {
      echo "����";
    }
    else
    {
     echo "����";
    }
    ?></div></td>
      </tr>
      <tr>
        <td height="20" ><div class="user-edit-menu">��ʵ������</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left">&nbsp;&nbsp;<?php echo $info[truename];?></div></td>
      </tr>
      <tr>
        <td height="20" ><div class="user-edit-menu">���֤�ţ�</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left">&nbsp;&nbsp;<?php echo $info[sfzh];?></div></td>
      </tr>
    <tr>
        <td height="20" ><div class="user-edit-menu">E-mail��</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left">&nbsp;&nbsp;<?php echo $info[email];?></div></td>
      </tr>
    <tr>
        <td height="20" ><div class="user-edit-menu">��ϵ�绰��</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left">&nbsp;&nbsp;<?php echo $info[tel];?></div></td>
      </tr>
    <tr>
        <td height="20" ><div class="user-edit-menu">QQ���룺</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left">&nbsp;&nbsp;<?php echo $info[qq];?></div></td>
      </tr>
    <tr>
        <td height="20" ><div class="user-edit-menu">ע��IP��</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left">&nbsp;&nbsp;<?php echo $info[ip];?></div></td>
      </tr>
    <tr>
        <td height="20"><div class="user-edit-menu">ע��ʱ�䣺</div></td>
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
//      echo "����";
//    }
//    else
//    {
//      echo "�������";
//    }
//  ?><!--</a></div></td>-->
<!--  </tr>-->
  </form>
</table>
</body>
</html>
