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
		  alert("请输入用户名!");
		  form.name.select();
		  return(false);
		}
		if(form.pwd.value==""){
		  alert("请输入用户密码!");
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
					<h3>基于WEB的电子商城系统的设计与实现</h3>
					<br />
						<ul>
							<li>用户管理</li>
							<li>商品管理</li>
							
							<li>公告管理</li>
							<li>订单管理</li>
							<li>数据库管理</li>
						</ul>
					</div>
					</div>
					<div class="logins">
						<h2>管理员登录</h2>
						<label for="user">用户：</label>
						<input type="text" name="name" class="txt" tabindex="1" id="username" value="" /><br /><br/>

							<label for="user">密码：</label>
						<input type="password" name="pwd" class="txt" tabindex="2" id="password" value="" />


						<input type="submit" name="submit" value="登录" class="btn" tabindex="3" />

						<span class="login-user"><a href="../index.php">>>普通用户登录</a></span>
					</div>
			</div>
		
		</form>
</div>

<div class="footer">

Copyright &copy;2018  Inc. All Rights  Reserved. 
</div>

</body>
</html>