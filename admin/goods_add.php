<?php
include("check_login.php");
 include("../conn.php");
 include("fun.php");
 //�����Ʒ
if($action=="add")
{
	if(is_numeric($shichangjia)==false || is_numeric($huiyuanjia)==false)
	{
		echo "<script>alert('�۸�ֻ��Ϊ���֣�');history.back();</script>";
		exit;
	}
	if(is_numeric($shuliang)==false)
	{
		echo "<script>alert('����ֻ��Ϊ���֣�');history.back();</script>";
		exit;
	}
	if(ceil(($huiyuanjia/$shichangjia)*100)<=80)//���ۼ�����
		$tejia=1;
	else
	    $tejia=0;
	$exname=strtolower(substr($_FILES['upfile']['name'],(strrpos($_FILES['upfile']['name'],'.')+1)));
$uploadfile = getname($exname);

move_uploaded_file($_FILES['upfile']['tmp_name'], $uploadfile);
if(trim($_FILES['upfile']['name']!=""))
 {
  $uploadfile="admin/".$uploadfile;
}
else
 {
  $uploadfile="";
 }


$addtime=date("Y-m-d");
mysql_query("insert into goods(mingcheng,jianjie,addtime,xinghao,tupian,typeid,shichangjia,huiyuanjia,pinpai,tuijian,shuliang,cishu,tejia)values('$mingcheng','$jianjie','$addtime','$xinghao','$uploadfile','$typeid','$shichangjia','$huiyuanjia','$pinpai','$tuijian','$shuliang','0','$tejia')",$conn);
echo "<script>alert('��Ʒ".$mingcheng. "��ӳɹ�!');window.location.href='./goods.php';</script>";
 }

 ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�����Ʒ</title>
<link rel="stylesheet" type="text/css" href="adminCss/admincp.css">
<link rel="stylesheet" type="text/css" href="adminCss/shopmanage.css">

</head>

<body>
<table width="800" border="1" align="center" cellpadding="0" cellspacing="0" class=" table-border">
  <tr>
    <td height="50"><div class="shop-add">�����Ʒ</div></td>
  </tr>
  <tr>
    <td height="253">
    <table width="800" border="1" cellpadding="0" cellspacing="1" class="table-border">
	<script language="javascript">
	function chkinput(form)
	{
	  if(form.mingcheng.value=="")
	   {
	     alert("��������Ʒ����!");
		 form.mingcheng.select();
		 return(false);
	   }



	  if(form.huiyuanjia.value=="")
	   {
	     alert("��������Ʒ��Ա��!");
		 form.huiyuanjia.select();
		 return(false);
	   }

	  if(form.shichangjia.value=="")
	   {
	     alert("��������Ʒ�г���!");
		 form.shichangjia.select();
		 return(false);
	   }
	  if(form.dengji.value=="")
	   {
	     alert("��������Ʒ�ȼ�!");
		 form.dengji.select();
		 return(false);
	   }


	   if(form.pinpai.value=="")
	   {
	     alert("��������ƷƷ��!");
		 form.pinpai.select();
		 return(false);
	   }

	   if(form.xinghao.value=="")
	   {
	     alert("��������Ʒ�ͺ�!");
		 form.xinghao.select();
		 return(false);
	   }
	   if(form.shuliang.value=="")
	   {
	     alert("��������Ʒ����!");
		 form.shuliang.select();
		 return(false);
	   }
	   if(form.jianjie.value=="")
	   {
	     alert("��������Ʒ���!");
		 form.jianjie.select();
		 return(false);
	   }

	   return(true);
	}
    </script>
    <form name="form1" enctype="multipart/form-data" method="post" action="?action=add" onSubmit="return chkinput(this)" >
    	<tr>
    		<td><div class="shop-add-content  t-center" >��Ʒ���ƣ�</div></td>
    		<td width="500" >
    			<div class="shop-add-right">
    				<input type="text" name="mingcheng" size="25" class="inputcss">
    			</div>
    		</td>
    	</tr>

    	<tr>
    		<td><div class="shop-add-content t-center">�۸�</div></td>
    		<td class="shop-add-content" >
    			<div align="left" class="shop-add-right">�г��ۣ�
    				<input type="text" name="shichangjia" size="10" class="inputcss" >
    				Ԫ&nbsp;&nbsp;��Ա�ۣ�
    				<input type="text" name="huiyuanjia" size="10" class="inputcss">
    				Ԫ</div></td>
    			</tr>
    			<tr>
    				<td><div  class="shop-add-content  t-center" >��Ʒ���ͣ�</div></td>
    				<td height="25" ><div class="shop-add-right">
           <?php
			$sql=mysql_query("select * from type order by id desc",$conn);
			$info=mysql_fetch_array($sql);
			if($info==false)
			{
				echo "���������Ʒ����!";
			}
			else
			{
				?>
				<select name="typeid" class="inputcss">
					<?php
					do
					{
						?>
						<option value=<?php echo $info[id];?>><?php echo $info[typename];?></option>
						<?php
					}
					while($info=mysql_fetch_array($sql));
					?>
				</select>
				<?php
			}
			?>
        </div></td>
      </tr>

      <tr>
        <td><div class="shop-add-content" >��ƷƷ�ƣ�</div></td>
        <td height="22" >
        <div class="shop-add-right">
        <input type="text" name="pinpai" class="inputcss" size="20">
        </div>
        </td>
      </tr>
      <tr>
        <td><div  class="shop-add-content" >��Ʒ�ͺţ�</div></td>
        <td height="25" >
        <div class="shop-add-right">
        <input type="text" name="xinghao" class="inputcss" size="20">
        </div>
        </td>
      </tr>
      <tr>
      	<td><div class="shop-add-content" >�Ƿ��Ƽ���</div></td>
      	<td height="25" >
      	<div class="shop-add-right">
      		<select name="tuijian" class="inputcss" >
      			<option selected value=1>��</option>
      			<option value=0>��</option>
      		</select>
      	</div>
      </td>
  </tr>
  <tr>
  	<td><div  class="shop-add-content" >��Ʒ������</div></td>
  	<td height="25" >
  	<div class="shop-add-right"><input type="text" name="shuliang" class="inputcss" size="20"></div></td>
  </tr>
  <tr>
  	<td><div class="shop-add-content" >��ƷͼƬ��</div></td>
  	<td height="25"><div class="shop-add-right">
  		<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
  		<input type="file" name="upfile" class="inputcss" size="30"></div></td>
  	</tr>
  	<tr>
  		<td><div  class="shop-add-content" >��Ʒ��飺</div></td>
  		<td >
  			<div align="left">
  				<textarea name="jianjie" cols="80" rows="8" class="inputcss shop-intro"></textarea>
  			</div></td>
  		</tr>
      	<tr>
      		<td  height="80px" colspan="2">
      			<div align="center">
      				<input name="submit" type="submit" class="buttoncss" id="submit" value="���">
      				&nbsp;&nbsp;
      				<input type="reset" value="��д" class="buttoncss"></div></td>
      			</tr>
      		</form>
      	</table></td>
  </tr>
</table>
</body>
</html>
