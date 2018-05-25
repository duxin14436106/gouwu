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
                alert("请输入帐号!");
                form.usernc.select();
                return(false);
            }
            if(form.p1.value=="")
            {
                alert("请输入注册密码!");
                form.p1.select();
                return(false);
            }
            if(form.p2.value=="")
            {
                alert("请输入确认密码!");
                form.p2.select();
                return(false);
            }
            if(form.p1.value.length<6)
            {
                alert("注册密码长度应大于6!");
                form.p1.select();
                return(false);
            }
            if(form.p1.value!=form.p2.value)
            {
                alert("密码与重复密码不同!");
                form.p1.select();
                return(false);
            }
            if(form.email.value=="")
            {
                alert("请输入电子邮箱地址!");
                form.email.select();
                return(false);
            }
            if(form.email.value.indexOf('@')<0)
            {
                alert("请输入正确的电子邮箱地址!");
                form.email.select();
                return(false);
            }
            if(form.tel.value=="")
            {
                alert("请输入联系电话!");
                form.tel.select();
                return(false);
            }
            if(form.truename.value=="")
            {
                alert("请输入真实姓名!");
                form.truename.select();
                return(false);
            }
            if(form.sfzh.value=="")
            {
                alert("请输入身份证号!");
                form.sfzh.select();
                return(false);
            }
            if(form.dizhi.value=="")
            {
                alert("请输入家庭住址!");
                form.dizhi.select();
                return(false);
            }
            if(form.tsda.value=="")
            {
                alert("请输密码提示答案!");
                form.tsda.select();
                return(false);
            }
            if((form.ts1.value==1)&&(form.ts2.value==""))
            {
                alert("请选择或输入密码提示答案!");
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
                                    <td height="33" bgcolor="#59c3ea"><div style="color: #fff;text-align: center;font-size: 18px">用户注册</div></td>
                                </tr>
                                <tr>
                                    <td  ><table width="380" border="0" align="center" cellpadding="0" cellspacing="1">
                                            <form name="form1" method="post" action="savereg.php" onSubmit="return chkinput(this)">
                                                <tr>
                                                    <td width="100" height="20" bgcolor="#FFFFFF"><div align="center" class="label-txt">用户帐号：</div></td>
                                                    <td width="397" bgcolor="#FFFFFF"><div align="left">
                                                            <input type="text" name="usernc" size="25" class="inputcss input-border" >
                                                            <span style="color: #FF0000">*</span>&nbsp;

                                                        </div></td>
                                                </tr>
                                                <tr>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="center" class="label-txt">注册密码：</div></td>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="left">
                                                            <input type="password" name="p1" size="25" class="inputcss input-border" >
                                                            <span style="color: #FF0000">*</span></div></td>
                                                </tr>
                                                <tr>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="center" class="label-txt">确认密码：</div></td>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="left">
                                                            <input type="password" name="p2" size="25" class="inputcss input-border" >
                                                            <span style="color: #FF0000">*</span></div></td>
                                                </tr>
                                                <tr>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="center" class="label-txt">E-mail：</div></td>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="left">
                                                            <input type="text" name="email" size="25" class="inputcss input-border" >
                                                            <span style="color: #FF0000">*</span></div></td>
                                                </tr>
                                                <tr>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="center" class="label-txt">QQ号码：</div></td>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="left">
                                                            <input type="text" name="qq" size="25" class="inputcss input-border" >
                                                        </div></td>
                                                </tr>
                                                <tr>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="center" class="label-txt">邮政编码：</div></td>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="left">
                                                            <input type="text" name="yb" size="25" class="inputcss input-border" >
                                                        </div></td>
                                                </tr>
                                                <tr>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="center" class="label-txt">联系电话：</div></td>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="left">
                                                            <input type="text" name="tel" size="25" class="inputcss input-border" >
                                                            <span style="color: #FF0000">*</span></div></td>
                                                </tr>
                                                <tr>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="center" class="label-txt">真实姓名：</div></td>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="left">
                                                            <input type="text" name="truename" size="25" class="inputcss input-border" >
                                                            <span style="color: #FF0000">*</span> </div></td>
                                                </tr>
                                                <tr>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="center" class="label-txt">身份证号：</div></td>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="left">
                                                            <input type="text" name="sfzh" size="25" class="inputcss input-border" >
                                                            <span style="color: #FF0000">*</span></div></td>
                                                </tr>
                                                <tr>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="center" class="label-txt">邮寄地址：</div></td>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="left">
                                                            <input type="text" name="dizhi" size="25" class="inputcss input-border" >
                                                            <span style="color: #FF0000">*</span></div></td>
                                                </tr>

                                                <tr>
                                                    <td height="20" colspan="2" bgcolor="#FFFFFF">
                                                        <div align="center">
                                                            <input name="submit2" type="submit" class="buttoncss input-submit" value="提交">
                                                            &nbsp;&nbsp;
                                                            <input name="reset" type="reset" class="buttoncss input-submit" value="重写">
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
                                    <td width="500"><div align="center" style="color: #FF0000">注意：带*为必添内容!</div></td>
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