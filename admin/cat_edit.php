<?php include("check_login.php");
include("../conn.php");
if($Action=="save")
{
  $leibie=$_POST[leibie];
  $sql=mysql_query("select * from type where typename='".$leibie."'",$conn);

$sql="update type set typename='".$leibie."' where id=$id";
//echo $sql;
mysql_query($sql);
echo "<script>alert('类别修改成功!');window.location.href='./cat.php';</script>";
}
$sql=mysql_query("select * from type where id=$id",$conn);
$info=mysql_fetch_array($sql);
?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
  <title>修改商品类别</title>
  <!-- <link rel="stylesheet" type="text/css" href="adminCss/admincp.css"> -->
  <style type="text/css">
    <!--
    .style1 {color: #FFFFFF}
  -->
</style>
</head>
<script language="javascript">
 function chkinput(form)
 {
   if(form.leibie.value=="")
   {
     alert('请输入商品类别名!');
     form.leibie.select();
     return(false);
   }
   return(true);
 }

</script>
<body leftmargin="0" bottommargin="0" topmargin="0">
  <br>
  <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
   <form name="form1" method="post" action="?Action=save&id=<?php echo $info[id]?>" onSubmit="return chkinput(this);">
    <tr>
      <td height="30" bgcolor="#E7F3FB"><div align="center" >修改商品类别</div></td>
    </tr>
    <tr>
      <td height="25" bgcolor="#E7F3FB"><table width="400" height="33" border="0" cellpadding="0" cellspacing="1">
        <tr>
          <td width="90" bgcolor="#FFFFFF"><div align="center">类别名称：</div></td>
          <td width="307" bgcolor="#FFFFFF"><div align="left">
            &nbsp;
            <input type="text" name="leibie" class="inputcss" size="40" value="<?php echo $info[typename]?>">
          </div></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="25"><div align="center">
        <input name="submit" type="submit" class="buttoncss" id="submit" value="修改">
      </div></td>
    </tr>
  </form>
</table>
</body>
</html>
