<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<title>管理员管理</title>
<script type="text/javascript">
	$(function () {
		$( '.del' ).click( function () {
			return confirm('确认删除该管理员？');
		} );
	});
</script>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td class="LineRightBlue1">
        <table width="95%" border="0" cellpadding="0" cellspacing="0" style="margin-left:20px;">
      <tr>
        <td width="88%" height="24">快捷操作：</td>
        <td width="12%" align="right" class="bt_add"></td>
      </tr>
    </table>
    </td>
  </tr>
</table>

  <div class="tablelisthead">
    <ul pid='0'>
      <li class="li_10">编号</li>
      <li class="li_40">管理员名</li>
      <li class="li_20">操作</li>
    </ul>
  </div>
  
  <div id="languageBox2">
    <div class="tablelist">
    <?php if(is_array($member)): $i = 0; $__LIST__ = $member;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ul onmouseover="this.style.background ='#FFFDD7'" onmouseout="this.style.background ='#FFFFFF'" style="height:30px;">
          <li class="li_10"><?php echo ($vo["id"]); ?></li>
          <li class="li_40"><?php echo ($vo["username"]); ?></li>
          <li class="li_40">
            <a href="<?php echo U('mod',array('id'=>$vo['id']));?>" >修改密码</a>
          </li>
      </ul><?php endforeach; endif; else: echo "" ;endif; ?>  
    </div>
  </div>
  
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="36" class="BotNavBg">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="8%" style="padding-left:5px;">
            
            </td>
            <td width="92%" align="center">
 
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>

</body>
</html>