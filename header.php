<?php
error_reporting(E_ALL ^ E_NOTICE);

   session_start();
   include("conn.php");
?>
<html><head><title>电子购物商城</title>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
    <link rel="shortcut icon" href="./images/drmall-logo.ico">
    <link href="./style/css.css" rel="stylesheet" type="text/css">
    <link href="./style/reg.css" rel="stylesheet" type="text/css">
    <link href="./style/user.css" rel="stylesheet" type="text/css">
    <link href="./style/shop.css" rel="stylesheet" type="text/css">
    <link href="./style/header.css" rel="stylesheet" type="text/css">
    <link href="./style/index.css" rel="stylesheet" type="text/css">
    <link href="./style/discuss.css" rel="stylesheet" type="text/css">
    <link href="./style/type.css" rel="stylesheet" type="text/css">
    <link href="./style/aboutus.css" rel="stylesheet" type="text/css">
</head>
<body>


<DIV align=center>
    <table border=0 cellPadding=0 cellSpacing=0 height=90 id=table1 width="960" class="m-auto">
        <TR>
            <TD>
                <img src="./images/shop-logo.png" alt="logo">
            </TD>
        </TR>
    </table>

    <div class="navbar m-auto">
        <nav class="clearfix">
            <ul>
                <li> <a href="index.php">首页</a> &nbsp;&nbsp;</li>
                <li><a href="gonggao.php" >新闻公告</a>&nbsp;&nbsp;</li>
                <li><a href="tejia.php">特价商品</a>&nbsp;&nbsp;</li>
                <li><a href="user.php">会员中心</a> &nbsp;&nbsp;</li>
                <li><a href="finddd.php">订单查询</a>&nbsp;&nbsp;</li>
                <li><a href="mychart.php">我的购物车</a>&nbsp;&nbsp;</li>
            </ul>
        </nav>
    </div>

</DIV>
</body>
</html>
