<?php /* Smarty version Smarty-3.0.8, created on 2013-05-17 11:13:54
         compiled from "D:\wamp\www\sp/tpl\login.html" */ ?>
<?php /*%%SmartyHeaderCode:14260519610f25ef146-85598897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '243bc2987c96bac8372f24d9c986ee38b73629fe' => 
    array (
      0 => 'D:\\wamp\\www\\sp/tpl\\login.html',
      1 => 1368451325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14260519610f25ef146-85598897',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title> 登录 </title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
   <link rel="stylesheet" href="../sp/tpl/css/member.css" type="text/css" />
 </head>

 <body>
 <div class="loginpage">
 <div class="main">
 <form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'member','a'=>'login'),$_smarty_tpl);?>
" name="loginform" method="post">
<div class="text"><p>博客系统登陆</p></div>
<div class="username"><input name="name" type="text" /><?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('re')->value['name']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value){
?><?php echo $_smarty_tpl->tpl_vars['one']->value;?>
<?php }} ?></div>
<div class="password"><input name="password" type="password" /><?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('re')->value['password']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value){
?><?php echo $_smarty_tpl->tpl_vars['one']->value;?>
<?php }} ?></div>
<div class="checkpic"><label>验证码：</label><input name="checkpic" type="text" size="4"/></div><div class="checkimg"><img src="http://localhost/sp/include/checkpic.php" name="checkpic"></div>
<div class="login">
<input name="submit" type="submit" value="登录" /></div>
<?php echo $_smarty_tpl->getVariable('fail')->value;?>

 </form>
 </div>
 </div>
 </body>
</html>
