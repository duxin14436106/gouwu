<?php
 include("header.php");
?>
<table width="950" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="438" valign="top" bgcolor="#FFFFFF"><table width="500" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table>
      <table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="33" bgcolor="#59c3ea"><div align="center" >本站公告</div></td>
        </tr>
        <tr>
          <td height="150" ><table width="800"  border="1" align="center" cellpadding="0" cellspacing="1">
              <?php

         $id=$_GET[id];
       $sql=mysql_query("select * from gonggao where id='".$id."'",$conn);
       $info=mysql_fetch_array($sql);
         include("function.php");

       ?>
              <tr>
                <td width="120" height="35" bgcolor="#FFFFFF"><div align="center">公告主题：</div></td>
                <td width="170" bgcolor="#FFFFFF"><div align="left">&nbsp;&nbsp;<?php echo unhtml($info[title]);?></div></td>
                <td width="120" bgcolor="#FFFFFF"><div align="center">发布时间：</div></td>
                <td width="171" bgcolor="#FFFFFF"><div align="left">&nbsp;&nbsp;<?php echo $info[time];?></div></td>
              </tr>
              <tr>
                <td height="120" bgcolor="#FFFFFF"><div align="center">公告主题：</div></td>
                <td height="125" colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo unhtml($info[content]);?></div></td>
              </tr>
          </table></td>
        </tr>
      </table>
      </td>

  </tr>
</table>
<?php
 include("footer.php");
?>