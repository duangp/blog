<?php /* Smarty version Smarty-3.1.6, created on 2018-07-13 14:45:32
         compiled from "D:/phpStudy/WWW/talkhub/talkhub/Home/View\Topic\topic_list.html" */ ?>
<?php /*%%SmartyHeaderCode:208885b4845e5765dc7-40047811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e75bea32a216a22e2ca659b8abaead3feafdcae' => 
    array (
      0 => 'D:/phpStudy/WWW/talkhub/talkhub/Home/View\\Topic\\topic_list.html',
      1 => 1531464331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208885b4845e5765dc7-40047811',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5b4845e587b38',
  'variables' => 
  array (
    'date' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4845e587b38')) {function content_5b4845e587b38($_smarty_tpl) {?><!DOCTYPE html>
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
        <a href="<?php echo @__CONTROLLER__;?>
/topic_detail/tp_id/<?php echo $_smarty_tpl->tpl_vars['value']->value['tp_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['tp_title'];?>
</a><br>
    <?php } ?>
</body>
</html><?php }} ?>