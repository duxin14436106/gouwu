<?php
include("header.php");
include("function.php");
$spid=$_GET[spid];
$id=$_GET[id];
?>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">

    <table width="950" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td height="438" valign="top" bgcolor="#FFFFFF">
                <div align="center">
                    <div class="before-back"><a href="good_view.php?id=<?php echo $id;?>"><<����</a></div>
                    <table width="800" border="0" align="center" cellpadding="0" cellspacing="0" >
                        <tr class="bg-color">
                            <td height="25" colspan="4">
                                <div align="center" >��Ʒ����</div>
                            </td>
                        </tr>
                        <tr> <?php
                            $sql=mysql_query("select count(*) as total from pingjia where spid='".$_GET[id]."'",$conn);
                            $info=mysql_fetch_array($sql);
                            $total=$info[total];
                            if($total==0)
                            {
                                echo " ";

                            }else
                            {
                            $pagesize=3;
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
                            $sql1=mysql_query("select * from pingjia where spid='".$_GET[id]."' order by time desc limit ".($page-1)*$pagesize.",$pagesize ",$conn);
                            while($info1=mysql_fetch_array($sql1))
                            {
                            ?>
                        <tr>
                            <td class="discuss-style">
                                <div align="center">��Ʒ���ƣ�</div>
                            </td>
                            <td width="250">
                                <div align="left">
                                    <?php
                                    $spid=$info1[spid];
                                    $sql2=mysql_query("select mingcheng from goods where id=".$spid."",$conn);
                                    $info2=mysql_fetch_array($sql2);
                                    echo $info2[mingcheng];
                                    ?>
                                </div></td>
                            <td width="70"><div align="center">����ʱ�䣺</div></td>
                            <td width="150"><div align="left"><?php echo $info1[time];?></div></td>
                        </tr>
                        <tr>
                            <td height="40"><div align="center">�����ߣ�</div></td>
                            <td height="40" colspan="3"><div align="left">
                                    <?php
                                    $spid=$info1[userid];
                                    $sql3=mysql_query("select name from user where id=".$spid."",$conn);
                                    $info3=mysql_fetch_array($sql3);
                                    echo $info3[name];

                                    ?>
                                </div></td>
                        </tr>
                        <tr>
                            <td height="40"><div align="center">�������⣺</div></td>
                            <td height="40" colspan="3"><div align="left"><?php echo unhtml($info1[title]);?></div></td>
                        </tr>
                        <tr>
                            <td height="40"><div align="center">�������ݣ�</div></td>
                            <td height="40" colspan="3" valign="bottom"><div align="left"><?php echo unhtml($info1[content]);?></div></td>
                        </tr>
                        <tr>
                            <td height="10" colspan="4"><div class="cut-line"></div></td>
                        </tr>
                        <?php
                        }
                        }
                        ?>
                    </table>


                    <?php
                    if($total==0)
                    {
                        echo "����Ʒ�����û���������!";
                    }else{
                        ?>



                        <table width="700" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                                <td>
                                    <div class="discuss-shop">
          <span class="discuss-shop-page">���и���Ʒ����&nbsp;
              <?php
              echo $total;
              ?>
              &nbsp;��&nbsp;
          </span>

                                        ÿҳ��ʾ<b><?php echo $pagesize;?></b>��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                        ��&nbsp;<?php echo $page;?>&nbsp;ҳ/��&nbsp;<?php echo $pagecount; ?>&nbsp;ҳ&nbsp;&nbsp;&nbsp;
                                        <?php
                                        if($page>=2)
                                        {
                                            ?>
                                            <a href="pinglun_view.php?page=1&id=<?php echo $id;?>" title="��ҳ">��ҳ</a> <a href="pinglun_view.php?id=<?php echo $id;?>&page=<?php echo $page-1;?>&spid=<?php echo $spid;?>&id=<?php echo $id;?>" title="ǰһҳ">
                                            <font face="webdings"> 7 </font></a>
                                            <?php
                                        }
                                        if($pagecount<=4){
                                            for($i=1;$i<=$pagecount;$i++){
                                                ?>
                                            <a href="pinglun_view.php?page=<?php echo $i;?>&id=<?php echo $id;?>">
                                                <?php
                                                if($page == $i){
                                                    ?>

                                                    <span class="page-active"><?php echo $i;?></a></span>
                                                    <?php
                                                }else{
                                                    ?>
                                                    <span><?php echo $i;?></a></span>


                                                    <?php
                                                }
                                            }
                                        }else{
                                            for($i=1;$i<=4;$i++){
                                                ?>
                                                <a href="pinglun_view.php?page=<?php echo $i;?>&id=<?php echo $id;?>"><?php echo $i;?></a>

                                            <?php }?>
                                            <a href="pinglun_view.php?page=<?php echo $page-1;?>&spid=<?php echo $spid;?>&id=<?php echo $id;?>" title="��һҳ">
                                                <font face="webdings"> 8 </font></a>
                                            <a href="editgoods.php?id=<?php echo $id;?>&page=<?php echo $pagecount;?>&spid=<?php echo $spid;?>&id=<?php echo $id;?>" title="βҳ">βҳ</a>
                                        <?php }?>
                                    </div></td>
                            </tr>
                        </table>

                        <?php
                    }

                    ?>
                </div></td>

        </tr>
    </table>
<?php
include("footer.php");
?>