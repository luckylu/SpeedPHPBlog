<?php /* Smarty version Smarty-3.0.8, created on 2013-05-17 11:15:53
         compiled from "D:\wamp\www\sp/tpl\admin/manage.html" */ ?>
<?php /*%%SmartyHeaderCode:612519611693dcb59-87555163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1175fdf4e97fe6fa3b643fd9316657199dc4e71c' => 
    array (
      0 => 'D:\\wamp\\www\\sp/tpl\\admin/manage.html',
      1 => 1366535576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '612519611693dcb59-87555163',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title> 管理文章 </title>
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
<table  class="customers">
<tr>
<th>标题</th>

<th>时间</th>
<th>操作</th>
</tr>

<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cre')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</td>

<td><?php echo $_smarty_tpl->tpl_vars['value']->value['time'];?>
</td>
<td><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'show','pid'=>$_smarty_tpl->tpl_vars['value']->value['pid']),$_smarty_tpl);?>
" target="_blank">查看</a>|<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'edit','pid'=>$_smarty_tpl->tpl_vars['value']->value['pid']),$_smarty_tpl);?>
">修改</a>|<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'delete','pid'=>$_smarty_tpl->tpl_vars['value']->value['pid']),$_smarty_tpl);?>
">删除</a></td>
</tr>
<?php }} ?>

</table>

<?php if (!$_smarty_tpl->getVariable('result')->value){?>
还没有文章，赶快去添加吧！<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'add'),$_smarty_tpl);?>
">添加文章</a>
<?php }?>
<?php if ($_smarty_tpl->getVariable('pager')->value){?>
共有文章<?php echo $_smarty_tpl->getVariable('pager')->value['total_count'];?>
篇，共有<?php echo $_smarty_tpl->getVariable('pager')->value['total_page'];?>
页（每页<?php echo $_smarty_tpl->getVariable('pager')->value['page_size'];?>
篇文章）：
<!--在当前页不是第一页的时候，显示前页和上一页-->
<?php if ($_smarty_tpl->getVariable('pager')->value['current_page']!=$_smarty_tpl->getVariable('pager')->value['first_page']){?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'manage','page'=>$_smarty_tpl->getVariable('pager')->value['first_page']),$_smarty_tpl);?>
">首页</a> | 
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'manage','page'=>$_smarty_tpl->getVariable('pager')->value['prev_page']),$_smarty_tpl);?>
">上一页</a> | 
<?php }?>
<!--开始循环页码，同时如果循环到当前页则不显示链接-->
<?php  $_smarty_tpl->tpl_vars['thepage'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pager')->value['all_pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['thepage']->key => $_smarty_tpl->tpl_vars['thepage']->value){
?>
	<?php if ($_smarty_tpl->tpl_vars['thepage']->value!=$_smarty_tpl->getVariable('pager')->value['current_page']){?>
		<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'manage','page'=>$_smarty_tpl->tpl_vars['thepage']->value),$_smarty_tpl);?>
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
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'manage','page'=>$_smarty_tpl->getVariable('pager')->value['next_page']),$_smarty_tpl);?>
">下一页</a> | 
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'manage','page'=>$_smarty_tpl->getVariable('pager')->value['last_page']),$_smarty_tpl);?>
">尾页</a>
<?php }?>
<?php }?>
</div>
 </body>
</html>
