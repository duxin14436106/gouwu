<?php
include("header.php");
?>
    <script language="javascript">
        function chknc(nc)
        {
            window.open("chkusernc.php?nc="+nc,"newframe","width=200,height=10,left=500,top=200,menubar=no,toolbar=no,location=no,scrollbars=no,location=no");
        }
    </script>
    <script language="javascript">
        function chkinput(form)
        {
            if(form.usernc.value=="")
            {
                alert("�������ʺ�!");
                form.usernc.select();
                return(false);
            }
            if(form.p1.value=="")
            {
                alert("������ע������!");
                form.p1.select();
                return(false);
            }
            if(form.p2.value=="")
            {
                alert("������ȷ������!");
                form.p2.select();
                return(false);
            }
            if(form.p1.value.length<6)
            {
                alert("ע�����볤��Ӧ����6!");
                form.p1.select();
                return(false);
            }
            if(form.p1.value!=form.p2.value)
            {
                alert("�������ظ����벻ͬ!");
                form.p1.select();
                return(false);
            }
            if(form.email.value=="")
            {
                alert("��������������ַ!");
                form.email.select();
                return(false);
            }
            if(form.email.value.indexOf('@')<0)
            {
                alert("��������ȷ�ĵ��������ַ!");
                form.email.select();
                return(false);
            }
            if(form.tel.value=="")
            {
                alert("��������ϵ�绰!");
                form.tel.select();
                return(false);
            }
            if(form.truename.value=="")
            {
                alert("��������ʵ����!");
                form.truename.select();
                return(false);
            }
            if(form.sfzh.value=="")
            {
                alert("���������֤��!");
                form.sfzh.select();
                return(false);
            }
            if(form.dizhi.value=="")
            {
                alert("�������ͥסַ!");
                form.dizhi.select();
                return(false);
            }
            if(form.tsda.value=="")
            {
                alert("����������ʾ��!");
                form.tsda.select();
                return(false);
            }
            if((form.ts1.value==1)&&(form.ts2.value==""))
            {
                alert("��ѡ�������������ʾ��!");
                form.ts2.select();
                return(false);
            }
            return(true);
        }
    </script>
    <table width="950" height="350" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td width="950" height="350" align="center" valign="top" bgcolor="#FFFFFF">
                <table width="950"  height="15" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="700">
                            <table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td height="33" bgcolor="#59c3ea"><div style="color: #fff;text-align: center;font-size: 18px">�û�ע��</div></td>
                                </tr>
                                <tr>
                                    <td  ><table width="380" border="0" align="center" cellpadding="0" cellspacing="1">
                                            <form name="form1" method="post" action="savereg.php" onSubmit="return chkinput(this)">
                                                <tr>
                                                    <td width="100" height="20" bgcolor="#FFFFFF"><div align="center" class="label-txt">�û��ʺţ�</div></td>
                                                    <td width="397" bgcolor="#FFFFFF"><div align="left">
                                                            <input type="text" name="usernc" size="25" class="inputcss input-border" >
                                                            <span style="color: #FF0000">*</span>&nbsp;

                                                        </div></td>
                                                </tr>
                                                <tr>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="center" class="label-txt">ע�����룺</div></td>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="left">
                                                            <input type="password" name="p1" size="25" class="inputcss input-border" >
                                                            <span style="color: #FF0000">*</span></div></td>
                                                </tr>
                                                <tr>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="center" class="label-txt">ȷ�����룺</div></td>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="left">
                                                            <input type="password" name="p2" size="25" class="inputcss input-border" >
                                                            <span style="color: #FF0000">*</span></div></td>
                                                </tr>
                                                <tr>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="center" class="label-txt">E-mail��</div></td>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="left">
                                                            <input type="text" name="email" size="25" class="inputcss input-border" >
                                                            <span style="color: #FF0000">*</span></div></td>
                                                </tr>
                                                <tr>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="center" class="label-txt">QQ���룺</div></td>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="left">
                                                            <input type="text" name="qq" size="25" class="inputcss input-border" >
                                                        </div></td>
                                                </tr>
                                                <tr>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="center" class="label-txt">�������룺</div></td>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="left">
                                                            <input type="text" name="yb" size="25" class="inputcss input-border" >
                                                        </div></td>
                                                </tr>
                                                <tr>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="center" class="label-txt">��ϵ�绰��</div></td>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="left">
                                                            <input type="text" name="tel" size="25" class="inputcss input-border" >
                                                            <span style="color: #FF0000">*</span></div></td>
                                                </tr>
                                                <tr>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="center" class="label-txt">��ʵ������</div></td>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="left">
                                                            <input type="text" name="truename" size="25" class="inputcss input-border" >
                                                            <span style="color: #FF0000">*</span> </div></td>
                                                </tr>
                                                <tr>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="center" class="label-txt">���֤�ţ�</div></td>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="left">
                                                            <input type="text" name="sfzh" size="25" class="inputcss input-border" >
                                                            <span style="color: #FF0000">*</span></div></td>
                                                </tr>
                                                <tr>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="center" class="label-txt">�ʼĵ�ַ��</div></td>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="left">
                                                            <input type="text" name="dizhi" size="25" class="inputcss input-border" >
                                                            <span style="color: #FF0000">*</span></div></td>
                                                </tr>

                                                <tr>
                                                    <td height="20" colspan="2" bgcolor="#FFFFFF">
                                                        <div align="center">
                                                            <input name="submit2" type="submit" class="buttoncss input-submit" value="�ύ">
                                                            &nbsp;&nbsp;
                                                            <input name="reset" type="reset" class="buttoncss input-submit" value="��д">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </form>
                                        </table></td>
                                </tr>
                            </table>
                            <br>
                            <table width="500" height="33" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="500"><div align="center" style="color: #FF0000">ע�⣺��*Ϊ��������!</div></td>
                                </tr>
                            </table></td>
                    </tr>
                </table>
                </div>
            </td>
        </tr>
    </table>
    <br><br><br>
<?php
include("footer.php");
?>