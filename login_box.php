<script language="javascript">
    function chkuserinput(form){
        if(form.username.value==""){
            alert("请输入用户名!");
            form.username.select();
            return(false);
        }
        if(form.userpwd.value==""){
            alert("请输入用户密码!");
            form.userpwd.select();
            return(false);
        }
        if(form.yz.value==""){
            alert("请输入验证码!");
            form.yz.select();
            return(false);
        }
        return(true);
    }
</script>
<form name="userlogin" method="post" action="chkuser.php">
    <TABLE border=0 cellPadding=0 cellSpacing=0>
        <tr>
            <TD width="180" height="35" class="menu_left">&nbsp;&nbsp;会员中心</TD>
        </tr>
        <?php
        if($_SESSION[username]=="")
        {
            ?>
            <tr>
                <td class="user-img"><img src="./images/user.jpg" alt="头像"></td>
            </tr>
            <tr>
                <td align="center"><font color="#FF6633">顾客您好,购买商品请先登录</font></td>
            </tr>
            <tr>
                <td align="center">
                    <span>用户名：</span>
                    <input type="text" class="wenbenkuang" name="username" size="14">
                </td>
            </tr>
            <tr>
                <td align="center">
                    <span>密　码：</span>
                    <input type="password" class="wenbenkuang" name="userpwd" size="14">
                </td>
            </tr>
            <tr>
                <td class="user-codes">验证码：
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
                    <input class="user-sub" name="imageField" value="登 陆" type="submit" onFocus="this.blur()">
                    <input class="user-sub" onClick="window.location='reg.php'" type="reset" value="注 册" name=Submit2>

                </td>
            </tr>
            <?php
        }
        else
        {
            ?>
            <tr>
                <td class="user-img"><img src="./images/user.jpg" alt="头像"></td>
            </tr>
            <tr>
                <td align="center">
                    <p align=center>欢迎回来:<span style="color:#FF6633"><?php echo $_SESSION[username]?></span><br>
                        <font color="#FF6633" size=+1>
                            <span class="user-center"><a href=user.php>用户中心</a></span>
                            <span class="user-center"><a href=changeuserpwd.php>修改密码</a></span><br>
                            <span class="user-center"><a href=logout.php>退出登录</a></span>
                        </font>
                    </p>
                </td>
            </tr>
            <?php
        }
        ?>
    </table></form>