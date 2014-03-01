<?php /* Smarty version Smarty-3.0.8, created on 2013-05-17 11:54:18
         compiled from "D:\wamp\www\sp/tpl\admin/edituser.html" */ ?>
<?php /*%%SmartyHeaderCode:117051961a6a25a327-08914974%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9292079a82153278f4518f5f981adfb20d429c50' => 
    array (
      0 => 'D:\\wamp\\www\\sp/tpl\\admin/edituser.html',
      1 => 1368791653,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117051961a6a25a327-08914974',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title> 更新资料 </title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <link rel="stylesheet" href="../sp/tpl/css/admin.css" type="text/css" />
 </head>

 <body>
 <div class="main">
  <form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'updateuser'),$_smarty_tpl);?>
" name="edituserform" method="post">
<p>用户名：<input type="text" name="name" value="<?php echo $_smarty_tpl->getVariable('re')->value['name'];?>
"/></p>
<p>邮&nbsp;&nbsp;箱：<input type="text" name="email" value="<?php echo $_smarty_tpl->getVariable('re')->value['email'];?>
"/></p>
<input type="hidden" name="uid" value="<?php echo $_smarty_tpl->getVariable('re')->value['uid'];?>
" />
<input type="submit" name="submit" value="提交"/>
</form>
</div>
 </body>
</html>
