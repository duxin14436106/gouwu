<?php include("check_login.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>公告管理</title>
<link rel="stylesheet" type="text/css" href="adminCss/admincp.css">
    <link rel="stylesheet" type="text/css" href="adminCss/shopmanage.css">
</head>

<body>
<?php
       include("../conn.php");
       $sql=mysql_query("select count(*) as total from gonggao ",$conn);
	   $info=mysql_fetch_array($sql);
	   $total=$info[total];
	   if($total==0)
	   {
	     echo "本站暂无公告!";
	   }
	   else
	   {
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

           $sql1=mysql_query("select * from gonggao order by time desc limit ".($page-1)*$pagesize.",$pagesize",$conn);
?>
<form name="form1" method="post" action="gonggao_del.php">
<table width="750" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="50"><div class="shop-edit">公告管理</div>
    <div class="shop-edit" style="font-size:16px;">
		<a href="./gonggao_add.php">添加公告</a>
    </div></td>
  </tr>
  <tr>
    <td>
        <table width="750" height="33" border="0" align="center" cellpadding="0" cellspacing="1">

      <tr style="border-bottom: #333333">
        <td width="80" height="25"><div align="center">复选</div></td>
        <td width="621"><div align="center">公告主题</div></td>
        <td width="75"><div align="center">操作</div></td>
      </tr>
	    <?php

		   while($info1=mysql_fetch_array($sql1))
		    {
	  ?>
	  <tr >
        <td class="gonggao-border"><div style="text-align: center">
                <input type="checkbox" name=<?php echo $info1[id];?> value=<?php echo $info1[id];?>></div></td>
        <td class="gonggao-border"><div>&nbsp;&nbsp;<?php echo $info1[title];?></div></td>
	    <td class="gonggao-border"><div style="text-align: center"><a href="gonggao_edit.php?id=<?php echo $info1[id];?>">查看编辑</a></div></td>

	  </tr>

	  <?php
	       }

	  ?>
    </table></td>
  </tr>
</table>
<table width="750" height="33" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td style="margin: 10px 0 0 0;display: inline-block"><div align="left"><input type="submit" value="删除所选项" class="buttoncss">&nbsp;&nbsp;</div></td>
    <td width="547"><div align="right">

	  本站共有公告
	 <?php
		   echo $total;
		  ?>
        &nbsp;条&nbsp;每页显示&nbsp;<?php echo $pagesize;?>&nbsp;条&nbsp;第&nbsp;<?php echo $page;?>&nbsp;页/共&nbsp;<?php echo $pagecount; ?>&nbsp;页
        <?php
		  if($page>=2)
		  {
		  ?>
        <a href="admingonggao.php?id=<?php echo $id;?>&page=1" title="首页"><font face="webdings"> 9 </font></a>
		<a href="admingonggao.php?id=<?php echo $id;?>&page=<?php echo $page-1;?>" title="前一页"><font face="webdings"> 7 </font></a>
        <?php
		  }
		   if($pagecount<=4){
		    for($i=1;$i<=$pagecount;$i++){
		  ?>
        <a href="admingonggao.php?id=<?php echo $id;?>&page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php
		     }
		   }else{
		   for($i=1;$i<=4;$i++){
		  ?>
        <a href="admingonggao.php?id=<?php echo $id;?>&page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php }?>
        <a href="admingonggao.php?id=<?php echo $id;?>&page=<?php echo $page-1;?>" title="后一页"><font face="webdings"> 8 </font></a>
		 <a href="admingonggao.php?id=<?php echo $id;?>&page=<?php echo $pagecount;?>" title="尾页"><font face="webdings"> : </font></a>
        <?php }?>
		</div></td>
  </tr>
</table>
<?php
 }
?>
</form>
</body>
</html>
