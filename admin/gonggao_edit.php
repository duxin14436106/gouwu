<?php include("check_login.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>编辑公告</title>
<link rel="stylesheet" type="text/css" href="adminCss/admincp.css">
    <link rel="stylesheet" type="text/css" href="adminCss/shopmanage.css">
</head>
<?php
 include("../conn.php");
 $sql=mysql_query("select * from gonggao where id=".$_GET[id]."",$conn);
 $info=mysql_fetch_array($sql);


?>
<script language="javascript">
  function chkinput(form)
   {
     if(form.title.value=="")
   {
     alert("请输入公告主题!");
     form.title.select();
     return(false);
   }
     if(form.content.value=="")
   {
     alert("请输入公告内容!");
     form.content.select();
     return(false);
   }
   return(true);
   }
</script>
<body>
<table width="750" border="0" align="center" cellspacing="0" >
  <tr>
    <td height="50"><div class="shop-edit">查看修改公告</div></td>
  </tr>
  <tr>
    <td><table width="750" border="1" align="center" cellpadding="0" cellspacing="1">
       <form name="form1" method="post" action="gonggao_edit_save.php" onSubmit="return chkinput(this)">

    <tr>
        <td width="100" height="35"><div align="center">公告主题</div></td>
        <td width="647" height="35"><div align="center">
                <input type="text" name="title" size="50" class="inputcss" value="<?php echo $info[title];?>"></div></td>
      </tr>
      <tr>
        <td><div align="center">公告内容：</div></td>
        <td><div align="center">
        <textarea name="content" class="inputcss" style="width:450px;height: 230px;max-height: 230px;max-width: 450px ">
            <?php echo $info[content];?></textarea>
        </div></td>
      </tr>
      <tr>
        <td height="25" colspan="2">

            <div align="center">
            <input type="submit" value="更改" class="buttoncss gonggao-but" name="submit" id="submit">&nbsp;
                &nbsp;<input type="reset" value="取消更改" class="buttoncss gonggao-but" onclick="javascript:history.back(1)"></div>
                </td>
      </tr>
    </form>
    </table></td>
  </tr>
</table>
</body>
</html>
