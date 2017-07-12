<?php
/* Smarty version 3.1.30, created on 2017-06-10 23:36:54
  from "D:\WWW\1919\demo\templates\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593c1216b24936_82579369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f35c18cc8a7612032d50e7d45a32fac8e1c64d0' => 
    array (
      0 => 'D:\\WWW\\1919\\demo\\templates\\login.html',
      1 => 1497108498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_593c1216b24936_82579369 (Smarty_Internal_Template $_smarty_tpl) {
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
		<div class="logo">
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
				<form action="login_check.php" id="my_form">
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
	<!-- footer开始 -->
	<div class="footer">
		<div class="wrap">
			<ul class="f_help">
				<li class="fl">
					<h5 class="f_title"><a href="###">购物指南</a></h5>
					<ul class="f_help_list">
						<li><a href="###">1919会员体系介绍</a></li>
						<li><a href="###">发票说明</a></li>
						<li><a href="###">支付问题解答</a></li>
						<li><a href="###">优惠券说明</a></li>
					</ul>
				</li>
				<li class="fl">
					<h5 class="f_title"><a href="###">帮助中心</a></h5>
					<ul class="f_help_list">
						<li><a href="###">1919会员体系介绍</a></li>
						<li><a href="###">发票说明</a></li>
						<li><a href="###">支付问题解答</a></li>
						<li><a href="###">优惠券说明</a></li>
					</ul>
				</li>
				<li class="fl">
					<h5 class="f_title"><a href="###">售后服务</a></h5>
					<ul class="f_help_list">
						<li><a href="###">售后说明</a></li>
						<li><a href="###">品质保障</a></li>
						<li><a href="###">退换货流程</a></li>
						<li><a href="###">快喝购酒服务</a></li>
					</ul>
				</li>
				<li class="fl">
					<h5 class="f_title"><a href="###">促销信息</a></h5>
					<ul class="f_help_list">
						<li><a href="###">【白酒专区】好酒甄选...</a></li>
						<li><a href="###">【洋啤专区】全球精选...</a></li>
						<li><a href="###">【红酒专区】品质迷情...</a></li>
						<li><a href="###">【奔富专题】最低45元起</a></li>
					</ul>
				</li>
				<li class="fl">
					<h5 class="f_title"><a href="###">媒体报道</a></h5>
					<ul class="f_help_list">
						<li><a href="###">壹玖壹玖酒类直供2017...</a></li>
						<li><a href="###">2016年度1919酒类直...</a></li>
						<li><a href="###">1919董事长杨陵江...</a></li>
						<li><a href="###">价格杀手"1919",让...</a></li>
					</ul>
				</li>
				<li class="fl">
					<h5 class="f_title"><a href="###">配送说明</a></h5>
					<ul class="f_help_list">
						<li><a href="###">配送时间</a></li>
						<li><a href="###">配送费用</a></li>
						<li><a href="###">配送范围</a></li>
						<li><a href="###">货到付款</a></li>
					</ul>
				</li>
			</ul>
			<div class="friendlink">
				<div class="f_left fl">
					<ul class="friendlink_list">
						<li class="fl"><a href="###">1919酒类网上商城</a></li>
						<li class="f_line fl">|</li>
						<li class="fl"><a href="###">中国白酒</a></li>
						<li class="f_line fl">|</li>
						<li class="fl"><a href="###">葡萄酒</a></li>
						<li class="f_line fl">|</li>
						<li class="fl"><a href="###">啤酒</a></li>
						<li class="f_line fl">|</li>
						<li class="fl"><a href="###">1919招商加盟</a></li>
					</ul>
					<div class="f_sure">
						<p>壹玖壹玖酒类平台科技股份有限公司 All Rights Reserved &nbsp; &nbsp;&nbsp;&nbsp; 蜀ICP备1338号</p>
						<p>增值电信业务经营许可证：川B2-20110101</p>
						<p>公司地址：高新区天府大道北段1700号1栋2单元18层1801号</p>
					</div>
					<ul class="f_pic">
						<li class="fl"><img src="images/certificate-one.jpg" alt=""></li>
						<li class="fl"><img src="images/certificate-two.jpg" alt=""></li>
						<li class="fl"><img src="images/certificate-three.jpg" alt=""></li>
						<li class="fl"><img src="images/certificate-four.jpg" alt=""></li>
						<li class="fl"><img src="images/certificate-five.jpg" alt=""></li>
					</ul>
				</div>
				<div class="f_right fr">
					<ul class="f_right_list">
						<li class="fl">
							<a href="###"><img src="images/kuaihe-erweima_03.jpg" alt=""></a>
							<p>下载APP轻松喝酒</p>
						</li>
						<li class="fl">
							<a href="###"><img src="images/erweima_03.jpg" alt=""></a>
							<p>关注1919公众号</p>
						</li>
						<li class="fl">
							<a href="###"><img src="images/sinaLogo.jpg" alt="" class="f_sinapic"></a>
						</li>
						<li class="f_tip fl">购买的时候请确认达到法定饮酒年龄！1919不销售含酒精产品给18岁以下人士！</li>
					</ul>
					
				</div>
			</div>
			<div class="f_last">站长统计</div>
		</div>
	</div>
	<!-- footer结束 -->
</body>
<?php echo '<script'; ?>
 src="js/login.js"><?php echo '</script'; ?>
>
</html><?php }
}
