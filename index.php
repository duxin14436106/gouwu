<?php
require("header.php");
?>

    <div class="t-center">
        <form action=search.php method=post name="form2">

            <TR>
                <TD class="t-center">输入关键字：
                    <INPUT class="search" name="name" size=30> </TD>
            </TR>

            <TR>
                <TD align=middle height=38>  <input type="hidden" name="jdcz" value="jdcz">
                    <input name="submit" type="submit" class="buttoncss" value="搜索">
                </TD>
            </TR>
        </form>
    </div>
<TABLE cellSpacing=0 cellPadding=0 width=960 align=center border=0>
  <TBODY>

  <TR>

                          <TD width=750 align=left vAlign=top class=b>
                            <table width="750" border="0" cellpadding="0" cellspacing="0">
            <td height="167">


<table width=750 border=0 align="center" cellpadding=0 cellspacing=0>
 <tr>
    <td width="750" height="34" class="menu_bar">&nbsp;&nbsp;推荐商品</td>
  </tr>
  <tr>
  <td>
   <div id=demo style=overflow:hidden;height:200;width:750;color:#ffffff>
   <table align=left cellpadding=0 cellspace=0 border=0 >
   <tr><td id=demo1 valign=top>
    <table border=0 cellpadding=0 cellspacing=0>
    <tr>
      <td>
        <?php
        $sql="select * from goods where tuijian=1 order by id DESC limit 0,6";
        $res=mysql_query($sql);
        while($data=mysql_fetch_array($res))
        {

          ?>
          <a href="good_view.php?id=<?php echo $data[id]?>">
            <img src="<?php echo $data[tupian]?>" width="200" height="190" style="border:1px solid #E9F9D5;"></a>&nbsp;

            <?php
          }
          ?></td>
        </tr>
      </table>
  </td><td id=demo2 valign=top></td></tr></table></div>
  </td></tr>
  </table>


<!--首页的新品商品-->

<table width=750 border="0" cellspacing="0" cellpadding="0" align="center">
 <tr>
    <td width="750" height="34" class="menu_bar">&nbsp;&nbsp;新品上市</td>
  </tr></table>
  <table width=750 border="0" cellspacing="0" cellpadding="0" align="center">

  <tr>


        <tr>
        <?php
$sql="select * from goods order by id DESC limit 0,4";
$res=mysql_query($sql);
while($data=mysql_fetch_array($res))
{

?>
          <td ><TABLE  border=0 align="center" cellPadding=2 cellSpacing=1 bgColor=#e1e1e1 onMouseOver="this.style.backgroundColor='#59c3ea'" onMouseOut="this.style.backgroundColor=''">
            <TBODY>
              <TR>
                <TD bgColor=#ffffff align=center>

              <a href="good_view.php?id=<?php echo $data[id]?>">
                  <img src="<?php echo $data[tupian]?>" width="180" height="180" style="border:1px solid #E9F9D5;"></a>

                  </TD>
                </TR>
                <TR>
                <TD width=180 bgColor=#ffffff align=center>
             <a href="good_view.php?id=<?php echo $data[id]?>"><?php echo $data[mingcheng];?></a>
             <br>市场价:<font size=+1 color="#FF0000"><?php echo $data[shichangjia];?> </font>
            <br> 会员价：<font size=+1 color="blue"><?php echo $data[huiyuanjia];?></font><br><a href="shopping.php?id=<?php echo $data[id];?>">放入购物车</a>

                  </TD>
                </TR>
              </TBODY>

      </table></td>
      <?php
    }
    ?>
</tr>
</table>
</td>
    </table>

      <TD width=200  align=right vAlign=top bgColor=#ffffff class=b>
          <?php
          require("login_box.php");
          require("index_left.php");

          ?>
    </TD>
    </TR>
  </TBODY>
</TABLE>

<div style="width:960px;height:50px"></div>
<TABLE cellSpacing=0 cellPadding=0 width="960" align=center border=0>
    <TBODY>
    <TR>
        <TD class=b vAlign=top align=left width=770>
            <table width="770" align="center" border="0" cellspacing="0" cellpadding="0" >
                <tr>
                    <td height="24" align="center" valign="middle"><span class="style1"><span class="style2">&#21512;&#20316;&#20249;&#20276;</span> : </span><?php
                        $sql="select * from links order by id DESC limit 0,4";
                        $res=mysql_query($sql);
                        while($data=mysql_fetch_array($res))
                        {

                            ?>
                            | <a href=<?php echo $data[linkurl];?>><?php echo $data[linkname];?></a>

                            <?php
                        }
                        ?>
                    </td>
                </tr>
            </table>
        </TD>
    </TR>
    </TBODY>
</TABLE>
<?php
require("footer.php");
?>