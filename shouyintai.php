<?php
include("header.php");
?>
<table width="950" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td height="438" valign="top" bgcolor="#FFFFFF"><div align="center">

                <table width="950"  border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td height="33" bgcolor="#59c3ea">
                            <div align="center" >�ջ�����Ϣ</div></td>
                    </tr>
                    <tr>
                        <td height="300" >
                            <table width="530" height="284" border="0" align="center" cellpadding="0" cellspacing="1" class="table-border">
                                <script language="javascript">
                                    function chkinput(form)
                                    {
                                        if(form.name.value=="")
                                        {
                                            alert("�������ջ�������!");
                                            form.name.select();
                                            return(false);

                                        }
                                        if(form.dz.value=="")
                                        {
                                            alert("�������ջ��˵�ַ!");
                                            form.dz.select();
                                            return(false);

                                        }
                                        if(form.yb.value=="")
                                        {
                                            alert("�������ջ����ʱ�!");
                                            form.yb.select();
                                            return(false);

                                        }
                                        if(form.tel.value=="")
                                        {
                                            alert("�������ջ�����ϵ�绰!");
                                            form.tel.select();
                                            return(false);

                                        }
                                        if(form.email.value=="")
                                        {
                                            alert("�������ջ���E-mail��ַ!");
                                            form.email.select();
                                            return(false);

                                        }
                                        if(form.email.value.indexOf("@")<0)
                                        {
                                            alert("�ջ���E-mail��ַ��ʽ�������!");
                                            form.email.select();
                                            return(false);

                                        }
                                        return(true);

                                    }

                                </script>
                                <form name="form1" method="post" action="savedd.php" onSubmit="return chkinput(this)">
                                    <tr>
                                        <td width="100" height="25" bgcolor="#FFFFFF">
                                            <div style="width:100px">�ջ���������</div></td>
                                        <td width="175" bgcolor="#FFFFFF">
                                            <div align="left">
                                                <input type="text" name="name2" size="25" class="inputcss" >
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="85" bgcolor="#FFFFFF">
                                            <div align="center">�Ա�</div></td>
                                        <td width="176" bgcolor="#FFFFFF"><div align="left">
                                                <select name="sex">
                                                    <option selected value="��">��</option>
                                                    <option value="Ů">Ů</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="25" bgcolor="#FFFFFF"><div align="center">��ϸ��ַ��</div></td>
                                        <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                                                <input name="dz" type="text" class="inputcss" id="dz"  size="25">
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td height="25" bgcolor="#FFFFFF"><div align="center">�������룺</div></td>
                                        <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                                                <input type="text" name="yb" size="25" class="inputcss" >
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td height="25" bgcolor="#FFFFFF"><div align="center">��ϵ�绰��</div></td>
                                        <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                                                <input type="text" name="tel" size="25" class="inputcss" >
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td height="25" bgcolor="#FFFFFF"><div align="center">�ͻ���ʽ��</div></td>
                                        <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                                                <select name="shff" id="shff">

                                                    <option value="�ؿ�ר��">���</option>
                                                    <option value="�ͻ�����">�ͻ�����</option>


                                                </select>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td height="25" bgcolor="#FFFFFF"><div align="center">֧����ʽ��</div></td>
                                        <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                                                <select name="zfff" id="zfff">
                                                    <option selected value="΢��">΢��</option>
                                                    <option value="֧����">֧����</option>

                                                    <option value="����֧��">����֧��</option>
                                                </select>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td height="100" bgcolor="#FFFFFF"><div align="center">�����ԣ�</div></td>
                                        <td height="100" colspan="3" bgcolor="#FFFFFF"><div align="left">
                                                <textarea name="ly" cols="60" rows="8" class="inputcss" ></textarea>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td height="25" colspan="4" bgcolor="#FFFFFF"><div align="center">
                                                <input name="submit2" type="submit" class="buttoncss" value="�ύ����">
                                            </div></td>
                                    </tr>
                                </form>
                            </table></td>
                    </tr>
                </table>
            </div></td>
    </tr>
</table>
<?php
include("footer.php");
if($_GET[ordershao]!="")
{  $dd=$_GET[ordershao];
    session_start();

    $array=explode("@",$_SESSION[producelist]);
    $sum=count($array)*20+260;
    echo" <script language='javascript'>";
    echo" location.href='showdd.php?dd='+'".$dd."'";
    echo "</script>";

}
?>
