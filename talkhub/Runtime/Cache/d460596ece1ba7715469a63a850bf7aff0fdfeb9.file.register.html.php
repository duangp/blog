<?php /* Smarty version Smarty-3.1.6, created on 2018-07-12 19:54:37
         compiled from "D:/phpStudy/WWW/talkhub/talkhub/Home/View\User\register.html" */ ?>
<?php /*%%SmartyHeaderCode:43435b46b56842f310-64372070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd460596ece1ba7715469a63a850bf7aff0fdfeb9' => 
    array (
      0 => 'D:/phpStudy/WWW/talkhub/talkhub/Home/View\\User\\register.html',
      1 => 1531396475,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43435b46b56842f310-64372070',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5b46b56850ddc',
  'variables' => 
  array (
    'errorInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b46b56850ddc')) {function content_5b46b56850ddc($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
</head>
<body>
<form id="reg" action="<?php echo @__SELF__;?>
" method="post">
    <p>用户名：<input type="text" name="u_nick_name"></p><span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['u_nick_name'];?>
</span>
    <p>登录名：<input type="text" name="u_login_name"></p><span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['u_login_name'];?>
</span>
    <p>密 码：<input type="password" name="u_login_pwd"></p><span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['u_login_pwd'];?>
</span>
    <p>重复密码：<input type="password" name="u_login_pwd1"></p><span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['u_login_pwd1'];?>
</span>
    <p>E-mail：<input type="text" name="u_email"></p><span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['u_email'];?>
</span>
    <p>Tel：<input type="text" name="u_Tel"></p><span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['u_Tel'];?>
</span>
    <input name="u_sex" type="radio" value="1" checked="checked"/>男
    <input name="u_sex" type="radio" value="0"/>女
    <input name="u_sex" type="radio" value="2"/>不详<span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['u_sex'];?>
</span><br>
    <input type="text" name="captcha">
    <img src="<?php echo @__CONTROLLER__;?>
/verify_img"
         onclick="this.src='<?php echo @__CONTROLLER__;?>
/verify_img'" alt=""/><span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['verify'];?>
</span>
    <p><input type="submit" class="btn" value="提交注册"></p>

</form>
</body>
</html><?php }} ?>