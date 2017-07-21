<?php
/* Smarty version 3.1.30, created on 2017-07-21 16:42:39
  from "D:\WWW\1919\1919Shop\templates\Senha.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5971be7f4c5484_07946224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ae47e3656b8783710d95541aa0ed68a5ed2397f' => 
    array (
      0 => 'D:\\WWW\\1919\\1919Shop\\templates\\Senha.html',
      1 => 1500624608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_top.html' => 1,
    'file:header_bottom.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5971be7f4c5484_07946224 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>忘记密码</title>
	<link rel="stylesheet" href="css/Reset.min.css">
	<link rel="stylesheet" href="css/Senha.min.css">
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
    <?php $_smarty_tpl->_subTemplateRender("file:header_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:header_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- 内容 -->
	<div class="sen_con">
		<div class="sen_wp">
			<div class="sen_sen">找回密码</div>
			<div class="sen_yz">
				<div class="sen_14">
					<img src="images/sen_1234.png" height="70" width="770" alt="">
				</div>
				<div class="sen_for">
					<form action="###" class="fm" id="fm">
						<div class="fm_name">
							<lable for="usernamr" class="lable">账户名 :</lable>
							<input type="text" placeholder="请输入用户名/已验证手机号" name="username" id="usernamr">
						</div>
						<div class="fm_code clearfix">
							<lable for="code" class="lable">验证码 :</lable>
							<input type="text" placeholder="请输入验证码" name="code" id="code">
							<span>
								<img src="images/sen_yzm1.jpg" height="39" width="104" alt="" class="fm_ig">
								<img src="images/sen_yzm2.jpg" height="39" width="104" alt="" class="fm_ig">
								<img src="images/sen_yzm3.jpg" height="39" width="104" alt="" class="fm_ig">
							</span>
							<p class="sen_p"></p>
						</div>
						<div class="fm_btn">
							<input type="submit" value="提交" id="btn" >
						</div>
						<div class="sen_ts"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
<?php echo '<script'; ?>
 src="js/Senha.min.js"><?php echo '</script'; ?>
>
</html><?php }
}
