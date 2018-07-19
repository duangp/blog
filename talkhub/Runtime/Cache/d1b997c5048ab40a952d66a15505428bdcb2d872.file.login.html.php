<?php /* Smarty version Smarty-3.1.6, created on 2018-07-12 20:07:23
         compiled from "D:/phpStudy/WWW/talkhub/talkhub/Home/View\User\login.html" */ ?>
<?php /*%%SmartyHeaderCode:111085b46b94de31ef7-99875772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1b997c5048ab40a952d66a15505428bdcb2d872' => 
    array (
      0 => 'D:/phpStudy/WWW/talkhub/talkhub/Home/View\\User\\login.html',
      1 => 1531397227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111085b46b94de31ef7-99875772',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5b46b94de8010',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b46b94de8010')) {function content_5b46b94de8010($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta content="MSHTML 6.00.6000.16674" name="GENERATOR"/>

    <title>用户登录</title>
<body>
<form action="#" method="post">
    <ul>

            <div class="user_main_box">
                <ul>
                    <li class="user_main_text">用户名：</li>
                    <li class="user_main_input">
                        <input class="TxtUserNameCssClass" id="admin_user" maxlength="20" name="u_login_name"></li>
                </ul>
                <ul>
                    <li class="user_main_text">密&nbsp;&nbsp;&nbsp;&nbsp;码：</li>
                    <li class="user_main_input">
                        <input class="TxtPasswordCssClass" id="admin_psd" name="u_login_pwd" type="password">
                    </li>
                </ul>
                <ul>
                    <li class="user_main_text">验证码：</li>
                    <li class="user_main_input">
                        <input class="TxtValidateCodeCssClass" id="captcha" name="captcha" type="text">
                        <img src="<?php echo @__CONTROLLER__;?>
/verify_img"
                             onclick="this.src='<?php echo @__CONTROLLER__;?>
/verify_img'" alt=""/>
                    </li>
                </ul>
            </div>
        </li>
        <li class="user_main_r">

            <input style="border: medium none; background: cadetblue; height: 122px; width: 111px; display: block; cursor: pointer;"
                   value="" type="submit">
        </li>
    </ul>
</form>
</body>
</html>
<?php }} ?>