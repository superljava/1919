<?php
/* Smarty version 3.1.30, created on 2017-06-12 11:21:45
  from "D:\WWW\1919\demo\templates\register.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593e08c92fa081_26166742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '749cc02e8a76634cc6e490b030802b1318132807' => 
    array (
      0 => 'D:\\WWW\\1919\\demo\\templates\\register.html',
      1 => 1497108442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_593e08c92fa081_26166742 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/register.css">
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
			    <form action="reg_check.php" id="regis_myform">
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
	<!-- footer -->
	 <div class="footer">
            <div class="wrap">
                <ul class="f_help">
                    <li class="fl">
                        <h5 class="f_title"><a href="friend_link.php">购物指南</a></h5>
                        <ul class="f_help_list">
                            <li><a href="friend_link.php">1919会员体系介绍</a></li>
                            <li><a href="friend_link.php">发票说明</a></li>
                            <li><a href="friend_link.php">支付问题解答</a></li>
                            <li><a href="friend_link.php">优惠券说明</a></li>
                        </ul>
                    </li>
                    <li class="fl">
                        <h5 class="f_title"><a href="friend_link.php">帮助中心</a></h5>
                        <ul class="f_help_list">
                            <li><a href="friend_link.php">1919会员体系介绍</a></li>
                            <li><a href="friend_link.php">发票说明</a></li>
                            <li><a href="friend_link.php">支付问题解答</a></li>
                            <li><a href="friend_link.php">优惠券说明</a></li>
                        </ul>
                    </li>
                    <li class="fl">
                        <h5 class="f_title"><a href="friend_link.php">售后服务</a></h5>
                        <ul class="f_help_list">
                            <li><a href="friend_link.php">售后说明</a></li>
                            <li><a href="friend_link.php">品质保障</a></li>
                            <li><a href="friend_link.php">退换货流程</a></li>
                            <li><a href="friend_link.php">快喝购酒服务</a></li>
                        </ul>
                    </li>
                    <li class="fl">
                        <h5 class="f_title"><a href="friend_link.php">促销信息</a></h5>
                        <ul class="f_help_list">
                            <li><a href="liquorZone.php">【白酒专区】好酒甄选...</a></li>
                            <li><a href="beiZone.php">【洋啤专区】全球精选...</a></li>
                            <li><a href="wineZone.php">【红酒专区】品质迷情...</a></li>
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
                        <h5 class="f_title"><a href="friend_link.php">配送说明</a></h5>
                        <ul class="f_help_list">
                            <li><a href="friend_link.php">配送时间</a></li>
                            <li><a href="friend_link.php">配送费用</a></li>
                            <li><a href="friend_link.php">配送范围</a></li>
                            <li><a href="friend_link.php">货到付款</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="friendlink">
                    <div class="f_left fl">
                        <ul class="friendlink_list">
                            <li class="fl"><a href="###">1919酒类网上商城</a></li>
                            <li class="f_line fl">|</li>
                            <li class="fl"><a href="goodsList.php">中国白酒</a></li>
                            <li class="f_line fl">|</li>
                            <li class="fl"><a href="goodsList.php">葡萄酒</a></li>
                            <li class="f_line fl">|</li>
                            <li class="fl"><a href="goodsList.php">啤酒</a></li>
                            <li class="f_line fl">|</li>
                            <li class="fl"><a href="attract.php">1919招商加盟</a></li>
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
                                <a href="index.php"><img src="images/kuaihe-erweima_03.jpg" alt=""></a>
                                <p>下载APP轻松喝酒</p>
                            </li>
                            <li class="fl">
                                <a href="index.php"><img src="images/erweima_03.jpg" alt=""></a>
                                <p>关注1919公众号</p>
                            </li>
                            <li class="fl">
                                <a href="index.php"><img src="images/sinaLogo.jpg" alt="" class="f_sinapic"></a>
                            </li>
                            <li class="f_tip fl">购买的时候请确认达到法定饮酒年龄！1919不销售含酒精产品给18岁以下人士！</li>
                        </ul>
                        
                    </div>
                </div>
                <div class="f_last">站长统计</div>
            </div>
        </div>
    </body>
    <?php echo '<script'; ?>
 src="js/register.js"><?php echo '</script'; ?>
>
</html><?php }
}
