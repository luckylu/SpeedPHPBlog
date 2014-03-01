<?php /* Smarty version Smarty-3.0.8, created on 2013-05-17 12:29:27
         compiled from "D:\wamp\www\sp/tpl\sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:17231519622a73525d4-39591709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6efc1c251e1235c4d63d29b50eb074d7a3328d49' => 
    array (
      0 => 'D:\\wamp\\www\\sp/tpl\\sidebar.html',
      1 => 1368793764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17231519622a73525d4-39591709',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title> 边栏 </title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
   <link rel="stylesheet" href="../sp/tpl/css/main.css" type="text/css" />
 </head>

<body>

<div id="sidebar">
	<div id="search_box">
    	<form id="searchform" name="searchform" method="post" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'search'),$_smarty_tpl);?>
">
		<input class="style1" name="keyword" type="text" placeholder="搜一下，你就找到！" />
		<input class="searchicon" type="image" src="http://localhost/sp/tpl/img/search.gif">
		</form>
    </div>

	<div class="comment">
		<p>热门评论:</p>
		<?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('comtitle')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value){
?>
		<p><?php echo $_smarty_tpl->tpl_vars['one']->value['username'];?>
 发表在 <span>"<?php echo $_smarty_tpl->tpl_vars['one']->value['title'];?>
"</span></p>
		
			<p>"——<?php echo $_smarty_tpl->tpl_vars['one']->value['com'];?>
"</p>
		<?php }} ?>
	</div>
    <div class="lastestpost">
    	<p>最新文章:</p>
    	<?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('postre')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value){
?>
    	<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'show','pid'=>$_smarty_tpl->tpl_vars['one']->value['pid']),$_smarty_tpl);?>
" target="_blank"><p><?php echo $_smarty_tpl->tpl_vars['one']->value['title'];?>
</p></a>
    	<?php }} ?>
    </div>
    <div class="function">
		<p>功能：</p>
 		<?php if ($_smarty_tpl->getVariable('username')->value==''){?>
        <p>您还没登陆，请先<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'member','a'=>'login'),$_smarty_tpl);?>
">登录</a></p>
        <p>神马！？你还没有账号！赶紧<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'member','a'=>'register'),$_smarty_tpl);?>
">注册一个</a>吧！</p>
 		<?php }else{ ?>
        <p>欢迎您:
     	<?php echo $_smarty_tpl->getVariable('username')->value;?>
！</p>
 		<p><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'member','a'=>'logout'),$_smarty_tpl);?>
">退出</a></p>
 		<?php }?>
    </div>
        <div class="links">
    	<p>友情链接:</p>
        <ul>
    	<?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('links')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value){
?>
        <li>
    	<p><a href="<?php echo $_smarty_tpl->tpl_vars['one']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
</a> | <?php echo $_smarty_tpl->tpl_vars['one']->value['url'];?>
</p>
        </li>
    	<?php }} ?>
        </ul>
    </div>
</div>

</body>
</html>
