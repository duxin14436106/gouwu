<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title> �����̳�-Dr-mall</title>
<link rel="stylesheet" href="adminCss/admincp.css" type="text/css" media="all" />
</head>
<body><div id="append"></div>
<script type="text/javascript">
	function headermenu(ctrl) {
		ctrl.className = ctrl.className == 'otherson' ? 'othersoff' : 'otherson';
		var menu = document.getElementById('header_menu_body');
		if(!menu) {
			menu = document.createElement('div');
			menu.id = 'header_menu_body';
			menu.innerHTML = '<ul>' + document.getElementById('header_menu_menu').innerHTML + '</ul>';
			var obj = ctrl;
			var x = ctrl.offsetLeft;
			var y = ctrl.offsetTop;
			while((obj = obj.offsetParent) != null) {
				x += obj.offsetLeft;
				y += obj.offsetTop;
			}
			menu.style.left = x + 'px';
			menu.style.top = y + ctrl.offsetHeight + 'px';
			menu.className = 'togglemenu';
			menu.style.display = '';
			document.body.appendChild(menu);
		} else {
			menu.style.display = menu.style.display == 'none' ? '' : 'none';
		}
	}
</script>
<div class="container v-center">
	<h3 style="font-size:40px">����ʵ��</h3>
		<p style="font-size:25px">��Ʒ��ɾ��</p>
		<p style="font-size:25px">��������</p>
		<p style="font-size:25px">�û�����</p>
		<p style="font-size:25px">�������</p>
	<br />
	<br />
	<br />
	<br />
	<br />
	<h3 style="font-size:40px">ϵͳ�������û���</h3>
		<p style="font-size:25px"><em>������ԣ�</em><span>PHP+mysql</span></p>
		<p style="font-size:25px"><em>IDE:</em><span>PHPstorm</span></p>
		<p style="font-size:25px"><em>������:</em><span>WampServer</span></p>

</div>
</body>
</html>