<?php /* Smarty version Smarty-3.0.8, created on 2013-05-17 11:54:40
         compiled from "D:\wamp\www\sp/tpl\admin/managecomment.html" */ ?>
<?php /*%%SmartyHeaderCode:693751961a80b447f5-12486322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f1473ff949b591b8dfbbe37b86ef93bc8c77b0f' => 
    array (
      0 => 'D:\\wamp\\www\\sp/tpl\\admin/managecomment.html',
      1 => 1365256208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '693751961a80b447f5-12486322',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title> 评论管理 </title>
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
<tr width="400">
<th width="200" align="left">评论</th>
<th width="200" align="left">用户</th>
<th width="200" align="left">操作</th>
</tr>
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['value']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['value']['name'] = 'value';
$_smarty_tpl->tpl_vars['smarty']->value['section']['value']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('result')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['value']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['value']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['value']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['value']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['value']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['value']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['value']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['value']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['value']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['value']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['value']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['value']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['value']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['value']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['value']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['total']);
?>
<tr width="600">
<td><?php echo $_smarty_tpl->getVariable('result')->value[$_smarty_tpl->getVariable('smarty')->value['section']['value']['index']]['content'];?>
</td>
<td><?php echo $_smarty_tpl->getVariable('result')->value[$_smarty_tpl->getVariable('smarty')->value['section']['value']['index']]['username'];?>
</td>
<td><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'show','pid'=>$_smarty_tpl->getVariable('result')->value[$_smarty_tpl->getVariable('smarty')->value['section']['value']['index']]['pid']),$_smarty_tpl);?>
">查看</a>|<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'deletecomment','scid'=>$_smarty_tpl->getVariable('result')->value[$_smarty_tpl->getVariable('smarty')->value['section']['value']['index']]['scid']),$_smarty_tpl);?>
">删除</a></td>
</tr>
<?php endfor; endif; ?>
</table>

<?php if ($_smarty_tpl->getVariable('pager')->value){?>
共有评论<?php echo $_smarty_tpl->getVariable('pager')->value['total_count'];?>
条，共有<?php echo $_smarty_tpl->getVariable('pager')->value['total_page'];?>
页（每页<?php echo $_smarty_tpl->getVariable('pager')->value['page_size'];?>
条评论）：
<!--在当前页不是第一页的时候，显示前页和上一页-->
<?php if ($_smarty_tpl->getVariable('pager')->value['current_page']!=$_smarty_tpl->getVariable('pager')->value['first_page']){?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'managecomment','page'=>$_smarty_tpl->getVariable('pager')->value['first_page']),$_smarty_tpl);?>
">首页</a> | 
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'managecomment','page'=>$_smarty_tpl->getVariable('pager')->value['prev_page']),$_smarty_tpl);?>
">上一页</a> | 
<?php }?>
<!--开始循环页码，同时如果循环到当前页则不显示链接-->
<?php  $_smarty_tpl->tpl_vars['thepage'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pager')->value['all_pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['thepage']->key => $_smarty_tpl->tpl_vars['thepage']->value){
?>
	<?php if ($_smarty_tpl->tpl_vars['thepage']->value!=$_smarty_tpl->getVariable('pager')->value['current_page']){?>
		<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'managecomment','page'=>$_smarty_tpl->tpl_vars['thepage']->value),$_smarty_tpl);?>
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
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'managecomment','page'=>$_smarty_tpl->getVariable('pager')->value['next_page']),$_smarty_tpl);?>
">下一页</a> | 
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'managecomment','page'=>$_smarty_tpl->getVariable('pager')->value['last_page']),$_smarty_tpl);?>
">尾页</a>
<?php }?>
<?php }?>
</div>
 </body>
</html>
