<?php include("check_login.php"); ?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
	<title>�û�����</title>
	<link rel="stylesheet" type="text/css" href="adminCss/admincp.css">
	<link rel="stylesheet" type="text/css" href="adminCss/shopmanage.css">
</head>

<body>
<?php
       include("../conn.php");
       $sql=mysql_query("select count(*) as total from user ",$conn);
	   $info=mysql_fetch_array($sql);
	   $total=$info[total];
	   if($total==0)
	   {
	     echo "��վ�����û�ע��!";
	   }
	   else
	   {

?>


<form name="form1" method="post" action="user_del.php" style="margin:0 auto">
<table width="750" border="1" align="center" cellpadding="0" cellspacing="0">

  <tr>
    <td height="50"><div class="user-edit" >�û�����</div></td>
  </tr>
  <tr>
    <td>
    <table width="750" border="1" align="center" cellpadding="0" cellspacing="1">
       <?php
	     $pagesize=20;
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

             $sql1=mysql_query("select * from user  order by regtime desc limit ".($page-1)*$pagesize.",$pagesize ",$conn);


	   ?>
	   <tr>
          <td ><div class="user-edit-menu">�û��ǳ�</div></td>
          <td ><div class="user-edit-menu">�û�״̬</div></td>
          <td ><div class="user-edit-menu">ɾ��</div></td>
          <td ><div class="user-edit-menu">�鿴��Ϣ</div></td>

        </tr>
       <?php
	      while($info1=mysql_fetch_array($sql1))
		     {
	   ?>
	   <tr>
	   	<td><div class="user-edit-menu"><?php echo $info1[name];?></div></td>
	   	<td><div class="user-edit-menu">
	   		<?php
	   		if($info1[dongjie]==0)
	   		{
	   			echo "����";
	   		}
	   		else
	   		{
	   			echo "����";
	   		}


	   		?>
	   	</div></td>
	   	<td>
	   		<div align="center">
	   			<input type="checkbox" name="<?php echo $info1[id];?>" value=<?php echo $info1[id];?>></div></td>
	   			<td>
	   				<div align="center">
	   					<a href="user_view.php?id=<?php echo $info1[id];?>">�鿴�û�</a></div></td>

	   				</tr>
	   				<?php
	   			}

	   			?>
	   		</table></td>
  </tr>
</table>
<table width="600" height="33" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="508"><div align="left">
	&nbsp;��վ����ע���û�&nbsp;<?php
		   echo $total;
		  ?>&nbsp;λ&nbsp;ÿҳ��ʾ&nbsp;<?php echo $pagesize;?>&nbsp;λ&nbsp;��&nbsp;<?php echo $page;?>&nbsp;ҳ/��&nbsp;<?php echo $pagecount; ?>&nbsp;ҳ
        <?php
		  if($page>=2)
		  {
		  ?>
        <a href="edituser.php?page=1" title="��ҳ"><font face="webdings"> 9 </font></a>
		<a href="edituser.php?id=<?php echo $id;?>&page=<?php echo $page-1;?>" title="ǰһҳ"><font face="webdings"> 7 </font></a>
        <?php
		  }
		   if($pagecount<=4){
		    for($i=1;$i<=$pagecount;$i++){
		  ?>
        <a href="edituser.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php
		     }
		   }else{
		   for($i=1;$i<=4;$i++){
		  ?>
        <a href="edituser.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php }?>
        <a href="edituser.php?page=<?php echo $page-1;?>" title="��һҳ"><font face="webdings"> 8 </font></a>
		<a href="edituser.php?id=<?php echo $id;?>&page=<?php echo $pagecount;?>" title="βҳ"><font face="webdings"> : </font></a>
        <?php }?>

	</div></td>
    <td width="92"><div align="center"><input type="submit" value="ɾ��ѡ��" class="buttoncss" onclick="return confirm('ȷ��Ҫɾ����');">
    </div></td>
  </tr>

</table>

<?php
   }
?>
</form>
</body>
</html>
