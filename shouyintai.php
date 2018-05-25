<?php
include("header.php");
?>
<table width="950" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td height="438" valign="top" bgcolor="#FFFFFF"><div align="center">

                <table width="950"  border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td height="33" bgcolor="#59c3ea">
                            <div align="center" >收货人信息</div></td>
                    </tr>
                    <tr>
                        <td height="300" >
                            <table width="530" height="284" border="0" align="center" cellpadding="0" cellspacing="1" class="table-border">
                                <script language="javascript">
                                    function chkinput(form)
                                    {
                                        if(form.name.value=="")
                                        {
                                            alert("请输入收货人姓名!");
                                            form.name.select();
                                            return(false);

                                        }
                                        if(form.dz.value=="")
                                        {
                                            alert("请输入收货人地址!");
                                            form.dz.select();
                                            return(false);

                                        }
                                        if(form.yb.value=="")
                                        {
                                            alert("请输入收货人邮编!");
                                            form.yb.select();
                                            return(false);

                                        }
                                        if(form.tel.value=="")
                                        {
                                            alert("请输入收货人联系电话!");
                                            form.tel.select();
                                            return(false);

                                        }
                                        if(form.email.value=="")
                                        {
                                            alert("请输入收货人E-mail地址!");
                                            form.email.select();
                                            return(false);

                                        }
                                        if(form.email.value.indexOf("@")<0)
                                        {
                                            alert("收货人E-mail地址格式输入错误!");
                                            form.email.select();
                                            return(false);

                                        }
                                        return(true);

                                    }

                                </script>
                                <form name="form1" method="post" action="savedd.php" onSubmit="return chkinput(this)">
                                    <tr>
                                        <td width="100" height="25" bgcolor="#FFFFFF">
                                            <div style="width:100px">收货人姓名：</div></td>
                                        <td width="175" bgcolor="#FFFFFF">
                                            <div align="left">
                                                <input type="text" name="name2" size="25" class="inputcss" >
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="85" bgcolor="#FFFFFF">
                                            <div align="center">性别：</div></td>
                                        <td width="176" bgcolor="#FFFFFF"><div align="left">
                                                <select name="sex">
                                                    <option selected value="男">男</option>
                                                    <option value="女">女</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="25" bgcolor="#FFFFFF"><div align="center">详细地址：</div></td>
                                        <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                                                <input name="dz" type="text" class="inputcss" id="dz"  size="25">
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td height="25" bgcolor="#FFFFFF"><div align="center">邮政编码：</div></td>
                                        <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                                                <input type="text" name="yb" size="25" class="inputcss" >
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td height="25" bgcolor="#FFFFFF"><div align="center">联系电话：</div></td>
                                        <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                                                <input type="text" name="tel" size="25" class="inputcss" >
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td height="25" bgcolor="#FFFFFF"><div align="center">送货方式：</div></td>
                                        <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                                                <select name="shff" id="shff">

                                                    <option value="特快专递">快递</option>
                                                    <option value="送货上门">送货上门</option>


                                                </select>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td height="25" bgcolor="#FFFFFF"><div align="center">支付方式：</div></td>
                                        <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                                                <select name="zfff" id="zfff">
                                                    <option selected value="微信">微信</option>
                                                    <option value="支付宝">支付宝</option>

                                                    <option value="网上支付">网上支付</option>
                                                </select>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td height="100" bgcolor="#FFFFFF"><div align="center">简单留言：</div></td>
                                        <td height="100" colspan="3" bgcolor="#FFFFFF"><div align="left">
                                                <textarea name="ly" cols="60" rows="8" class="inputcss" ></textarea>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td height="25" colspan="4" bgcolor="#FFFFFF"><div align="center">
                                                <input name="submit2" type="submit" class="buttoncss" value="提交订单">
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
