<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>DR-mall</title>
<link rel="stylesheet" href="adminCss/admincp.css" type="text/css" media="all" />
<link rel="stylesheet" href="adminCss/login.css" type="text/css" />
<script language="javascript">
	  function chkinput(form){
	    if(form.name.value==""){
		  alert("�������û���!");
		  form.name.select();
		  return(false);
		}
		if(form.pwd.value==""){
		  alert("�������û�����!");
		  form.pwd.select();
		  return(false);
		}
		return(true);
	  }
	</script>
</head>
<body>
<div id="append">
	<img src="../images/shop-logo.png" width="960">
</div>
<div class="container">
	<form name="form1" id="loginform" method="post" action="chkadmin.php" onSubmit="return chkinput(this)">

		<div class="mainbox">
				<div class="loginbox">
					<div>
					<h3>����WEB�ĵ����̳�ϵͳ�������ʵ��</h3>
					<br />
						<ul>
							<li>�û�����</li>
							<li>��Ʒ����</li>
							
							<li>�������</li>
							<li>��������</li>
							<li>���ݿ����</li>
						</ul>
					</div>
					</div>
					<div class="logins">
						<h2>����Ա��¼</h2>
						<label for="user">�û���</label>
						<input type="text" name="name" class="txt" tabindex="1" id="username" value="" /><br /><br/>

							<label for="user">���룺</label>
						<input type="password" name="pwd" class="txt" tabindex="2" id="password" value="" />


						<input type="submit" name="submit" value="��¼" class="btn" tabindex="3" />

						<span class="login-user"><a href="../index.php">>>��ͨ�û���¼</a></span>
					</div>
			</div>
		
		</form>
</div>

<div class="footer">

Copyright &copy;2018  Inc. All Rights  Reserved. 
</div>

</body>
</html>