<?php
 include("header.php");
?>
<table width="950" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="438" valign="top" bgcolor="#FFFFFF"><table width="750" height="33" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td bgcolor="#59c3ea">&nbsp;&nbsp;<font color="#FFFFFF" size="+1">特价商品</font></td>
      </tr>
    </table>
      <?php

       $sql=mysql_query("select count(*) as total from goods where tejia=1 ",$conn);
	   $info=mysql_fetch_array($sql);
	   $total=$info[total];
	   if($total==0)
	   {
	     echo "本站暂无特价产品!";
	   }
	   else
	   {

	  ?>
      <table width="750" height="70" border="0" align="center" cellpadding="0" cellspacing="0">
        <?php


             $sql1=mysql_query("select * from goods where tejia=1 order by addtime desc limit 0,10",$conn);
             while($info1=mysql_fetch_array($sql1))
		     {
		  ?>
        <tr>
          <td width="89"  rowspan="6"><div align="center">
              <?php
			 if($info1[tupian]=="")
			 {
			   echo "暂无图片!";
			 }
			 else
			 {
			?>
              <a href="good_view.php?id=<?php echo $info1[id];?>" ><img  border="0" width="80" height="80" src="<?php echo $info1[tupian];?>"></a>
              <?php
			 }
			?>
          </div></td>
          <td width="93" height="20"><div align="center" style="color: #000000">商品名称：</div></td>
          <td colspan="5"><div align="left"> <a href="good_view.php?id=<?php echo $info1[id];?>"><?php echo $info1[mingcheng];?></a></div></td>
        </tr>
        <tr>
          <td width="93" height="20"><div align="center" style="color: #000000">商品品牌：</div></td>
          <td width="101" height="20"><div align="left"><?php echo $info1[pinpai];?></div></td>
          <td width="100"><div align="center" style="color: #000000">商品型号：</div></td>
          <td colspan="3"><div align="left"><?php echo $info1[xinghao];?></div></td>
        </tr>
        <tr>
          <td width="93" height="20"><div align="center" style="color: #000000">商品简介：</div></td>
          <td height="20" colspan="5"><div align="left"><?php echo $info1[jianjie];?></div></td>
        </tr>
        <tr>

        </tr>
        <tr>
          <td height="20"><div align="center" style="color: #000000">商场价：</div></td>
          <td height="20"><div align="left"><?php echo $info1[shichangjia];?>元</div></td>
          <td height="20"><div align="center" style="color: #000000">会员价：</div></td>
          <td height="20"><div align="left"><?php echo $info1[huiyuanjia];?>元</div></td>
          <td height="20">&nbsp;</td>
          <td height="20">&nbsp;</td>
        </tr>
        <tr>
           <td height="20" colspan="6" width="461">
                                    <a href="shopping.php?id=<?php echo $info1[id];?>">
                                        <div class="shop-buy">我要购物
                                        </div>
                                    </a>
                                </td>
        </tr>
        <?php
	    }

		?>
      </table>
    <?php
	    }

		?></td>

  </tr>
</table>
<?php
 include("footer.php");
?>