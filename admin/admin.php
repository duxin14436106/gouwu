<?php include("check_login.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�����û�</title>
<link rel="stylesheet" type="text/css" href="adminCss/admincp.css">
<link rel="stylesheet" type="text/css" href="adminCss/shopmanage.css">

</head>
<script language="javascript">

 function chkinput(form)
  {
	  if(form.p0.value=="")
	   {
	     alert("�������û�����!");
		 form.p0.select();
		 return(false);
	   }

    if(form.p1.value!="")
	  {
	    if(form.p1.value==""||form.p2.value=="")
		 {
		   alert("���������û������ȷ������!");
		   form.p1.select();
		   return(false);
		 }
	    if(form.p1.value!=form.p2.value)
	   {
	       alert("���û�������ȷ���û����벻ͬ!");
		   form.p1.select();
		   return(false);

	   }
	  }
	  if(form.p1.value!="")
	  {
	    if(form.p1.value.length<5)
		 {
		   alert("������Ӧ����5λ!");
		   form.p1.select();
		   return(false);
		 }

	  }
    return(true);
  }
</script>
<body>
<div>
  <table width="750" border="0" align="center" cellpadding="0" cellspacing="0" class="table-border">
    <form name="form1" method="post" action="admin_edit.php" onSubmit="return chkinput(this)">
	<tr>
      <td><div class="user-edit">���Ĺ���Ա��Ϣ</div></td>
    </tr>
    <tr>
      <td >
      <table width="780" border="1" align="center" cellpadding="0" cellspacing="1" class="table-border">
      	<tr>
      		<td >
      			<div class="user-modify">ԭ����Ա���룺</div></td>
      			<td >
      				<div class="user-modify-right">
      				<input type="password" name="p0" class="inputcss" size="20">
      				</div>
      			</td>
      		</tr>
      		<tr>
      			<td >
      				<div class="user-modify">�¹���Ա���룺</div></td>
      				<td >
      					<div class="user-modify-right">
      						<input type="password" name="p1" class="inputcss" size="20">
      					</div>
      				</td>
      			</tr>
      			<tr>
      				<td >
      					<div class="user-modify">ȷ���¹���Ա���룺</div></td>
      					<td >
      						<div class="user-modify-right">
      							<input type="password" name="p2" class="inputcss" size="20">
      						</div>
      					</td>
      				</tr>

      </table>
	  </td>
    </tr>
     <tr>
      <td height="20"><div align="center" ><input type="submit" value="����" class="buttoncss">&nbsp;</div></td>
    </tr>
	</form>
  </table>
</div>
</body>
</html>
