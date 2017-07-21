<?php
/* Smarty version 3.1.30, created on 2017-07-21 16:42:32
  from "D:\WWW\1919\1919Shop\templates\help_center.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5971be78d30174_36692802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e7edc6d8cf0fcc76409e0944da84d5e05235f49' => 
    array (
      0 => 'D:\\WWW\\1919\\1919Shop\\templates\\help_center.html',
      1 => 1500626551,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_top.html' => 1,
    'file:header_bottom.html' => 1,
    'file:list.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5971be78d30174_36692802 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>帮助中心</title>
	<link rel="stylesheet" href="css/Reset.min.css">
	<link rel="stylesheet" href="css/help_center.min.css">
	<?php echo '<script'; ?>
 src="js/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:header_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:header_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<!-- 内容 -->
	<div class="l_flash">
		<div class="l_fh_t"></div>
	</div>
	<div class="l_service">
		<div class="l_sre_p1 wp">自助服务
			<span>《SEVERICE》</span>
		</div>
		<div class="l_sre_con wp">
			<div class="l_con_left">
				<ul class="l_icolist clearfix">
					<li>
						<a href="###">
							<img src="images/service-ico1.png" alt="" class="icon">
						</a>
					</li>
					<li>
						<a href="###">
							<img src="images/service-ico2.png" alt="" class="icon">
						</a>
					</li>
					<li>
						<a href="###">
							<img src="images/service-ico3.png" alt="" class="icon">
						</a>
					</li>
					<li>
						<a href="###">
							<img src="images/service-ico4.png" alt="" class="icon">
						</a>
					</li>
					<li>
						<a href="###" class="icon3">
							<img src="images/service-ico5.png" alt="" class="icon">
						</a>
					</li>
					<li class="ico1">
						<a href="###">
							<img src="images/service-ico6.png" alt="" class="icon">
						</a>
					</li>
					<li>
						<a href="###">
							<img src="images/service-ico7.png" alt="" class="icon">
						</a>
					</li>
					<li>
						<a href="Senha.php">
							<img src="images/service-ico8.png" alt="" class="icon">
						</a>
					</li>
				</ul>
			</div>
			<div class="l_con_right">
				<a href="###"><img src="images/service_tel.png" alt=""></a>
				<a href="###"><img src="images/service_kf.png" alt=""></a>
				<a href="###">
					<img src="images/service_wx.png" alt="" id="wx">
					<div class="l_wx" id="wx_c"><img src="images/wx_code_1.png" alt=""></div>
				</a>
				<a href="###">
					<img src="images/service_wb.png" alt="" id="wb">
					<div class="l_wb" id="wb_c"><img src="images/wx_code_2.png" alt=""></div>
				</a>
			</div>
		</div>
	</div>
	<div class="l_sre_ng  wp">
		<div class="l_sre_p1">新手指南 
			<span>《NEWBIE GUIDE》</span>
		</div>
		<div class="l_news">
			<ul class="l_dxgx clearfix">
				<li><a href="guide.php"><img src="images/xszl_ico1.png" alt=""></a></li>
				<li><a href="guide.php"><img src="images/xszl_ico2.png" alt=""></a></li>
				<li><a href="guide.php"><img src="images/xszl_ico3.png" alt=""></a></li>
				<li><a href="guide.php"><img src="images/xszl_ico4.png" alt=""></a></li>
				<li><a href="guide.php"><img src="images/xszl_ico5.png" alt=""></a></li>
			</ul>
		</div>
	</div>
	<div class="l_sre_tad">
		<div class="l_sre_p1 wp">常见问题 
			<span>《COMMON PROPBLEMS》</span>
		</div>
		<div class="l_tad_con">
			<div class="l_tad_top wp">
				<ul class="l_tad_ul clearfix">
					<li>
						<a href="###">
							<font>账号安全</font>
							<span class="tad_jj"></span>
						</a>
					</li>
					<li>
						<a href="###">
							<font>订单</font>
							<span class="tad_jj"></span>
						</a>
					</li>
					<li>
						<a href="###">
							<font>支付方式及发票</font>
							<span class="tad_jj"></span>
						</a>
					</li>
					<li>
						<a href="###">
							<font>物流配送</font>
							<span class="tad_jj"></span>
						</a>
					</li>
					<li>
						<a href="###">
							<font>退换货</font>
							<span class="tad_jj"></span>
						</a>
					</li>
				</ul>
			</div>
			<div class="l_tad_list wp">
				<div class="l_tlist_co">
					<ul class="l_tlul clearfix">
						<li class="l_tll">
							<div class="l_tlul_dv"><a href="friend_link.php">如何修改登录密码？</a></div>
							<div class="l_tlul_dv"><a href="friend_link.php">怎么修改个人信息？</a></div>
							<div class="l_tlul_dv"><a href="friend_link.php">已绑定的手机号不能正常使用，如何修改手机号？</a></div>
						</li>
						<li class="l_tlr">
							<div class="l_tlul_dv"><a href="Senha.php">密码忘记了怎么办？</a></div>
							<div class="l_tlul_dv"><a href="friend_link.php">忘记账户或昵称怎么办？</a></div>
							<div class="l_tlul_dv"><a href="friend_link.php">温馨提示</a></div>
						</li>
					</ul>
				</div>
				<div class="l_tlist_co">
					<ul class="l_tlul clearfix">
						<li class="l_tll">
							<div class="l_tlul_dv"><a href="friend_link.php">配送信息需要变更怎么办？</a></div>
							<div class="l_tlul_dv"><a href="friend_link.php">想要更改订单中的酒水怎么办？</a></div>
							<div class="l_tlul_dv"><a href="friend_link.php">订单迟迟未发货怎么办？</a></div>
						</li>
						<li class="l_tlr">
							<div class="l_tlul_dv"><a href="friend_link.php">怎样查看我的订单？</a></div>
							<div class="l_tlul_dv"><a href="friend_link.php">订单想要取消怎么办？</a></div>
						</li>
					</ul>
				</div>
				<div class="l_tlist_co">
					<ul class="l_tlul clearfix">
						<li class="l_tll">
							<div class="l_tlul_dv"><a href="friend_link.php">如何选择支付方式？</a></div>
							<div class="l_tlul_dv"><a href="friend_link.php">哪些原因会造成支付不成功？</a></div>
							<div class="l_tlul_dv"><a href="friend_link.php">可以更改支付方式吗？如果更改？</a></div>
						</li>
						<li class="l_tlr">
							<div class="l_tlul_dv"><a href="friend_link.php">发票开错了可以重开吗？</a></div>
							<div class="l_tlul_dv"><a href="friend_link.php">发票开具有哪些注意事项？</a></div>
							<div class="l_tlul_dv"><a href="friend_link.php">可以开具增值税专用发票吗？</a></div>
						</li>
					</ul>
				</div>
				<div class="l_tlist_co">
					<ul class="l_tlul clearfix">
						<li class="l_tll">
							<div class="l_tlul_dv"><a href="friend_link.php">配送人员离开后，发现包裹异常怎么办？</a></div>
							<div class="l_tlul_dv"><a href="friend_link.php">商品页面显示免运费，为何还会收取运费？</a></div>
							<div class="l_tlul_dv"><a href="friend_link.php">订单提交后多长时间出库、多长时间可以收到商品？</a></div>
						</li>
						<li class="l_tlr">
							<div class="l_tlul_dv"><a href="friend_link.php">商品页面显示免运费，为何还会收取运费？</a></div>
							<div class="l_tlul_dv"><a href="friend_link.php">订单提交后多长时间出库、多长时间可以收到商品？</a></div>
							<div class="l_tlul_dv"><a href="friend_link.php">网上下的订单，可以到门店自提吗？</a></div>
						</li>
					</ul>
				</div>
				<div class="l_tlist_co" style="display:block">
					<ul class="l_tlul clearfix">
						<li class="l_tll">
							<div class="l_tlul_dv"><a href="friend_link.php">我在哪里可以看到我的退货申请进度？</a></div>
							<div class="l_tlul_dv"><a href="friend_link.php">退款流程</a></div>
							<div class="l_tlul_dv"><a href="friend_link.php">退款退到哪里？</a></div>
						</li>
						<li class="l_tlr">
							<div class="l_tlul_dv"><a href="friend_link.php">我想修改或撤销退换货申请怎么办？</a></div>
							<div class="l_tlul_dv"><a href="friend_link.php">退换货商品寄到哪里？</a></div>
							<div class="l_tlul_dv"><a href="friend_link.php">运费由谁支付</a></div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="l_ser_bd wp">
		<ul class="l_bd_ul clearfix">
			<li><a href="friend_link.php"><img src="images/foot_1.png" alt=""></a></li>
			<li><a href="friend_link.php"><img src="images/foot_2.png" alt=""></a></li>
			<li><a href="friend_link.php"><img src="images/foot_3.png" alt=""></a></li>
			<li><a href="friend_link.php"><img src="images/foot_4.png" alt=""></a></li>
			<li><a href="friend_link.php"><img src="images/foot_5.png" alt=""></a></li>
		</ul>
	</div>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
<?php echo '<script'; ?>
 src="js/help_center.min.js"><?php echo '</script'; ?>
>
</html><?php }
}
