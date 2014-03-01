<?php /* Smarty version Smarty-3.0.8, created on 2013-05-17 11:13:09
         compiled from "D:\wamp\www\sp/tpl\post.html" */ ?>
<?php /*%%SmartyHeaderCode:29448519610c5d03f71-39326355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a65eca1429142a02dee9c8264cb55fdd5b36870' => 
    array (
      0 => 'D:\\wamp\\www\\sp/tpl\\post.html',
      1 => 1368758070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29448519610c5d03f71-39326355',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title> 文章页 </title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
   <link rel="stylesheet" href="../sp/tpl/css/main.css" type="text/css" />
 </head>

 <body>
 <div class="pagewrap">
 <?php $_template = new Smarty_Internal_Template("head.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
 <div class="post">
<h3><?php echo $_smarty_tpl->getVariable('result')->value['title'];?>
</h3>
<h5 class="information">作者：<?php echo $_smarty_tpl->getVariable('result')->value['author'];?>
 | 时间：<?php echo $_smarty_tpl->getVariable('result')->value['time'];?>
 | 评论数：<?php echo $_smarty_tpl->getVariable('commentnum')->value;?>
</h5>
<p><?php echo $_smarty_tpl->getVariable('result')->value['content'];?>
</p><br/>
<p>标签：<?php echo $_smarty_tpl->getVariable('result')->value['tag'];?>
</p>
<p>分类：<?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('as')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value){
?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'searchcat','catname'=>$_smarty_tpl->tpl_vars['one']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['one']->value;?>
</a></p><br/>
<?php }} ?>
</div>

<?php $_template = new Smarty_Internal_Template("sidebar.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<div class="postcomment">
<P>留言内容：</P>
<?php if (!$_smarty_tpl->getVariable('comre')->value){?>
<p>还没有人留言，快来抢沙发吧！</p>
<?php }else{ ?>
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['one']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['name'] = 'one';
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('comre')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['one']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['one']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['one']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['one']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['one']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['one']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['total']);
?>
<div class="pcomments">
<table border="0">
<tr>
<td><p>作者：<?php echo $_smarty_tpl->getVariable('comre')->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['username'];?>
 时间：<?php echo $_smarty_tpl->getVariable('comre')->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['time'];?>
</p>
<p><?php echo $_smarty_tpl->getVariable('comre')->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['content'];?>
</p></td>
</tr>
</table>
</div>
<?php endfor; endif; ?>
<?php }?><br/><br/>
<?php if ($_smarty_tpl->getVariable('username')->value==''){?>
请先<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'member','a'=>'register'),$_smarty_tpl);?>
">注册</a>或者<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'member','a'=>'login'),$_smarty_tpl);?>
">登录</a>后才能留言
<?php }else{ ?>
<p>欢迎您：<?php echo $_smarty_tpl->getVariable('username')->value;?>
&nbsp;<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'member','a'=>'logout'),$_smarty_tpl);?>
">退出</a></p>
<?php }?>
  <form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'comment'),$_smarty_tpl);?>
" name="commentform" method="post">
  <p>留言：</p><textarea name="content" type="text" rows="10" cols="80"></textarea>
  <input type="hidden" name="coid" ></input>
  <input type="hidden" name="pid" value="<?php echo $_smarty_tpl->getVariable('result')->value['pid'];?>
" />
  <p><input name="submit" type="submit" value="提交" /></p>
  </form>
  </div>
  </div>
  
  <?php $_template = new Smarty_Internal_Template("footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?> 
  
 </body>
</html>
