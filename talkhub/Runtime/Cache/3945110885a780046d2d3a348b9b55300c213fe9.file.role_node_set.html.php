<?php /* Smarty version Smarty-3.1.6, created on 2018-07-13 10:33:21
         compiled from "D:/phpStudy/WWW/talkhub/talkhub/Admin/View\Role\role_node_set.html" */ ?>
<?php /*%%SmartyHeaderCode:147035b48093e21dda3-39972194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3945110885a780046d2d3a348b9b55300c213fe9' => 
    array (
      0 => 'D:/phpStudy/WWW/talkhub/talkhub/Admin/View\\Role\\role_node_set.html',
      1 => 1531449200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147035b48093e21dda3-39972194',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5b48093e365ff',
  'variables' => 
  array (
    'node_list' => 0,
    'value' => 0,
    'node_list_son' => 0,
    'value1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b48093e365ff')) {function content_5b48093e365ff($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>role_node_set</title>
</head>
<body>
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['node_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['n_id'];?>
<p>
    <?php  $_smarty_tpl->tpl_vars['value1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value1']->_loop = false;
 $_smarty_tpl->tpl_vars['key1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['node_list_son']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value1']->key => $_smarty_tpl->tpl_vars['value1']->value){
$_smarty_tpl->tpl_vars['value1']->_loop = true;
 $_smarty_tpl->tpl_vars['key1']->value = $_smarty_tpl->tpl_vars['value1']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['value1']->value['n_pid']==$_smarty_tpl->tpl_vars['value']->value['n_id']){?>
            &nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['value1']->value['n_id'];?>
<p>
        <?php }?>
    <?php } ?>
<?php } ?>
</body>
</html><?php }} ?>