<?php /* Smarty version Smarty-3.0.8, created on 2013-05-17 11:21:37
         compiled from "D:\wamp\www\sp/tpl\admin/admin_nav.html" */ ?>
<?php /*%%SmartyHeaderCode:14722519612c11afcc3-57053146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00fcc9a37bd27f2ac3a57b77ca02a9dc6944b42d' => 
    array (
      0 => 'D:\\wamp\\www\\sp/tpl\\admin/admin_nav.html',
      1 => 1368789694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14722519612c11afcc3-57053146',
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
  <link rel="stylesheet" href="../sp/tpl/css/admin_nav.css" type="text/css" />
  <script type="text/javascript" src="../sp/tpl/js/jquery-1.9.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $(".sh1,.sh3,.sh5,.sh7,.sh9,.sh11").hide(200);
});
$(document).ready(function(){
$(".sh").click(function(){
  $(".sh1").slideToggle(200);
  $(".sh3,.sh5,.sh7,.sh9,.sh11").hide(200);
});
});
$(document).ready(function(){
$(".sh2").click(function(){
  $(".sh3").slideToggle(200);
  $(".sh1,.sh5,.sh7,.sh9,.sh11").hide(200);
});
});
$(document).ready(function(){
$(".sh4").click(function(){
  $(".sh5").slideToggle(200);
  $(".sh1,.sh3,.sh7,.sh9,.sh11").hide(200);
});
});
$(document).ready(function(){
$(".sh6").click(function(){
  $(".sh7").slideToggle(200);
  $(".sh1,.sh3,.sh5,.sh9,.sh11").hide(200);
});
});
$(document).ready(function(){
$(".sh8").click(function(){
  $(".sh9").slideToggle(200);
  $(".sh1,.sh3,.sh5,.sh7,.sh11").hide(200);
});
});
$(document).ready(function(){
$(".sh10").click(function(){
  $(".sh11").slideToggle(200);
  $(".sh1,.sh3,.sh5,.sh7,.sh9").hide(200);
});
});

</script>
 </head>

 <body>
<div id="main">
<div class="first">
<p>欢迎您:<b><?php echo $_smarty_tpl->getVariable('username')->value;?>
</b>!</p>
<p><a href="http://localhost/sp" target="_blank">返回首页</a></p>
</div>
<div class="sh">
 <h2><a href="#">文章</a></h2>
   </div>
  <ul class="sh1">
  <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'add'),$_smarty_tpl);?>
" target="main">写文章</a></li>
  <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'manage'),$_smarty_tpl);?>
" target="main">管理文章</a></li>
  </ul>
 
  <div class="sh2"><h2><a href="#">评论</a></h2></div>
  <ul class="sh3">
  <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'managecomment'),$_smarty_tpl);?>
" target="main">评论管理</a></li>
  </ul>
  <div class=sh4><h2><a href="#">分类</a></h2></div>
  <ul class="sh5">
  <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'addcat'),$_smarty_tpl);?>
" target="main">添加分类</a></li>
  <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'catmanage'),$_smarty_tpl);?>
" target="main">管理分类</a></li>
  </ul>
    <div class="sh10"><h2><a href="#">友链</a></h2></div>
  <ul class="sh11">
  <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'addlinks'),$_smarty_tpl);?>
" target="main">添加友链</a></li>
  <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'linksmanage'),$_smarty_tpl);?>
" target="main">友链管理</a></li>
  </ul>
  <div class="sh6"><h2><a href="#">用户</a></h2></div>
  <ul class="sh7">
  <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'manageuser'),$_smarty_tpl);?>
" target="main">管理用户</a></li>
  </ul>
    <div class="sh8"><h2><a href="#">设置</a></h2></div>
  <ul class="sh9">
  <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'admin_settings'),$_smarty_tpl);?>
" target="main">博客设置</a></li>
  </ul>

</div>
 </body>
</html>
