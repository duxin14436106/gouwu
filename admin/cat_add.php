<?php include("check_login.php"); ?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
  <title>添加商品类别</title>
  <link rel="stylesheet" type="text/css" href="adminCss/admincp.css">
  <link rel="stylesheet" type="text/css" href="adminCss/shopmanage.css">
</head>
<script language="javascript">
 function chkinput(form)
 {
   if(form.leibie.value=="")
   {
     alert('请输入新增商品类别名!');
     form.leibie.select();
     return(false);
   }
   return(true);
 }

</script>
<body>
  <br>
  <table width="500" border="1" align="center" cellpadding="0" cellspacing="0" class="table-border">
   <form name="form1" method="post" action="cat_save.php" onSubmit="return chkinput(this);">
    <tr>
      <td height="50"><div class="shop-add">添加商品类别</div></td>
    </tr>
    <tr>
      <td height="25">
        <table width="500" height="33" border="1" cellpadding="0" cellspacing="1" class="table-border">
          <tr height="50px">
            <td width="150px"><div  style="text-align:center">类别名称：</div></td>
            <td >
            <div style="text-align:center">
              &nbsp;&nbsp;&nbsp;
              <input type="text" name="leibie" class="inputcss" size="40" style="text-align:center;width:200px">
            </div></td>
          </tr>
        </table></td>
      </tr>
      <tr height="50px">
      <td>
        <div align="center">
          <input name="submit" type="submit" class="buttoncss" id="submit" value="添加">
        </div></td>
      </tr>
    </form>
  </table>
</body>
</html>
