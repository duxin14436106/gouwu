<?php include("check_login.php");

include("../conn.php");
if($action=="save")
{
	$sql="update links set linkname='$linkname',linkurl='$linkurl'";
mysql_query($sql);
echo"<script>alert('�޸ĳɹ�!');window.location.href='link.php';</script>";
}$sql=mysql_query("select * from links where id=$id",$conn);
$info=mysql_fetch_array($sql);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��ӹ���</title>
<link rel="stylesheet" type="text/css" href="images/admincp.css">
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
	   alert("�����빫������!");
	   form.title.select();
	   return(false);
	 }
     if(form.content.value=="")
	 {
	   alert("�����빫������!");
	   form.content.select();
	   return(false);
	 }
	 return(true);
   }
</script>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" bgcolor="#E7F3FB"><div align="center" >��ӹ���</div></td>
  </tr>
  <tr>
    <td height="175" bgcolor="#E7F3FB"><table width="750" height="175" border="0" align="center" cellpadding="0" cellspacing="1">
      <form name="form1" method="post" action="?action=save&id=<?php echo $info[id]?>" onSubmit="return chkinput(this)">
	  <tr>
        <td width="120" height="25" bgcolor="#FFFFFF"><div align="center">�����������ƣ�</div></td>
        <td width="667" bgcolor="#FFFFFF"><div align="left"><input type="text" name="linkname" size="50" class="inputcss" value="<?php echo $info[linkname]?>"></div></td>
      </tr>
        <tr>
        <td width="120" height="25" bgcolor="#FFFFFF"><div align="center">����������ַ��</div></td>
        <td width="667" bgcolor="#FFFFFF"><div align="left"><input type="text" name="linkurl" size="50" class="inputcss" value="<?php echo $info[linkurl]?>"></div></td>
      </tr>
      <tr>
        <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="submit" value="�޸�" class="buttoncss">&nbsp;&nbsp;<input type="reset" value="��д" class="buttoncss"></div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
</body>
</html>
