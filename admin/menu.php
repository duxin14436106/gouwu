<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
	 <link rel="shortcut icon" href="images/drmall-logo.ico">
	<title>Administrator's Control Panel</title>
	<link rel="stylesheet" href="adminCss/index.css" type="text/css"/>
	<meta content="Comsenz Inc." name="Copyright" />
</head>
<body>
<div class="menu">
  <ul id="leftmenu">
    <li><a href="main.php" target="main" class="tabon">������ҳ</a></li>
    <li><a href="goods.php" target="main">��Ʒ����</a></li>
    <li><a href="cat.php" target="main">��Ʒ�������</a></li>

    <li><a href="order.php" target="main">��������</a></li>
    <li><a href="user.php" target="main">�û�����</a></li>
    <li><a href="admin.php?m=admin&a=ls" target="main">����Ա����</a></li>
    <li><a href="gonggao.php" target="main">��վ�������</a></li>

   <!--  <li><a href="pinglun.php" target="main">��Ʒ���۹���</a></li> -->
    <li><a href="link.php" target="main">�������ӹ���</a></li>
    <li><a href="link_add.php" target="main">�����������</a></li>
    <li><a href="logout.php" target="_top">�˳�ϵͳ</a></li>

  </ul>
</div>
<div class="footer"></div>
<script type="text/javascript">
	function cleartabon() {
		if(lastmenu) {
			lastmenu.className = '';
		}
		for(var i = 0; i < menus.length; i++) {
			var menu = menus[i];
			if(menu.className == 'tabon') {
				lastmenu = menu;
			}
		}
	}
	var menus = document.getElementById('leftmenu').getElementsByTagName('a');
	var lastmenu = '';
	for(var i = 0; i < menus.length; i++) {
		var menu = menus[i];
		menu.onclick = function() {
			setTimeout('cleartabon()', 1);
			this.className = 'tabon';
			this.blur();
		}
	}

	cleartabon();
</script>
</body>
</html>