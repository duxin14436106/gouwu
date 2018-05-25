<?php
include("check_login.php");
include("../conn.php");
include("fun.php");
//修改保存
if($action=="save")
{
  //如果会员价和市场价相差小于80%,视为特价
  if(ceil(($huiyuanjia/$shichangjia)*100)<=80)
 $tejia=1;
 else
 $tejia=0;

if ($upfile!="")
{
$exname=strtolower(substr($_FILES['upfile']['name'],(strrpos($_FILES['upfile']['name'],'.')+1)));
$uploadfile = getname($exname);
move_uploaded_file($_FILES['upfile']['tmp_name'], $uploadfile);
$uploadfile="admin/".$uploadfile;
$addtime=date("Y-m-d");
$sql="update goods set mingcheng='$mingcheng',jianjie='$jianjie',addtime='$addtime',xinghao='$xinghao',tupian='$uploadfile',typeid='$typeid',shichangjia='$shichangjia',huiyuanjia='$huiyuanjia',pinpai='$pinpai',tuijian='$tuijian',tejia='$tejia',shuliang='$shuliang' where id=".$_GET[id]."";
  }
else
$sql="update goods set mingcheng='$mingcheng',jianjie='$jianjie',addtime='$addtime',xinghao='$xinghao',typeid='$typeid',shichangjia='$shichangjia',huiyuanjia='$huiyuanjia',pinpai='$pinpai',tuijian='$tuijian',tejia='$tejia',shuliang='$shuliang' where id=".$_GET[id]."";

mysql_query($sql,$conn);
echo "<script>alert('商品修改成功!');location.href='./goods.php';</script>";
}

//取数据
  $sql1=mysql_query("select * from goods where id=".$_GET[id]."",$conn);
 $info1=mysql_fetch_array($sql1);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>更改商品信息</title>
<link rel="stylesheet" type="text/css" href="../adminCss/admincp.css">

</head>

<body>
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" bgcolor="#E7F3FB"><div align="center" >更改商品信息</div></td>
  </tr>
  <tr>
    <td height="253" bgcolor="#E7F3FB"><table width="750" border="0" cellpadding="0" cellspacing="1">
        <script language="javascript">
  function chkinput(form)
  {
    if(form.mingcheng.value=="")
     {
       alert("请输入商品名称!");
     form.mingcheng.select();
     return(false);
     }

    if(form.huiyuanjia.value=="")
     {
       alert("请输入商品会员价!");
     form.huiyuanjia.select();
     return(false);
     }



    if(form.shichangjia.value=="")
     {
       alert("请输入商品市场价!");
     form.shichangjia.select();
     return(false);
     }


     if(form.pinpai.value=="")
     {
       alert("请输入商品品牌!");
     form.pinpai.select();
     return(false);
     }

     if(form.xinghao.value=="")
     {
       alert("请输入商品型号!");
     form.xinghao.select();
     return(false);
     }
     if(form.shuliang.value=="")
     {
       alert("请输入商品数量!");
     form.shuliang.select();
     return(false);
     }
     if(form.jianjie.value=="")
     {
       alert("请输入商品简介!");
     form.jianjie.select();
     return(false);
     }
     return(true);
  }
    </script>
        <form name="form1"  enctype="multipart/form-data" method="post" action="?action=save&id=<?php echo $_GET[id];?>" onSubmit="return chkinput(this)">
          <tr>
            <td width="129" height="25" bgcolor="#FFFFFF"><div align="center">商品名称：</div></td>
            <td width="618" bgcolor="#FFFFFF"><div align="left">
                <input type="text" name="mingcheng" size="25" class="inputcss" value="<?php echo $info1[mingcheng];?>">
            </div></td>
          </tr>

          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">价格：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">市场价：
                    <input type="text" name="shichangjia" size="10" class="inputcss" value="<?php echo $info1[shichangjia];?>">
                元&nbsp;&nbsp;会员价：
                <input type="text" name="huiyuanjia" size="10" class="inputcss" value="<?php echo $info1[huiyuanjia];?>">
                元</div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">商品类型：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <?php
      $sql=mysql_query("select * from type order by id desc",$conn);
      $info=mysql_fetch_array($sql);
      if($info==false)
      {
        echo "请先添加商品类型!";
      }
      else
      {
      ?>
                <select name="typeid" class="inputcss">
                  <?php
      do
      {
      ?>
                  <option value=<?php echo $info[id];?> <?php if($info1[typeid]==$info[id]) {echo "selected";}?>><?php echo $info[typename];?></option>
                  <?php
      }
      while($info=mysql_fetch_array($sql));
      ?>
                </select>
                <?php
         }
        ?>
            </div></td>
          </tr>

          <tr>
            <td height="22" bgcolor="#FFFFFF"><div align="center">商品品牌：</div></td>
            <td height="22" bgcolor="#FFFFFF"><div align="left">
                <input type="text" name="pinpai" class="inputcss" size="20" value="<?php echo $info1[pinpai];?>">
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">商品型号：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <input type="text" name="xinghao" class="inputcss" size="20" value="<?php echo $info1[xinghao];?>">
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">是否推荐：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <select name="tuijian" class="inputcss" >
                  <option value=1 <?php if($info1[tuijian]==1) {echo "selected";}?>>是</option>
                  <option value=0 <?php if($info1[tuijian]==0) {echo "selected";}?>>否</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">商品数量：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <input type="text" name="shuliang" class="inputcss" size="20" value="<?php echo $info1[shuliang];?>">
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">商品图片：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
      <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                <input name="upfile" type="file" class="inputcss" id="upfile" size="30">
            </div></td>
          </tr>
          <tr>
            <td height="80" bgcolor="#FFFFFF"><div align="center">商品简介：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <textarea name="jianjie" cols="50" rows="8" class="inputcss"><?php echo $info1[jianjie];?></textarea>
            </div></td>
          </tr>
          <tr>
            <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center">
              <input type="submit" class="buttoncss" value="更改">
              &nbsp;&nbsp;
                <input type="reset" value="取消更改" class="buttoncss">
            </div></td>
          </tr>
        </form>
    </table></td>
  </tr>
</table>
</body>
</html>
