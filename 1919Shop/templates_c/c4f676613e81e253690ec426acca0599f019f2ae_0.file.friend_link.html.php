<?php
/* Smarty version 3.1.30, created on 2017-06-10 17:27:48
  from "D:\WWW\1919\demo\templates\friend_link.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593bbb94841c39_00966464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4f676613e81e253690ec426acca0599f019f2ae' => 
    array (
      0 => 'D:\\WWW\\1919\\demo\\templates\\friend_link.html',
      1 => 1496675316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_593bbb94841c39_00966464 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>friend_link</title>
	<link rel="stylesheet" href="css/Reset.css">
	<link rel="stylesheet" href="css/friend_link.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="icon" href="images/buy_arrow/j.png">
	<?php echo '<script'; ?>
 src="js/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/firend_link.js"><?php echo '</script'; ?>
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
						<li><a href="###" class="t_login">亲,请登录</a></li>
						<li><a href="###" class="t_login">去注册</a></li>
					</ul>
				</div>
				<div class="t_right fr">
					<ul id="top_nav clearfix">
						<li class="top_nav_list">
							<a href="###" class="pic">手机商城</a>
							<div class="t_r_sm">
							   <img src="images/code.png" height="94" width="79" alt="">
							</div>
							<span></span>
						</li>
						
						<li class="top_nav_list">
							<a href="###" class="pic">客户服务</a>
							<ul class="t_r_sm">
								<li><a href="###">联系客服</a></li>
								<li><a href="###">帮助中心</a></li>
							</ul>
							<span></span>
						</li>
						
						<li class="top_nav_list">
							<a href="###" class="pic">商家合作</a>
							<ul class="t_r_sm">
								<li><a href="###">商家入驻</a></li>
								<li><a href="###">玖妈妈APP</a></li>
								<li><a href="###">采购招标</a></li>
							</ul>
							<span></span>
						</li>
						
						<li class="top_nav_list">
							<a href="###" class="pic">网站导航</a>
							<ul class="t_r_sm">
								<li><a href="###">商城首页</a></li>
								<li><a href="###">会员中心</a></li>
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
						<a href="###"><img src="images/logo.png" alt=""></a>
					</div>
					<div>
						<a href="###"><img class="logo_img" src="images/head-logo-a.gif" alt=""></a>
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
								<li class="fl sear_hot_red"><a href="###">泸州老窖</a></li>
								<li class="fl"><a href="###">五粮液</a></li>
								<li class="fl sear_hot_red"><a href="###">奔富</a></li>
								<li class="fl"><a href="###">剑南春</a></li>
								<li class="fl sear_hot_red"><a href="###">冰爽啤酒</a></li>
								<li class="fl"><a href="###">拉菲</a></li>
							</ul>	
		    			</div>
		    			<div class="buycar fr">
							<span class="buycar_car"></span>
							<a href="###">购物车</a>
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
	
	<!-- 列表 -->
	<div id="shop">
		<div class="shoptitle wrapper clearfix">
			<a href="javascript:void(0);" class="quanbu fl">
				<span class="allFen fl">全部分类</span>
				<span class="arrow fr"></span>
			</a>
				<ul class="shoplists">
								<li class="baijiu1">
									<p>
										<span  class="jiu clearfix">
											<a href="##" class="baijiu">白酒</a>
										</span>
									</p>	
									<div class="sec_list clearfix">
										<span>
											<a href="##" style="color:#e30b20;">茅台</a>
										</span>
										<span>
											<a href="##">五粮液</a>
										</span>
										<span>
											<a href="##" style="color:#e30b20;">剑南春</a>
										</span>
										<span >
											<a href="##">郎酒</a>
										</span>
										<span>
											<a href="##">泸州老窖</a>
										</span>
										<span>
											<a href="##">汾酒</a>
										</span>
										<span>
											<a href="##">洋河</a>
										</span>
									</div>
								</li>
								<li class="putaojiu1">
									<p >
										<span class="jiu clearfix">
											<a href="##" class="baijiu">葡萄酒</a>
										</span>
									</p>	
									<div class="sec_list clearfix">
										<span>
											<a href="##">法国</a>
										</span>
										<span>
											<a href="##">澳大利亚</a>
										</span>
										<span>
											<a href="##" style="margin-right:30px">西班牙</a>
										</span>
										<span>
											<a href="##" style="color:#e30b20;">奔富</a>
										</span>
										<span>
											<a href="##">小企鹅</a>
										</span>
										<span>
											<a href="##">拉菲</a>
										</span>
										<span>
											<a href="##">长城</a>
										</span>
										<span>
											<a href="##">金水滴</a>
										</span>
									</div>
								</li>
								<li class="yangjiu1">
									<p >
										<span class="jiu clearfix">
											<a href="##" class="baijiu">洋酒</a>
										</span>
									</p>	
									<div class="sec_list clearfix">
										<span>
											<a href="##">百利甜</a>
										</span>
										<span>
											<a href="##">百加得</a>
										</span>
										<span>
											<a href="##" style="margin-right:30px">轩尼诗</a>
										</span>
										<span>
											<a href="##">芝华士</a>
										</span>
										<span>
											<a href="##">人头马</a>
										</span>
										<span>
											<a href="##" style="color:#e30b20;">杰克丹尼</a>
										</span>
										<span>
											<a href="##">麦卡伦</a>
										</span>
										<span>
											<a href="##">百龄坛</a>
										</span>
									</div>
								</li>
								<li class="pijiu1">
									<p >
										<span class="jiu clearfix">
											<a href="##" class="baijiu">啤酒</a>
										</span>
									</p>	
									<div class="sec_list clearfix">
										<span>
											<a href="##">粉象</a>
										</span>
										<span>
											<a href="##">布鲁杰克</a>
										</span>
										<span>
											<a href="##" style="margin-right:30px;">狩猎神</a>
										</span>
										<span>
											<a href="##">德拉克</a>
										</span>
										<span>
											<a href="##">凯撒</a>
										</span>
										<span>
											<a href="##">1664</a>
										</span>
										<span>
											<a href="##">百威</a>
										</span>
									</div>
								</li>
								<li class="huangjiu1">
									<p >
										<span class="jiu clearfix">
											<a href="##" class="baijiu">黄酒</a>
										</span>
									</p>	
									<div class="sec_list clearfix">
										<span>
											<a href="##">古越龙山</a>
										</span>
										<span>
											<a href="##">稷山鉴水</a>
										</span>
										<span>
											<a href="##">会稽山</a>
										</span>
										<span>
											<a href="##">古南丰</a>
										</span>
									</div>
								</li>
								<li class="yijianxuanjiu1">
									<p >
										<span class="jiu clearfix">
											<a href="##" class="baijiu">一键选酒</a>
										</span>
									</p>	
									<div class="sec_list clearfix">
										<span>
											<a href="##">整箱购</a>
										</span>
										<span>
											<a href="##">结婚宴请</a>
										</span>
										<span>
											<a href="##">大坛专区</a>
										</span>
										<span>
											<a href="##">名酒专区</a>
										</span>
										<span>
											<a href="##">礼品酒</a>
										</span>
									</div>
								</li>
							</ul>			
			<ul class="ul1">
				<li><a href="index.php">首页</a></li>
				<li><a href="index.php" class="logo"><img src="images/he-kuaihe.png" height="40" width="87"></a></li>
				<li><a href="yxgj.php">逸香国际</a></li>
				<li><a href="shopshouye.php">壹加玖定制</a></li>
				<li><a href="###">嘴上功夫</a></li>
				<li><a href="next_store.php">隔壁仓库</a></li>
				<li><a href="attract.php">招商加盟</a></li>
			</ul>
			<div class="introduce1 introduce clearfix baijiu1">
				<ul class="left fl">
					<li style="padding-bottom:73px;"><span>品牌</span></li>
					<li style="padding-bottom:25px;"><span>香型</span></li>
					<li style="padding-bottom:11px;"><span>产地</span></li>
					<li><span>价格区间</span></li>
				</ul>
				<ul class="right fr">
					<li>
						<span><a href="##">茅台</a></span><span><a href="##">五粮液</a></span><span><a href="##">剑南春</a></span><span><a href="##">泸州老窖</a></span><span><a href="##">洋河</a></span><span><a href="##">汾酒</a></span><span><a href="##">郎酒</a></span><span><a href="##">水井坊</a></span><span><a href="##">丰谷</a></span><span><a href="##">牛栏山</a></span><span><a href="##">杜康</a></span><span style="padding-right:30px;"><a href="##" >国粹</a></span><span><a href="##">沱牌</a></span><span><a href="##">全兴</a></span><span><a href="##">金沙</a></span><span><a href="##">西风</a></span><span><a href="##">景阳春</a></span><span><a href="##">红星</a></span><span><a href="##">五粮液公司出品</a></span><span><a href="##">董酒</a></span><span><a href="##">酒雨</a></span><span><a href="##">黔酒</a></span><span><a href="##">小角楼</a></span><span><a href="##">白云边</a></span><span><a href="##">衡水老白干</a></span><span><a href="##">稻花香</a></span><span><a href="##">一道红</a></span><span><a href="##">一品景芝</a></span><span><a href="##">汗喜</a></span><span><a href="##">国之娇子</a></span><span><a href="##">红楼梦</a></span><span><a href="##">乐合</a></span><span><a href="##">孔府家</a></span><span style="padding-right:53px;"><a href="##">毛铺</a></span><span><a href="##">古井贡酒</a></span><span><a href="##">伊犁</a></span><span><a href="##" style="color:#0073e9;">更多</a></span>
					</li>
					<li>
						<span><a href="##">浓香型</a></span><span><a href="##">清香型</a></span><span><a href="##">酱香型</a></span><span><a href="##">馥郁香型</a></span><span><a href="##">兼香型</a></span><span><a href="##">特香型</a></span><span><a href="##">芝麻香型</a></span><span><a href="##">凤香型</a></span><span><a href="##">老白干香型</a></span><span style="padding-right:30px;"><a href="##">陶香型</a></span><span><a href="##">董香型</a></span><span><a href="##">其他</a></span>
					</li>
					<li>
						<span><a href="##">贵州</a></span><span><a href="##">四川</a></span><span><a href="##">山西</a></span><span><a href="##">北京</a></span><span><a href="##">江苏</a></span><span><a href="##">安徽</a></span><span><a href="##">湖北</a></span><span><a href="##">山西</a></span><span><a href="##">山东</a></span><span><a href="##">河南</a></span><span><a href="##">陕西</a></span><span><a href="##">湖南</a></span>
					</li>
					<li>
						<span><a href="##">0-49</a></span><span><a href="##">50-99</a></span><span><a href="##">100-199</a></span><span><a href="##">200-299</a></span><span><a href="##">300-599</a></span><span><a href="##">600-999</a></span><span><a href="##">1000-1999</a></span><span><a href="##">2000以上</a></span>
					</li>
				</ul>
			</div>	
			<div class="introduce2 introduce clearfix putaojiu1">
				<ul class="left fl">
					<li style="padding-bottom:28px;"><span>品牌</span></li>
					<li style="padding-bottom:9px;"><span>品类</span></li>
					<li style="padding-bottom:9px;"><span>葡萄酒类型</span></li>
					<li style="padding-bottom:9px;"><span>口味类型</span></li>
					<li style="padding-bottom:9px;"><span>产地</span></li>
					<li><span>价格区间</span></li>
				</ul>
				<ul class="right fr">
					<li>
						<span><a href="##">拉菲</a></span><span><a href="##">奔富</a></span><span><a href="##">长城</a></span><span><a href="##">杰卡斯</a></span><span><a href="##">黄尾袋鼠</a></span><span><a href="##">小企鹅</a></span><span><a href="##">红魔鬼</a></span><span><a href="##">爱之湾</a></span><span><a href="##">巴黎之夜</a></span><span style="padding-right:30px;"><a href="##">拉维亭</a></span><span><a href="##">意景湾</a></span><span><a href="##">守望堡</a></span><span><a href="##">意大利之花</a></span>
					</li>
					<li>
						<span><a href="##">赤霞珠</a></span><span><a href="##">美乐</a></span><span><a href="##">霞多丽</a></span><span><a href="##">西拉</a></span><span><a href="##">品丽珠</a></span><span><a href="##">歌海娜</a></span><span><a href="##">添帕尼尤</a></span><span><a href="##">长相思</a></span><span><a href="##">琼瑶浆</a></span>
					</li>
					<li>
						<span><a href="##">红葡萄酒</a></span><span><a href="##">白葡萄酒</a></span><span><a href="##">桃红葡萄酒</a></span>
					</li>
					<li>
						<span><a href="##">干型葡萄酒</a></span><span><a href="##">甜型葡萄酒</a></span><span><a href="##">半甜型葡萄酒</a></span>
					</li>
					<li>
						<span><a href="##">法国</a></span><span><a href="##">澳大利亚</a></span><span><a href="##">意大利</a></span><span><a href="##">德国</a></span><span><a href="##">南非</a></span><span><a href="##">智利</a></span><span><a href="##">葡萄牙</a></span><span><a href="##">美国</a></span><span><a href="##">中国</a></span>
					</li>
					<li>
						<span><a href="##">0-49</a></span><span><a href="##">50-99</a></span><span><a href="##">100-199</a></span><span><a href="##">200-299</a></span><span><a href="##">300-499</a></span><span><a href="##">500-799</a></span><span><a href="##">800-999</a></span><span><a href="##">1000以上</a></span>
					</li>
				</ul>
			</div>
			<div class="introduce3 introduce clearfix yangjiu1">
				<ul class="left fl">
					<li style="padding-bottom:50px;"><span>品牌</span></li>
					<li style="padding-bottom:8px;"><span>品类</span></li>
					<li style="padding-bottom:8px;"><span>产地</span></li>
					<li><span>价格区间</span></li>
				</ul>
				<ul class="right fr">
					<li>
						<span><a href="##">芝华士</a></span><span><a href="##">深蓝</a></span><span><a href="##">斯米诺</a></span><span><a href="##">百龄坛</a></span><span><a href="##">人头马</a></span><span><a href="##">轩尼诗</a></span><span><a href="##">皇家礼炮</a></span><span><a href="##">杰克丹尼</a></span><span><a href="##">百加得</a></span><span><a href="##">绝对</a></span><span><a href="##">尊尼获加</a></span><span><a href="##">马爹利</a></span><span><a href="##">温莎</a></span><span><a href="##">占边</a></span><span><a href="##">帝王</a></span><span><a href="##">百利甜</a></span><span><a href="##">波士</a></span><span><a href="##">威力来</a></span><span><a href="##">贝加尔湖</a></span><span><a href="##">翰格</a></span><span><a href="##">杰比斯</a></span><span><a href="##">黑白狗</a></span><span><a href="##">泰斯卡</a></span><span><a href="##">赛那塔</a></span>
					</li>
					<li>
						<span><a href="##">白兰地</a></span><span><a href="##">威士忌</a></span><span><a href="##">伏特加</a></span><span><a href="##">龙舌兰</a></span><span><a href="##">朗姆酒</a></span><span><a href="##">力娇酒</a></span><span><a href="##">预调酒</a></span><span><a href="##">金酒</a></span>
					</li>
					<li>
						<span><a href="##">英国</a></span><span><a href="##">法国</a></span><span><a href="##">俄国</a></span><span><a href="##">美国</a></span><span><a href="##">瑞典</a></span><span><a href="##">波多黎各</a></span><span><a href="##">意大利</a></span><span><a href="##">爱尔兰</a></span>
					</li>
					<li>
						<span><a href="##">0-199</a></span><span><a href="##">200-699</a></span><span><a href="##">700-1899</a></span><span><a href="##">1900-6699</a></span><span><a href="##">6700以上</a></span>
					</li>
				</ul>
			</div>
			<div class="introduce4 introduce clearfix pijiu1">
				<ul class="left fl">
					<li style="padding-bottom:28px;"><span>品牌</span></li>
					<li style="padding-bottom:8px;"><span>产地</span></li>
					<li style="padding-bottom:8px;"><span>价格区间</span></li>
				</ul>
				<ul class="right fr">
					<li>
						<span><a href="##">哈尔博</a></span><span><a href="##">海浮堡</a></span><span><a href="##">德拉克</a></span><span><a href="##">凯撒</a></span><span><a href="##">柏龙</a></span><span><a href="##">瓦伦丁</a></span><span><a href="##">百威</a></span><span><a href="##">梅克伦堡</a></span><span><a href="##">乐蔓</a></span><span><a href="##">菲德堡</a></span><span><a href="##">废墟</a></span><span><a href="##">罗斯夫</a></span><span><a href="##">凯尔特人</a></span><span><a href="##">马里斯</a></span><span><a href="##">天鹅城堡</a></span><span><a href="##">科罗娜</a></span><span><a href="##">歌德</a></span><span><a href="##">奥丁格</a></span><span><a href="##">狩猎神</a></span><span><a href="##">布鲁杰克</a></span><span><a href="##">粉象</a></span>
					</li>
					<li>
						<span><a href="##">德国</a></span><span><a href="##">捷克</a></span><span><a href="##">比利时</a></span><span><a href="##">西班牙</a></span>
					</li>
					<li>
						<span><a href="##">0-29</a></span><span><a href="##">30-59</a></span><span><a href="##">40-79</a></span><span><a href="##">80-99</a></span><span><a href="##">100以上</a></span>
					</li>
				</ul>
			</div>
			<div class="introduce5 introduce clearfix huangjiu1">
				<ul class="left fl">
					<li  style="padding-bottom:8px;" ><span>黄酒品牌</span></li>
					<li style="padding-bottom:8px;"><span>价格区间</span></li>
					<li ><span>酒具品牌</span></li>
				</ul>
				<ul class="right fr">
					<li>
						<span><a href="##">稷山鉴水</a></span><span><a href="##">古越龙山</a></span><span><a href="##">古南丰</a></span><span><a href="##">越之春</a></span><span><a href="##">会稽山</a></span><span><a href="##">塔牌</a></span><span><a href="##">谢村</a></span><span><a href="##">御膳春</a></span>
					</li>
					<li>
						<span><a href="##">0-39</a></span><span><a href="##">40-69</a></span><span><a href="##">70-199</a></span><span><a href="##">200-399</a></span><span><a href="##">400以上</a></span>
					</li>
					<li>
						<span><a href="##">石岛</a></span><span><a href="##">弗罗萨</a></span>
					</li>
				</ul>
			</div>
			<div class="introduce6 introduce clearfix yijianxuanjiu1">
				<ul class="left fl">
					<li  style="padding-bottom:8px;" ><span>美酒整箱购</span></li>
					<li style="padding-bottom:8px;"><span>送礼必备</span></li>
					<li ><span>葡萄酒品类</span></li>
				</ul>
				<ul class="right fr">
					<li>
						<span><a href="##">白酒整箱</a></span><span><a href="##">葡萄酒整箱</a></span><span><a href="##">洋酒整箱</a></span>
					</li>
					<li>
						<span><a href="##">葡萄酒礼盒</a></span><span><a href="##">白酒礼盒</a></span>
					</li>
					<li>
						<span><a href="##">赤霞珠</a></span><span><a href="##">西拉</a></span><span><a href="##">梅洛</a></span><span><a href="##">雷司令</a></span><span><a href="##">黑比诺</a></span><span><a href="##">长相思</a></span><span><a href="##">蛇龙珠</a></span><span><a href="##">佳美娜</a></span><span><a href="##">贵人香</a></span>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- header结束 -->
	<div class="friend_link_content clearfix">
		<div class="friend_link_top">
			<a href="###">首页 ></a>
			<span>售后服务</span>
			<div class="help_yes"><span></span>感谢您的反馈</div>
			<div class="help_no">可以通过联系客服为您提供服务</div>
		</div>
		<div class="friend_link_left" id="friend_link_left">
			<ul class="left_gywm">
				<span>关于我们</span>
				<li class="zpxx left_li">
					<a href="###">招聘信息</a>
				</li>
			</ul>
			<ul class="left_pssm">
				<span>配送说明</span>
				<li class="pssm left_li">
					<a href="###">配送说明</a>
				</li>
			</ul>
			<ul class="left_cxxx">
				<span>促销信息</span>
				<li class="cxxx left_li">
					<a href="###">促销信息</a>
				</li>
			</ul>
			<ul class="left_mtbd">
				<span>媒体报道</span>
				<li class="mtbd left_li">
					<a href="###">媒体报道</a>
				</li>
			</ul>
			<ul class="left_gwzn">
				<span>购物指南</span>
				<li class="fkfs left_li">
					<a href="###">付款方式</a>
				</li>
				<li class="fpsm left_li">
					<a href="###">发票说明</a>
				</li>
				<li class="zfwt left_li">
					<a href="###">支付问题解答</a>
				</li>
				<li class="yhsm left_li">
					<a href="###">优惠券说明</a>
				</li>
				<li class="hytx left_li">
					<a href="###">1919会员体系介绍</a>
				</li>
			</ul>
			<ul class="left_hdzl">
				<span>活动专栏</span>
			</ul>
			<ul class="left_bzzx">
				<span>帮助中心</span>
				<li class="gwzn left_li">
					<a href="###">购物指南</a>
				</li>
				<li class="shfw left_li">
					<a href="###">售后服务</a>
				</li>
				<li class="ptgz left_li">
					<a href="###">平台规则</a>
				</li>
				<li class="xszn left_li">
					<a href="###">新手指南</a>
				</li>
				<li class="cjwt left_li">
					<a href="###">常见问题</a>
				</li>
				<li class="gwcn left_li">
					<a href="###">购物承诺</a>
				</li>
			</ul>
			<ul class="left_lzgs">
				<span>廉政公示</span>
				<li class="gsxq left_li">
					<a href="###">公示详情</a>
				</li>
			</ul>
			<ul class="left_sjfw">
				<span>商家服务</span>
				<li class="sjfw left_li">
					<a href="###">商家服务</a>
				</li>
				<li class="hzgz left_li">
					<a href="###">商家合作规则</a>
				</li>
			</ul>
			<ul class="left_cjwt">
				<span>常见问题</span>
				<li class="zhaq left_li">
					<a href="###">账号安全</a>
				</li>
				<li class="ddan left_li">
					<a href="###">订单</a>
				</li>
				<li class="zffs left_li">
					<a href="###">支付方式及发票</a>
				</li>
				<li class="wlps left_li">
					<a href="###">物流配送</a>
				</li>
				<li class="thhw left_li">
					<a href="###">退换货</a>
				</li>
			</ul>
			<ul class="left_xszn">
				<span>新手指南</span>
				<li class="dlzc left_li">
					<a href="###">登录注册</a>
				</li>
				<li class="xgsp left_li">
					<a href="###">选购商品</a>
				</li>
				<li class="gwc left_li">
					<a href="###">购物车</a>
				</li>
				<li class="xdzf left_li">
					<a href="###">下单支付</a>
				</li>
				<li class="shpj left_li">
					<a href="###">收货评价</a>
				</li>
			</ul>
		</div>
		<div class="friend_link_right">
			<!-- 招聘信息 -->
			<div class="right_zpxx">
				<ul class="right_topword">
					<li>团队风采</li>
					<li>招聘信息</li>
					<li>公司介绍</li>
					<li>1919总部照片</li>
				</ul>
				<div class="right_name">团队风采</div>
				<div class="pic_content">
					<img src="images/buy_arrow/tdfc1.png" alt="">
					<img src="images/buy_arrow/tdfc2.png" alt="">
					<img src="images/buy_arrow/tdfc3.png" alt="">
					<img src="images/buy_arrow/tdfc4.png" alt="">
					<img src="images/buy_arrow/tdfc5.png" alt="">
				</div>
				<div class="empty_con"></div>
				<div class="helplick">
					<div class="helplick_word">以上内容是否已经解决你的问题呢？</div>
					<span class="help_yes">是，已经解决</span>
					<span class="help_no">否，还未解决</span>
				</div>
			</div>
			<!-- 配送说明 -->
			<div class="right_pssm">
				<ul class="right_topword">
					<li>配送范围</li>
					<li>货到付款</li>
					<li>配送费用</li>
					<li>门店查询</li>
				</ul>
				<div class="right_name">配送费用</div>
				<div class="pssm_word">
					<h2>配送费用：</h2>
					<p>1、普通送订单：订单金额满39元将免运费，如未满足免邮条件将会在订单确认页面自动生成对应的配送费用。</p>
					<p>2、立即送（快喝模式）订单：免配送费。</p>
					<h2>特别说明：</h2>
					<p>B2B顾客的订单，会根据B2B合作协议单独收取物流费用。</p>
				</div>
				<div class="empty_con"></div>
				<div class="helplick">
					<div class="helplick_word">以上内容是否已经解决你的问题呢？</div>
					<span class="help_yes">是，已经解决</span>
					<span class="help_no">否，还未解决</span>
				</div>
			</div>
			<!-- 促销信息 -->
			<div class="right_cxxx">
				<ul class="right_topword">
					<li>【洋啤专区】全球精选 38元起</li>
					<li>【红酒专区】品质迷情 品质保证</li>
					<li>【以爱之名 为爱放价】全场酒品5.2折起</li>
					<li>【白酒专区】好酒甄选 全场59元起</li>
					<li>【新品推荐】春尚新</li>
				</ul>
				<div class="right_name">【白酒专区】好酒甄选 全场59元起</div>
				<div class="cxxx_pic">
					<img src="images/buy_arrow/cxxx.jpg" alt="">
				</div>
				<div class="empty_con"></div>
				<div class="helplick">
					<div class="helplick_word">以上内容是否已经解决你的问题呢？</div>
					<span class="help_yes">是，已经解决</span>
					<span class="help_no">否，还未解决</span>
				</div>
			</div>
			<!-- 媒体报道 -->
			<div class="right_mtbd">
				<ul class="right_topword">
					<li>1919董事长杨陵江：酒类流通业进入寡头时代</li>
					<li>2016年度1919酒类直供资源平台首次公开广告竞<br>买会成功举行</li>
					
					<li>价格杀手“1919”，让消费者买酒“价低酒真”</li>
					<li>壹玖壹玖酒类直供2017年度物流业务招标公告</li>
					<li>“1919&购酒网”携手五粮液 推出“浓度刚刚<br>好”文化之旅</li>
				</ul>
				<div class="right_name">壹玖壹玖酒类直供2017年度物流业务招标公告</div>
				<div class="mtbd_words">
					<p>1919酒类直供，新零售代表品牌；国内酒类流通行业公众公司【证券代码：830993】；酒类最大O2O平台及第三大开放平台。集17年酒水行业营销经验，以9年业绩增长超百倍的市场表现，成为国内酒类流通行业具有深远影响力的企业。2016年，门店数量达1000家，营业收入达40亿；到2019年规划开店数量达6000余家；B2C会员数达3700万、B2B会员数达13.5万；预估目标营业收入达1000亿元。</p>
				
					<p>根据我司的发展和业务需求，需开发、筛选合适的物流供应商，本着公开、公平、公正的原则，现对我司的各项物流业务进行公开招标，诚邀各方物流公司、合作伙伴参与我司的物流应标，真诚希望能与贵司携手合作，成长为互惠互利的战略合作伙伴，共创双赢。</p>
					<p>一、物流招标范围</p>
					<p>（一）我司酒水汽运运输业务</p>
					<p>我司31个省总仓始发至各省所属区域门店的汽运配送业务。</p>
					<p>（二）我司仓储业务</p>
					<p>1、装卸业务：该业务包含运输车辆货物装卸等；</p>
					<p>2、商品储存业务：该业务为我司提供符合商品储存、保管、配发要求等的仓储业务。</p>
					<p>以上不限制同一家物流公司投标超过一个省区。</p>
					<p>二、招标暂定意向合作期限：2017年2月1日至2018年6月30日止，具体合作期限以中标后签署的书面协议为准。</p>
					<p>三、报名截止时间：2017年  2 月  28 日17点前，以招标单位实际签收为准。</p>
					<p>四、报名文件包括：</p>
					<p>1、公司简介（包括企业的规模、企业成功案例、企业服务项目等）；</p>
					<p>2、加盖公章的营业执照、税务登记证、组织机构代码证、法人代表授权书、道路运输许可证等资质证明资料的复印件；</p>
					<p>3、供应商报名表，并请将该报名表的电子文档发至邮箱，供应商纸版的报名表须加盖公章(表格见下面附件)。</p>
					<p>五、投标供应商预审资格要求：</p>
					<p>1、企业资质、规模等基本情况，要求公路供应商注册资金在1000万元（人民币）以上;</p>
					<p>2、持有效营业执照、国/地税税务登记证、组织结构代码证、道路运输许可证、法人代表身份证、法人代表授权书等资质证明和授权文件，可提供“货物运输业增值税专用发票”；</p>
					<p>3、物流供应商须具有三年以上从事快速消费品物流营运经验，具有公路运输、装卸经营等的相关资质证明；</p>
					<p>4、合作客户介绍，特别是近5年来的合作客户和连续合作时间最长的客户合作情况介绍；</p>
					<p>5、保证能为招标方需求高峰时期每条运输线路提供足够车辆及装卸资源，并提供保质保量和高效的服务，包括节假日，均需提供7天*24小时服务；</p>
					<p>6、所提供的运输车辆卫生均须达到招标方规定的要求；</p>
					<p>7、必须具备货物运输追踪管理能力；</p>
					<p>8、具有流畅的信息沟通渠道；</p>
					<p>9、具备抗风险能力和质量保障能力，承担在配送中造成的损失， 并负责保险；</p>
					<p>10、本次招标不接受两家及以上联合投标；</p>
					<p>11、中标人中标后不得将中标项目转让他人，一经发现，招标人有权取消该中标人的经营资格，并重新招标或按本次招标中该项目投标人的得分次序转由其它投标人依次递补。</p>
					<p>七、其它说明：</p>
					<p>我司招标小组接收到供应商报名表后，根据报名规定条件对各报名单位进行审核，符合要求的报名单位，我司将另行发布详细招标文件内容，并计划为合格的报名单位招开招标说明会，具体时间以邮件通知为准。</p>
					<p>八、报名资料邮寄地点及联系方式：</p>
					<p>公司名称：壹玖壹玖酒类平台科技股份有限公司</p>
					<p>联系地址： 成都市高新区天府大道北段1700号环球中心E1 1801</p>
					<p>联系方式： 何  总   13880805627</p>
					<p>许主管   18117880415</p>
					<p>九、报名表：</p>
					<img src="images/buy_arrow/mtbd_gyb.png" alt="">
				</div>
				<div class="empty_con"></div>
				<div class="helplick">
					<div class="helplick_word">以上内容是否已经解决你的问题呢？</div>
					<span class="help_yes">是，已经解决</span>
					<span class="help_no">否，还未解决</span>
				</div>
			</div>
			<!-- 购物指南-付款方式1 -->
			<div class="right_fkfs">
				<ul class="right_topword">
					<li>支付方式</li>
				</ul>
				<div class="right_name">支付方式</div>
				<div class="fkfs_con">
					<div class="fkfs_con_tit">支付方式</div>
					<p><span>1919酒类直供目前支持以下5种付款方式：</span></p>
					<p>1、支付宝支付</p>
					<p>2、银联支付</p>
					<p>3、货到付款</p>
					<p>4、电子钱包支付</p>
					<p>5、储值卡支付</p>
					<img src="images/buy_arrow/fkfs1.jpg" alt="">
					<p><span>具体说明：</span></p>
					<p><span>支付宝支付</span>支持扫一扫付款：</p>
					<img src="images/buy_arrow/fkfs2.jpg" alt="">
					<p><span>银联支付</span>支持的银行如下：</p>
					<img src="images/buy_arrow/fkfs3.jpg" alt="">
					<p><span>货到付款：</span>配送员送货上门，客服收单验货后，直接付款或POS付款方式。货到付款需要物流的支持，所有物流能配送的城市都支持货到付款。</p>
					<p><span>电子钱包支付：</span>使用在1919充值的钱包付款。</p>
					<p><span>储值卡支付：</span>使用在1919购买的储值卡付款。</p>
					<p><span>说明：</span><b>货到付款订单我们最多可以为您保留7天，</b>如有延迟要货的，请您推迟下单时间。</p>
				</div>
				<div class="empty_con"></div>
				<div class="helplick">
					<div class="helplick_word">以上内容是否已经解决你的问题呢？</div>
					<span class="help_yes">是，已经解决</span>
					<span class="help_no">否，还未解决</span>
				</div>
			</div>
			<!-- 购物指南-付款方式2 -->
			<div class="right_fkfs">
				<ul class="right_topword">
					<li>支付方式</li>
				</ul>
				<div class="right_name">支付方式</div>
				<div class="fkfs_con">
					<div class="fkfs_con_tit">支付方式</div>
					<p><span>1919酒类直供目前支持以下5种付款方式：</span></p>
					<p>1、支付宝支付</p>
					<p>2、银联支付</p>
					<p>3、货到付款</p>
					<p>4、电子钱包支付</p>
					<p>5、储值卡支付</p>
					<img src="images/buy_arrow/fkfs1.jpg" alt="">
					<p><span>具体说明：</span></p>
					<p><span>支付宝支付</span>支持扫一扫付款：</p>
					<img src="images/buy_arrow/fkfs2.jpg" alt="">
					<p><span>银联支付</span>支持的银行如下：</p>
					<img src="images/buy_arrow/fkfs3.jpg" alt="">
					<p><span>货到付款：</span>配送员送货上门，客服收单验货后，直接付款或POS付款方式。货到付款需要物流的支持，所有物流能配送的城市都支持货到付款。</p>
					<p><span>电子钱包支付：</span>使用在1919充值的钱包付款。</p>
					<p><span>储值卡支付：</span>使用在1919购买的储值卡付款。</p>
					<p><span>说明：</span><b>货到付款订单我们最多可以为您保留7天，</b>如有延迟要货的，请您推迟下单时间。</p>
				</div>
				<div class="empty_con"></div>
				<div class="helplick">
					<div class="helplick_word">以上内容是否已经解决你的问题呢？</div>
					<span class="help_yes">是，已经解决</span>
					<span class="help_no">否，还未解决</span>
				</div>
			</div>
			<!-- 购物指南-付款方式3 -->
			<div class="right_fkfs">
				<ul class="right_topword">
					<li>支付方式</li>
				</ul>
				<div class="right_name">支付方式</div>
				<div class="fkfs_con">
					<div class="fkfs_con_tit">支付方式</div>
					<p><span>1919酒类直供目前支持以下5种付款方式：</span></p>
					<p>1、支付宝支付</p>
					<p>2、银联支付</p>
					<p>3、货到付款</p>
					<p>4、电子钱包支付</p>
					<p>5、储值卡支付</p>
					<img src="images/buy_arrow/fkfs1.jpg" alt="">
					<p><span>具体说明：</span></p>
					<p><span>支付宝支付</span>支持扫一扫付款：</p>
					<img src="images/buy_arrow/fkfs2.jpg" alt="">
					<p><span>银联支付</span>支持的银行如下：</p>
					<img src="images/buy_arrow/fkfs3.jpg" alt="">
					<p><span>货到付款：</span>配送员送货上门，客服收单验货后，直接付款或POS付款方式。货到付款需要物流的支持，所有物流能配送的城市都支持货到付款。</p>
					<p><span>电子钱包支付：</span>使用在1919充值的钱包付款。</p>
					<p><span>储值卡支付：</span>使用在1919购买的储值卡付款。</p>
					<p><span>说明：</span><b>货到付款订单我们最多可以为您保留7天，</b>如有延迟要货的，请您推迟下单时间。</p>
				</div>
				<div class="empty_con"></div>
				<div class="helplick">
					<div class="helplick_word">以上内容是否已经解决你的问题呢？</div>
					<span class="help_yes">是，已经解决</span>
					<span class="help_no">否，还未解决</span>
				</div>
			</div>
			<!-- 购物指南-付款方式4 -->
			<div class="right_fkfs">
				<ul class="right_topword">
					<li>支付方式</li>
				</ul>
				<div class="right_name">支付方式</div>
				<div class="fkfs_con">
					<div class="fkfs_con_tit">支付方式</div>
					<p><span>1919酒类直供目前支持以下5种付款方式：</span></p>
					<p>1、支付宝支付</p>
					<p>2、银联支付</p>
					<p>3、货到付款</p>
					<p>4、电子钱包支付</p>
					<p>5、储值卡支付</p>
					<img src="images/buy_arrow/fkfs1.jpg" alt="">
					<p><span>具体说明：</span></p>
					<p><span>支付宝支付</span>支持扫一扫付款：</p>
					<img src="images/buy_arrow/fkfs2.jpg" alt="">
					<p><span>银联支付</span>支持的银行如下：</p>
					<img src="images/buy_arrow/fkfs3.jpg" alt="">
					<p><span>货到付款：</span>配送员送货上门，客服收单验货后，直接付款或POS付款方式。货到付款需要物流的支持，所有物流能配送的城市都支持货到付款。</p>
					<p><span>电子钱包支付：</span>使用在1919充值的钱包付款。</p>
					<p><span>储值卡支付：</span>使用在1919购买的储值卡付款。</p>
					<p><span>说明：</span><b>货到付款订单我们最多可以为您保留7天，</b>如有延迟要货的，请您推迟下单时间。</p>
				</div>
				<div class="empty_con"></div>
				<div class="helplick">
					<div class="helplick_word">以上内容是否已经解决你的问题呢？</div>
					<span class="help_yes">是，已经解决</span>
					<span class="help_no">否，还未解决</span>
				</div>
			</div>
			<!-- 购物指南-付款方式5 -->
			<div class="right_fkfs">
				<ul class="right_topword">
					<li>支付方式</li>
				</ul>
				<div class="right_name">支付方式</div>
				<div class="fkfs_con">
					<div class="fkfs_con_tit">支付方式</div>
					<p><span>1919酒类直供目前支持以下5种付款方式：</span></p>
					<p>1、支付宝支付</p>
					<p>2、银联支付</p>
					<p>3、货到付款</p>
					<p>4、电子钱包支付</p>
					<p>5、储值卡支付</p>
					<img src="images/buy_arrow/fkfs1.jpg" alt="">
					<p><span>具体说明：</span></p>
					<p><span>支付宝支付</span>支持扫一扫付款：</p>
					<img src="images/buy_arrow/fkfs2.jpg" alt="">
					<p><span>银联支付</span>支持的银行如下：</p>
					<img src="images/buy_arrow/fkfs3.jpg" alt="">
					<p><span>货到付款：</span>配送员送货上门，客服收单验货后，直接付款或POS付款方式。货到付款需要物流的支持，所有物流能配送的城市都支持货到付款。</p>
					<p><span>电子钱包支付：</span>使用在1919充值的钱包付款。</p>
					<p><span>储值卡支付：</span>使用在1919购买的储值卡付款。</p>
					<p><span>说明：</span><b>货到付款订单我们最多可以为您保留7天，</b>如有延迟要货的，请您推迟下单时间。</p>
				</div>
				<div class="empty_con"></div>
				<div class="helplick">
					<div class="helplick_word">以上内容是否已经解决你的问题呢？</div>
					<span class="help_yes">是，已经解决</span>
					<span class="help_no">否，还未解决</span>
				</div>
			</div>
			<!-- 帮助中心-购物指南 -->
			<div class="right_gwzn">
				<ul class="right_topword">
					<li>支付问题解答</li>
					<li>1919会员体系介绍</li>
					<li>发票说明</li>
					<li>优惠券说明</li>
				</ul>
				<div class="right_name">1919会员体系介绍</div>
				<div class="gwzn_content">
					<img src="images/buy_arrow/gwzn1.jpg" alt="">
					<img src="images/buy_arrow/gwzn2.jpg" alt="">
					<p><span>等级成长计算方式</span></p>
					<p>1919会员等级提升的方式为购物消费金额，由您的累计消费金额计算获得，累计消费金额越多会员等级越高，享受更多的会员服务哦！</p>
					<p><span>备注</span></p>
					<p>1. 累计消费金额计算时间根据确认收货时间计算； 2. 累计消费金额值以每次订单的实付金额计算。</p>
					<p><span>特权说明</span></p>
					<p>优惠购酒：在购买商品时根据您的会员等级享受不同会员折扣;</p>
					<p>限时秒杀：在参与特价秒杀活动时，根据你的等级可以参与抢购不同类型的特价商品;</p>
					<p>生日礼包：在您的生日到来之时，我们将根据您的会员等级送上生日大礼包;</p>
					<p>会员日礼包：在每月会员日到来之时，我们将根据您的会员等级送上每月会员礼包;</p>
					<p>会员专属活动：在您报名参与会员专属活动时，根据你的等级可以报名参与不同类型的专属活动;</p>
					<p>积分商城：您可在积分商城内兑换商品;</p>
					<p>积分加倍：在举行活动时，将根据您的会员等级额外获得的积分;</p>
					<p>专属客服：尊享专属个人客服服务;</p>
					<p>个性化推荐：在您挑选商品时，将会有专业人员根据您的需求为您挑选产品;</p>
					<p>极速退款：若您有退货要求，获得先退款后核货的特权;</p>
					<p>无条件免邮：无条件货物包邮;</p>
					<p>优先配送：您的商品将优先处理出库配送;</p>
					<p>免费期刊：定期向您免费赠送企业期刊。</p>
				</div>
				<div class="empty_con"></div>
				<div class="helplick">
					<div class="helplick_word">以上内容是否已经解决你的问题呢？</div>
					<span class="help_yes">是，已经解决</span>
					<span class="help_no">否，还未解决</span>
				</div>
			</div>
			<!-- 帮助中心-售后服务1 -->
			<div class="right_shfw">
				<ul class="right_topword">
					<li>快喝购酒服务</li>
					<li>咨询投诉</li>
					<li>品质保障</li>
					<li>售后说明</li>
					<li>退换货流程</li>
				</ul>
				<div class="right_name">售后说明</div>
				<div class="shfw_content">
					<p><b>售后客服温馨提示：</b></p>
					<p><span>1.先验货再签收</span></p>
					<p>为了保障您的权益不受损害，请您收货时记得开箱验货后再签收，如因物流原因造成损坏的您可以拒绝签收或者部分签收，（如部分签收）可在快递单注明实际签收数量，将破损商品拍照留证及时和客服取得联系，我们将尽快为您补发。如正常签收将默认为商品完好，签收后破损将不在赔偿范围内，也不再接受退换货事宜。</p>
					<p><span>2.以实物为准</span></p>
					<p>由于部分商品包装更换较为频繁，因此您收到的货品有可能与图片不完全一致（酒水的批次以收到以实物为准，网页图片仅供参考.）同时我们会尽量做到及时更新。</p>
					<p><span>3.关于退货物流费用</span></p>
					<p>我公司拒收任何形式的到付件，非质量问题产生的退换货由顾客承载运费，由我公司承担运费的退换货都由本公司安排快递人员上门收货，建议客人在自行退回过程中购买保险</p>
				</div>
				<div class="empty_con"></div>
				<div class="helplick">
					<div class="helplick_word">以上内容是否已经解决你的问题呢？</div>
					<span class="help_yes">是，已经解决</span>
					<span class="help_no">否，还未解决</span>
				</div>
			</div>
			<!-- 帮助中心-售后服务2-平台规则 -->
			<div class="right_shfw">
				<ul class="right_topword">
					<li>快喝购酒服务</li>
					<li>咨询投诉</li>
					<li>品质保障</li>
					<li>售后说明</li>
					<li>退换货流程</li>
				</ul>
				<div class="right_name">售后说明</div>
				<div class="shfw_content">
					<p><b>售后客服温馨提示：</b></p>
					<p><span>1.先验货再签收</span></p>
					<p>为了保障您的权益不受损害，请您收货时记得开箱验货后再签收，如因物流原因造成损坏的您可以拒绝签收或者部分签收，（如部分签收）可在快递单注明实际签收数量，将破损商品拍照留证及时和客服取得联系，我们将尽快为您补发。如正常签收将默认为商品完好，签收后破损将不在赔偿范围内，也不再接受退换货事宜。</p>
					<p><span>2.以实物为准</span></p>
					<p>由于部分商品包装更换较为频繁，因此您收到的货品有可能与图片不完全一致（酒水的批次以收到以实物为准，网页图片仅供参考.）同时我们会尽量做到及时更新。</p>
					<p><span>3.关于退货物流费用</span></p>
					<p>我公司拒收任何形式的到付件，非质量问题产生的退换货由顾客承载运费，由我公司承担运费的退换货都由本公司安排快递人员上门收货，建议客人在自行退回过程中购买保险</p>
				</div>
				<div class="empty_con"></div>
				<div class="helplick">
					<div class="helplick_word">以上内容是否已经解决你的问题呢？</div>
					<span class="help_yes">是，已经解决</span>
					<span class="help_no">否，还未解决</span>
				</div>
			</div>
			<!-- 帮助中心-售后服务2-新手指南 -->
			<div class="right_shfw">
				<ul class="right_topword">
					<li>快喝购酒服务</li>
					<li>咨询投诉</li>
					<li>品质保障</li>
					<li>售后说明</li>
					<li>退换货流程</li>
				</ul>
				<div class="right_name">售后说明</div>
				<div class="shfw_content">
					<p><b>售后客服温馨提示：</b></p>
					<p><span>1.先验货再签收</span></p>
					<p>为了保障您的权益不受损害，请您收货时记得开箱验货后再签收，如因物流原因造成损坏的您可以拒绝签收或者部分签收，（如部分签收）可在快递单注明实际签收数量，将破损商品拍照留证及时和客服取得联系，我们将尽快为您补发。如正常签收将默认为商品完好，签收后破损将不在赔偿范围内，也不再接受退换货事宜。</p>
					<p><span>2.以实物为准</span></p>
					<p>由于部分商品包装更换较为频繁，因此您收到的货品有可能与图片不完全一致（酒水的批次以收到以实物为准，网页图片仅供参考.）同时我们会尽量做到及时更新。</p>
					<p><span>3.关于退货物流费用</span></p>
					<p>我公司拒收任何形式的到付件，非质量问题产生的退换货由顾客承载运费，由我公司承担运费的退换货都由本公司安排快递人员上门收货，建议客人在自行退回过程中购买保险</p>
				</div>
				<div class="empty_con"></div>
				<div class="helplick">
					<div class="helplick_word">以上内容是否已经解决你的问题呢？</div>
					<span class="help_yes">是，已经解决</span>
					<span class="help_no">否，还未解决</span>
				</div>
			</div>
			<!-- 帮助中心-售后服务2-常见问题 -->
			<div class="right_shfw">
				<ul class="right_topword">
					<li>快喝购酒服务</li>
					<li>咨询投诉</li>
					<li>品质保障</li>
					<li>售后说明</li>
					<li>退换货流程</li>
				</ul>
				<div class="right_name">售后说明</div>
				<div class="shfw_content">
					<p><b>售后客服温馨提示：</b></p>
					<p><span>1.先验货再签收</span></p>
					<p>为了保障您的权益不受损害，请您收货时记得开箱验货后再签收，如因物流原因造成损坏的您可以拒绝签收或者部分签收，（如部分签收）可在快递单注明实际签收数量，将破损商品拍照留证及时和客服取得联系，我们将尽快为您补发。如正常签收将默认为商品完好，签收后破损将不在赔偿范围内，也不再接受退换货事宜。</p>
					<p><span>2.以实物为准</span></p>
					<p>由于部分商品包装更换较为频繁，因此您收到的货品有可能与图片不完全一致（酒水的批次以收到以实物为准，网页图片仅供参考.）同时我们会尽量做到及时更新。</p>
					<p><span>3.关于退货物流费用</span></p>
					<p>我公司拒收任何形式的到付件，非质量问题产生的退换货由顾客承载运费，由我公司承担运费的退换货都由本公司安排快递人员上门收货，建议客人在自行退回过程中购买保险</p>
				</div>
				<div class="empty_con"></div>
				<div class="helplick">
					<div class="helplick_word">以上内容是否已经解决你的问题呢？</div>
					<span class="help_yes">是，已经解决</span>
					<span class="help_no">否，还未解决</span>
				</div>
			</div>
			<!-- 帮助中心-购物承诺 -->
			<div class="right_gwcn">
				<ul class="right_topword">
					<li>客户服务</li>
					<li>正品保证</li>
					<li>立体覆盖</li>
					<li>七天退货</li>
					<li>急您所需</li>
				</ul>
				<div class="right_name">正品保证</div>
				<div class="gwcn_content">
					<p><b>正品保证，提供发票</b></p>
					<p>正品保证，所有商品均如实体店购买一样开具机打发票。并且您还可以网上下单，实体门店提货。<br>1919酒类直供除了从厂家源头防伪，还建立了严肃的五部门协同审核监管流程，苛刻的上至总经理的四级商品审批准入制度，更自主投入巨资打造了国内行业最完备、最严密的信息内控体系，包括：对商品的二维码商品溯源、三层高科技防伪封口、高档商品的动态加密，对人员车辆的LBS移动行程跟踪监控，对空间，包括连锁店（点）和库房的无死角全方位实时监控。这一切，确保了所售商品的高度防伪和保真。</p>
				</div>
				<div class="empty_con"></div>
				<div class="helplick">
					<div class="helplick_word">以上内容是否已经解决你的问题呢？</div>
					<span class="help_yes">是，已经解决</span>
					<span class="help_no">否，还未解决</span>
				</div>
			</div>
			<!-- 廉政公示 -->
			<div class="right_lzgs">
				<ul class="right_topword">
					<li>廉政公示</li>
				</ul>
				<div class="right_name">廉政公示</div>
				<div class="lzgs_con">
					<p>廉政信息</p>
					<p>1、2016年10月12日某消费者匿名举报：某店店员未给顾客小票，经公司纪检调查举报属实，给予举报人1500元奖励。</p>
					<p>2、2016年10月9日某员工匿名举报:某店店长存在职务侵占行为，经公司纪检调查举报属实，给予举报人37644.6元奖励。</p>
					<p>3、2016年10月25日某员工匿名举报：某店店长存在职务侵占行为，经公司纪检调查举报属实，给予举报人5000元奖励。</p>
					<p>4、2016年10月10日某员工匿名举报：某店店长存在职务侵占行为，某店店长存在职务侵占行为，给予举报人9000元奖励。</p>
					<p>5、2016年11月2日某员工匿名举报：某店店长存在职务侵占行为，经公司纪检调查举报属实，给予举报人5000元奖励。</p>
					<p>6、2016年8月10日某员工匿名举报：某店店长存在职务侵占行为，经公司纪检调查举报属实，给予举报人12000元奖励。</p>
					<p>7、2016年8月22日某员工匿名举报：某店店长存在职务侵占行为，经公司纪检调查举报属实，给予举报人24000元奖励。</p>
					<p>处罚公示</p>
					<p>1、经纪检查实包头昆区民族东路店店长张静宇，利用职务之便侵占公司财产，给公司造成重大经济损失。针对以上行为，根据《壹玖壹玖奖惩条例V3.0》中第四章第六节第8条，对以上员工于2016年11月30日起解除劳动合同的决定。</p>
					<p>2、接举报纪检查实肃省酒泉市卫生街店秦亚安、尤寿青，存在职务侵占行为，给公司造成重大经济损失。针对以上行为，根据《壹玖壹玖奖惩条例V3.0》中第四章第六节第8条，对以上员工于2016年11月29日起解除劳动合同的决定。</p>
					<p>3、经纪检查实新疆乌鲁木齐青年路店及乌鲁木齐五一路店程宇龙、顾定国，存在职务侵占行为，给公司造成重大经济损失。针对以上行为，根据《壹玖壹玖奖惩条例V3.0》中第四章第六节第8条，对上员工于2016年12月1日起解除劳动合同的决定。</p>
					<p>4、经纪检查重庆金龙路店店员陈洪波，利用套取电子钱包充值优惠的方式侵占公司财产，给公司造成重大经济损失。针对以上行为，根据《壹玖壹玖奖惩条例V3.0》中第四章第六节第8条，对上员工于2016年12月1日起解除劳动合同的决定。</p>
					<p>5、经纪检查实云南省昆明市昆州路店长卫王于存在利用虚假充值电子钱包的方式进行盗窃的违法行为，给公司造成重大经济损失，此人已被刑拘，即将面临法律的严惩。针对以上行为，根据《壹玖壹玖奖惩条例V3.0》中第四章第六节第8条，对该员工于2016年11月12日起解除劳动合同（即“开除”）的决定。</p>
					<p>1919对任何形式的腐败一直采取零容忍的态度，我们在自我监督的同时也呼吁大家积极参与进来！</p>
					<p>1919对任何形式的腐败零容忍</p>
					<p>若您有相关举报信息</p>
					<p>可以通过以下方式联系我们 电话举报： 400-054-1919 电子邮件举报： 68087@1919.cn</p>
				</div>
				<div class="empty_con"></div>
				<div class="helplick">
					<div class="helplick_word">以上内容是否已经解决你的问题呢？</div>
					<span class="help_yes">是，已经解决</span>
					<span class="help_no">否，还未解决</span>
				</div>
			</div>
			<!-- 商家服务 -->
			<div class="right_sjfw">
				<ul class="right_topword">
					<li>非商品采购招标</li>
				</ul>
				<div class="right_name">非商品采购招标</div>
				<div class="sjfw_con">
					<div class="sjfw_words"><h2>招投标公告（2017—2）</h2></div>
					<p class="time_p"> 2016.12.15</p>
					<p>壹玖壹玖酒类平台科技股份有限公司2017年度拟新增1500家门店，现面向市场招标确定供货单位，相关事宜公告如下：</p>
					<p>一、招投标编号：YJYJZTB-161215</p>
					<p>二、设备物资采购、施工内容</p>
					<p>1、直营门店内外装饰装修（见附表1）</p>
					<p>2、店内所用家具（见附表2）、物资（见附表3）、设备（见附表4）的安装调试、服装（见附表5）、包材（见附表6）</p>
					<p>3、供货范围</p>
					<p>（1）门店所需的家具、物资、设备等。</p>
					<p>（2）配套的相关零部件等。</p>
					<p>（3）相关的使用说明书、合格证、增值税专用发票等资料。</p>
					<p>4、卖方工作范围，包括但不限于以下内容：</p>
					<p>（1）卖方提供的家具、设备、物资必须符合买房所提出的规格、颜色、技术指标等一切要求。</p>
					<p>（2）卖方必须在合同规定的时间内完成物资、设备的供货和安装调试。</p>
					<p>（3）质保和售后服务。</p>
					<p>三、报价单位资格要求</p>
					<p>1、依法注册,符合国家对投标人资格的规定，承诺履行《中华人民共和国招标投标法》的有关规定；遵守国家法律、行政法规，具有良好的信誉和诚实的职业道德；</p>
					<p>2、具有履行合同所需的资金、设备、技术和人员，具有良好的履行合同的记录；</p>
					<p>3、具有履行合同条款或技术要求中所述的承包方式和招标范围的能力；</p>
					<p>4、制造单位优先；</p>
					<p>5、有同类业绩。</p>
					<p>四、联系方式</p>
					<p>1、联系人：何先生、龚先生</p>
					<p>2、联系电话：18117880082,18121968973</p>
					<p>3、联系邮箱：2355684622@qq.com  2355939137@qq.com</p>
					<p>4、地址：四川成都高新区天府大道北段1700号环球中心E1-1801</p>
					<p>5、邮政编码：635000</p>
					<p>6、电话：028-66661919  4009991919</p>
					<p>欢迎符合条件的投标人参加本项目的投标！</p>
					<p>特此公告</p>
				</div>
				<div class="empty_con"></div>
				<div class="helplick">
					<div class="helplick_word">以上内容是否已经解决你的问题呢？</div>
					<span class="help_yes">是，已经解决</span>
					<span class="help_no">否，还未解决</span>
				</div>
			</div>
			<!-- 商家合作规则 -->
			<div class="right_hzgz">
				<ul class="right_topword">
					<li>支付手续费代扣缴公告</li>
					<li>1919商城商家代运营告知</li>
				</ul>
				<div class="right_name">1919商城商家代运营告知</div>
				<div class="hzgz_con">
					<b>1919商城商家代运营告知</b>
					<p>因1919商城商家增长过快，运营人力成本上涨，现对1919商城商家运营政策做如下调整：</p>
					<img src="images/buy_arrow/hzgz1.png" alt="">
					<img src="images/buy_arrow/hzgz2.png" alt="">
					<p><span>3、一站式托管式服务</span></p>
					<p>1919商城将为暂不具备运营团队的商家提供一站式托管店铺服务，轻松管理店铺，如有需求可具体咨询1919平台运营人员。</p>
					<p><span>4、续签代运营</span></p>
					<p>对于已签代运营协议的商家，待协议到期不再提供免费代运营服务，协议到期另可选择有偿代运营继续服务。</p>
					<b class="hzgz_end_b">1919商城</b>
					<b class="hzgz_end_b">2017年3月1日</b>
				</div>
				<div class="empty_con"></div>
				<div class="helplick">
					<div class="helplick_word">以上内容是否已经解决你的问题呢？</div>
					<span class="help_yes">是，已经解决</span>
					<span class="help_no">否，还未解决</span>
				</div>
			</div>
			<!-- 账号安全 -->
			<div class="right_zhaq">
				<ul class="right_topword">
					<li>忘记账户或昵称怎么办？</li>
					<li>密码忘记了怎么办？</li>
					<li>温馨提示</li>
					<li>如何修改登录密码？</li>
					<li>登录密码怎么设置比较安全？</li>
					<li>已绑定的手机号不能正常使用，如何修改手机号？</li>
					<li>怎么修改个人信息？</li>
					<li>验证手机时，提示已被他人验证了怎么办？</li>
				</ul>
				<div class="right_name">如何修改登录密码？</div>
				<div class="zhaq_con">
					<small>请在登录页面输入您的账号和密码进行登录。</small>
					<img class="img_zhaq" src="images/buy_arrow/zhaq1.png"  alt="">
					<img class="img_zhaq" src="images/buy_arrow/zhaq2.png"  alt="">
					<small>登录成功之后，点击【会员中心】→【账户中心】→【账户安全】→【登录密码】→点击【修改】进行密码重新设置→保存即可。</small>
					<img src="images/buy_arrow/zhaq3.png"  alt="">

				</div>
				<div class="empty_con"></div>
				<div class="helplick">
					<div class="helplick_word">以上内容是否已经解决你的问题呢？</div>
					<span class="help_yes">是，已经解决</span>
					<span class="help_no">否，还未解决</span>
				</div>
			</div>
			<!-- 订单 -->
			<div class="right_ddan">
				<ul class="right_topword">
					<li>订单想要取消怎么办？</li>
					<li>怎样查看我的订单？</li>
					<li>想要更改订单中的酒水怎么办？</li>
					<li>配送信息需要变更怎么办？</li>
					<li>订单迟迟未发货怎么办？</li>
				</ul>
				<div class="right_name">配送信息需要变更怎么办？</div>
				<div class="ddan_con">
					<small>如果您的订单刚生成完毕，请直接联络在线客服协助您进行更改。</small>
					<img src="images/buy_arrow/ddan.png" alt="">
					<small>如果您的订单已发货，且已有物流信息更新，请您联络在线客服协助您通知物流公司更改配送地址（限同城）。</small>
					<small><b>温馨提示：</b>物流在途的地址修改成功率较低，若地址修改失败，物流公司通知您签收时，您可以选择同城地址修改或者拒签后重新订购。</small>
				</div>
				<div class="empty_con"></div>
				<div class="helplick">
					<div class="helplick_word">以上内容是否已经解决你的问题呢？</div>
					<span class="help_yes">是，已经解决</span>
					<span class="help_no">否，还未解决</span>
				</div>
			</div>
			<!-- 支付方式 -->
			<div class="right_zffs">
				<ul class="right_topword">
					<li>在线支付都有哪些支付方式？</li>
					<li>收到商品为何没有发票？</li>
					<li>可以更改支付方式吗？如果更改？</li>
					<li>如何确认在线支付已成功？</li>
					<li>发票开具有哪些注意事项？</li>
					<li>普通发票可以更换为增值税发票吗？</li>
					<li>发票开错了可以重开吗？</li>
					<li>货到付款支持哪些付款方式？</li>
					<li>是否支持刷卡、现金混合支付？</li>
					<li>发票金额是商品标示金额吗？</li>
					<li>发票遗失，是否可以补开？</li>
					<li>购买时没有选择开发票，是否可以补开？</li>
					<li>如何填写发票信息？</li>
					<li>如何选择支付方式？</li>
					<li>银联支付支持哪些银行？</li>
					<li>在线支付订单的支付时效是多长？</li>
				</ul>
				<div class="right_name">如何选择支付方式？</div>
				<div class="zffs_con">
					<small>点击结算后，将转入订单信息核实页面，在确认完收货人信息之后，可以直接选择您想要的支付方式：</small>
					<img src="images/buy_arrow/zffs1.png" alt="">
					<small><b>温馨提示：</b>在选择在线支付功能时，请确保您的在线支付功能已开通或已购买嘴上功夫卡和储值卡并已激活可使用。</small>
				</div>
				<div class="empty_con"></div>
				<div class="helplick">
					<div class="helplick_word">以上内容是否已经解决你的问题呢？</div>
					<span class="help_yes">是，已经解决</span>
					<span class="help_no">否，还未解决</span>
				</div>
			</div>
			<!-- 物流配送 -->
			<div class="right_wlps">
				<ul class="right_topword">
					<li>网上下的订单，可以到门店自提吗？</li>
					<li>验货时发现异常如何处理？</li>
					<li>我的地址比较偏僻，也能够送到吗？</li>
					<li>可以由他人代签收商品吗？</li>
					<li>配送人员离开后，发现包裹异常怎么办？</li>
					<li>商品签收前，我应该做哪些检查？</li>
					<li>商品到货后，发现异常，我能否签收部分商品？</li>
					<li>订单提交后多长时间出库、多长时间可以收到商品？</li>
					<li>货到付款的商品能否验货后再付款？</li>
					<li>配送费用如何收取？</li>
					<li>商品页面显示免运费，为何还会收取运费？</li>
					<li>验货时我应该核对哪些信息？</li>
				</ul>
				<div class="right_name">配送人员离开后，发现包裹异常怎么办？</div>
				<div class="wlps_con">
					<small>如您在配送人员离开后再提出包裹外包装或封条异常，以及商品的型号、数量或外观等存在异常而要求退换货，此时因无法确认责任，将无法为您做进一步处理，请您谅解。</small>
					<small>温馨提示：您在签收前一定做好商品包装及商品的验收。</small>
				</div>
				<div class="empty_con"></div>
				<div class="helplick">
					<div class="helplick_word">以上内容是否已经解决你的问题呢？</div>
					<span class="help_yes">是，已经解决</span>
					<span class="help_no">否，还未解决</span>
				</div>
			</div>
			<!-- 退换货物 -->
			<div class="right_thhw">
				<ul class="right_topword">
					<li>退款流程</li>
					<li>怎样申请退换货？</li>
					<li>退款退到哪里？</li>
					<li>退换货之后优惠劵怎么办？</li>
					<li>退款处理周期是多久？</li>
					<li>我想修改或撤销退换货申请怎么办？</li>
					<li>如果卖家拒绝了我怎么办？</li>
					<li>退换货商品寄到哪里？</li>
					<li>退换货有哪些注意事项？</li>
					<li>我在哪里可以看到我的退货申请进度？</li>
					<li>页面不符合、缺少赠品或手提袋怎么办？</li>
					<li>运费由谁支付？</li>
				</ul>
				<div class="right_name">我在哪里可以看到我的退货申请进度？</div>
				<div class="thhw_con">
					<small>您可以在【会员中心】→【交易管理】→【退货退款】中看到您正在申请的订单处理状态。</small>
					<img src="images/buy_arrow/thhw.png" alt="">
				</div>
				<div class="empty_con"></div>
				<div class="helplick">
					<div class="helplick_word">以上内容是否已经解决你的问题呢？</div>
					<span class="help_yes">是，已经解决</span>
					<span class="help_no">否，还未解决</span>
				</div>
			</div>
			<!-- 登录注册 -->
			<div class="right_dlzc">
				<ul class="right_topword">
					<li>登录注册第一步</li>
					<li>登录注册第二步</li>
					<li>登录注册第三步</li>
					<li>登录注册第四步</li>
					<li>登录注册第五步</li>
				</ul>
				<div class="right_name">登录注册第一步</div>
				<div class="dlzc_con">
					<b>登录第一步：</b>
					<p>如果您已经是1919会员，在浏览器网址栏输入：<a href="https://www.1919.cn/">www.1919.cn</a>。请点击首页左上角【请登录】，输入您的账号和密码登录即可。</p>
					<img src="images/buy_arrow/dlzc.jpg" alt="">
				</div>
				<div class="empty_con"></div>
				<div class="helplick">
					<div class="helplick_word">以上内容是否已经解决你的问题呢？</div>
					<span class="help_yes">是，已经解决</span>
					<span class="help_no">否，还未解决</span>
				</div>
			</div>
			<!-- 选购商品 -->
			<div class="right_xgsp">
				<ul class="right_topword">
					<li>选购商品第一步</li>
					<li>选购商品第二步</li>
					<li>选购商品第三步</li>
				</ul>
				<div class="right_name">选购商品第一步</div>
				<div class="xgsp_con">
					<p>您可以在首页左侧导航栏进行选择，也可在搜索栏输入您想要酒水关键字进行快速搜索。</p>
					<img src="images/buy_arrow/xgsp.jpg" alt="">
				</div>
				<div class="empty_con"></div>
				<div class="helplick">
					<div class="helplick_word">以上内容是否已经解决你的问题呢？</div>
					<span class="help_yes">是，已经解决</span>
					<span class="help_no">否，还未解决</span>
				</div>
			</div>
			<!-- 购物车 -->
			<div class="right_gwc">
				<ul class="right_topword">
					<li>购物车第一步</li>
					<li>购物车第二步</li>
				</ul>
				<div class="right_name">购物车第一步</div>
				<div class="gwc_con">
					<p>点击【加入购物车】，商品会自动添加到购物车里。</p>
					<img src="images/buy_arrow/gwc.jpg" alt="">
				</div>
				<div class="empty_con"></div>
				<div class="helplick">
					<div class="helplick_word">以上内容是否已经解决你的问题呢？</div>
					<span class="help_yes">是，已经解决</span>
					<span class="help_no">否，还未解决</span>
				</div>
			</div>
			<!-- 下单支付 -->
			<div class="right_xdzf">
				<ul class="right_topword">
					<li>下单支付第一步</li>
					<li>下单支付第二步</li>
					<li>下单支付第三步</li>
					<li>下单支付第四步</li>
					<li>下单支付第五步</li>
				</ul>
				<div class="right_name">下单支付第一步</div>
				<div class="xdzf_con">
					<p>订单信息核实无误后，请点击【去结算】。温馨提示：“19分钟送达”为快喝订单。</p>
					<img src="images/buy_arrow/xdzf.jpg" alt="">
				</div>
				<div class="empty_con"></div>
				<div class="helplick">
					<div class="helplick_word">以上内容是否已经解决你的问题呢？</div>
					<span class="help_yes">是，已经解决</span>
					<span class="help_no">否，还未解决</span>
				</div>
			</div>
			<!-- 收货评价 -->
			<div class="right_shpj">
				<ul class="right_topword">
					<li>收货评价第一步</li>
					<li>收货评价第二步</li>
					<li>收货评价第三步</li>
				</ul>
				<div class="right_name">收货评价第一步</div>
				<div class="shpj_con">
					<p>确定收到酒水与订单一致且完好无损之后，您可以在【会员中心】→【我的订单】→点击【确认收货】 
					温馨提示：若您本人没有操作确认收货，10天后系统会自动确认收货。</p>
					<img src="images/buy_arrow/shpj.png" alt="">
				</div>
				<div class="empty_con"></div>
				<div class="helplick">
					<div class="helplick_word">以上内容是否已经解决你的问题呢？</div>
					<span class="help_yes">是，已经解决</span>
					<span class="help_no">否，还未解决</span>
				</div>
			</div>
		</div>
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
 src="js/common.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/shoplist.js"><?php echo '</script'; ?>
>
</html><?php }
}
