<?php include("check_login.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="gb2312">
  <title>添加公告</title>
  <link rel="stylesheet" type="text/css" href="adminCss/admincp.css">
  <link rel="stylesheet" type="text/css" href="adminCss/shopmanage.css">
</head>
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
  <table width="750" border="1" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td><div class="add-adv">添加公告</div></td>
    </tr>
    <tr>
      <td >
      <table width="750" align="center" cellpadding="0" cellspacing="1" class="table-border">
        <form name="form1" method="post" action="gonggao_save.php" onSubmit="return chkinput(this)">
         <tr >
            <td >
                <div style="margin:10px 0;font-size:16px;">公告主题：</div></td>
             <td >
                <div >
              <input type="text" name="title" size="30" class="inputcss t-center">
              </div>
              </td>
        </tr>
          <tr >
            <td>
              <div >公告内容：</div></td>
              <td>
                <div>
                  <textarea name="content" rows="8" cols="60"></textarea>
                </div></td>
              </tr>
              <tr>
                <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="submit" value="添加" class="buttoncss">&nbsp;&nbsp;<input type="reset" value="重写" class="buttoncss"></div></td>
              </tr>
            </form>
    </table></td>
  </tr>
</table>
</body>
</html>
