<?php
/* Smarty version 3.1.30, created on 2017-06-14 11:37:08
  from "D:\WWW\1919_6.0\1919Shop\templates\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5940af64cc4767_99709978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9325ffd29a523ef4bca26fd0398b043b2eae0ff' => 
    array (
      0 => 'D:\\WWW\\1919_6.0\\1919Shop\\templates\\login.html',
      1 => 1497317430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.html' => 1,
  ),
),false)) {
function content_5940af64cc4767_99709978 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/Reset.css">
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/common.css">
	<?php echo '<script'; ?>
 src="js/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery.validate.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/messages_zh.min.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="regis_top clearfix">
		<div class="logo clearfix">
			<a href="index.php">
				<img src="images/logo.png" height="75" width="228" alt="">
			</a>
		</div>
		<div class="welcome">
			<a href="">欢迎光临1919酒类直供</a>
		</div>
	</div>
	<div class="login_ban">
		<div class="login_m">
			<div class="login_news">
				<p class="login_hy_qy">
					<span class="hy_login fl">会员登陆</span>
					<span class="qy_login fl">企业登陆</span>
				</p>
				<p class="login_top">请勿在公共场所勾选自动登录，以防账号丢失 </p>
				<form action="login_check.php" id="my_form" method="post">
					<p class="hy_user">
						<i></i>
						<input type="text" name="user"  placeholder="请输入用户名/手机号" class="hy_txt fl">
					</p>
					<p class="hy_pwd">
						<i></i>
						<input type="password" name="pwd" placeholder="请输入登陆密码" class="hy_pwds fl">
					</p>
					<p class="hy_zd">
						<i class="chec fl"><span class="duigou"></span></i>
						<span class="zd_log fl">自动登陆</span>
						<a href="###" class="wj_pwd fr">忘记密码?</a>
					</p>
					<input type="submit" class="hy_login_btn fr" value="登陆">
				</form>

				<p class="login_accet">
					<i class="selec"><span class="duigou2"></span></i>
					<span class="font">我已阅读并同意1919用户协议</span>
				</p>
				<p class="hy_zhuce">
					<span>还没有账号？<a href="register.php">去注册</a></span>
				</p>
			</div>
		</div>
		<div class="error-container"></div>
	</div>
	<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
<?php echo '<script'; ?>
 src="js/login.js"><?php echo '</script'; ?>
>
</html><?php }
}
