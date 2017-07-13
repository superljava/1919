<?php
/* Smarty version 3.1.30, created on 2017-06-10 22:33:40
  from "D:\WWW\1919\demo\templates\shoppingCart.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593c0344c7ffb1_29285679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8c5eb75d1df78091f3e679147e94d273da26079' => 
    array (
      0 => 'D:\\WWW\\1919\\demo\\templates\\shoppingCart.html',
      1 => 1497105217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_593c0344c7ffb1_29285679 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/Reset.css">
    <link rel="stylesheet" href="css/shoppingCart.css">
    <link rel="stylesheet" href="css/common.css">
    <?php echo '<script'; ?>
 src="js/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jQuery.color.(IE).js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/shoppingCart.js"><?php echo '</script'; ?>
>
</head>
<body>
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
                           <img src="images/commom/code.png" height="94" width="79" alt="">
                        </div>
                        <span></span>
                    </li>
                    
                    <li class="top_nav_list">
                        <a href="friend_link.php" class="pic">客户服务</a>
                        <ul class="t_r_sm">
                            <li><a href="friend_link.php">联系客服</a></li>
                            <li><a href="friend_link.php">帮助中心</a></li>
                        </ul>
                        <span></span>
                    </li>
                    
                    <li class="top_nav_list">
                        <a href="friend_link.php" class="pic">商家合作</a>
                        <ul class="t_r_sm">
                            <li><a href="friend_link.php">商家入驻</a></li>
                            <li><a href="friend_link.php">玖妈妈APP</a></li>
                            <li><a href="friend_link.php">采购招标</a></li>
                        </ul>
                        <span></span>
                    </li>
                    
                    <li class="top_nav_list">
                        <a href="friend_link.php" class="pic">网站导航</a>
                        <ul class="t_r_sm">
                            <li><a href="friend_link.php">商城首页</a></li>
                            <li><a href="friend_link.php">会员中心</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
	<div class="shoppingCart">
		<div class="S_min">
			<div class="S_up clearfix">
    			<div class="S_left fl">
    				<a href="index.php" class="fl"><img src="images/shoppingCart/logo.png" height="75" width="228" alt="1919酒类直销"></a>
    				<h1 class="fl">购物车</h1>
    			</div>
                <div class="shopping-search-container fr">
                    <div class="shop-sch-left fl">
                        <div class="show-item">美酒</div>
                        <ul class="shop-sch-l-list">
                            <li>美酒</li>
                            <li>店铺</li>
                        </ul>
                    </div>
                    <input class="shop-sch-ipt fl" type="text">
                    <div class="shop-sch-right fr">搜索</div>
                </div>
			</div>
            <div class="shopping-down-container">
                <div class="S_down" style="<?php echo $_smarty_tpl->tpl_vars['empetDisplay']->value;?>
">
                    <div class="S_box">
                        <p>购物车空空的，您可以：</p>
                        <a href="goodsList.php" class="buyWine">去买酒</a>
                        <a href="goodsDetails.php" class="collectGoods">查看收藏的商品</a>
                    </div>
                </div>
                <div class="shopping-content clearfix" style="<?php echo $_smarty_tpl->tpl_vars['listDisplay']->value;?>
">
                    <div class="shopping-con-tit padding">
                        <div class="checkAll-container fl">
                            <input class="checkAll allChecked" type="checkbox">
                            <label for="">全选</label>
                        </div>
                        <div class="shopping-goods-tit fl">商品</div>
                        <div class="shopping-price-tit fl">单价</div>
                        <div class="shopping-num-tit fl">数量</div>
                        <div class="shopping-total-tit fl">小计</div>
                        <div class="shopping-caozuo-tit fl">操作</div>
                    </div>
                    <div class="shopping-con-goodsDetails">
                        <div class="shop-con-goods-top padding">
                            <input class="checkAll allChecked" type="checkbox">
                            由：河南仓库店为您提供配送服务
                            <span> (预计: 24小时送出)</span>
                        </div>
                        <ul class="shop-con-goods-mid">
                            <?php if ($_smarty_tpl->tpl_vars['goods']->value) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goods']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                            <li data-price="<?php echo $_smarty_tpl->tpl_vars['item']->value["price"];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value["goodsId"];?>
" data-stock="<?php echo $_smarty_tpl->tpl_vars['item']->value["store"];?>
">
                                <input class="checkAll fl" type="checkbox" goods-select="<?php echo $_smarty_tpl->tpl_vars['item']->value["goodsSelect"];?>
">
                                <a class="con-goods-mid-img fl" href="goodsDetails.php?<?php echo $_smarty_tpl->tpl_vars['item']->value["goodsId"];?>
" target="_blank">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value["goodsImg"];?>
" height="640" width="640" alt="">
                                </a>
                                <div class="con-goods-mid-info fl">
                                    <a class="font-color" href="goodsDetails.php?<?php echo $_smarty_tpl->tpl_vars['item']->value["goodsId"];?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['item']->value["title"];?>

                                    </a>
                                    <span>24小时送出</span>
                                </div>
                                <div class="con-goods-mid-price fl">¥ <?php echo $_smarty_tpl->tpl_vars['item']->value["price"];?>
</div>
                                <div class="con-goods-mid-num fl" goods-id="<?php echo $_smarty_tpl->tpl_vars['item']->value["goodsId"];?>
">
                                    <span class="subbtn fl"></span>
                                    <input class="num-ipt fl" value="<?php echo $_smarty_tpl->tpl_vars['item']->value["number"];?>
" type="text" autocomplete="off">
                                    <span class="addbtn fl"></span>
                                    <p>库存<?php echo $_smarty_tpl->tpl_vars['item']->value["store"];?>
</p>
                                </div>
                                <div class="con-goods-mid-allPrice fl">¥ <?php echo $_smarty_tpl->tpl_vars['item']->value["price"];?>
</div>
                                <div class="con-goods-mid-caozuo fr">
                                    <span class="operate-del font-color" goods-id="<?php echo $_smarty_tpl->tpl_vars['item']->value["goodsId"];?>
">删除</span>
                                    <span class="operate-favorite font-color" goods-id="<?php echo $_smarty_tpl->tpl_vars['item']->value["goodsId"];?>
">加入收藏</span>
                                </div>
                            </li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            <?php }?>
                        </ul>
                        <div class="shop-con-goods-bottom clearfix">
                            <div class="shop-con-goods-bottom-left fl">
                                <input class="checkAll allChecked" type="checkbox">
                                <label for="">全选</label>
                                <span class="font-color">删除选中</span>
                                <span class="font-color">收藏选中</span>
                            </div>
                            <div class="shop-con-goods-bottom-right fr">
                                <div class="goods-num-box fl">
                                    合计：<span>0</span>件商品
                                    <a class="lookGoods font-color">查看商品</a>
                                </div>
                                <div class="alltotal-price-box fl">
                                    合计：<span>￥0.00</span>
                                </div>
                                <a class="countbtn fl" href="javascript:;">去结算</a>
                            </div>
                        </div>
                    </div>
                    <div class="collectSuccess"></div>
                </div>
            </div>
		</div>
	</div>
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
                        <li><a href="goodsList.php">【奔富专题】最低45元起</a></li>
                    </ul>
                </li>
                <li class="fl">
                    <h5 class="f_title"><a href="goodsList.php">媒体报道</a></h5>
                    <ul class="f_help_list">
                        <li><a href="shopshouye.php">壹玖壹玖酒类直供2017...</a></li>
                        <li><a href="goodsList.php">2016年度1919酒类直...</a></li>
                        <li><a href="goodsList.php">1919董事长杨陵江...</a></li>
                        <li><a href="goodsList.php">价格杀手"1919",让...</a></li>
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
                        <li class="fl"><a href="friend_link.php">1919酒类网上商城</a></li>
                        <li class="f_line fl">|</li>
                        <li class="fl"><a href="goodsList.php">中国白酒</a></li>
                        <li class="f_line fl">|</li>
                        <li class="fl"><a href="goodsList.php">葡萄酒</a></li>
                        <li class="f_line fl">|</li>
                        <li class="fl"><a href="goodsList.php">啤酒</a></li>
                        <li class="f_line fl">|</li>
                        <li class="fl"><a href="goodsList.php">1919招商加盟</a></li>
                    </ul>
                    <div class="f_sure">
                        <p>壹玖壹玖酒类平台科技股份有限公司 All Rights Reserved &nbsp; &nbsp;&nbsp;&nbsp; 蜀ICP备1338号</p>
                        <p>增值电信业务经营许可证：川B2-20110101</p>
                        <p>公司地址：高新区天府大道北段1700号1栋2单元18层1801号</p>
                    </div>
                    <ul class="f_pic">
                        <li class="fl"><img src="images/commom/certificate-one.jpg" alt=""></li>
                        <li class="fl"><img src="images/commom/certificate-two.jpg" alt=""></li>
                        <li class="fl"><img src="images/commom/certificate-three.jpg" alt=""></li>
                        <li class="fl"><img src="images/commom/certificate-four.jpg" alt=""></li>
                        <li class="fl"><img src="images/commom/certificate-five.jpg" alt=""></li>
                    </ul>
                </div>
                <div class="f_right fr">
                    <ul class="f_right_list">
                        <li class="fl">
                            <a href="friend_link.php"><img src="images/commom/kuaihe-erweima_03.jpg" alt=""></a>
                            <p>下载APP轻松喝酒</p>
                        </li>
                        <li class="fl">
                            <a href="friend_link.php"><img src="images/commom/erweima_03.jpg" alt=""></a>
                            <p>关注1919公众号</p>
                        </li>
                        <li class="fl">
                            <a href="friend_link.php"><img src="images/commom/sinaLogo.jpg" alt="" class="f_sinapic"></a>
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
</html><?php }
}
