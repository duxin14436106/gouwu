<?php include("check_login.php");

include("../conn.php");
if($action=="save")
{
  $sql="insert into links (linkname,linkurl) values ('$linkname','$linkurl')";
mysql_query($sql);
echo"<script>alert('��ӳɹ�!');window.location.href='link.php';</script>";
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>���link_add.php</title>
<link rel="stylesheet" type="text/css" href="adminCss/admincp.css">
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>
<script language="javascript">
  function chkinput(form)
   {
     if(form.title.value=="")
   {
     alert("��������������!");
     form.title.select();
     return(false);
   }
     if(form.content.value=="")
   {
     alert("����������������ַ!");
     form.content.select();
     return(false);
   }
   return(true);
   }
</script>
<body>
<table width="550" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30"><div align="center" style="font-size:25px;">���</div></td>
  </tr>
  <tr>
    <td height="175"><table width="550" height="175" border="0" align="center" cellpadding="0" cellspacing="1">
      <form name="form1" method="post" action="?action=save" onSubmit="return chkinput(this)">
    <tr>
        <td width="150" height="25" bgcolor="#FFFFFF"><div align="center">�����������ƣ�</div></td>
        <td width="300" bgcolor="#FFFFFF"><div align="left">
        <input type="text" name="linkname" size="30" class="inputcss"></div></td>
      </tr>
        <tr>
        <td width="150" height="25" bgcolor="#FFFFFF"><div align="center">����������ַ��</div></td>
        <td width="300" bgcolor="#FFFFFF"><div align="left"><input type="text" name="linkurl" size="30" class="inputcss"></div></td>
      </tr>
      <tr>
        <td height="25" colspan="2"><div align="center">
        <input type="submit" value="���" class="buttoncss">&nbsp;&nbsp;
        <input type="reset" value="��д" class="buttoncss"></div></td>
      </tr>
    </form>
    </table></td>
  </tr>
</table>
</body>
</html>
