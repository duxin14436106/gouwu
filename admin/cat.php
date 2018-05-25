<?php include("check_login.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>商品类别管理</title>
<link rel="stylesheet" type="text/css" href="adminCss/admincp.css">
<link rel="stylesheet" type="text/css" href="adminCss/shopmanage.css">
</head>

<body>
<?php
include("../conn.php");
$sql=mysql_query("select * from type order by id desc",$conn);
$info=mysql_fetch_array($sql);
 if($info==false)
  {
    echo "本站暂无商品类别!";
   }
  else
  {
?>
<div>
  <table width="600" border="0" align="center" cellpadding="0" cellspacing="0" class="table-border">
   <form name="form1" method="post" action="deletelb.php">
    <tr>
      <td height="50"><div class="shop-type">商品类别管理
       
      </div>
 <span style="font-size:18px;text-align:center;display:block;"><a href="cat_add.php">添加类别</a></span>
      </td>

    </tr>
    <tr>
      <td>
        <table width="600" border="1" align="center" cellpadding="0" cellspacing="1" class="table-border">
          <tr>
            <td ><div class="shop-type-content" style="width:300px">类别名称</div></td>
            <td><div class="shop-type-content" style="width:300px">操作</div></td>
          </tr>
    <?php
      do
      {
    ?>
        <tr>
          <td><div class="shop-type-content"><?php echo $info[typename];?></div></td>
          <td><div class="shop-type-content">
          <a href="cat_edit.php?id=<?php echo $info[id]?>">[修改] | 
          <a href="cat_del.php?id=<?php echo $info[id]?>" onclick="return confirm('确定要删除吗');" >[删除]</a></div></td>
        </tr>

    <?php
     }
     while($info=mysql_fetch_array($sql));
    ?>

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
