<?php include("check_login.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>��Ʒ</title>
<link rel="stylesheet" type="text/css" href="adminCss/admincp.css">
<link rel="stylesheet" type="text/css" href="adminCss/shopmanage.css">

</head>
<?php
  include("../conn.php");
?>
<body>
<?php
     $sql=mysql_query("select count(*) as total from goods ",$conn);
     $info=mysql_fetch_array($sql);
     $total=$info[total];
     if($total==0){
       echo "��վ������Ʒ!";
     }
     else
      {
?>
<form name="form1" method="post" action="deletefxhw.php">

  <table width="750" align="center" cellpadding="0" cellspacing="0" class="table-border">
  <tr>
    <td height="75">
    <table width="950" height="400" border="1" cellpadding="0" cellspacing="1">

    <tr>
        <td height="50" colspan="10"><div class="shop-edit">��Ʒ��Ϣ�༭</div>
        <div class="shop-edit" style="font-size:16px;">
          <a href="./goods_add.php">�����Ʒ</a>
        </div></td>
      </tr>
      <tr>

        <td class="shopmanage shopmanages"><div align="center">����</div></td>
        <td class="shopmanage"><div align="center">Ʒ��</div></td>
        <td class="shopmanage"><div align="center">�ͺ�</div></td>
        <td class="shopmanage"><div align="center">ʣ��</div></td>
        <td class="shopmanage"><div align="center">�г���</div></td>
        <td class="shopmanage"><div align="center">��Ա��</div></td>
        <td class="shopmanage"><div align="center">����</div></td>
        <td class="shopmanage shopmanages"><div align="center">����</div></td>
      </tr>
    <?php

         $pagesize=20;
       if ($total<=$pagesize){
          $pagecount=1;
      }
      if(($total%$pagesize)!=0){
         $pagecount=intval($total/$pagesize)+1;

      }else{
         $pagecount=$total/$pagesize;

      }
      if(($_GET[page])==""){
          $page=1;

      }else{
          $page=intval($_GET[page]);

      }

           $sql1=mysql_query("select * from goods order by addtime desc limit ".($page-1)*$pagesize.",$pagesize",$conn);
       while($info1=mysql_fetch_array($sql1))
        {
    ?>
      <tr>

        <td height="25" bgcolor="#FFFFFF">

          <div align="center"><?php echo $info1[mingcheng];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[pinpai];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[xinghao];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php if($info1[shuliang]<0) {echo "����";}else {echo $info1[shuliang];}?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[shichangjia];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[huiyuanjia];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[cishu];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center">
        <a href="goods_edit.php?id=<?php echo $info1[id];?>">[�޸�]</a> |  <a href="goods_del.php?id=<?php echo $info1['id']; ?>" class="ajaxlink" onclick="return confirm('ȷ��Ҫɾ����');" >[ɾ��]</a></div></td>
      </tr>
   <?php
      }

      ?>

    </table></td>
  </tr>
</table>
<br><br><br>
<table width="950" height="33" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="165">
    <div class="shopnums">
      &nbsp;��վ������Ʒ
        <?php
       echo $total;
      ?>
        &nbsp;��&nbsp;
    </div></td>
    <td width="585"><div align="right">
    ÿҳ��ʾ&nbsp;<?php echo $pagesize;?>&nbsp;��&nbsp;

    ��&nbsp;<?php echo $page;?>&nbsp;ҳ/��&nbsp;<?php echo $pagecount; ?>&nbsp;ҳ

        <?php
      if($page>=2)
      {
      ?>
        <a href="goods.php?page=1" title="��ҳ"><font face="webdings"> 9 </font></a> <a href="goods.php?id=<?php echo $id;?>&page=<?php echo $page-1;?>" title="ǰһҳ"><font face="webdings"> 7 </font></a>
        <?php
      }
       if($pagecount<=4){
        for($i=1;$i<=$pagecount;$i++){
      ?>
        <a href="goods.php?page=<?php echo $i;?>"><span class="shop-page"><?php echo $i;?></span></a>
        <?php
         }
       }else{
       for($i=1;$i<=4;$i++){
      ?>
        <a href="goods.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php }?>
        <a href="goods.php?page=<?php echo $page-1;?>" title="��һҳ"><font face="webdings"> 8 </font></a> <a href="goods.php?id=<?php echo $id;?>&page=<?php echo $pagecount;?>" title="βҳ"><font face="webdings"> : </font></a>
        <?php }?>
    </div></td>
  </tr>
</table>
<p>&nbsp;</p>
</form>
  <?php
  }
  ?>
</body>
</html>
