<?php
include("header.php");
$sql1=mysql_query("select * from type where id=".$id."");
$fenlei=mysql_fetch_array($sql1);

?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<style>

.type-style{
    padding: 20px;
}
.type-style a{
    padding: 0 23px;
    font-size: 18px;
}
</style>
<table width="800" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><div align="left" class="type-style"> &nbsp;
                <?php

            $sql=mysql_query("select * from type order by id desc",$conn);
            $info=mysql_fetch_object($sql);
            if($info==false)
            {
              echo "��վ������Ʒ!";
            }
            else
            {
              do
              {
                echo "<a href='showfenlei.php?id=".$info->id."' >".$info->typename."&nbsp;</a>";

               }while($info=mysql_fetch_object($sql));
            }
          ?>
        </div></td>
      </tr>
    </table>
    <table width="950" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td height="438" valign="top" bgcolor="#FFFFFF">

                <div class="type-banner">&nbsp;&nbsp;<font color="#FFFFFF" size="+1"><?php echo $fenlei[typename];?></font></div>

                <?php

                $sql=mysql_query("select count(*) as total from goods where typeid =$id ",$conn);
                $info=mysql_fetch_array($sql);
                $total=$info[total];
                if($total==0)
                {
                    ?>

                    <div class="no-goods">�˷��������ؼ۲�Ʒ!</div>
                    <?php
                }
                else
                {

                    ?>
                    <table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
                        <?php
           $pagesize=10;
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

             $sql1=mysql_query("select * from goods where typeid=".$id." order by addtime desc limit ".($page-1)*$pagesize.",$pagesize ",$conn);
             while($info1=mysql_fetch_array($sql1))
             {
          ?>
                            <tr>
                                <td width="150"  rowspan="6"><div align="center">
                                        <?php
                                        if($info1[tupian]=="")
                                        {
                                            echo "����ͼƬ!";
                                        }
                                        else
                                        {
                                            ?>
                                            <a href="good_view.php?id=<?php echo $info1[id];?>"><img border="0" width="80" height="80" src="<?php echo $info1[tupian];?>"></a>
              <?php
             }
            ?>
          </div></td>
          <td width="93" height="20"><div align="center" style="color: #000000">��Ʒ���ƣ�</div></td>
          <td colspan="5"><div align="left"><a href="good_view.php?id=<?php echo $info1[id];?>"><?php echo $info1[mingcheng];?></a></div></td>
        </tr>
        <tr>
          <td width="93" height="20"><div align="center" style="color: #000000">��ƷƷ�ƣ�</div></td>
          <td width="101" height="20"><div align="left"><?php echo $info1[pinpai];?></div></td>
          <td width="93" height="20"><div align="center" style="color: #000000">��Ʒ�ͺţ�</div></td>
          <td width="101" height="20"><div align="left"><?php echo $info1[xinghao];?></div></td>
        </tr>
        <tr>
          <td width="93" height="20"><div align="center" style="color: #000000">��Ʒ��飺</div></td>
          <td height="20" colspan="5"><div align="left"><?php echo $info1[jianjie];?></div></td>
        </tr>
        <tr>
          <td height="20"><div align="center" style="color: #000000">�������ڣ�</div></td>
          <td height="20"><div align="left"><?php echo $info1[addtime];?></div></td>
          <td height="20"><div align="center" style="color: #000000">ʣ������:</div></td>
          <td width="69" height="20"><div align="left"><?php echo $info1[shuliang];?></div></td>
          <td width="63"><div align="center" style="color: #000000">��Ʒ�ȼ���</div></td>
          <td width="73"><div align="left"><?php echo $info1[dengji];?></div></td>
        </tr>
        <tr>
          <td height="20"><div align="center" style="color: #000000">�̳��ۣ�</div></td>
          <td height="20"><div align="left"><?php echo $info1[shichangjia];?>Ԫ</div></td>
          <td height="20"><div align="center" style="color: #000000">��Ա�ۣ�</div></td>
          <td height="20"><div align="left"><?php echo $info1[huiyuanjia];?>Ԫ</div></td>
          <td height="20"><div align="center" style="color: #000000">�ۿۣ�</div></td>
          <td height="20"><div align="left"><?php echo (ceil(($info1[huiyuanjia]/$info1[shichangjia])*100))."%";?></div></td>
        </tr>
        <tr>
                                <td height="20" colspan="6" width="461">
                                    <a href="shopping.php?id=<?php echo $info1[id];?>">
                                        <div class="shop-buy">��Ҫ����
                                        </div>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td height="10" colspan="7">
                                    <div class="cut-line" style="width:900px"></div>
                                </td>
                            </tr>
                            <?php
                        }

                        ?>
                    </table>
        <table width="700" height="33" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><div align="center"> &nbsp;��վ���и�����Ʒ&nbsp;
                  <?php
           echo $total;
          ?>
&nbsp;��&nbsp;ÿҳ��ʾ&nbsp;<?php echo $pagesize;?>&nbsp;��&nbsp;��&nbsp;<?php echo $page;?>&nbsp;ҳ/��&nbsp;<?php echo $pagecount; ?>&nbsp;ҳ
        <?php
          if($page>=2)
          {
          ?>
        <a href="showfenlei.php?id=<?php echo $id;?>&page=1" title="��ҳ"><font face="webdings"> 9 </font></a> <a href="showfenlei.php?id=<?php echo $id;?>&page=<?php echo $page-1;?>" title="ǰһҳ"><font face="webdings"> 7 </font></a>
        <?php
          }
                  if($pagecount<=4){
                   for($i=1;$i<=$pagecount;$i++){
          ?>
        <a href="showfenlei.php?id=<?php echo $id;?>&page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php
             }
           }else{
           for($i=1;$i<=4;$i++){
          ?>
        <a href="showfenlei.php?id=<?php echo $id;?>&page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php }?>
        <a href="showfenlei.php?id=<?php echo $id;?>&page=<?php echo $page-1;?>" title="��һҳ"><font face="webdings"> 8 </font></a> <a href="showfenlei.php?id=<?php echo $id;?>&page=<?php echo $pagecount;?>" title="βҳ"><font face="webdings"> : </font></a>
        <?php }?>
          </div></td>
        </tr>
      </table>
    <?php
       }

      ?></td>
  </tr>
</table>
<?php
include("footer.php");
?>