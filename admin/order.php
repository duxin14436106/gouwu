<?php include("check_login.php"); ?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
	<title>�鿴����</title>
	<link rel="stylesheet" type="text/css" href="adminCss/admincp.css">
	<link rel="stylesheet" type="text/css" href="adminCss/shopmanage.css">
	<style type="text/css">
	</style>
</head>
<body>
<?php
    include("../conn.php");

	   $sql=mysql_query("select count(*) as total from orders ",$conn);
	   $info=mysql_fetch_array($sql);
	   $total=$info[total];
	   
	   if($total==0){
	     echo "��վ���޶���!";
	   }
	   else{
	       $pagesize=25;
		   if ($total<=$pagesize){
		      $pagecount=1;
			}
			if(($total%$pagesize)!=0){
			   $pagecount=intval($total/$pagesize)+1;
			}else{
			   $pagecount=$total/$pagesize;
			}
			if(($_GET[page])==""){
			    $page=1;

			}else{
			    $page=intval($_GET[page]);
			}
           $sql1=mysql_query("select * from orders order by time desc limit ".($page-1)*$pagesize.",$pagesize",$conn);
		   $info1=mysql_fetch_array($sql1);
?>
<table width="950" border="1" align="center" cellpadding="0" cellspacing="0">

	<table width="700" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
		<script language="javascript">
			function chkinput3(form)
			{
				if((form.username.value=="")&&(form.ddh.value==""))
				{
					alert("�������¶����˻򶩵���");
					form.username.select();
					return(false);
				}
				return(true);

			}
		</script>
		<form name="form3" method="post" action="order_search.php" onSubmit="return chkinput3( this)">
			<tr>
				<td height="25"><div align="center">�¶���������:
					<input type="text" name="username" class="inputcss" size="25" >
					������:<input type="text" name="ddh" size="25" class="inputcss" > 
					<input name="button" type="submit" class="buttoncss" id="button" value="�� ��">
				</div>
			</td>
		</tr>

		<input type="hidden" value="show_find" name="show_find">
	</form>
</table>
	</table>
	<form name="form1" method="post" action="order_del.php" style="margin:0">
		<table width="750" border="1" align="center" cellpadding="0" cellspacing="0" class="table-border">
			<tr>
				<td height="50"><div class="shop-query">�鿴���� </div></td>
			</tr>
			<tr>
				<td>
				<table width="750" border="1" align="center" cellpadding="0" cellspacing="1" class="table-border">

					<tr>
						<td><div class="view-order" style="width:260px">������</div></td>
						<td><div class="view-order">�µ���</div></td>
						<td><div class="view-order">������</div></td>
						<td><div class="view-order">����ܼ�</div></td>
						<td><div class="view-order">���ʽ</div></td>
						<td><div class="view-order">�ջ���ʽ</div></td>
						<td><div class="view-order">����״̬</div></td>
						<td><div class="view-order">����</div></td>

					</tr>
					<?php
					do{
						$array=explode("@",$info1[spc]);
						$sum=count($array)*20+260;
						?>
						<tr>
							<td><div class="view-order" style="width:260px"><?php echo $info1[dingdanhao];?></div></td>
							<td><div class="view-order"><?php echo $info1[xiadanren];?></div></td>
							<td><div class="view-order"><?php echo $info1[shouhuoren];?></div></td>
							<td><div class="view-order"><?php echo $info1[total];?></div></td>
							<td><div class="view-order"><?php echo $info1[zfff];?></div></td>
							<td><div class="view-order"><?php echo $info1[shff];?></div></td>
							<td><div class="view-order"><?php echo $info1[zt];?></div></td>
							<td><div class="view-order" style="width:150px">

								&nbsp;
								<input name="button2" type="button" class="buttoncss" id="button2" onClick="javascript:window.location='order_view.php?id=<?php echo $info1[id];?>';" value="������">
								<input type="checkbox"  name=<?php echo $info1[id];?> value=<?php echo $info1[id];?>></div></td>
							</tr>
							<?php
						}while($info1=mysql_fetch_array($sql1))
						?>

					</table></td>
				</tr>
			</table>
			<table width="950" border="0" cellpadding="0" cellspacing="0" style="margin:30px auto">
				<tr>
					<td width="200">
						<div style="text-align:center;font-size:18px">
							��վ���ж���
						<?php
						echo $total;
						?>
						&nbsp;��&nbsp;
						</div>
					</td>
					<td width="652"><div align="right">
						ÿҳ��ʾ&nbsp;<?php echo $pagesize;?>&nbsp;��&nbsp;��&nbsp;<?php echo $page;?>&nbsp;ҳ/��&nbsp;<?php echo $pagecount; ?>&nbsp;ҳ
						<?php
						if($page>=2)
						{
							?>
							<a href="lookdd.php?page=1" title="��ҳ">
								<font face="webdings"> 9 </font><!--windows���õ�һ�������ַ������� 9����>>-->
							</a>
							<a href="lookdd.php?id=<?php echo $id;?>&page=<?php echo $page-1;?>" title="ǰһҳ">
								<font face="webdings"> 7 </font>
							</a>
							<?php
						}
						if($pagecount<=4){
							for($i=1;$i<=$pagecount;$i++){
								?>
								<a href="lookdd.php?page=<?php echo $i;?>"><?php echo $i;?></a>
								<?php
							}
						}else{
							for($i=1;$i<=4;$i++){
								?>
								<a href="lookdd.php?page=<?php echo $i;?>"><?php echo $i;?></a>
								<?php }?>
								<a href="lookdd.php?page=<?php echo $page-1;?>" title="��һҳ"><font face="webdings"> 8 </font></a>
								<a href="lookdd.php?id=<?php echo $id;?>&page=<?php echo $pagecount;?>" title="βҳ"><font face="webdings"> : </font></a>
								<?php }?>

							</div></td>
							<td width="98"><div align="center"><input type="hidden" name="page_id" value=<?php echo $page;?>><input type="submit" value="ɾ��ѡ����" class="buttoncss" onclick="return confirm('ȷ��Ҫɾ����');"></div></td>
						</tr>
					</table>
<?php
 }
?>
</form>
</body>
</html>
