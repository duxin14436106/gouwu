<?php include("check_login.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>处理订单</title>
<?php
 include("../conn.php");
 $id=$_GET[id];
 $sql=mysql_query("select * from orders where id='".$id."'",$conn);
 $info=mysql_fetch_array($sql);
?>
</head>

<body >
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">

</table>
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" bgcolor="#E7F3FB"><div align="center" >执行处置</div></td>
  </tr>
  <tr>
    <td bgcolor="#E7F3FB"><table width="750" border="0" align="center" cellpadding="0" cellspacing="1">
     <form name="form1" method="post" action="saveorder.php?id=<?php echo $info[id];?>">
    <tr>
        <td width="70" height="25" bgcolor="#FFFFFF"><div align="center" class="style3">订单编号：</div></td>
        <td width="271" bgcolor="#FFFFFF"><div align="left"><?php echo $info[dingdanhao];?></div></td>
        <td width="100" bgcolor="#FFFFFF"><div align="center"></div></td>
        <td width="101" bgcolor="#FFFFFF"><div align="center">
            <input name="yfh" type="hidden" value="已发货"  >
        </div></td>
        <td width="100" bgcolor="#FFFFFF"><div align="center"></div></td>
  
    </table></td>
  </tr>
</table>
<table width="750" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="13"><div align="left">
      <div align="center" class="style2">注：一旦商品确定发货，该商品数量将自动从库存中相应减少，并且不可更改！</div>
    </div></td>
  </tr>
</table>
<table width="750" height="195" border="0" align="center" cellpadding="0" cellspacing="1">
  <tr>
    <td height="193" bgcolor="#E7F3FB"><table width="750" height="151" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr #E7F3FB>
        <td height="20" colspan="2"><div align="center" >收货人信息</div></td>
      </tr>
      <tr>
        <td width="120" height="25" bgcolor="#FFFFFF"><div align="center" class="style3">收货人姓名：</div></td>
        <td width="627" bgcolor="#FFFFFF"><div align="left"><?php echo $info[shouhuoren];?></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center" class="style3">详细地址：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left"><?php echo $info[dizhi];?></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center" class="style3">邮　　编：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left"><?php echo $info[youbian];?></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center" class="style3">电　　话：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left"><?php echo $info[tel];?></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center" class="style3">电子邮件：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left"><?php echo $info[email];?></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center" class="style3">送货方式：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left"><?php echo $info[shff];?></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center" class="style3">支付方式：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left"><?php echo $info[zfff];?></div></td>
      </tr>
    <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center" class="style3">简单留言：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left"><?php echo $info[liuyan];?></div></td>
      </tr>
        <tr>
    <td height="20" align="center"  colspan="2">    <div align="center"><input type="submit" value="确定发货" class="buttoncss" onclick="return confirm('确定要发货吗');">  <input type="button" value="返回" class="buttoncss" onClick="javascript:history.back();">  </div></td>

    
  </tr>
    </table></td>
    </form>
  </tr>
</table>
</body>
</html>
