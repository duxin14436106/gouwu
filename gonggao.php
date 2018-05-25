<?php
include("header.php");
?>
    <table width="950" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td  height="438" valign="top" bgcolor="#FFFFFF"><br>
                <table width="960" height="30" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td bgcolor="#59c3ea"><div align="center" style="font-size:20px;color:#fff">本站公告</div></td>
                    </tr>
                </table>
                <?php
                $sql=mysql_query("select count(*) as total from gonggao",$conn);
                $info=mysql_fetch_array($sql);
                $total=$info[total];
                if($total==0)
                {
                    echo "本站暂无公告!";
                }
                else
                {
                    ?>
                    <table  cellpadding="0" cellspacing="0" class="sign-con">
                        <tr>
                            <td width="296" height="40"><div class="sign-con-title">公告主题</div></td>
                            <td width="136"><div class="sign-con-title">发布时间</div></td>
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

                        $sql1=mysql_query("select * from gonggao order by time desc limit ".($page-1)*$pagesize.",$pagesize ",$conn);
                        while($info1=mysql_fetch_array($sql1))
                        {
                            ?>
                            <tr>
                                <td height="20"><div align="center" class="sign-con-content">-<a href="showgg.php?id=<?php echo $info1[id];?>"><?php echo $info1[title];?></a></div></td>
                                <td height="20"><div align="center" class="sign-con-content"><?php echo $info1[time];?></div></td>
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