<?php /* Smarty version Smarty-3.0.8, created on 2013-05-17 11:13:06
         compiled from "D:\wamp\www\sp/tpl\head.html" */ ?>
<?php /*%%SmartyHeaderCode:4389519610c2a7cee2-75373756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a8ec909cfeb0efd1453584ce02c6dc3b8d4399e' => 
    array (
      0 => 'D:\\wamp\\www\\sp/tpl\\head.html',
      1 => 1368755261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4389519610c2a7cee2-75373756',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../sp/tpl/css/main.css" type="text/css" />
<title>head</title>
</head>

<body>
<div class="logo">
<img src="http://localhost/sp/tpl/img/logo.gif" />

</div>
<div id="nav">
 	<ul>
		<li class="home"><a href="../sp">首页</a></li>
        <?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('catre')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value){
?>
        <li class="other"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'searchcat','catname'=>$_smarty_tpl->tpl_vars['one']->value['name']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
</a></li>
		<?php }} ?>
        <li class="other"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'about'),$_smarty_tpl);?>
">关于</a></li>
        <li class="other"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'contact'),$_smarty_tpl);?>
">Contact</a></li>
	</ul>
 </div>
</body>
</html>
