<?php
/* Smarty version 3.1.30, created on 2017-08-01 10:52:28
  from "D:\WWW\1919\1919Shop\templates\register.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597fecec90af69_39749709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c7a5ac3045888c0d91eee103db35e1604b4c553' => 
    array (
      0 => 'D:\\WWW\\1919\\1919Shop\\templates\\register.html',
      1 => 1501257315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.html' => 1,
  ),
),false)) {
function content_597fecec90af69_39749709 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/reset.min.css">
        <link rel="stylesheet" href="css/register.min.css">
        <link rel="stylesheet" href="css/common.min.css">
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
    <div class="register">
    	<div class="regis_top clearfix">
    		<div class="logo">
    			<a href="index.php"><img src="images/register/logo.png" height="75" width="228" alt=""></a>
    		</div>
    		<div class="welcome">
    			<a href="index.php">欢迎光临1919酒类直供</a>
    		</div>
    	</div>
	    <div class="regis_pic">
	    
		    <div class="regis_box">
		    	<p class="myform_tit"><a href="">会员注册</a></p>
			    <form action="reg_check.php" id="regis_myform" method="post">
			    	<div class="regis_tel">
			    		<span>86+</span>
			    		<input type="text" name="tel" placeholder="请输入未注册过的手机号码" id="r_tel">

			    		<!-- <p id="r_tel-error">手机号码有误，请重填</p> -->
			    	</div>
			    	<div class="regis_pwd">
			    		<span></span>
			    		<input type="password" name="pwd" placeholder="请输入包含字母、数字、符合的6-16位密码"  id="pwd" class="p_reminder"><!-- <span class="p_reminder"></span> -->
			    	</div>
			    	<div class="regis_confirm">
			    		<span></span>
			    		<input type="password" name="confirm_pwd" placeholder="请确认密码" id="confirm_pwd">
			    	</div>
			    	<div class="regis_code">
			    		<input type="text" name="code" placeholder="请输入右边看到的验证码">
			    		<span>
			    			<img src="images/register/code.png" height="36" width="108" alt="">
			    		</span>
			    	</div>
			    	<div class="regis_message">
			    		<input type="text" name="mes" placeholder="请输入校验码">
			    		<span>
			    			<button>短信校验码</button>
			    		</span>
			    	</div>
			    	<div class="regis_btn">
			    		<input type="submit" value="注&nbsp&nbsp册" id="btn">
			    	</div>
			    	<div class="agree">
			    		<i></i>
			    		<span><a href="">我已阅读并同意1919用户协议</a></span>
			    	</div>
			    	<h1 class="r_error"></h1>
			    	<h1 class="r_error2">请阅读并同意1919用户协议</h1>

			    </form>

			    <div class="regis_footer">
			    	<span>已有账号？</span>
			    	<span>去<a href="login.php">登录</a></span>
			    </div>
		    </div>
		</div>
	</div>
	<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </body>
    <?php echo '<script'; ?>
 src="js/register.js"><?php echo '</script'; ?>
>
</html><?php }
}
