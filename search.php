<?php
 include("conn.php");
 include("header.php");
?>
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top"><table width="700" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table>
    <?php

    if($dx=="1"){
    	$dx=">";
    }
    elseif($dx=="-1"){
    	$dx="<";
    }
    else{
    	$dx="=";
    }
    $jg=intval($_POST[jg]);

    $lb=$_POST[lb];
    if($jdcz!=""){
    	$sql=mysql_query("select * from goods where mingcheng like '%".$name."%' order by addtime desc",$conn);
    }
    else
    {
    	if($mh=="1"){
    		$sql=mysql_query("select * from goods where huiyuanjia $dx".$jg." and typeid='".$lb."' and mingcheng like '%".$name."%'",$conn);

    	}
    	else{
    		$sql=mysql_query("select * from goods where huiyuanjia $dx".$jg." and typeid='".$lb."' and mingcheng = '".$name."'",$conn);
    	}
    }
    $info=mysql_fetch_array($sql);
    if($info==false){
    	echo "<script language='javascript'>alert('本站暂无类似产品!');history.go(-1);</script>";
    }
    else{
    	?>
    	<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
    		<tr bgcolor="#E7F3FB">
    			<td width="92" height="25"><div align="center" >名称</div></td>
    			<td width="83"><div align="center" >品牌</div></td>
    			<td width="62"><div align="center" >市场价</div></td>
    			<td width="62"><div align="center" >会员价</div></td>
    			<td width="161"><div align="center" >上市时间</div></td>
    			<td width="48"><div align="center" ></div></td>
    			<td width="42"><div align="center" >操作</div></td>
    		</tr>
    		<?php
    		do{
    			?>
    			<tr>
    				<td height="25"><div align="center"><?php echo $info[mingcheng];?></div></td>
    				<td height="25"><div align="center"><?php echo $info[pinpai];?></div></td>
    				<td height="25"><div align="center"><?php echo $info[shichangjia];?></div></td>
    				<td height="25"><div align="center"><?php echo $info[huiyuanjia];?></div></td>
    				<td height="25"><div align="center"><?php echo $info[addtime];?></div></td>
    				<td height="25"><div align="center"><a href="good_view.php?id=<?php echo $info[id];?>">查看</a></div></td>
    				<td height="25"><div align="center"><a href="shopping.php?id=<?php echo $info[id];?>">购物</a></div></td>
    			</tr>
    			<?php
    		}while($info=mysql_fetch_array($sql));
    	}
    	?>
    </table></td>

  </tr>
</table>
<?php
 include("footer.php");
?>