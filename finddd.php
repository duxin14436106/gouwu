<?php
include("header.php");
?>
    <table width="950" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td width="560" valign="top" bgcolor="#FFFFFF"><table width="700" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                </table>
                <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td height="33" bgcolor="#59c3ea"><div style="color: #fff;text-align: center;font-size: 18px">������ѯ</div></td>
                    </tr>
                    <tr>
                        <td height="50"><table width="700" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
                                <tr>
                                    <td bgcolor="#FFFFFF">
                                        <table width="700" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <script language="javascript">
                                                function chkinput3(form)
                                                {
                                                    if((form.username1.value=="")||(form.ddh.value==""))
                                                    {
                                                        alert("�������¶����˻򶩵���");
                                                        form.username1.select();
                                                        return(false);
                                                    }
                                                    return(true);

                                                }
                                            </script>
                                            <form name="form3" method="post" action="finddd.php" onSubmit="return chkinput3( this)">
                                                <tr>
                                                    <td height="25">
                                                        <div align="center">
                                                            &nbsp;&nbsp;   ������:&nbsp;&nbsp;<input type="text" name="ddh" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="25">
                                                        <div align="center">
                                                            <input type="hidden" value="show_find" name="show_find">
                                                            <input type="submit" value="�� ��" class="buttoncss change-button">
                                                        </div></td>
                                                </tr>
                                            </form>
                                        </table></td>
                                </tr>
                            </table></td>
                    </tr>
                </table>
                <table width="700" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                </table>
                <?php
                if($_POST[show_find]!="")
                {
                    $username1=trim($_POST[$username1]);
                    $ddh=trim($_POST[ddh]);
                    if($username1=="")
                    {
                        $sql=mysql_query("select * from orders where dingdanhao='".$ddh."'");
                    }
                    elseif($ddh=="")
                    {
                        $sql=mysql_query("select * from orders where xiadanren='".$username1."'");
                    }
                    else
                    {
                        $sql=mysql_query("select * from orders where xiadanren='".$username."'and dingdanhao='".$ddh."'");
                    }
                    $info=mysql_fetch_array($sql);
                    if($info==false)
                    {
                        echo "<div algin='center'>�Բ���,û�в��ҵ��ö���!</div>";
                    }
                    else
                    {
                        ?>
                        <table width="530" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                                <td height="35" bgcolor="#59c3ea"><div align="center" style="color:#fff">��ѯ���</div></td>
                            </tr>
                            <tr>
                                <td height="50" bgcolor="#333">
                                <table width="700" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
                                        <tr>
                                            <td width="77" height="35" bgcolor="#FFFFFF">
                                            <div align="center">������</div></td>
                                            <td width="77" bgcolor="#FFFFFF"><div align="center">�µ��û�</div></td>
                                            <td width="77" bgcolor="#FFFFFF"><div align="center">������</div></td>
                                            <td width="77" bgcolor="#FFFFFF"><div align="center">����ܼ�</div></td>
                                            <td width="77" bgcolor="#FFFFFF"><div align="center">���ʽ</div></td>
                                            <td width="77" bgcolor="#FFFFFF"><div align="center">�տʽ</div></td>
                                            <td width="77" bgcolor="#FFFFFF"><div align="center">����״̬</div></td>
                                        </tr>
                                        <?php

                                        do
                                        {

                                            ?>
                                            <tr>
                                                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[dingdanhao];?></div></td>
                                                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[xiadanren];?></div></td>
                                                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[shouhuoren];?></div></td>
                                                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[total];?></div></td>
                                                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[zfff];?></div></td>
                                                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[shff];?></div></td>
                                                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[zt];?></div></td>
                                            </tr>
                                            <?php
                                        }while($info=mysql_fetch_array($sql));
                                        ?>
                                    </table></td>
                            </tr>
                        </table>
                        <?php
                    }
                }
                ?>
        </tr>
    </table>
<?php
include("footer.php");
?>