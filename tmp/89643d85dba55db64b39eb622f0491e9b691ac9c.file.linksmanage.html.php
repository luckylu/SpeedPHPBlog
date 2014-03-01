<?php /* Smarty version Smarty-3.0.8, created on 2013-05-17 11:54:23
         compiled from "D:\wamp\www\sp/tpl\admin/linksmanage.html" */ ?>
<?php /*%%SmartyHeaderCode:1904051961a6f479377-60159078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89643d85dba55db64b39eb622f0491e9b691ac9c' => 
    array (
      0 => 'D:\\wamp\\www\\sp/tpl\\admin/linksmanage.html',
      1 => 1368751628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1904051961a6f479377-60159078',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title> New Document </title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
    <link rel="stylesheet" href="../sp/tpl/css/admin.css" type="text/css" />
  <script type="text/javascript" src="../sp/tpl/js/jquery-1.9.1.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){ 
$("table tr:nth-child(even)").addClass("even");
$("table tr:nth-child(odd)").addClass("odd");
})

</script>
 </head>

 <body>
  <div class=main>
<table class="customers">
<tr width="600">
<th width="200" align="left">网站名</th>
<th width="200" align="left">网址</th>
<th width="200" align="left">操作</th>
</tr>
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('result')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
<tr width="800">
<td><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
</td>
<td><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'editlinks','lid'=>$_smarty_tpl->tpl_vars['value']->value['lid']),$_smarty_tpl);?>
">修改</a>|<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'deletelinks','lid'=>$_smarty_tpl->tpl_vars['value']->value['lid']),$_smarty_tpl);?>
">删除</a></td>
</tr>
<?php }} ?>
</table>
<?php if (!$_smarty_tpl->getVariable('result')->value){?>
还没有友链，赶快去添加吧！<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'addlinks'),$_smarty_tpl);?>
">添加友链</a>
<?php }?>
<?php if ($_smarty_tpl->getVariable('pager')->value){?>
共有友链<?php echo $_smarty_tpl->getVariable('pager')->value['total_count'];?>
条，共有<?php echo $_smarty_tpl->getVariable('pager')->value['total_page'];?>
页（每页<?php echo $_smarty_tpl->getVariable('pager')->value['page_size'];?>
条友链）：
<!--在当前页不是第一页的时候，显示前页和上一页-->
<?php if ($_smarty_tpl->getVariable('pager')->value['current_page']!=$_smarty_tpl->getVariable('pager')->value['first_page']){?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'catmanage','page'=>$_smarty_tpl->getVariable('pager')->value['first_page']),$_smarty_tpl);?>
">首页</a> | 
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'catmanage','page'=>$_smarty_tpl->getVariable('pager')->value['prev_page']),$_smarty_tpl);?>
">上一页</a> | 
<?php }?>
<!--开始循环页码，同时如果循环到当前页则不显示链接-->
<?php  $_smarty_tpl->tpl_vars['thepage'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pager')->value['all_pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['thepage']->key => $_smarty_tpl->tpl_vars['thepage']->value){
?>
	<?php if ($_smarty_tpl->tpl_vars['thepage']->value!=$_smarty_tpl->getVariable('pager')->value['current_page']){?>
		<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'catmanage','page'=>$_smarty_tpl->tpl_vars['thepage']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['thepage']->value;?>
</a>
	<?php }else{ ?>
		<b><?php echo $_smarty_tpl->tpl_vars['thepage']->value;?>
</b>
	<?php }?>
<?php }} ?>
<!--在当前页不是最后一页的时候，显示下一页和后页-->
<?php if ($_smarty_tpl->getVariable('pager')->value['current_page']!=$_smarty_tpl->getVariable('pager')->value['last_page']){?>
 | 
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'catmanage','page'=>$_smarty_tpl->getVariable('pager')->value['next_page']),$_smarty_tpl);?>
">下一页</a> | 
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'catmanage','page'=>$_smarty_tpl->getVariable('pager')->value['last_page']),$_smarty_tpl);?>
">尾页</a>
<?php }?>
<?php }?>
</div>
 </body>
</html>
