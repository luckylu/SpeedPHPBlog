<?php /* Smarty version Smarty-3.0.8, created on 2013-05-17 11:16:03
         compiled from "D:\wamp\www\sp/tpl\admin/write.html" */ ?>
<?php /*%%SmartyHeaderCode:11469519611731f05d2-05812003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fca1b445a415c4ff0de37f6f7753ff303e6f360b' => 
    array (
      0 => 'D:\\wamp\\www\\sp/tpl\\admin/write.html',
      1 => 1365148454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11469519611731f05d2-05812003',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_checkboxes')) include 'D:\wamp\www\sp\SpeedPHP\Drivers\Smarty\plugins\function.html_checkboxes.php';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title> 写文章 </title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <link rel="stylesheet" href="../sp/tpl/css/admin.css" type="text/css" />
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript">

    window.onload = function()
    {
        CKEDITOR.replace('content' );
    };

</script>
 </head>

 <body>
 <div class=main>
  <form name="writeform" action="<?php echo $_smarty_tpl->getVariable('setwrite')->value['url'];?>
" method="post">
  <p>标题：<br/><input name="title" type="text" value="<?php echo $_smarty_tpl->getVariable('p')->value['title'];?>
" /></p>
  <p>内容：<br/><textarea name="content" class="ckeditor" ><?php echo $_smarty_tpl->getVariable('p')->value['content'];?>
</textarea></p>
  <input type="hidden" name="pid" value="<?php echo $_smarty_tpl->getVariable('p')->value['pid'];?>
"></input>
  <P>标签:<input type="text" value="<?php echo $_smarty_tpl->getVariable('p')->value['tag'];?>
" name="tag"/></p>
  <p class="catmain">分类:</p><?php echo smarty_function_html_checkboxes(array('name'=>"cid",'options'=>$_smarty_tpl->getVariable('value')->value,'checked'=>$_smarty_tpl->getVariable('catresult_cid')->value,'separator'=>"<br />"),$_smarty_tpl);?>


<?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('result')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value){
?>
<ul class="cat clearfix"><li>
<input type="checkbox" name="cid[]" value="<?php echo $_smarty_tpl->tpl_vars['one']->value['cid'];?>
" /><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
<br />
</li></ul>
<?php }} ?>
  <input class="btn" name="submit" type="submit" value="<?php echo $_smarty_tpl->getVariable('setwrite')->value['btn'];?>
" />
  </form>

</div>
  </body>
</html>
