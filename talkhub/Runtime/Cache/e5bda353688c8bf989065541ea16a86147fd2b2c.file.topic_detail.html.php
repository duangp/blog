<?php /* Smarty version Smarty-3.1.6, created on 2018-07-13 23:43:50
         compiled from "D:/phpStudy/WWW/talkhub/talkhub/Home/View\Topic\topic_detail.html" */ ?>
<?php /*%%SmartyHeaderCode:284845b484d0d351fd3-72861627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5bda353688c8bf989065541ea16a86147fd2b2c' => 
    array (
      0 => 'D:/phpStudy/WWW/talkhub/talkhub/Home/View\\Topic\\topic_detail.html',
      1 => 1531496587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '284845b484d0d351fd3-72861627',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5b484d0d3984e',
  'variables' => 
  array (
    'date' => 0,
    'value' => 0,
    'tp_id' => 0,
    'errorInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b484d0d3984e')) {function content_5b484d0d3984e($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>topic_list</title>
</head>
<body>
    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['date']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
        <!--<a href="<?php echo @__CONTROLLER__;?>
/topic_detail/tp_id/<?php echo $_smarty_tpl->tpl_vars['value']->value['tp_id'];?>
"></a><br>-->
    <p><?php echo $_smarty_tpl->tpl_vars['value']->value['tp_content'];?>
</p>

    <?php } ?>
    <form id="comment" action="<?php echo @__MODULE__;?>
/comment/comment_add/tp_id/<?php echo $_smarty_tpl->tpl_vars['tp_id']->value;?>
" method="post">
        <p>评论<input type="text" name="cmt_content" value="我也要说两句"></p><span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['cmt_content'];?>
</span>
        <input type="text" name="captcha">
        <img src="<?php echo @__MODULE__;?>
/topic/verify_img"
             onclick="this.src='<?php echo @__MODULE__;?>
/topic/verify_img'" alt=""/><span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['verify'];?>
</span>
        <p><input type="submit"  value="提交"></p>

    </form>
</body>
</html><?php }} ?>