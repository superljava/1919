<?php
/* Smarty version 3.1.30, created on 2017-06-13 09:12:38
  from "D:\WWW\1919\1919Shop\templates\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593f3c06d25c56_61598058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8c38a6b4082098ae8ac353682d34582aa58c60b' => 
    array (
      0 => 'D:\\WWW\\1919\\1919Shop\\templates\\header.html',
      1 => 1497113656,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_593f3c06d25c56_61598058 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
	                    <li style="<?php echo $_smarty_tpl->tpl_vars['empty']->value;?>
"><a href="login.php" class="t_login">亲，请登录</a></li>
	                    <li style="<?php echo $_smarty_tpl->tpl_vars['empty']->value;?>
"><a href="register.php" class="t_login">注册</a></li>
	                    <li style="<?php echo $_smarty_tpl->tpl_vars['emptyLogin']->value;?>
"><a href="###" class="t_login"><?php if ($_smarty_tpl->tpl_vars['sess']->value) {
echo $_smarty_tpl->tpl_vars['sess']->value;
}?></a></li>
	                    <li style="<?php echo $_smarty_tpl->tpl_vars['emptyLogin']->value;?>
"><a href="log_out.php" class="t_login">退出</a></li>
	                </ul>
	            </div>
	            <div class="t_right fr">
	                <ul id="top_nav clearfix">
	                    <li class="top_nav_list">
	                        <a href="login.php" class="pic">手机商城</a>
	                        <div class="t_r_sm">
	                           <img src="images/code.png" height="94" width="79" alt="">
	                        </div>
	                        <span></span>
	                    </li>
	                    
	                    <li class="top_nav_list">
	                        <a href="login.php" class="pic">客户服务</a>
	                        <ul class="t_r_sm">
	                            <li><a href="login.php">联系客服</a></li>
	                            <li><a href="guide.php">帮助中心</a></li>
	                        </ul>
	                        <span></span>
	                    </li>
	                    
	                    <li class="top_nav_list">
	                        <a href="login.php" class="pic">商家合作</a>
	                        <ul class="t_r_sm">
	                            <li><a href="login.php">商家入驻</a></li>
	                            <li><a href="login.php">玖妈妈APP</a></li>
	                            <li><a href="login.php">采购招标</a></li>
	                        </ul>
	                        <span></span>
	                    </li>
	                    
	                    <li class="top_nav_list">
	                        <a href="###" class="pic">网站导航</a>
	                        <ul class="t_r_sm">
	                            <li><a href="###">商城首页</a></li>
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
                    <div class="buycar fr clearfix">
                        <span class="buycar_car"></span>
                        <a href="shoppingCart.php">购物车</a>
                        <span class="buycar_num"><?php echo $_smarty_tpl->tpl_vars['allPiece']->value;?>
</span>
                        <span class="buycar_arrow"></span>
                        <div class="buycar_list">
                            <div class="nu" style="<?php echo $_smarty_tpl->tpl_vars['empetDisplay']->value;?>
">
                                <span class="buycar_list_pic"><img src="images/shopcart.png" height="50" width="50" alt=""></span>
                                <p>购物车中还没有商品，赶紧选购吧!</p>
                            </div>
                            <div class="carPull" style="<?php echo $_smarty_tpl->tpl_vars['listDisplay']->value;?>
">
                                <div class="carGoods" id="carGoods">
                                    <ul id="carGoods-list">
                                    	<?php if ($_smarty_tpl->tpl_vars['goodsBasket']->value) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goodsBasket']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                                        <li goods-id="<?php echo $_smarty_tpl->tpl_vars['item']->value["goodsId"];?>
">
                                            <div class="goodsImg">
                                                <a href="goodsDetails.php?goodsId=<?php echo $_smarty_tpl->tpl_vars['item']->value["goodsId"];?>
">
                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value["goodsImg"];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value["title"];?>
" width="50px">
                                                </a>
                                            </div>
                                            <div class="goodsDels">
                                                <a href="goodsDetails.php?goodsId=<?php echo $_smarty_tpl->tpl_vars['item']->value["goodsId"];?>
">
                                                    <h3><?php echo $_smarty_tpl->tpl_vars['item']->value["title"];?>
</h3>
                                                </a>
                                                <p><?php echo $_smarty_tpl->tpl_vars['item']->value["number"];?>
件</p>
                                            </div>
                                            <div class="goodsDel">
                                                <p>￥<?php echo $_smarty_tpl->tpl_vars['item']->value["price"];?>
</p>
                                                <span class="buycar-delBtn" goods-id="<?php echo $_smarty_tpl->tpl_vars['item']->value["goodsId"];?>
">刪除</span>
                                            </div>
                                        </li>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                        <?php }?>
                                    </ul>
                                </div>
                                <div class="carPrice">
                                    <div class="font fl">
                                        共&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['allPiece']->value;?>
</span>&nbsp;件商品
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;共计&nbsp;<b><?php if ($_smarty_tpl->tpl_vars['goodsBasket']->value) {
echo $_smarty_tpl->tpl_vars['allPrice']->value;
}?></b>
                                    </div>
                                    <a href="shoppingCart.php" class="shopCar">去购物车</a>
                                </div>
                            </div>
                        </div>
                    </div>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- header结束 -->
</body><?php }
}
