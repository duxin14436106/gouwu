<?php include("check_login.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>友情链接管理</title>
<link rel="stylesheet" type="text/css" href="adminCss/admincp.css">
<link rel="stylesheet" type="text/css" href="adminCss/link.css">
</head>

<body>
<?php
include("../conn.php");
$sql=mysql_query("select * from links order by id desc",$conn);
$info=mysql_fetch_array($sql);
 if($info==false)
  {
    echo "本站暂无友情链接!";
   }
  else
  {
?>
<div align="center">
  <table width="400" border="1" align="center" cellpadding="0" cellspacing="0">
   <form name="form1" method="post" action="dellink.php">
    <tr>
      <td height="30" class="link-nav"><div align="center" >友情链接管理
     
      </div>
       <div style="font-size:14px;" align="center">
       <a href="link_add.php">添加链接>></a></div></td>
    </tr>
    <tr>
      <td height="20" ><table width="400" border="1" align="center" cellpadding="0" cellspacing="1">
        <tr>
          <td width="253" height="40"><div align="center">友情链接名称</div></td>
          <td width="144" ><div align="center">操作</div></td>
        </tr>
		<?php
		  do
		  {
		?>
        <tr>
          <td height="30" bgcolor="#FFFFFF"><div align="center"><?php echo $info[linkname];?></div></td>
          <td height="30" bgcolor="#FFFFFF"><div align="center"><a href="link_edit.php?id=<?php echo $info[id]?>">修改<input type="checkbox" value=<?php echo $info[id];?> name="<?php echo $info[id];?>"> </div></td>
        </tr>

		<?php
		 }
		 while($info=mysql_fetch_array($sql));
		?>
		<tr>
          <td height="20" bgcolor="#FFFFFF"><div align="center">
            操作
          </div></td>
          <td height="20" bgcolor="#FFFFFF"><div align="center"><input type="submit" value="删除选项" class="buttoncss"></div></td>
        </tr>
      </table></td>
    </tr>
	</form>
  </table>
</div>
<?php
 }
?>
</body>
</html>
