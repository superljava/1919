<?php
/* Smarty version 3.1.30, created on 2017-06-19 13:58:38
  from "D:\WWW\1919\1919Shop\templates\banner01_con.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5947680e1c50d5_22439204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b23c9b904c2be9c596cca60d47a410db4b108ff6' => 
    array (
      0 => 'D:\\WWW\\1919\\1919Shop\\templates\\banner01_con.html',
      1 => 1497851914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_top.html' => 1,
    'file:header_bottom.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5947680e1c50d5_22439204 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/banner01_con.css">
        <link rel="stylesheet" href="css/list.css">
        <?php echo '<script'; ?>
 src="js/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/jquery_lazyload.js"><?php echo '</script'; ?>
>
    </head>
    <body>
    	<?php $_smarty_tpl->_subTemplateRender("file:header_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("file:header_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    	<!-- nav -->
    	<div id="shop">
            <div class="shoptitle wrapper clearfix">
                <a href="javascript:void(0);" class="quanbu fl">
                    <span class="allFen" style="display: block;margin:0 auto">520为爱放价</span>
                </a>
                <ul class="ul1">
                    <li><a href="index.php">首页</a></li>
                    <li><a href="index.php" class="logo"><img src="images/commom/he-kuaihe.png" height="40" width="87"></a></li>
                    <!-- <li><a href="yxgj.php">逸香国际</a></li> -->
                    <li><a href="shopshouye.php">壹加玖定制</a></li>
                    <li><a href="###">嘴上功夫</a></li>
                    <li><a href="next_store.php">隔壁仓库</a></li>
                    <li><a href="friend_link.php">招商加盟</a></li>
                </ul>
                <!--  -->
            </div>
        </div>
    	<!-- nav结束 -->
    	<div class="love_activity">
    		<div class="love_pic">
    			<img src="images/register/love.jpg" height="1257" width="1920" alt="">
    		</div>
    		<div class="love_pro">
    			<ul id="pro_list" class="clearfix">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr2']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value["type"] == "白酒" && $_smarty_tpl->tpl_vars['item']->value['Id'] == $_smarty_tpl->tpl_vars['arr']->value[$_smarty_tpl->tpl_vars['key']->value]['goodsId']) {?>
    				<li>
    					<div class="pro_img">
    						<a href="goodsDetails.php?goodsId=<?php echo $_smarty_tpl->tpl_vars['item']->value['Id'];?>
"><img class="lazy" data-original="<?php echo $_smarty_tpl->tpl_vars['arr']->value[$_smarty_tpl->tpl_vars['key']->value]['img01'];?>
" height="240" width="240" alt=""></a>
    					</div>
    					<div class="pro_info">
    						<p class="pro_price">
    							<span class="price_now">
    								<span>￥</span>
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value['nowPrice'];?>

    							</span>
    							<span class="price_bef_m">￥</span>
    							<span class="price_bef"><?php echo $_smarty_tpl->tpl_vars['item']->value['oriPrice'];?>
</span>
    						</p>
    						<p class="pro_name"><a href="goodsDetails.php?goodsId=<?php echo $_smarty_tpl->tpl_vars['item']->value['Id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></p>
							<p class="pro_icon">
								<i class="pro_self">自营</i>
								<i class="pro_drink">快喝</i>
								<i class="pro_badge"></i>								
							</p>
							
							
						</div>
						<div class="pro_title">
								<p class="self_tit">本商品为1919自营商品</p>
								<p class="drink_tit">本商品支持快喝服务</p>
								<p class="badge_tit">本商品支持货到付款</p>
							</div>	
						<div class="icon_cover">
							<img src="images/register/zq-icon-24time.jpg" height="54" width="40" alt="">
						</div>
    				</li>
                    <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    			</ul>
    		</div>
    	</div>
    	<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </body>
    <?php echo '<script'; ?>
>
     $(".pro_icon i").each(function(i){
     	 $(".pro_icon i").eq(i).mouseover(function(){
    	$(".pro_title").children().eq(i).css({ display : "block" });
    	})
	    $(".pro_icon i").eq(i).mouseout(function(){
	    	$(".pro_title").children().eq(i).css({ display : "none" });
	    })
     });
     $("img.lazy").lazyload({
        threshold:200,
        // event:"click",
        effect:"fadeIn"
     });
    <?php echo '</script'; ?>
>
</html><?php }
}
