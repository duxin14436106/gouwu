<TABLE border=0 cellPadding=0 cellSpacing=0 width="180" >
    <TBODY>
    <table width=100% cellspacing="0" cellpadding="0" border="0">
        <tr>
            <TD width="180" height="35" class="menu_left">&nbsp;&nbsp;商品分类</TD>
        </tr>
        <?php
        $sql="select * from type ";
        $res=mysql_query($sql);
        while($a=mysql_fetch_array($res))
        {
            ?>
            <tr align="center">
                <td height="30" colspan=3  style="cursor: pointer" onMouseOver="this.bgColor='#FFFFFF';" onMouseOut="this.bgColor='#FFFFFF';">
                    <font color="#FFFFFF">
                        <a href=showfenlei.php?id=<?php echo $a[id]?>><b>
                                <font color="#FF6600">
                                    <?php echo $a[typename]?></font></b></a></font></td>
            </tr>

            <?php
        }
        ?>

    </table>

    <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <TD width="180" height="35" class="menu_left">&nbsp;&nbsp;销售排行</TD>
        </tr>
        <?php
        $sql1=mysql_query("select * from goods order by cishu desc",$conn);
        while($paihang=mysql_fetch_array($sql1))
        {
            ?>
            <tr>
                <td height="24"class="table-you"  STYLE='PADDING-LEFT: 20px'>
                    <a href="good_view.php?id=<?php echo $paihang[id];?>"><?php echo $paihang[mingcheng];?></a>
                    <hr>
                </td>
            </tr>
            <?php
        }

        ?>
    </table>