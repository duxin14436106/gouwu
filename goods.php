<?php
 include("header.php");
?>
<table width="950" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="438" valign="top" bgcolor="#FFFFFF"><table width="950" height="33" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td bgcolor="#054175">&nbsp;&nbsp;<font color="blue" size="+1">所有商品列表</font></td>
      </tr>
    </table>

      <?php
	   $sql=mysql_query("select count(*) as total from goods where tuijian=1 ",$conn);
	   $info=mysql_fetch_array($sql);
	   $total=$info[total];


	  ?>
      <table width="950" height="70" border="1" align="center" cellpadding="0" cellspacing="0">

        <tr><?php


             $sql1=mysql_query("select * from goods  order by addtime desc ",$conn);
			 $i=0;
             while($info1=mysql_fetch_array($sql1))
		     {

		  ?>
      <td>
          <table width="310" border="0" cellpadding="0" cellspacing="0">
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
              <a href="good_view.php?id=<?php echo $info1[id];?>" ><img  border="0" width="110" height="110" src="<?php echo $info1[tupian];?>"></a>
              <?php
			 }
			?>
          </div></td>
          <td colspan="5"><div align="center"> <a href="good_view.php?id=<?php echo $info1[id];?>"><?php echo $info1[mingcheng];?></a></div></td>
        </tr>
          <tr>
          <td height="20"><div align="center" style="color: #000000">市场价：</div></td>
          <td height="20"><div align="left"><?php echo $info1[shichangjia];?>元</div></td>
          <td height="20"><div align="center" style="color: #000000">会员价：</div></td>
          <td height="20"><div align="left"><?php echo $info1[huiyuanjia];?>元</div></td>

        </tr>
        <tr>
          <td height="20" colspan=4><div align="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="shopping.php?id=<?php echo $info1[id];?>">我要购物</a></div></td>
        </tr>
       </table></td>
        <?php
		 $i++;
				 if($i%3==0)
				 echo "<tr>";
	    }

		?></tr>
      </table>

   </td>

  </tr>
</table>
<?php
 include("footer.php");
?>