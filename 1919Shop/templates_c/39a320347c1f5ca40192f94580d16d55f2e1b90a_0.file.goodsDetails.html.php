<?php
/* Smarty version 3.1.30, created on 2017-06-09 20:31:00
  from "D:\WWW\1919\demo\templates\goodsDetails.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593a9504165e54_39265578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39a320347c1f5ca40192f94580d16d55f2e1b90a' => 
    array (
      0 => 'D:\\WWW\\1919\\demo\\templates\\goodsDetails.html',
      1 => 1497011457,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:list.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_593a9504165e54_39265578 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $_smarty_tpl->tpl_vars['goods']->value["title"];?>
</title>
        <link rel="stylesheet" href="css/Reset.css">
        <link rel="stylesheet" href="css/common.css">
        <link rel="stylesheet" href="css/goodsDetails.css">
        <?php echo '<script'; ?>
 src="js/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/jquery_lazyload.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/BannerAnimate.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/goodsDetails.js"><?php echo '</script'; ?>
>
    </head>
    <body>
    	<?php $_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("file:list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    	<!-- 商品名字 -->
	    <div class="goods-keys wrapper">
	    	<div class="keys-container">
	    		<span class="goodsName">茅台</span>
	    	</div>
	    </div>
	    <!-- 商品详情信息 -->
	    <div class="goods-details-container wrapper clearfix">
	    	<div class="goods-content-left fl">
	    		<div class="goods-left-img" id="goods-left-img">
	    			<img class="goods-left-bigImg" alt="">
	    			<div class="goodsGlass"></div>
	    		</div>
	    		<ul class="goods-left-smImg" id="goods-left-smImg">
	    			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goodsimg']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
	    			<?php if ($_smarty_tpl->tpl_vars['key']->value != 0 && $_smarty_tpl->tpl_vars['key']->value != 1) {?>
	    			<li><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" alt=""></li>
	    			<?php }?>
	    			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	    		</ul>
	    		<div class="goods-glassImg-con" id="goods-glassImg-con">
		    		<img class="goods-glassImg" id="goods-glassImg" alt="">
		    	</div>
	    	</div>
	    	<div class="goods-content-mid fl">
	    		<h2 class="goods-mid-tit"><?php echo $_smarty_tpl->tpl_vars['goods']->value["title"];?>
</h2>
	    		<div class="goods-mid-price">
	    			<div class="goods-price">
	    				<div class="goods-official-price"> 
							<span class="goods-off-tit">官方售价</span>
							<span class="goods-off-pri">￥<?php echo $_smarty_tpl->tpl_vars['goods']->value["oriPrice"];?>
</span>
						</div>
						<div class="goods-off-1919-price"> 
							<span class="goods-off-tit">1919售价</span>   
							<div class="goods-1919off-price">
								￥
								<em class="details-pri"><?php echo $_smarty_tpl->tpl_vars['goods']->value["nowPrice"];?>
</em>
								<i>超值优惠</i>
							</div>
						</div>
	    			</div>
					<div class="goods-store">
						<div class="goods-delivery clearfix">
							<div class="goods-de-area">
								配送至:<span></span>
							</div>
							<div class="goods-store-prompt fl">
								<span>有货</span><b>当前库存（<i><?php echo $_smarty_tpl->tpl_vars['goods']->value["store"];?>
</i>）</b>
							</div>
						</div>
						<div class="goods-service">
							<span>服务&nbsp;:&nbsp;</span>
							由&nbsp;<a href="shopshouye.php">1919酒类直供</a>&nbsp;发货，并提供售后服务。预计(<i>二十四小时之内发货</i>)
						</div>
						<div class="goods-number">
							<span class="goods-number-left">数量&nbsp;:&nbsp;</span>
							<span class="goods-stock" id="goods-stock">
								<a class="goods-reduce" href="javascript:void(0);" title="减1"></a>
								<input class="goods-text" type="text" name="43" value="1" maxlength="8" title="请输入购买量">
								<a class="goods-increase" href="javascript:void(0);"></a>
							</span>
							<span class="goods-repertory">库存(<?php echo $_smarty_tpl->tpl_vars['goods']->value["store"];?>
)</span>
						</div>
						<div class="goods-action">
							<a class="goods-btn-basket" goods-id="<?php echo $_smarty_tpl->tpl_vars['goods']->value["Id"];?>
" href="###">
								<i></i>加入购物车
							</a>
							<a class="goods-btn-buy" href="login.php">立即购买</a>
						</div>
					</div>
	    		</div>
	    	</div>
	    	<div class="goods-content-right fr">
	    		<div class="goods-right-tit">
	    			<div class="goods-tit-dp clearfix">
	    				<a class="goods-tit-img fl" href="shopshouye.php">
	    					<img src="images/goodsDetails/goods-tit-dpimg.jpg" alt="">
	    				</a>
	    				<div class="goods-tit-text fl">
	    					<h2><?php echo $_smarty_tpl->tpl_vars['goods']->value["dianpu"];?>
</h2>
	    					<a href="shopshouye.php">进店看看</a>
	    				</div>
	    			</div>
	    			<div class="goods-service-container">
	    				<a class="goods-servicer" href="login.php">联系客服</a>
	    				<a href="login.php">收藏店铺</a>
	    			</div>
	    		</div>
	    		<a class="goods-bodyImg" href="###spxq">
	    			<img src="images/goodsDetails/goods-bodyimg.jpg" alt="">
	    		</a>
	    	</div>
	    </div>
	    <!-- 推荐商品小banner -->
	    <div class="goods-reconmend-container wrapper">
    		<ul class="goods-reconmend-tit clearfix">
    			<li>推荐商品</li>
    		</ul>
    		<div class="goods-recmd-list">
    			<ul class="goods-recmd-banner">
    				<li>
    					<a class="goods-recmd-item-img" href="###spxq">
    						<img class="lazy" data-original="images/goodsDetails/goods-item-img01.jpg" alt="">
    					</a>
    					<div class="goods-recmd-item-text">
    						<a class="goods-recmd-it-tit" href="###spxq">53度传奇黔酱5年500ml</a>
    						<p>
    							<span class="goods-recmd-it-nowPrice fl">
    								¥<span>181.40</span>
    							</span>
    							<span class="goods-recmd-it-oriPrice fl">
    								¥<span>188.00</span>
    							</span>
    						</p>
    					</div>
    				</li>
    				<li>
    					<a class="goods-recmd-item-img" href="###spxq">
    						<img class="lazy" data-original="images/goodsDetails/goods-item-img02.jpg" alt="">
    					</a>
    					<div class="goods-recmd-item-text">
    						<a class="goods-recmd-it-tit" href="###spxq">53度传奇黔酱5年500ml</a>
    						<p>
    							<span class="goods-recmd-it-nowPrice fl">
    								¥<span>181.40</span>
    							</span>
    							<span class="goods-recmd-it-oriPrice fl">
    								¥<span>188.00</span>
    							</span>
    						</p>
    					</div>
    				</li>
    				<li>
    					<a class="goods-recmd-item-img" href="###spxq">
    						<img class="lazy" data-original="images/goodsDetails/goods-item-img03.jpg" alt="">
    					</a>
    					<div class="goods-recmd-item-text">
    						<a class="goods-recmd-it-tit" href="###spxq">53度传奇黔酱5年500ml</a>
    						<p>
    							<span class="goods-recmd-it-nowPrice fl">
    								¥<span>181.40</span>
    							</span>
    							<span class="goods-recmd-it-oriPrice fl">
    								¥<span>188.00</span>
    							</span>
    						</p>
    					</div>
    				</li>
    				<li>
    					<a class="goods-recmd-item-img" href="###spxq">
    						<img class="lazy" data-original="images/goodsDetails/goods-item-img04.jpg" alt="">
    					</a>
    					<div class="goods-recmd-item-text">
    						<a class="goods-recmd-it-tit" href="###spxq">53度传奇黔酱5年500ml</a>
    						<p>
    							<span class="goods-recmd-it-nowPrice fl">
    								¥<span>181.40</span>
    							</span>
    							<span class="goods-recmd-it-oriPrice fl">
    								¥<span>188.00</span>
    							</span>
    						</p>
    					</div>
    				</li>
    				<li>
    					<a class="goods-recmd-item-img" href="###spxq">
    						<img class="lazy" data-original="images/goodsDetails/goods-item-img05.jpg" alt="">
    					</a>
    					<div class="goods-recmd-item-text">
    						<a class="goods-recmd-it-tit" href="###spxq">53度传奇黔酱5年500ml</a>
    						<p>
    							<span class="goods-recmd-it-nowPrice fl">
    								¥<span>181.40</span>
    							</span>
    							<span class="goods-recmd-it-oriPrice fl">
    								¥<span>188.00</span>
    							</span>
    						</p>
    					</div>
    				</li>
    				<li>
    					<a class="goods-recmd-item-img" href="###spxq">
    						<img class="lazy" data-original="images/goodsDetails/goods-item-img06.jpg" alt="">
    					</a>
    					<div class="goods-recmd-item-text">
    						<a class="goods-recmd-it-tit" href="###spxq">53度传奇黔酱5年500ml</a>
    						<p>
    							<span class="goods-recmd-it-nowPrice fl">
    								¥<span>181.40</span>
    							</span>
    							<span class="goods-recmd-it-oriPrice fl">
    								¥<span>188.00</span>
    							</span>
    						</p>
    					</div>
    				</li>
    				<li>
    					<a class="goods-recmd-item-img" href="###spxq">
    						<img class="lazy" data-original="images/goodsDetails/goods-item-img07.jpg" alt="">
    					</a>
    					<div class="goods-recmd-item-text">
    						<a class="goods-recmd-it-tit" href="###spxq">53度传奇黔酱5年500ml</a>
    						<p>
    							<span class="goods-recmd-it-nowPrice fl">
    								¥<span>181.40</span>
    							</span>
    							<span class="goods-recmd-it-oriPrice fl">
    								¥<span>188.00</span>
    							</span>
    						</p>
    					</div>
    				</li>
    				<li>
    					<a class="goods-recmd-item-img" href="###spxq">
    						<img class="lazy" data-original="images/goodsDetails/goods-item-img08.jpg" alt="">
    					</a>
    					<div class="goods-recmd-item-text">
    						<a class="goods-recmd-it-tit" href="###spxq">53度传奇黔酱5年500ml</a>
    						<p>
    							<span class="goods-recmd-it-nowPrice fl">
    								¥<span>181.40</span>
    							</span>
    							<span class="goods-recmd-it-oriPrice fl">
    								¥<span>188.00</span>
    							</span>
    						</p>
    					</div>
    				</li>
    			</ul>
    			<div class="goods-recmd-btn leftBtn"></div>
    			<div class="goods-recmd-btn rightBtn"></div>
    		</div>
	    </div>
	    <!-- 商品介绍introduce -->
	    <div class="goods-introduce-contaienr wrapper clearfix">
	    	<div class="goods-introduce-left fl">
	    		<a class="goods-int-l-top" href="login.php">
	    			<img class="lazy" data-original="images/goodsDetails/goods-introduce-left01.jpg" alt="">
	    		</a>
	    		<a class="goods-int-l-mid" href="login.php">
	    			<img class="lazy" data-original="images/goodsDetails/goods-introduce-left02.jpg" alt="">
	    		</a>
	    		<div class="goods-guess-container">
	    			<p class="goods-guess-tit">猜你喜欢</p>
	    			<ul class="goods-guess-list clearfix">
	    				<li>
	    					<a class="goods-guess-item-left" href="###spxq">
	    						<img class="lazy" data-original="images/goodsDetails/goods-introduce-item01.jpg" alt="">
	    					</a>
	    					<div class="goods-guess-item-right fr">
	    						<a class="goods-gs-it-r-tit" href="###spxq">10度沙洲优黄（喜上梅梢）（商超）500ml</a>
	    						<a class="goods-gs-it-r-dp" href="shopshouye.php">
	    							<span>1919自营店</span>
	    						</a>
	    						<p class="clearfix">
	    							<span class="goods-gs-it-r-nPri">
	    								¥<span>19.66</span>
	    							</span>
	    							<span class="goods-gs-it-r-oPri">
	    								¥<span>20.00</span>
	    							</span>
	    						</p>
	    					</div>
	    				</li>
	    				<li>
	    					<a class="goods-guess-item-left" href="###spxq">
	    						<img class="lazy" data-original="images/goodsDetails/goods-introduce-item02.jpg" alt="">
	    					</a>
	    					<div class="goods-guess-item-right fr">
	    						<a class="goods-gs-it-r-tit" href="###spxq">53度王茅酒（百年印象）500ml</a>
	    						<a class="goods-gs-it-r-dp" href="shopshouye.php">
	    							<span>1919茅台自营店</span>
	    						</a>
	    						<p class="clearfix">
	    							<span class="goods-gs-it-r-nPri">
	    								¥<span>411.83</span>
	    							</span>
	    							<span class="goods-gs-it-r-oPri">
	    								¥<span>429.00</span>
	    							</span>
	    						</p>
	    					</div>
	    				</li>
	    				<li>
	    					<a class="goods-guess-item-left" href="###spxq">
	    						<img class="lazy" data-original="images/goodsDetails/goods-introduce-item03.jpg" alt="">
	    					</a>
	    					<div class="goods-guess-item-right fr">
	    						<a class="goods-gs-it-r-tit" href="###spxq">宁夏贺玉赤霞珠干红葡萄酒750ml</a>
	    						<a class="goods-gs-it-r-dp" href="shopshouye.php">
	    							<span>1919自营店</span>
	    						</a>
	    						<p class="clearfix">
	    							<span class="goods-gs-it-r-nPri">
	    								¥<span>29.51</span>
	    							</span>
	    							<span class="goods-gs-it-r-oPri">
	    								¥<span>29.90</span>
	    							</span>
	    						</p>
	    					</div>
	    				</li>
	    				<li>
	    					<a class="goods-guess-item-left" href="###spxq">
	    						<img class="lazy" data-original="images/goodsDetails/goods-introduce-item04.jpg" alt="">
	    					</a>
	    					<div class="goods-guess-item-right fr">
	    						<a class="goods-gs-it-r-tit" href="###spxq">法国嘉斯顿波尔多干红葡萄酒750ml</a>
	    						<a class="goods-gs-it-r-dp" href="shopshouye.php">
	    							<span>1919自营店</span>
	    						</a>
	    						<p class="clearfix">
	    							<span class="goods-gs-it-r-nPri">
	    								¥<span>69.00</span>
	    							</span>
	    							<span class="goods-gs-it-r-oPri">
	    								¥<span>238.00</span>
	    							</span>
	    						</p>
	    					</div>
	    				</li>
	    			</ul>
	    		</div>
	    		<a class="goods-int-l-btm" href="shopshouye.php">
	    			<img class="lazy" data-original="images/goodsDetails/goods-introduce-left03.jpg" alt="">
	    		</a>
	    	</div>
	    	<div class="goods-introduce-right fr">
	    		<ul class="goods-introduce-r-tit">
	    			<li class="intro-select">商品介绍</li>
	    			<li>参数规格</li>
	    			<li>售后保障</li>
	    			<li>商品评价</li>
	    		</ul>
	    		<div class="goods-intro-content">
	    			<ul class="goods-intro-info">
	    				<li>编码：1004607</li>
	    				<li>名称：53度五星茅台500ml</li>
	    				<li>分类：</li>
	    				<li>品牌：茅台</li>
	    				<li>香型：浓香型</li>
	    				<li>酒精度：50度以上</li>
	    				<li>净含量：500ml</li>
	    			</ul>
	    			<div class="goods-intro-img">
	    				<img class="lazy" data-original="images/goodsDetails/goods-intro-img01.jpg" alt="">
	    				<img class="lazy" data-original="images/goodsDetails/goods-intro-img02.jpg" alt="">
	    				<img class="lazy" data-original="images/goodsDetails/goods-intro-img03.jpg" alt="">
	    				<img class="lazy" data-original="images/goodsDetails/goods-intro-img04.jpg" alt="">
	    				<img class="lazy" data-original="images/goodsDetails/goods-intro-img05.jpg" alt="">
	    				<img class="lazy" data-original="images/goodsDetails/goods-intro-img06.jpg" alt="">
	    			</div>
	    		</div>
	    		<div class="goods-intro-afterSale">
					<div class="goods-intro-aft-tit">售后保障</div>
					<ul class="goods-intro-aft-service">
						<li>
							<span class="aft-ser-icon01"></span>
							<div class="aft-ser-tit">
								厂家服务
							</div>
							<div class="aft-ser-content">
								本产品全国联保，享受三包服务，质保期为：无质保
							</div>
						</li>
						<li>
							<span class="aft-ser-icon02"></span>
							<div class="aft-ser-tit">
								正品行货
							</div>
							<div class="aft-ser-content">
								1919酒类直供官方商城向您保证所售商品均为正品行货，自营商品开具机打发票或电子发票。
							</div>
						</li>
						<li>
							<span class="aft-ser-icon03"></span>
							<div class="aft-ser-tit">
								全国联保
							</div>
							<div class="aft-ser-content">
								凭质保证书及1919酒类直供官方商城发票，可享受全国联保服务，与您亲临商场选购的商品享受相同的质量保证。1919酒类直供官方商城还为您提供具有竞争力的商品价格和运费政策，请您放心购买！
							</div>
						</li>
					</ul>
					<p class="goods-intro-aft-notice">
						注：因厂家会在没有任何提前通知的情况下更改产品包装、产地或者一些附件，本商城不能确保客户收到的货物与商城图片、产地、附件说明完全一致。只能确保为原厂正货！并且保证与当时市场上同样主流新品一致。若本商城没有及时更新，请大家谅解！本站商品信息均来自于合作方，其真实性、准确性和合法性由信息拥有者（合作方）负责。本站不提供任何保证，并不承担任何法律责任！
					</p>
					<div class="goods-intro-aft-img">
						<img class="lazy" data-original="images/goodsDetails/goods-intro-aft-img.jpg" alt="">
					</div>
				</div>
				<div class="goods-intro-evaluate">
					<div class="goods-intro-eva-tit">
						商品评价
					</div>
					<div class="goods-intro-eva-goal-con">
						<div class="goods-intro-eva-goal clearfix">
							<div class="eva-goal-left fl">
								<div class="eva-goal-left-tit">
									综合得分
								</div>
								<div class="eva-goal-left-res">
									5.0
								</div>
							</div>
							<div class="eva-goal-right fl">
								<div>
									商品描述：<span>5.0</span>
								</div>
								<div>
									商品物流：<span>5.0</span>
								</div>
								<div>
									卖家服务：<span>5.0</span>
								</div>
							</div>
						</div>
						<div class="goods-intro-alleva">
							全部评价&nbsp;(&nbsp;<span>7</span>&nbsp;)
						</div>
					</div>
				</div>
				<ul class="goods-intro-evaContent">
					<li>
						<div class="evaCon-userAvatar">
							<img class="lazy" src="images/goodsDetails/useravatar.png" alt="">
							<span>1***3</span>
						</div>
						<div class="evaCon-content">
							<p>箱子的捆绳为什么一根也没有，原厂出货的时候就有，你们为什么要给拿下来</p>
							<span>2017-04-05 08:29:02</span>
						</div>
					</li>
					<li>
						<div class="evaCon-userAvatar">
							<img class="lazy" src="images/goodsDetails/useravatar.png" alt="">
							<span>1***3</span>
						</div>
						<div class="evaCon-content">
							<p>箱子的捆绳为什么一根也没有，原厂出货的时候就有，你们为什么要给拿下来</p>
							<span>2017-04-05 08:29:02</span>
						</div>
					</li>
					<li>
						<div class="evaCon-userAvatar">
							<img class="lazy" src="images/goodsDetails/useravatar.png" alt="">
							<span>1***3</span>
						</div>
						<div class="evaCon-content">
							<p>箱子的捆绳为什么一根也没有，原厂出货的时候就有，你们为什么要给拿下来</p>
							<span>2017-04-05 08:29:02</span>
						</div>
					</li>
					<li>
						<div class="evaCon-userAvatar">
							<img class="lazy" src="images/goodsDetails/useravatar.png" alt="">
							<span>1***3</span>
						</div>
						<div class="evaCon-content">
							<p>箱子的捆绳为什么一根也没有，原厂出货的时候就有，你们为什么要给拿下来</p>
							<span>2017-04-05 08:29:02</span>
						</div>
					</li>
					<li>
						<div class="evaCon-userAvatar">
							<img class="lazy" src="images/goodsDetails/useravatar.png" alt="">
							<span>1***3</span>
						</div>
						<div class="evaCon-content">
							<p>箱子的捆绳为什么一根也没有，原厂出货的时候就有，你们为什么要给拿下来</p>
							<span>2017-04-05 08:29:02</span>
						</div>
					</li>
					<li>
						<div class="evaCon-userAvatar">
							<img class="lazy" src="images/goodsDetails/useravatar.png" alt="">
							<span>1***3</span>
						</div>
						<div class="evaCon-content">
							<p>箱子的捆绳为什么一根也没有，原厂出货的时候就有，你们为什么要给拿下来</p>
							<span>2017-04-05 08:29:02</span>
						</div>
					</li>
					<li>
						<div class="evaCon-userAvatar">
							<img class="lazy" src="images/goodsDetails/useravatar.png" alt="">
							<span>1***3</span>
						</div>
						<div class="evaCon-content">
							<p>箱子的捆绳为什么一根也没有，原厂出货的时候就有，你们为什么要给拿下来</p>
							<span>2017-04-05 08:29:02</span>
						</div>
					</li>
				</ul>
				<div class="page_container clearfix">
		            <div class="firstPage" id="firstPage"><a href="###">首页</a></div>
		            <div class="prePage noAct" id="prePage"><a href="###">&lt;</a></div>
		            <div class="pagenumber_container">
		                <ul class="pagenumber clearfix" id="pagenumber"></ul>
		            </div>
		            <div class="nextPage" id="nextPage"><a href="###">&gt;</a></div>
		            <div class="lastPage" id="lastPage"><a href="###">末页</a></div>
		            <span class="allPage fl" id="allPage"></span>
		            <input class="fl" id="ipt_page" type="text">
		            <div class="sureBtn" id="sureBtn">确定</div>
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
 src="js/shoplist.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
    	var kucun = <?php echo $_smarty_tpl->tpl_vars['goods']->value["store"];?>
;
    <?php echo '</script'; ?>
>
</html><?php }
}
