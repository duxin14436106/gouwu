<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
 if ($_SESSION[username]=="")
 header("location:login.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>电子商城后台管理</title>
<meta http-equiv="Content-Type" content="text/html;charset=gb2312" />
<link rel="stylesheet" href="adminCss/admincp.css" type="text/css" media="all" />
</head>
<body>
<table cellpadding="0" cellspacing="0" width="100%" height="100%">
	<tr>
		<td colspan="2" height="69">
		<iframe src="header.html" name="header" width="100%" height="69" scrolling="no" frameborder="0"></iframe></td>
	</tr>
	<tr>
		<td valign="top" width="160">
		<iframe src="menu.php" name="menu" target="main" width="160" height="100%" scrolling="no" frameborder="0"></iframe></td>
		<td valign="top">
		<iframe src="main.php" name="main" width="100%" height="100%" frameborder="0" scrolling="yes" style="overflow:visible;">
			
		</iframe>
		</td>
	</tr>
</table>
</body>
</html>