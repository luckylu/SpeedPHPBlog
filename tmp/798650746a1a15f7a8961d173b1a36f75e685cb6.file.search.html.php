<?php /* Smarty version Smarty-3.0.8, created on 2013-05-17 12:15:34
         compiled from "D:\wamp\www\sp/tpl\search.html" */ ?>
<?php /*%%SmartyHeaderCode:2249451961f66bf3d01-23788242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '798650746a1a15f7a8961d173b1a36f75e685cb6' => 
    array (
      0 => 'D:\\wamp\\www\\sp/tpl\\search.html',
      1 => 1368792920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2249451961f66bf3d01-23788242',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_truncate')) include 'D:\wamp\www\sp\SpeedPHP\Drivers\Smarty\plugins\modifier.truncate.php';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title> search result </title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <link rel="stylesheet" href="../sp/tpl/css/maisn.css" type="text/css" />
 </head>

<body>
 <div class="pagewrap">


<?php $_template = new Smarty_Internal_Template("head.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<div class="article">
<?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('searchresult')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value){
?>
<div class="tables">
			<table>

  					<tr><h3><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'show','pid'=>$_smarty_tpl->tpl_vars['one']->value['pid']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['one']->value['title'];?>
</a></h3></tr>
  					<tr><h5 class="information">作者：<?php echo $_smarty_tpl->tpl_vars['one']->value['author'];?>
 | 发布时间：<?php echo $_smarty_tpl->tpl_vars['one']->value['time'];?>
 | 评论数：<?php echo $_smarty_tpl->tpl_vars['one']->value['commentnum'];?>
</h5></tr>
  				<tr>
 				<p>
  					<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['one']->value['content'],1000,"...");?>

  				</p>
  				</tr>
  				<tr>
                <div class="tag">标签：<?php echo $_smarty_tpl->tpl_vars['one']->value['tag'];?>

  				<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'show','pid'=>$_smarty_tpl->tpl_vars['one']->value['pid']),$_smarty_tpl);?>
" >阅读全文</a></div></tr> 
			</table>
            </div>
            <?php }} else { ?>
            <div class="tables">
            <p>啊偶，没有搜到任何文章！试试其他的吧~</p>
            </div>
<?php } ?>
</div>
<?php $_template = new Smarty_Internal_Template("sidebar.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<div class="page">
      <?php if ($_smarty_tpl->getVariable('pager')->value){?>
<!--在当前页不是第一页的时候，显示前页和上一页-->
<div class="pages">
<?php if ($_smarty_tpl->getVariable('pager')->value['current_page']!=$_smarty_tpl->getVariable('pager')->value['first_page']){?>
<a class="page2" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'search','keyword'=>$_smarty_tpl->getVariable('keyword')->value,'page'=>$_smarty_tpl->getVariable('pager')->value['first_page']),$_smarty_tpl);?>
">首页</a> | 
<?php }?>
<!--开始循环页码，同时如果循环到当前页则不显示链接-->
<?php  $_smarty_tpl->tpl_vars['thepage'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pager')->value['all_pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['thepage']->key => $_smarty_tpl->tpl_vars['thepage']->value){
?>
	<?php if ($_smarty_tpl->tpl_vars['thepage']->value!=$_smarty_tpl->getVariable('pager')->value['current_page']){?>
		<a class="page2" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'search','keyword'=>$_smarty_tpl->getVariable('keyword')->value,'page'=>$_smarty_tpl->tpl_vars['thepage']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['thepage']->value;?>
</a>
	<?php }else{ ?>
		<b class="page3"><?php echo $_smarty_tpl->tpl_vars['thepage']->value;?>
</b>
	<?php }?>
<?php }} ?>
<!--在当前页不是最后一页的时候，显示下一页和后页-->
<?php if ($_smarty_tpl->getVariable('pager')->value['current_page']!=$_smarty_tpl->getVariable('pager')->value['last_page']){?>
 | 
<a class="page2" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'search','keyword'=>$_smarty_tpl->getVariable('keyword')->value,'page'=>$_smarty_tpl->getVariable('pager')->value['last_page']),$_smarty_tpl);?>
">尾页</a>
<?php }?>
<?php }?>
</div>
</div> 


</div>

<?php $_template = new Smarty_Internal_Template("footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>  
</body>
</html>
