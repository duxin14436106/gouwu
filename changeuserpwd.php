<?php
include("header.php");

?>

    <table width="950" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td valign="top" style="margin-top: 29px;>

                <div class="top-censter">
                    <table width="700" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                            <td height="30"><div class="user-brand w700">�޸��û�����</div></td>
                        </tr>
                        <tr>
                            <td>
                                <table width="250" height="80" border="0" align="center" cellpadding="0" cellspacing="1">
                                    <script language="javascript">
                                        function chkinput1(form)
                                        {
                                            if(form.p1.value=="")
                                            {
                                                alert("������ԭ����!");
                                                form.p1.select();
                                                return(false);
                                            }
                                            if(form.p2.value=="")
                                            {
                                                alert("����������!");
                                                form.p2.select();
                                                return(false);
                                            }
                                            if(form.p3.value=="")
                                            {
                                                alert("����ȷ������!");
                                                form.p3.select();
                                                return(false);
                                            }
                                            if(form.p2.value!=form.p3.value)
                                            {
                                                alert("������ȷ�����벻ͬ!");
                                                form.p2.select();
                                                return(false);
                                            }
                                            if(form.p2.value.length<6)
                                            {
                                                alert("�����볤��Ӧ����6!");
                                                form.p2.select();
                                                return(false);
                                            }
                                            return(true);
                                        }
                                    </script>
                                    <form name="form1" method="post" action="pwdsave.php" onSubmit="return chkinput1(this)">
                                        <tr>
                                            <td width="150" height="30">

                                                <div class="change-pwd" style="margin-left: 35px; ">�û�����</div></td>
                                            <td width="170">
                                                <div align="left">
                                                    <input type="text" name="p1" size="20" class="inputcss change-box"                                                          value="<?php echo $_SESSION[username]?>">

                                                </div></td>
                                        </tr>
                                        <tr>
                                            <td width="150" height="30">

                                                <div class="change-pwd" style="margin-left: 35px; ">ԭ���룺</div></td>
                                            <td width="170"><div align="left">
                                                    <input type="password" name="p1" size="20" class="inputcss change-box">
                                                </div></td>
                                        </tr>
                                        <tr>
                                            <td height="20">
                                                <div class="change-pwd" style="margin-left: 35px; ">�����룺</div></td>
                                            <td height="20">
                                                <div align="left">
                                                    <input type="password" name="p2" size="20" class="inputcss change-box">
                                                </div></td>
                                        </tr>
                                        <tr>
                                            <td height="20">
                                                <div class="change-pwd">ȷ�������룺</div></td>
                                            <td height="20">
                                                <div align="left">
                                                    <input type="password" name="p3" size="20" class="inputcss change-box">
                                                </div></td>
                                        </tr>
                                        <tr>
                                            <td height="20" colspan="2">
                                                <div align="center">
                                                    <input name="submit2" type="submit" class="buttoncss change-button" value="����">
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
?>