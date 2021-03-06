<?php
/* Smarty version 3.1.30, created on 2017-06-19 20:12:02
  from "D:\WWW\1919\1919Shop\templates\shoppingCart.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5947bf92b7eae1_72281737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8335e64f67b747b98a6eb5810bf1fccf828c399c' => 
    array (
      0 => 'D:\\WWW\\1919\\1919Shop\\templates\\shoppingCart.html',
      1 => 1497874312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_top.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5947bf92b7eae1_72281737 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/Reset.css">
    <link rel="stylesheet" href="css/shoppingCart.css">
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
    <?php $_smarty_tpl->_subTemplateRender("file:header_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
                        <a href="index.php" class="collectGoods">查看收藏的商品</a>
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
                                <a class="con-goods-mid-img fl" href="goodsDetails.php?goodsId=<?php echo $_smarty_tpl->tpl_vars['item']->value["goodsId"];?>
" target="_blank">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value["goodsImg"];?>
" height="640" width="640" alt="">
                                </a>
                                <div class="con-goods-mid-info fl">
                                    <a class="font-color" href="goodsDetails.php?goodsId=<?php echo $_smarty_tpl->tpl_vars['item']->value["goodsId"];?>
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
" type="text" autocomplete="off" data-store="<?php echo $_smarty_tpl->tpl_vars['item']->value["store"];?>
">
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
    <?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
