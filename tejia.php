<?php
 include("header.php");
?>
<table width="950" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="438" valign="top" bgcolor="#FFFFFF"><table width="750" height="33" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td bgcolor="#59c3ea">&nbsp;&nbsp;<font color="#FFFFFF" size="+1">�ؼ���Ʒ</font></td>
      </tr>
    </table>
      <?php

       $sql=mysql_query("select count(*) as total from goods where tejia=1 ",$conn);
	   $info=mysql_fetch_array($sql);
	   $total=$info[total];
	   if($total==0)
	   {
	     echo "��վ�����ؼ۲�Ʒ!";
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
			   echo "����ͼƬ!";
			 }
			 else
			 {
			?>
              <a href="good_view.php?id=<?php echo $info1[id];?>" ><img  border="0" width="80" height="80" src="<?php echo $info1[tupian];?>"></a>
              <?php
			 }
			?>
          </div></td>
          <td width="93" height="20"><div align="center" style="color: #000000">��Ʒ���ƣ�</div></td>
          <td colspan="5"><div align="left"> <a href="good_view.php?id=<?php echo $info1[id];?>"><?php echo $info1[mingcheng];?></a></div></td>
        </tr>
        <tr>
          <td width="93" height="20"><div align="center" style="color: #000000">��ƷƷ�ƣ�</div></td>
          <td width="101" height="20"><div align="left"><?php echo $info1[pinpai];?></div></td>
          <td width="100"><div align="center" style="color: #000000">��Ʒ�ͺţ�</div></td>
          <td colspan="3"><div align="left"><?php echo $info1[xinghao];?></div></td>
        </tr>
        <tr>
          <td width="93" height="20"><div align="center" style="color: #000000">��Ʒ��飺</div></td>
          <td height="20" colspan="5"><div align="left"><?php echo $info1[jianjie];?></div></td>
        </tr>
        <tr>

        </tr>
        <tr>
          <td height="20"><div align="center" style="color: #000000">�̳��ۣ�</div></td>
          <td height="20"><div align="left"><?php echo $info1[shichangjia];?>Ԫ</div></td>
          <td height="20"><div align="center" style="color: #000000">��Ա�ۣ�</div></td>
          <td height="20"><div align="left"><?php echo $info1[huiyuanjia];?>Ԫ</div></td>
          <td height="20">&nbsp;</td>
          <td height="20">&nbsp;</td>
        </tr>
        <tr>
           <td height="20" colspan="6" width="461">
                                    <a href="shopping.php?id=<?php echo $info1[id];?>">
                                        <div class="shop-buy">��Ҫ����
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