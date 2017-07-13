<?php
/* Smarty version 3.1.30, created on 2017-06-13 09:22:56
  from "D:\WWW\1919\1919Shop\templates\Senha.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593f3e70c02644_13438906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ae47e3656b8783710d95541aa0ed68a5ed2397f' => 
    array (
      0 => 'D:\\WWW\\1919\\1919Shop\\templates\\Senha.html',
      1 => 1497316881,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.html' => 1,
  ),
),false)) {
function content_593f3e70c02644_13438906 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>忘记密码</title>
	<link rel="stylesheet" href="css/Reset.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/Senha.css">
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
<!-- header开始 -->
    <div class="header">
        <div class="top clearfix">
            <div class="wrap">
                <div class="t_left fl">
                    <ul>
                        <li><span></span></li>
                        <li class="t_spec">送至：</li>
                        <li><a href="###">郑州市&nbsp;&nbsp;</a></li>
                        <li>欢迎光临1919酒类直供！</li>
                        <li><a href="login.php" class="t_login">亲,请登录</a></li>
                        <li><a href="register.php" class="t_login">去注册</a></li>
                    </ul>
                </div>
                <div class="t_right fr">
                    <ul id="top_nav clearfix">
                        <li class="top_nav_list">
                            <a href="index.php" class="pic">手机商城</a>
                            <div class="t_r_sm">
                               <img src="images/code.png" height="94" width="79" alt="">
                            </div>
                            <span></span>
                        </li>
                        
                        <li class="top_nav_list">
                            <a href="login.php" class="pic">客户服务</a>
                            <ul class="t_r_sm">
                                <li><a href="login.php">联系客服</a></li>
                                <li><a href="help center.php">帮助中心</a></li>
                            </ul>
                            <span></span>
                        </li>
                        
                        <li class="top_nav_list">
                            <a href="login.php" class="pic">商家合作</a>
                            <ul class="t_r_sm">
                                <li><a href="login.php">商家入驻</a></li>
                                <li><a href="login.php">玖妈妈APP</a></li>
                                <li><a href="friend_link.php">采购招标</a></li>
                            </ul>
                            <span></span>
                        </li>
                        
                        <li class="top_nav_list">
                            <a href="index.php" class="pic">网站导航</a>
                            <ul class="t_r_sm">
                                <li><a href="index.php">商城首页</a></li>
                                <li><a href="login.php">会员中心</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="logo clearfix">
            <div class="wrap">
                <div class="logo_l fl">
                    <div>
                        <a href="index.php"><img src="images/logo.png" alt=""></a>
                    </div>
                    <div>
                        <a href="shopshouye.php"><img class="logo_img" src="images/head-logo-a.gif" alt=""></a>
                    </div>
                </div>
                <div class="logo_r fr clearfix">
                        <div class="S_right fl">
                            <div class="S_search clearfix">
                                <div class="S_search_container fl">
                                    <div class="S_search1"></div>
                                    <div class="S_search2">
                                        <p value="">美酒</p>
                                        <p value="">店铺</p>
                                    </div>
                                    <span class="S_search_icon"></span>
                                </div>
                                <input type="text" class="txt fl">
                                <input type="submit" value="搜索" class="but fr">
                            </div>
                            <ul class="sear_hot">
                                <li class="fl sear_hot_red">热门搜索：</li>
                                <li class="fl sear_hot_red"><a href="goodsList.php">泸州老窖</a></li>
                                <li class="fl"><a href="goodsList.php">五粮液</a></li>
                                <li class="fl sear_hot_red"><a href="goodsList.php">奔富</a></li>
                                <li class="fl"><a href="goodsList.php">剑南春</a></li>
                                <li class="fl sear_hot_red"><a href="goodsList.php">冰爽啤酒</a></li>
                                <li class="fl"><a href="goodsList.php">拉菲</a></li>
                            </ul>   
                        </div>
                        <div class="buycar fr">
                            <span class="buycar_car"></span>
                            <a href="shoppingCart.php">购物车</a>
                            <span class="buycar_num">0</span>
                            <span class="buycar_arrow"></span>
                            <div class="buycar_list">
                                <span class="buycar_list_pic"><img src="images/shopcart.png" height="50" width="50" alt=""></span>
                                <p>购物车中还没有商品，赶紧选购吧!</p>
                            </div>
                        </div>
                        
                </div>
                    
                
            </div>
        </div>
    </div>
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
 src="js/common.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/Senha.js"><?php echo '</script'; ?>
>
</html><?php }
}
