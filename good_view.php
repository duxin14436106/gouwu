<?php
include("header.php");
include("conn.php");
?>
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td width="559" valign="top" bgcolor="#FFFFFF">

            <table width="950" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td height="33" class="shop-detail">&nbsp;商品详细页</td>
                </tr>
            </table>
            <table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td>
                        <table class="shop-shows" cellpadding="0" cellspacing="0">
                            <?php
                            $sql=mysql_query("select * from goods where id=".$_GET[id]."",$conn);
                            $views=mysql_fetch_object($sql);
                            ?>
                            <tr>
                                <td width="300" height="80" rowspan="5" align="center" valign="middle" bgcolor="#FFFFFF"><div align="center">

              <a href="<?php echo $views->tupian;?>" target="_blank">
               <img src="<?php echo $views->tupian;?>" alt="查看大图" title="查看大图" width="300" height="300" border="0">
              </a>

                                    </div></td>
                                <td width="92" height="60" align="left" bgcolor="#FFFFFF"><div align="center">商品名称：</div></td>
                                <td width="134" bgcolor="#FFFFFF"><div align="left">&nbsp;<?php echo $views->mingcheng;?></div></td>

                            </tr>
                            <tr>
                                <td height="60" align="left" bgcolor="#FFFFFF"><div align="center">会员价：</div></td>
                                <td width="134" bgcolor="#FFFFFF"><div align="left">&nbsp;<?php echo $views->huiyuanjia;?>元</div></td>

                            </tr>
                            <tr>
                                <td height="60" bgcolor="#FFFFFF"><div align="center">市场价：</div></td>
                                <td width="129" bgcolor="#FFFFFF"><div align="left">&nbsp;<?php echo $views->shichangjia;?>元</div></td>
                            </tr>
                            <tr>

                                <td width="100" bgcolor="#FFFFFF"><div align="center">品牌：</div></td>
                                <td width="129" bgcolor="#FFFFFF"><div align="left">&nbsp;<?php echo $views->pinpai;?></div></td>
                            </tr>

                            <tr>
                                <td width="89" height="80" bgcolor="#FFFFFF"><div align="center">商品简介：</div></td>
                                <td height="80" colspan="4" bgcolor="#FFFFFF" valign="top"><div align="left"><br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $views->jianjie;?></div></td>
                            </tr>
                        </table></td>
                </tr>
            </table>
            <table width="950" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td>
                        <div  class="good-goods">
                            <a href="shopping.php?id=<?php echo $views->id;?>">
                                <img src="images/goods.png" />
                                <span>立即抢购</span></a>
                        </div></td>
                </tr>
            </table>
            <?php
            if($_SESSION[username]!="")
            {

                ?>
                <form name="form1" method="post" action="savepj.php?id=<?php echo $views->id;?>" onSubmit="return chkinput(this)">
                    <table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                            <td height="25" bgcolor="#E7F3FB">
                                <div align="center" class="shop-detail">
                                    <div align="left" >&nbsp;&nbsp;<span >发表评论</span></div>
                                </div></td>
                        </tr>
                        <tr>
                            <td height="150" bgcolor="#999999">
                                <table width="950" border="0" align="center" cellpadding="0" cellspacing="1">
                                    <script language="javascript">
                                        function chkinput(form)
                                        {
                                            if(form.title.value=="")
                                            {
                                                alert("请输入评论主题!");
                                                form.title.select();
                                                return(false);
                                            }
                                            if(form.content.value=="")
                                            {
                                                alert("请输入评论内容!");
                                                form.content.select();
                                                return(false);
                                            }
                                            return(true);
                                        }
                                    </script>
                                    <tr>
                                        <td width="80" height="50" bgcolor="#FFFFFF"><div align="center">评论主题：</div></td>
                                        <td width="530"  bgcolor="#FFFFFF"><div align="left">&nbsp;
                                                <input type="text" name="title" size="30" class="inputcss good-con" style="background-color:#fff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td height="125" bgcolor="#FFFFFF"><div align="center">评论内容：</div></td>
                                        <td height="125" bgcolor="#FFFFFF" ><div align="left">
                                                <textarea name="content" cols="70" rows="10" class="inputcss good-cons" style="background-color:#fff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></textarea>
                                            </div></td>
                                    </tr>
                                </table></td>
                        </tr>
                    </table>
                    <table width="530" height="33" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                            <td><div align="center">
                                    <input type="submit" value="发表" class="buttoncss input-submit">
                                    &nbsp;&nbsp;&nbsp;<a href="pinglun_view.php?id=<?php echo $_GET[id];?>">查看该商品评论</a></div></td>
                        </tr>
                    </table>
                </form>
                <?php
            }

            ?>    </td>

    </tr>
</table>
<?php
include("footer.php");
?>
