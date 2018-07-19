<?php /* Smarty version Smarty-3.1.6, created on 2018-07-12 23:45:00
         compiled from "D:/phpStudy/WWW/talkhub/talkhub/Admin/View\User\user_list.html" */ ?>
<?php /*%%SmartyHeaderCode:115215b47772d79f194-23255689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d882d18a6eccd526410f22c5fd2142345cf396f' => 
    array (
      0 => 'D:/phpStudy/WWW/talkhub/talkhub/Admin/View\\User\\user_list.html',
      1 => 1531410295,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115215b47772d79f194-23255689',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5b47772d80c7b',
  'variables' => 
  array (
    'date' => 0,
    'value' => 0,
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b47772d80c7b')) {function content_5b47772d80c7b($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\phpStudy\\WWW\\talkhub\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>user_list</title>
</head>
<body>
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['date']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['u_id'];?>

<a href="<?php echo @__CONTROLLER__;?>
/user_del/u_id/<?php echo $_smarty_tpl->tpl_vars['value']->value['u_id'];?>
">删除</a>
<?php } ?>
<!--<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>-->
<!--<tr id="product1">-->
<!--<td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
</td>-->
<!--<td><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</a></td>-->
<!--<td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_number'];?>
</td>-->
<!--<td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price'];?>
</td>-->
<!--<td><img src="<?php echo @ADMIN_IMG_URL;?>
20121018-174034-58977.jpg" height="60" width="60"></td>-->
<!--<td><img src="<?php echo @ADMIN_IMG_URL;?>
20121018-174034-97960.jpg" height="40" width="40"></td>-->
<!--<td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_brand_id'];?>
</td>-->
<!--<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['goods_create_time'],'%Y-%m-%d %T');?>
</td>-->
<!--<td><a href="<?php echo @__CONTROLLER__;?>
/upd/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
">修改</a></td>-->
<!--<td><a href="javascript:;" onclick="delete_product(1)">删除</a></td>-->
<!--</tr>-->
<!--<?php } ?>-->
</body>
</html>
<?php }} ?>