<?php
include("header.php");
session_start();
if($_SESSION[username]=="")
{
    echo "<script>alert('����û�е�¼,���ȵ�¼!');history.back();</script>";
    exit;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td valign="top" style="margin-top: 30px;>

            <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr valign="top" style="margin-top: 29px;">
                    <td height="33" bgcolor="#59c3ea">
                        <div align="center" style="font-size:18px;line-height: 33px;color: #FFF"><?php echo $_SESSION[username];?>��������Ϣ</div></td>
                </tr>
                <tr>
                    <td height="160" >
                        <table width="400" height="160" border="0" align="center" cellpadding="0" cellspacing="1">
                            <script language="javascript">
                                function chkinput1(form)
                                {
                                    if(form.email.value=="")
                                    {
                                        alert("�������䲻��Ϊ��!");
                                        form.email.select();
                                        return(false);
                                    }
                                    if(form.email.value.indexOf('@')<0)
                                    {
                                        alert("���������������!");
                                        form.email.select();
                                        return(false);
                                    }
                                    if(form.truename.value=="")
                                    {
                                        alert("��ʵ��������Ϊ��!");
                                        form.truename.select();
                                        return(false);
                                    }
                                    if(form.sfzh.value=="")
                                    {
                                        alert("���֤�Ų���Ϊ��!");
                                        form.sfzh.select();
                                        return(false);
                                    }
                                    if(form.tel.value=="")
                                    {
                                        alert("��ϵ�绰����Ϊ��!");
                                        form.tel.select();
                                        return(false);
                                    }
                                    if(form.dizhi.value=="")
                                    {
                                        alert("��ϵ��ַ����Ϊ��!");
                                        form.dizhi.select();
                                        return(false);
                                    }

                                    return(true);
                                }
                            </script>
                            <form name="form1" method="post" action="changeuser.php" onsubmit="return chkinput1(this)">
                                <?php
                                $sql=mysql_query("select * from user where name='".$_SESSION[username]."'",$conn);
                                $info=mysql_fetch_array($sql);

                                ?>
                                <tr>
                                    <td width="100" height="20" bgcolor="#FFFFFF"><div align="center" class="label-txt">�ǳƣ�</div></td>
                                    <td width="397" bgcolor="#FFFFFF"><div align="left" class="label-txt"><?php echo $_SESSION[username];?></div></td>
                                </tr>
                                <tr>
                                    <td height="20" bgcolor="#FFFFFF"><div align="center" class="label-txt">��ʵ������</div></td>
                                    <td height="20" bgcolor="#FFFFFF"><div align="left">
                                            <input type="text" name="truename" size="25" class="inputcssnull input-border" value="<?php echo $info[truename];?>">
                                        </div></td>
                                </tr>
                                <tr>
                                    <td height="20" bgcolor="#FFFFFF"><div align="center" class="label-txt">E-mail��</div></td>
                                    <td height="20" bgcolor="#FFFFFF"><div align="left">
                                            <input type="text" name="email" size="25" class="inputcssnull input-border" value="<?php echo $info[email];?>">
                                        </div></td>
                                </tr>
                                <tr>
                                    <td height="20" bgcolor="#FFFFFF"><div align="center" class="label-txt">QQ���룺</div></td>
                                    <td height="20" bgcolor="#FFFFFF"><div align="left">
                                            <input type="text" name="qq" size="25" class="inputcssnull input-border" value="<?php echo $info[qq];?>">
                                        </div></td>
                                </tr>
                                <tr>
                                    <td height="20" bgcolor="#FFFFFF"><div align="center" class="label-txt">��ϵ�绰��</div></td>
                                    <td height="20" bgcolor="#FFFFFF"><div align="left">
                                            <input type="text" name="tel" size="25" class="inputcssnull input-border" value="<?php echo $info[tel];?>">
                                        </div></td>
                                </tr>
                                <tr>
                                    <td height="20" bgcolor="#FFFFFF"><div align="center" class="label-txt">��ͥסַ��</div></td>
                                    <td height="20" bgcolor="#FFFFFF"><div align="left">
                                            <input type="text" name="dizhi" size="25" class="inputcssnull input-border" value="<?php echo $info[dizhi];?>">
                                        </div></td>
                                </tr>
                                <tr>
                                    <td height="20" bgcolor="#FFFFFF"><div align="center" class="label-txt">�������룺</div></td>
                                    <td height="20" bgcolor="#FFFFFF"><div align="left">
                                            <input type="text" name="youbian" size="25" class="inputcssnull input-border" value="<?php echo $info[youbian];?>">
                                        </div></td>
                                </tr>
                                <tr>
                                    <td height="20" bgcolor="#FFFFFF"><div align="center" class="label-txt">���֤�ţ�</div></td>
                                    <td height="20" bgcolor="#FFFFFF"><div align="left">
                                            <input type="text" name="sfzh" size="25" class="inputcssnull input-border" value="<?php echo $info[sfzh];?>">
                                        </div></td>
                                </tr>
                                <tr>
                                    <td height="20" colspan="2" bgcolor="#FFFFFF"><div align="center">
                                            <input name="submit2" type="submit" class="buttoncss input-submit" value="����">
                                            &nbsp;&nbsp;
                                            <input name="reset" type="reset" class="buttoncss input-submit" value="ȡ������">
                                        </div></td>
                                </tr>
                            </form>
                        </table></td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<br><br><br>
<?php
include("footer.php");
?>
