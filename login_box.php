<script language="javascript">
    function chkuserinput(form){
        if(form.username.value==""){
            alert("�������û���!");
            form.username.select();
            return(false);
        }
        if(form.userpwd.value==""){
            alert("�������û�����!");
            form.userpwd.select();
            return(false);
        }
        if(form.yz.value==""){
            alert("��������֤��!");
            form.yz.select();
            return(false);
        }
        return(true);
    }
</script>
<form name="userlogin" method="post" action="chkuser.php">
    <TABLE border=0 cellPadding=0 cellSpacing=0>
        <tr>
            <TD width="180" height="35" class="menu_left">&nbsp;&nbsp;��Ա����</TD>
        </tr>
        <?php
        if($_SESSION[username]=="")
        {
            ?>
            <tr>
                <td class="user-img"><img src="./images/user.jpg" alt="ͷ��"></td>
            </tr>
            <tr>
                <td align="center"><font color="#FF6633">�˿�����,������Ʒ���ȵ�¼</font></td>
            </tr>
            <tr>
                <td align="center">
                    <span>�û�����</span>
                    <input type="text" class="wenbenkuang" name="username" size="14">
                </td>
            </tr>
            <tr>
                <td align="center">
                    <span>�ܡ��룺</span>
                    <input type="password" class="wenbenkuang" name="userpwd" size="14">
                </td>
            </tr>
            <tr>
                <td class="user-codes">��֤�룺
                    <input class=wenbenkuang name=yz type=text value="" maxLength=4 size=6>
                    <span class="user-code">
 					<?php
                    $num=intval(mt_rand(1000,9999));
                    for($i=0;$i<4;$i++){
                        echo "<img src=images/code/".substr(strval($num),$i,1).".gif>";
                    }
                    ?>
 					</span>
                </td>
            </tr>
            <tr><input type="hidden" value="<?php echo $num;?>" name="num">
                <td align="center" height="38">
                    <input class="user-sub" name="imageField" value="�� ½" type="submit" onFocus="this.blur()">
                    <input class="user-sub" onClick="window.location='reg.php'" type="reset" value="ע ��" name=Submit2>

                </td>
            </tr>
            <?php
        }
        else
        {
            ?>
            <tr>
                <td class="user-img"><img src="./images/user.jpg" alt="ͷ��"></td>
            </tr>
            <tr>
                <td align="center">
                    <p align=center>��ӭ����:<span style="color:#FF6633"><?php echo $_SESSION[username]?></span><br>
                        <font color="#FF6633" size=+1>
                            <span class="user-center"><a href=user.php>�û�����</a></span>
                            <span class="user-center"><a href=changeuserpwd.php>�޸�����</a></span><br>
                            <span class="user-center"><a href=logout.php>�˳���¼</a></span>
                        </font>
                    </p>
                </td>
            </tr>
            <?php
        }
        ?>
    </table></form>