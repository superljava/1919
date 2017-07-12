<?php
/* Smarty version 3.1.30, created on 2017-06-05 23:13:47
  from "D:\WWW\1919\demo\templates\shopshouye.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5935752b8c9d70_66607271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8bfd6e22b6ad7cc85445faa7c37c2f11825f09c' => 
    array (
      0 => 'D:\\WWW\\1919\\demo\\templates\\shopshouye.html',
      1 => 1496675566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5935752b8c9d70_66607271 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>店铺首页</title>
	<link rel="stylesheet" href="css/Reset.css">
	<link rel="stylesheet" href="css/shopshouye.css">
	<link rel="stylesheet" href="css/common.css">
	<?php echo '<script'; ?>
 src="js/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery_lazyload.js"><?php echo '</script'; ?>
>
</head>
<body>
    <!-- header -->
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
        <div class="logo">
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
	<div class="dianpu_smban"></div> 
	<div class="dianpu_nav">
		<div class="dianpu_navs">
			<ul class="dianpu_navs_link fl">
				<li><a href="###">店铺首页</a></li>
				<li><a href="###">全部商品</a></li>
			</ul>
			<form action="" class="fr">
				<input placeholder="搜索店内商品" class="dianpu_navs_txt" type="text">
				<input type="submit" class="dianpu_navs_sub" value="搜索">
			</form>
		</div>
	</div>
	<div class="dianpu_ban">
		<a href="###"><img src="images/bann.jpg" height="500" width="1920" alt=""></a>
	</div>

	<div class="m_shangpin clearfix">
		<div class="m_shangpin_like fl">
			<p class="guess_like">猜你喜欢</p>
			<ul>
				<li>
					<img src="images/like1.jpg" height="640" width="640" alt="">
					<div class="m_shangpin_like_des">
						<a class="m_shangpin_like_cp" href="###">【贝克汉姆推荐】40°翰格雅爵单一谷物苏格兰威士忌700ml</a>
						<a class="m_shangpin_like_shop" href="###">1919自营店</a>
						 <p class="m_shangpin_like_font"><span class="now_pri"><span class="rmb">￥</span><i>15</i></span><span class="yuan_pri"><span class="rmb">￥</span><i>52</i></span></p>
					</div>
					
				</li>
				<li>
					<img src="images/like2.jpg" height="640" width="640" alt="">
					<div class="m_shangpin_like_des">
						<a class="m_shangpin_like_cp" href="###">【贝克汉姆推荐】40°翰格雅爵单一谷物苏格兰威士忌700ml</a>
						<a class="m_shangpin_like_shop" href="###">1919拉菲官方旗舰店</a>
						 <p class="m_shangpin_like_font"><span class="now_pri"><span class="rmb">￥</span><i>15</i></span><span class="yuan_pri"><span class="rmb">￥</span><i>52</i></span></p>
					</div>
					
				</li>
				<li>
					<img src="images/like3.jpg" height="640" width="640" alt="">
					<div class="m_shangpin_like_des">
						<a class="m_shangpin_like_cp" href="###">法国拉菲传奇波尔多红葡萄酒750ml</a>
						<a class="m_shangpin_like_shop" href="###">1919拉菲官方旗舰店</a>
						 <p class="m_shangpin_like_font"><span class="now_pri"><span class="rmb">￥</span><i>15</i></span><span class="yuan_pri"><span class="rmb">￥</span><i>52</i></span></p>
					</div>
					
				</li>
				<li>
					<img src="images/like5.jpg" height="640" width="640" alt="">
					<div class="m_shangpin_like_des">
						<a class="m_shangpin_like_cp" href="###">1664白啤瓶装330ML</a>
						<a class="m_shangpin_like_shop" href="###">1919凯旋官方旗舰店</a>
						 <p class="m_shangpin_like_font"><span class="now_pri"><span class="rmb">￥</span><i>15</i></span><span class="yuan_pri"><span class="rmb">￥</span><i>52</i></span></p>
					</div>
					
				</li>
			</ul>
		</div>
		<div class="dianpu_shangpin fl">
			<ul class="dianpu_shangpin_nav">
				<li>综合排序</li>
				<li>价格</li>
			</ul>
			<div class="dianpu_shangpin_news">
				<a href="goodsDetails.php">
					<img src="images/9ca8c60e-0068-450e-be3a-5b17a4aebf53.jpg"  alt="">
					<p class="dianpu_shangpin_pri"><span class="list_now_pri"><span class="rmb">￥</span><i>15</i></span><span class="list_yuan_pri"><span class="rmb">￥</span><i>52</i></span></p>
					<a href="goodsDetails.php">法国 圣宝龙城堡 干红葡萄酒750ml 定制酒 中级庄</a>
				</a>
			</div>
			<div class="dianpu_shangpin_news">
				<a href="goodsDetails.php">
					<img src="images/0841f452-cf7e-41ee-a7ef-57fe1b073677.jpg" height="400" width="400"  alt="">
					<p class="dianpu_shangpin_pri"><span class="list_now_pri"><span class="rmb">￥</span><i>15</i></span><span class="list_yuan_pri"><span class="rmb">￥</span><i>52</i></span></p>
					<a href="goodsDetails.php">法国 圣宝龙城堡 干红葡萄酒750ml 定制酒 中级庄</a>
				</a>
			</div>
			<div class="dianpu_shangpin_news">
				<a href="goodsDetails.php">
					<img src="images/7bddff14-8e70-4248-a03f-4aabbdf51df2.jpg" height="400" width="400"  alt="">
					<p class="dianpu_shangpin_pri"><span class="list_now_pri"><span class="rmb">￥</span><i>15</i></span><span class="list_yuan_pri"><span class="rmb">￥</span><i>52</i></span></p>
					<a href="###">法国 圣宝龙城堡 干红葡萄酒750ml 定制酒 中级庄</a>
				</a>
			</div>
			<div class="dianpu_shangpin_news">
				<a href="goodsDetails.php">
					<img src="images/7878af03-21e5-4922-b2e3-d3519b1e0ee5.jpg" height="400" width="400"  alt="">
					<p class="dianpu_shangpin_pri"><span class="list_now_pri"><span class="rmb">￥</span><i>15</i></span><span class="list_yuan_pri"><span class="rmb">￥</span><i>52</i></span></p>
					<a href="###">法国 圣宝龙城堡 干红葡萄酒750ml 定制酒 中级庄</a>
				</a>
			</div>
			<div class="dianpu_shangpin_news">
				<a href="goodsDetails.php">
					<img src="images/6d2ac6bd-ba42-41b3-8ddb-89693fcd1e63.jpg" height="400" width="400"  alt="">
					<p class="dianpu_shangpin_pri"><span class="list_now_pri"><span class="rmb">￥</span><i>15</i></span><span class="list_yuan_pri"><span class="rmb">￥</span><i>52</i></span></p>
					<a href="###">法国 圣宝龙城堡 干红葡萄酒750ml 定制酒 中级庄</a>
				</a>
			</div>
			<div class="dianpu_shangpin_news">
				<a href="goodsDetails.php">
					<img src="images/525fa92f-9ffe-45d9-9e4e-c31b7cadc1b4.jpg" height="400" width="400"  alt="">
					<p class="dianpu_shangpin_pri"><span class="list_now_pri"><span class="rmb">￥</span><i>15</i></span><span class="list_yuan_pri"><span class="rmb">￥</span><i>52</i></span></p>
					<a href="###">法国 圣宝龙城堡 干红葡萄酒750ml 定制酒 中级庄</a>
				</a>
			</div>
			<div class="dianpu_shangpin_news">
				<a href="goodsDetails.php">
					<img src="images/41b3f684-97e6-404f-8cb0-d68503a36f48.jpg" height="400" width="400"  alt="">
					<p class="dianpu_shangpin_pri"><span class="list_now_pri"><span class="rmb">￥</span><i>15</i></span><span class="list_yuan_pri"><span class="rmb">￥</span><i>52</i></span></p>
					<a href="###">法国 圣宝龙城堡 干红葡萄酒750ml 定制酒 中级庄</a>
				</a>
			</div>
			<div class="dianpu_shangpin_news">
				<a href="goodsDetails.php">
					<img src="images/419aac14-5dad-4c79-be49-22d337e3f39a.jpg" height="400" width="400"  alt="">
					<p class="dianpu_shangpin_pri"><span class="list_now_pri"><span class="rmb">￥</span><i>15</i></span><span class="list_yuan_pri"><span class="rmb">￥</span><i>52</i></span></p>
					<a href="###">法国 圣宝龙城堡 干红葡萄酒750ml 定制酒 中级庄</a>
				</a>
			</div>
			<div class="dianpu_shangpin_news">
				<a href="goodsDetails.php">
					<img src="images/33caf45f-f5ad-421c-8106-357e408cc047.jpg" height="400" width="400"  alt="">
					<p class="dianpu_shangpin_pri"><span class="list_now_pri"><span class="rmb">￥</span><i>15</i></span><span class="list_yuan_pri"><span class="rmb">￥</span><i>52</i></span></p>
					<a href="###">法国 圣宝龙城堡 干红葡萄酒750ml 定制酒 中级庄</a>
				</a>
			</div>
			<div class="dianpu_shangpin_news">
				<a href="goodsDetails.php">
					<img src="images/1c85c97a-bbeb-4df8-b10c-ecdd9d6103c5.jpg" height="400" width="400"  alt="">
					<p class="dianpu_shangpin_pri"><span class="list_now_pri"><span class="rmb">￥</span><i>15</i></span><span class="list_yuan_pri"><span class="rmb">￥</span><i>52</i></span></p>
					<a href="###">法国 圣宝龙城堡 干红葡萄酒750ml 定制酒 中级庄</a>
				</a>
			</div>
			<div class="dianpu_shangpin_news">
				<a href="goodsDetails.php">
					<img src="images/19531b6f-b7df-4052-8092-ba297dc51123.jpg" height="400" width="400"  alt="">
					<p class="dianpu_shangpin_pri"><span class="list_now_pri"><span class="rmb">￥</span><i>15</i></span><span class="list_yuan_pri"><span class="rmb">￥</span><i>52</i></span></p>
					<a href="###">法国 圣宝龙城堡 干红葡萄酒750ml 定制酒 中级庄</a>
				</a>
			</div>
			<div class="dianpu_shangpin_news">
				<a href="goodsDetails.php">
					<img src="images/167f5f07-3bd3-4227-822b-8b673321b33a.jpg" height="400" width="400"  alt="">
					<p class="dianpu_shangpin_pri"><span class="list_now_pri"><span class="rmb">￥</span><i>15</i></span><span class="list_yuan_pri"><span class="rmb">￥</span><i>52</i></span></p>
					<a href="###">法国 圣宝龙城堡 干红葡萄酒750ml 定制酒 中级庄</a>
				</a>
			</div>
			<div class="dianpu_shangpin_news">
				<a href="goodsDetails.php">
					<img src="images/9ca8c60e-0068-450e-be3a-5b17a4aebf53.jpg" height="400" width="400"  alt="">
					<p class="dianpu_shangpin_pri"><span class="list_now_pri"><span class="rmb">￥</span><i>15</i></span><span class="list_yuan_pri"><span class="rmb">￥</span><i>52</i></span></p>
					<a href="###">法国 圣宝龙城堡 干红葡萄酒750ml 定制酒 中级庄</a>
				</a>
			</div>
			<div class="dianpu_shangpin_news">
				<a href="goodsDetails.php">
					<img src="images/7878af03-21e5-4922-b2e3-d3519b1e0ee5.jpg" height="400" width="400"  alt="">
					<p class="dianpu_shangpin_pri"><span class="list_now_pri"><span class="rmb">￥</span><i>15</i></span><span class="list_yuan_pri"><span class="rmb">￥</span><i>52</i></span></p>
					<a href="###">法国 圣宝龙城堡 干红葡萄酒750ml 定制酒 中级庄</a>
				</a>
			</div>
			<div class="dianpu_shangpin_news">
				<a href="goodsDetails.php">
					<img src="images/525fa92f-9ffe-45d9-9e4e-c31b7cadc1b4.jpg" height="400" width="400"  alt="">
					<p class="dianpu_shangpin_pri"><span class="list_now_pri"><span class="rmb">￥</span><i>15</i></span><span class="list_yuan_pri"><span class="rmb">￥</span><i>52</i></span></p>
					<a href="###">法国 圣宝龙城堡 干红葡萄酒750ml 定制酒 中级庄</a>
				</a>
			</div>
			<div class="dianpu_shangpin_news">
				<a href="goodsDetails.php">
					<img src="images/0841f452-cf7e-41ee-a7ef-57fe1b073677.jpg" height="400" width="400"  alt="">
					<p class="dianpu_shangpin_pri"><span class="list_now_pri"><span class="rmb">￥</span><i>15</i></span><span class="list_yuan_pri"><span class="rmb">￥</span><i>52</i></span></p>
					<a href="###">法国 圣宝龙城堡 干红葡萄酒750ml 定制酒 中级庄</a>
				</a>
			</div>
		</div>
		<div class="shangpin_fenye fr">
			<button  class="up fl">上一页</button>
			<div class="fenye_view fl">
				<ul class="fenye_list fl">
					 
				</ul>
			</div>
			<button class="down fl">下一页</button>
		</div>
	</div>
	<!-- footer开始 -->
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
	<!-- footer结束 -->
</body>
<?php echo '<script'; ?>
 src="js/shopshouye.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/common.js"><?php echo '</script'; ?>
>
</html><?php }
}
