<?php
/* Smarty version 3.1.30, created on 2017-06-19 19:27:19
  from "D:\WWW\1919\1919Shop\templates\goodsList.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5947b517f1b626_49731402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f095ee5fb8390f9fb29ea36932ea0ddcc29b6e6' => 
    array (
      0 => 'D:\\WWW\\1919\\1919Shop\\templates\\goodsList.html',
      1 => 1497871636,
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
function content_5947b517f1b626_49731402 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/Reset.css">
        <link rel="stylesheet" href="css/goodsList.css">
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

<!-- 商品列表 -->
    	<div class="goodsList">
    		<div class="S_min">
    			<div class="goodsHeader">
    				<span class="hotSell fl"><a href="goodsDetails.php">热卖推荐</a></span>
    				<ul class="hotPic fl">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wine02']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
    					<li>
    						<div class="left fl">
    							<a href="goodsDetails.php?goodsId=<?php echo $_smarty_tpl->tpl_vars['item']->value["Id"];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['wine02Img']->value[$_smarty_tpl->tpl_vars['key']->value]["img01"];?>
" height="110" width="110" alt=""></a>
    						</div>
    						<div class="right fr">
    							<p class="S1"><a href="goodsDetails.php?goodsId=<?php echo $_smarty_tpl->tpl_vars['item']->value["Id"];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value["title"];?>
</a></p>
    							<p class="S2"><a href="goodsDetails.php?goodsId=<?php echo $_smarty_tpl->tpl_vars['item']->value["Id"];?>
">1919自营店</a></p>
    							<p class="S3">
	    							<span class="S3_font">
	    								<span class="S3_font1">￥</span><?php echo $_smarty_tpl->tpl_vars['item']->value["nowPrice"];?>

	    							</span>
	    							<span class="S3_font2">
	    								<span>￥</span><?php echo $_smarty_tpl->tpl_vars['item']->value["oriPrice"];?>

	    							</span>
    							</p>
    						</div>
    					</li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    				</ul>
    			</div>
 <!-- 商品列表 -->
    			<div class="sort">
    				<span class="sort1">酒类</span>
    				<span><img src="images/goodsList/img_rightdrt.png" alt=""></span>
    				<span>白酒</span>
    			</div>
    			<ul class="List2">
    				<li>
    					<span class="price_f fl">价格</span>
    					<div class="price">
    						<a href="###">0-299</a>
    						<a href="###">300-599</a>
    						<a href="###">600-1099</a>
    						<a href="###">1100-1699</a>
    						<a href="###">1700以上</a>
    					</div>
    				</li>
    				<li class="price1">
    					<span class="price_f fl">品牌</span>
    					<div class="price price2">
    						<a href="###">剑南春</a>
    						<a href="###">西凤</a>
    						<a href="###">泸州老窖</a>
    						<a href="###">五粮液</a>
    						<a href="###">茅台</a>
    						<a href="###">牛栏山</a>
    						<a href="###">丰谷</a>
    						<a href="###">国之娇子</a>
    						<a href="###">古井贡酒</a>
    						<a href="###">水井坊</a>
    						<a href="###">六和液</a>
    						<a href="###">汾酒</a>
    						<a href="###">泸州窖酒</a>
    						<a href="###">一品景芝</a>
    						<a href="###">白金</a>
    						<a href="###">金水滴</a>
    						<a href="###">皇沟御酒</a>
    						<a href="###">五粮印象</a>
    						<a href="###">交君</a>
    						<a href="###">老榆林</a>
    						<a href="###">劲酒</a>
    						<a href="###">百年天壤</a>
    						<a href="###">酒宗</a>
    						<a href="###">拇指郎</a>
    						<a href="###">八百寿</a>
    						<a href="###"></a>
    						<a href="###">丛台</a>
    						<a href="###">贞元增</a>
    						<a href="###">白金酒</a>
    						<a href="###">三溪</a>
    						<a href="###">梅兰春</a>
    						<a href="###">魏武帝</a>
    						<a href="###">御潭</a>
    						<a href="###">其他</a>
    						<a href="###">老机场</a>
    						<a href="###">传国奇</a>
    						<a href="###">中孚传奇</a>
    						<a href="###">塔城百</a>
    						<a href="###">雄蕊菜鸟</a>
    						<a href="###">品九</a>
    						<a href="###">网衡水老</a>
    						<a href="###">白金</a>
    						<a href="###">粹李</a>
    						<a href="###">夜郎古剑</a>
    						<a href="###">白金</a>
    						<a href="###">传奇贵酒</a>
    						<a href="###">网衡水老</a>
    						<a href="###">白金</a>
    						<a href="###">传奇贵酒</a>
    						<a href="###">传奇贵酒</a>
    						<a href="###">传奇贵酒</a>
    						<a href="###">贵州迎宾酒</a>
    						<a href="###">白金</a>
    						<a href="###">赖汉玺天</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">金门高粱</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">五粮液</a>
    						<a href="###">唐有缘</a>
    						<a href="###">白金</a>
    						<a href="###">传奇贵酒</a>
    						<a href="###">一道泓习</a>
    						<a href="###">雄景阳春</a>
    						<a href="###">出品习酒</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">涂仙泸州</a>
    						<a href="###">传奇贵酒</a>
    						<a href="###">贵州迎宾酒</a>
    						<a href="###">白金</a>
    						<a href="###">赖汉玺天</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">金门高粱</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">五粮液</a>
    						<a href="###">唐有缘</a>
    						<a href="###">白金</a>
    						<a href="###">传奇贵酒</a>
    						<a href="###">一道泓习</a>
    						<a href="###">雄景阳春</a>
    						<a href="###">出品习酒</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">涂仙泸州</a>
    						<a href="###">白金</a>
    						<a href="###">赖汉玺天</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">金门高粱</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">五粮液</a>
    						<a href="###">唐有缘</a>
    						<a href="###">白金</a>
    						<a href="###">传奇贵酒</a>
    						<a href="###">一道泓习</a>
    						<a href="###">雄景阳春</a>
    						<a href="###">出品习酒</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">涂仙泸州</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">金门高粱</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">五粮液</a>
    						<a href="###">唐有缘</a>
    						<a href="###">白金</a>
    						<a href="###">传奇贵酒</a>
    						<a href="###">一道泓习</a>
    						<a href="###">雄景阳春</a>
    						<a href="###">出品习酒</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">涂仙泸州</a>
    						<a href="###">白金</a>
    						<a href="###">赖汉玺天</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="">金门高粱</a>
    					</div>
    					<a href="###" class="more">
    						<label for="">更多</label>
    						<span><img src="images/shoppingCart/icon-seldown.png" height="13" width="10" alt=""></span>
    					</a>
    					
    				</li>
    				<li>
    					<span class="price_f fl">酒精度</span>
    					<div class="price">
    						<a href="###">50度以上</a>
    						<a href="###">40-49度</a>
    						<a href="###">35-39度</a>
    						<a href="###">35度以下</a>
    					</div>
    				</li>
    				<li>
    					<span class="price_f fl">香型</span>
    					<div class="price">
    						<a href="###">浓香型</a>
    						<a href="###">凤香型</a>
    						<a href="###">酱香型</a>
    						<a href="###">清香型</a>
    						<a href="###">绵柔型</a>
    						<a href="###">芝麻香型</a>
    						<a href="###">其它香型</a>
    						<a href="###">兼香型</a>
    						<a href="###">董香型</a>
    						<a href="###">馥郁型</a>
    						<a href="###">药香型</a>
    						<a href="###">陶香型</a>
    					</div>
    				</li>
    				<li>
    					<span class="price_f fl">产地/产区</span>
    					<div class="price">
    						<a href="###">0-299</a>
    						<a href="###">300-599</a>
    						<a href="###">600-1099</a>
    						<a href="###">1100-1699</a>
    						<a href="###">1700以上</a>
    					</div>
    				</li>
    			</ul>
<!-- 图片 -->
    			<div class="gooodsPic">
    				<div class="picLeft fl">
    					<div class="picLeft1"><a href="goodsDetails.php?goodsId=1"><img src="images/goodsList/nows.png.jpg" alt=""></a></div>
    					<div class="picLeft1"><a href="goodsDetails.php?goodsId=1"><img src="images/goodsList/华茅-列表页左中.jpg" alt=""></a></div>
    					<div class="picLeft2">
    						<p class="S0">猜你喜欢</p>
    						<ul class="picLeft_list">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wine02']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                                <li style="height:110px;">
                                    <div class="left fl">
                                        <a href="goodsDetails.php?goodsId=<?php echo $_smarty_tpl->tpl_vars['item']->value["Id"];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['wine02Img']->value[$_smarty_tpl->tpl_vars['key']->value]["img01"];?>
" height="100" width="110" alt=""></a>
                                    </div>
                                    <div class="right fr">
                                        <p class="S1"><a href="goodsDetails.php?goodsId=<?php echo $_smarty_tpl->tpl_vars['item']->value["Id"];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value["title"];?>
</a></p>
                                        <p class="S2"><a href="goodsDetails.php?goodsId<?php echo $_smarty_tpl->tpl_vars['item']->value["Id"];?>
">1919自营店</a></p>
                                        <p class="S3">
                                            <span class="S3_font">
                                                <span class="S3_font1">￥</span><?php echo $_smarty_tpl->tpl_vars['item']->value["nowPrice"];?>

                                            </span>
                                            <span class="S3_font2">
                                                <span>￥</span><?php echo $_smarty_tpl->tpl_vars['item']->value["oriPrice"];?>

                                            </span>
                                        </p>
                                    </div>
                                </li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    						</ul>
    					</div>
    					<div class="picLeft1"><a href="goodsDetails.php?goodsId=1"><img src="images/goodsList/五粮特曲-列表页左下.jpg" alt="" style="margin-top:10px;"></a>
    					</div>
    				</div>
    				<div class="picRight fr">
    					<ul class="picRight_price">
    						<li>综合排序</li>
    						<li class="picRight_price2">价格</li>
    					</ul>
    					<p><a href="goodsList.php"><img src="images/goodsList/img_checkbox.png" alt=""></a>自营商品</p>
    					<div class="Sbox">
    						<ul>
                                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wine01']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                                    <li style="height:330px;">
                                        <div class="box1">
                                            <a href="goodsDetails.php?goodsId=<?php echo $_smarty_tpl->tpl_vars['item']->value["Id"];?>
">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['wine01Img']->value[$_smarty_tpl->tpl_vars['key']->value]["img01"];?>
" height="200" width="200" alt="">
                                            </a>
                                        </div>
                                        <div class="box2">
                                            <p>
                                                <span class="box2_f">¥<span class="box2_f0"><?php echo $_smarty_tpl->tpl_vars['item']->value["nowPrice"];?>
</span></span>
                                                <span class="box2_f1"> ¥<?php echo $_smarty_tpl->tpl_vars['item']->value["oriPrice"];?>
</span>
                                            </p>
                                            <p>
                                                <a href="goodsDetails.php?goodsId=<?php echo $_smarty_tpl->tpl_vars['item']->value["Id"];?>
">【店铺商品】<?php echo $_smarty_tpl->tpl_vars['item']->value["title"];?>
</a>
                                            </p>
                                            <p></p>
                                        </div>
                                        <div class="box3">
                                            <img src="images/goodsList/zq-icon-24time.jpg" alt="">
                                        </div>
                                    </li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    						</ul>
    					</div>
    				</div>
    			</div>
  <!-- 分页 -->
  				<div class="paging">
  					<div class="pro fl">上一页</div>
  					
  					<div class="view fl">
                        <div class="first2 fl">1</div>
  						<div class="first fl">......</div>
  						<ul class="pageList">
  							
  							
  						</ul>
  						<div class="last fl">......</div>
  						<div class="last2 fl">49</div>
  					</div>
  					
  					<div class="next fl">下一页</div>
  				</div>
    		</div>
    	</div>
<!-- 商品列表 -->
    <?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </body>
    <?php echo '<script'; ?>
 src="js/goodsList.js"><?php echo '</script'; ?>
>
</html><?php }
}
