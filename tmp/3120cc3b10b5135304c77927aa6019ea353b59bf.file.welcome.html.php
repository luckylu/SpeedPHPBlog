<?php /* Smarty version Smarty-3.0.8, created on 2013-05-17 11:15:49
         compiled from "D:\wamp\www\sp/tpl\admin/welcome.html" */ ?>
<?php /*%%SmartyHeaderCode:25591519611652a0466-69954862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3120cc3b10b5135304c77927aa6019ea353b59bf' => 
    array (
      0 => 'D:\\wamp\\www\\sp/tpl\\admin/welcome.html',
      1 => 1368764946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25591519611652a0466-69954862',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title> 欢迎页 </title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
   <link rel="stylesheet" href="../sp/tpl/css/admin.css" type="text/css" />
   

 </head>

 <body>
 <div class="welcomemain">
  <h2>欢迎进入博客系统后台！</h2><br/><br/><br/><br/><br/><br/>
  <P>目前博客共有文章<b><?php echo $_smarty_tpl->getVariable('postnum')->value;?>
</b>篇，评论<b><?php echo $_smarty_tpl->getVariable('comnum')->value;?>
</b>条。</P>
  
  </div>
 </body>
</html>
