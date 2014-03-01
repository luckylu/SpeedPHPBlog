<?php /* Smarty version Smarty-3.0.8, created on 2013-05-17 11:54:21
         compiled from "D:\wamp\www\sp/tpl\admin/addlinks.html" */ ?>
<?php /*%%SmartyHeaderCode:777951961a6de0a044-67254954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3290738b02b2362c4c4c282400e8e97f329c771a' => 
    array (
      0 => 'D:\\wamp\\www\\sp/tpl\\admin/addlinks.html',
      1 => 1368626890,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '777951961a6de0a044-67254954',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../sp/tpl/css/admin.css" type="text/css" />
<title>addlinks</title>
</head>

<body>
 <div class="main">
<form name="addlinks" action="<?php echo $_smarty_tpl->getVariable('setlinks')->value['url'];?>
" method="post">
<input name="lid" type="hidden" value="<?php echo $_smarty_tpl->getVariable('result')->value['lid'];?>
"/>
<label>网站名：</label><input name="name" type="text" value="<?php echo $_smarty_tpl->getVariable('result')->value['name'];?>
" />
<label>网址：</label><input name="url" type="text" value="<?php echo $_smarty_tpl->getVariable('result')->value['url'];?>
" />
<input name="submit" type="submit" value="<?php echo $_smarty_tpl->getVariable('setlinks')->value['btn'];?>
"/>
</form>
</div>
</body>
</html>
