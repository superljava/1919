<?php
/* Smarty version 3.1.30, created on 2017-06-09 19:43:23
  from "D:\WWW\1919\demo\templates\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593a89db38f020_27512765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a21dcf662847d4434c089364c8cd2ec67dc03690' => 
    array (
      0 => 'D:\\WWW\\1919\\demo\\templates\\index.html',
      1 => 1497008599,
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
function content_593a89db38f020_27512765 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/Reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
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
 src="js/index.js"><?php echo '</script'; ?>
>
</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<!-- banner开始 -->
	<div class="banner-wrap wrapper clearfix">
		<div class="banner-container">
			<ul class="banner-img">
				<li><a href="banner01_con.php" target="_blank"><img src="images/index/banner_01.jpg" alt=""></a></li>
				<li><a href="liquorZone.php" target="_blank"><img src="images/index/banner_02.jpg" alt=""></a></li>
				<li><a href="wineZone.php" target="_blank"><img src="images/index/banner_03.jpg" alt=""></a></li>
				<li><a href="beiZone.php" target="_blank"><img src="images/index/banner_04.jpg" alt=""></a></li>
				<li><a href="banner01_con.php" target="_blank"><img src="images/index/banner_05.jpg" alt=""></a></li>
				<li><a href="beerFestival.php" target="_blank"><img src="images/index/banner_06.jpg" alt=""></a></li>
				<li><a href="goodsList.php" target="_blank"><img src="images/index/banner_07.jpg" alt=""></a></li>
				<li><a href="goodsList.php" target="_blank"><img src="images/index/banner_08.jpg" alt=""></a></li>
				<li><a href="banner_lianpu.php" target="_blank"><img src="images/index/banner_09.jpg" alt=""></a></li>
			</ul>
			<div class="leftBtn banner-btn"></div>
			<div class="rightBtn banner-btn"></div>
			<ul class="banner-dot"></ul>
		</div>
	</div>
	<!-- 酒列表tab -->
	<div class="drink-list-container wrapper">
		<h3 class="drink-list-tit" id="drink-list-tit">
			<a>白酒</a>
			<a>葡萄酒</a>
			<a>洋酒</a>
			<a>啤酒</a>
		</h3>
		<div class="drink-content-tab" id="drink-content-tab">
			<div class="drink-item">
				<a class="drink-item-left fl" href="goodsList.php" target="_blank">
					<img class="lazy" data-original="images/index/drink-tab01-left.jpg" alt="">
				</a>
				<div class="drink-item-right fl">
					<ul class="drink-right-list">
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab01-right01.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab01-right02.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">五粮液</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab01-right03.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">剑南春</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab01-right04.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab01-right05.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab01-right06.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab01-right07.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab01-right08.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab01-right09.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab01-right10.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab01-right11.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab01-right12.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab01-right13.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab01-right14.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab01-right15.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab01-right16.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab01-right17.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php">
                            	<div class="drink-r-l-img"> 
						            <img src="images/index/index-changebtn.png" alt="" class="br-img"> 换一换 
						        </div>
                            </a>
                        </li>
                    </ul>
				</div>
			</div>
			<div class="drink-item">
				<a class="drink-item-left fl" href="goodsList.php" target="_blank">
					<img class="lazy" data-original="images/index/drink-tab02-left.jpg" alt="">
				</a>
				<div class="drink-item-right fl">
					<ul class="drink-right-list">
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab02-right01.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab02-right02.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">五粮液</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab02-right03.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">剑南春</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab02-right04.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab02-right05.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab02-right06.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab02-right07.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab02-right08.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab02-right09.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab02-right10.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab02-right11.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab02-right12.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab02-right13.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab02-right14.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab02-right15.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab02-right16.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab02-right17.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php">
                            	<div class="drink-r-l-img"> 
                                    <img src="images/index/index-changebtn.png" alt="" class="br-img"> 换一换 
                                </div>
                            </a>
                        </li>
                    </ul>
				</div>
			</div>
			<div class="drink-item">
				<a class="drink-item-left fl" href="goodsList.php" target="_blank">
					<img class="lazy" data-original="images/index/drink-tab03-left.jpg" alt="">
				</a>
				<div class="drink-item-right fl">
					<ul class="drink-right-list">
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab01-right01.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab01-right02.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">五粮液</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab01-right03.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">剑南春</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab01-right04.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab01-right05.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab01-right06.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab01-right07.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab01-right08.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab01-right09.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab01-right10.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab01-right11.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab01-right12.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab01-right13.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab01-right14.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab01-right15.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab01-right16.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab01-right17.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php">
                            	<div class="drink-r-l-img"> 
                                    <img src="images/index/index-changebtn.png" alt="" class="br-img"> 换一换 
                                </div>
                            </a>
                        </li>
                    </ul>
				</div>
			</div>
			<div class="drink-item">
				<a class="drink-item-left fl" href="goodsList.php" target="_blank">
					<img class="lazy" data-original="images/index/drink-tab04-left.jpg" alt="">
				</a>
				<div class="drink-item-right fl">
					<ul class="drink-right-list">
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab02-right01.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab02-right02.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">五粮液</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab02-right03.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">剑南春</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab02-right04.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab02-right05.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab02-right06.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab02-right07.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab02-right08.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab02-right09.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab02-right10.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab02-right11.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab02-right12.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab02-right13.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab02-right14.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab02-right15.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab02-right16.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php" target="_blank">
                            	<div class="drink-r-l-img">
                            		<img class="lazy" data-original="images/index/drink-tab02-right17.jpg" alt="">
                            	</div>
                        		<div class="drink-r-bc"></div>
                        		<div class="drink-r-btn">
                        		    <span class="drink-r-btn-tit">茅台</span>
                        		    <span class="drink-r-btn-in">进店看看</span>
                        		</div>
                            </a>
                        </li>
                        <li>
                            <a href="shopshouye.php">
                            	<div class="drink-r-l-img"> 
                                    <img src="images/index/index-changebtn.png" alt="" class="br-img"> 换一换 
                                </div>
                            </a>
                        </li>
                    </ul>
				</div>
			</div>
		</div>
		<div class="drink-bottom-container clearfix">
			<div class="dr-sm-li-box fl">
    			<div class="smbanner-container">
    				<ul class="smbanner-img">
    					<li><a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/drink-smbanner01-img01.jpg" alt=""></a></li>
    					<li><a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/drink-smbanner01-img02.jpg" alt=""></a></li>
    				</ul>
    				<ul class="smbanner-dot"></ul>
    			</div>
    			<div class="smbanner-container">
    				<ul class="smbanner-img">
    					<li><a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/drink-smbanner02-img01.jpg" alt=""></a></li>
    					<li><a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/drink-smbanner02-img02.jpg" alt=""></a></li>
    				</ul>
    				<ul class="smbanner-dot"></ul>
    			</div>
    			<div class="smbanner-container">
    				<ul class="smbanner-img">
    					<li><a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/drink-smbanner03-img01.jpg" alt=""></a></li>
    					<li><a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/drink-smbanner03-img02.jpg" alt=""></a></li>
    				</ul>
    				<ul class="smbanner-dot"></ul>
    			</div>
    		</div>
    		<div class="dr-active-container fr">
    			<a href="login.php" target="_blank">
    				<img class="lazy" data-original="images/index/linjuan-center.jpg" alt="">
    			</a>
    		</div>
		</div>
	</div>
	<!-- 白酒专区 -->
	<div class="wine-wrap wrapper">
		<div class="wine-top-container clearfix">
			<div class="wine-title fl">
				<s class="wine-tit-icon01"></s>
				<h3><a href="goodsList.php" target="_blank">白酒专区</a></h3>
			</div>
			<ul class="wine-city fl">
				<li><a href="goodsList.php" target="_blank">贵州</a></li>
				<li><a href="goodsList.php" target="_blank">四川</a></li>
				<li><a href="goodsList.php" target="_blank">北京</a></li>
				<li><a href="goodsList.php" target="_blank">山西</a></li>
				<li><a href="goodsList.php" target="_blank">河南</a></li>
			</ul>
			<ul class="wine-tit-menu fr">
				<li>促销活动</li>
				<li>商品推荐</li>
			</ul>
		</div>
		<div class="wine-activity-container">
			<div class="wine-act-top">
				<ul class="wine-act-tab">
					<li>促销活动</li>
					<li>商品推荐</li>
				</ul>
				<div class="wine-act-delBtn"></div>
			</div>
			<div class="wine-act-tab-container">
				<div class="wine-act-content01 clearfix">
    				<a class="wine-act-bigImg fl" href="###ban" target="_blank">
    					<img class="lazy" data-original="images/index/wine01-act-left01.jpg" alt="">
    				</a>
    				<ul class="wine-act-smImg fr">
    					<li>
    						<a href="goodsDetails.php" target="_blank"><img class="lazy" data-original="images/index/wine01-act-right01.jpg" alt=""></a>
    					</li>
    					<li>
    						<a href="goodsDetails.php" target="_blank"><img class="lazy" data-original="images/index/wine01-act-right02.jpg" alt=""></a>
    					</li>
    					<li>
    						<a href="goodsDetails.php" target="_blank"><img class="lazy" data-original="images/index/wine01-act-right03.jpg" alt=""></a>
    					</li>
    				</ul>
    			</div>
    			<div class="wine-act-content02 clearfix">
    				<ul class="wine-act-list">
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine01-act-img01.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine01-act-img02.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine01-act-img03.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine01-act-img04.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine01-act-img05.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine01-act-img06.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine01-act-img07.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine01-act-img08.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine01-act-img09.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine01-act-img10.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine01-act-img11.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    				</ul>
    			</div>
			</div>
		</div>
		<div class="wine-body-container clearfix">
    		<div class="wine-body-left fl">
    			<ul class="wine-body-left-img fl">
    				<li style="display:block">
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine01-body-left01.jpg" alt=""></a>
    				</li>
    				<li>
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine01-body-left02.jpg" alt=""></a>
    				</li>
    				<li>
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine01-body-left03.jpg" alt=""></a>
    				</li>
    				<li>
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine01-body-left04.jpg" alt=""></a>
    				</li>
    				<li>
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine01-body-left05.jpg" alt=""></a>
    				</li>
    				<li>
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine01-body-left06.jpg" alt=""></a>
    				</li>
    				<li>
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine01-body-left07.jpg" alt=""></a>
    				</li>
    				<li>
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine01-body-left08.jpg" alt=""></a>
    				</li>
    			</ul>
				<ul class="wine-left-list">
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">茅台</a>
					</li>
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">五粮液</a>
					</li>
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">剑南春</a>
					</li>
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">泸州老窖</a>
					</li>
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">百年尖庄</a>
					</li>
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">郎酒</a>
					</li>
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">蜀之源</a>
					</li>
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">五粮春</a>
					</li>
				</ul>
    		</div>
    		<div class="wine-body-mid fl">
    			<ul class="wine-mid-list">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goods']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value["type"] == "白酒" && $_smarty_tpl->tpl_vars['item']->value["Id"] == $_smarty_tpl->tpl_vars['goodsimg']->value[$_smarty_tpl->tpl_vars['key']->value]["goodsId"]) {?>
                    <li>
                        <a class="wine-mid-img" href="goodsDetails.php?goodsId=<?php echo $_smarty_tpl->tpl_vars['item']->value["Id"];?>
" target="_blank">
                            <img class="lazy" data-original="<?php echo $_smarty_tpl->tpl_vars['goodsimg']->value[$_smarty_tpl->tpl_vars['key']->value]["img01"];?>
" alt="">
                        </a>
                        <a class="wine-mid-text" href="goodsDetails.php?goodsId=<?php echo $_smarty_tpl->tpl_vars['item']->value["Id"];?>
" target="_blank">
                            <i><?php echo $_smarty_tpl->tpl_vars['item']->value["dianpu"];?>
</i><span><?php echo $_smarty_tpl->tpl_vars['item']->value["title"];?>
</span>
                        </a>
                        <p class="wine-mid-price">
                            <span>￥</span><text><?php echo $_smarty_tpl->tpl_vars['item']->value["nowPrice"];?>
</text>
                        </p>
                        <i class="wine-mid-icon"></i>
                    </li>
                    <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    			</ul>
    		</div>
    		<div class="wine-body-right fr">
    			<div class="wine-right-tit titleColor01">白酒 TOP10</div>
    			<ul class="wine-right-list">
    				<li>
    					<div class="topNum tActive fl">1</div>
    					<a class="wine-right-img fl" href="goodsDetails.php" target="_blank">
    						<img class="lazy" data-original="images/index/wine01-body-right01.jpg" alt="">
    					</a>
    					<div class="wine-right-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919剑南春自营店】</i><span>52度剑南春（新包装）500ml</span>
	    					</a>
	    					<p class="wine-right-price">
    							<span>￥</span><text>368.00</text>
    						</p>
    					</div>
    				</li>
    				<li>
    					<div class="topNum tActive fl">2</div>
    					<a class="wine-right-img fl" href="goodsDetails.php" target="_blank">
    						<img class="lazy" data-original="images/index/wine01-body-right02.jpg" alt="">
    					</a>
    					<div class="wine-right-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【交君专营店】</i><span>【交君专营店】泸州老窑国窖1573商务宴请用酒婚庆用酒礼节拜访用酒聚会用酒放心饮用</span>
	    					</a>
	    					<p class="wine-right-price">
    							<span>￥</span><text>368.00</text>
    						</p>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">3</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919西凤自营店】</i><span>45度西凤国臻酒500ml</span>
	    					</a>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">4</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919五粮液自营店】</i><span>52度五粮液（普通版）500ml</span>
	    					</a>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">5</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919西凤自营店】</i><span>52度西凤盛典酒（盛醇）500ml</span>
	    					</a>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">6</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919剑南春自营店】</i><span>52度珍藏级剑南春500ml</span>
	    					</a>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">7</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919自营店】</i><span>52度国窖1573 500ml</span>
	    					</a>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">8</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919自营店】</i><span>52度五粮液（普通版）425ml</span>
	    					</a>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">9</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919茅台自营店】</i><span>53度贵州茅台礼宾酒500ml</span>
	    					</a>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">10</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【牛栏山旗舰店】</i><span>36度百年牛栏山 400ml</span>
	    					</a>
    					</div>
    				</li>
    			</ul>
    		</div>
		</div>
		<div class="wine-bottom-container">
			<ul class="wine-bottom-list clearfix">
				<li>
					<a href="shopshouye.php"><img class="lazy" data-original="images/index/wine01-bottom01.jpg" alt=""></a>
				</li>
				<li>
					<a href="shopshouye.php"><img class="lazy" data-original="images/index/wine01-bottom02.jpg" alt=""></a>
				</li>
				<li>
					<a href="shopshouye.php"><img class="lazy" data-original="images/index/wine01-bottom03.jpg" alt=""></a>
				</li>
				<li>
					<a href="shopshouye.php"><img class="lazy" data-original="images/index/wine01-bottom04.jpg" alt=""></a>
				</li>
			</ul>
		</div>
	</div>
	<!-- 葡萄酒专区 -->
	<div class="wine-wrap wrapper">
		<div class="wine-top-container clearfix">
			<div class="wine-title fl">
				<s class="wine-tit-icon02"></s>
				<h3><a href="goodsList.php" target="_blank">葡萄酒专区</a></h3>
			</div>
			<ul class="wine-city fl">
				<li><a href="goodsList.php" target="_blank">拉菲</a></li>
				<li><a href="goodsList.php" target="_blank">小企鹅</a></li>
				<li><a href="goodsList.php" target="_blank">奔富</a></li>
				<li><a href="goodsList.php" target="_blank">杰卡斯</a></li>
			</ul>
			<ul class="wine-tit-menu fr">
				<li>促销活动</li>
				<li>商品推荐</li>
			</ul>
		</div>
		<div class="wine-activity-container">
			<div class="wine-act-top">
				<ul class="wine-act-tab">
					<li>促销活动</li>
					<li>商品推荐</li>
				</ul>
				<div class="wine-act-delBtn"></div>
			</div>
			<div class="wine-act-tab-container">
				<div class="wine-act-content01 clearfix">
    				<a class="fl" href="###ban" target="_blank">
    					<img class="lazy" data-original="images/index/wine02-act-left01.jpg" alt="">
    				</a>
    				<ul class="fr">
    					<li>
    						<a href="goodsDetails.php" target="_blank"><img class="lazy" data-original="images/index/wine02-act-right01.jpg" alt=""></a>
    					</li>
    					<li>
    						<a href="goodsDetails.php" target="_blank"><img class="lazy" data-original="images/index/wine02-act-right02.jpg" alt=""></a>
    					</li>
    					<li>
    						<a href="goodsDetails.php" target="_blank"><img class="lazy" data-original="images/index/wine02-act-right03.jpg" alt=""></a>
    					</li>
    				</ul>
    			</div>
    			<div class="wine-act-content02 clearfix">
    				<ul class="wine-act-list">
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine02-act-img01.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine02-act-img02.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine02-act-img03.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine02-act-img04.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine02-act-img05.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine02-act-img06.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine02-act-img07.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine02-act-img08.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine02-act-img09.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine02-act-img10.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine02-act-img11.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine02-act-img12.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    				</ul>
    			</div>
			</div>
		</div>
		<div class="wine-body-container clearfix">
    		<div class="wine-body-left fl">
    			<ul class="wine-body-left-img fl">
    				<li style="display:block">
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine02-body-left01.jpg" alt=""></a>
    				</li>
    				<li>
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine02-body-left02.jpg" alt=""></a>
    				</li>
    				<li>
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine02-body-left03.jpg" alt=""></a>
    				</li>
    				<li>
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine02-body-left04.jpg" alt=""></a>
    				</li>
    				<li>
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine02-body-left05.jpg" alt=""></a>
    				</li>
    				<li>
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine02-body-left06.jpg" alt=""></a>
    				</li>
    				<li>
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine02-body-left07.jpg" alt=""></a>
    				</li>
    				<li>
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine02-body-left08.jpg" alt=""></a>
    				</li>
    			</ul>
				<ul class="wine-left-list">
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">拉菲</a>
					</li>
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">奔富</a>
					</li>
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">拉维亭</a>
					</li>
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">守望堡</a>
					</li>
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">安朵</a>
					</li>
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">澳芝醇</a>
					</li>
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">彩狐狸</a>
					</li>
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">手把手</a>
					</li>
				</ul>
    		</div>
    		<div class="wine-body-mid fl">
    			<ul class="wine-mid-list">
    				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goods']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value["type"] == "葡萄酒" && $_smarty_tpl->tpl_vars['item']->value["Id"] == $_smarty_tpl->tpl_vars['goodsimg']->value[$_smarty_tpl->tpl_vars['key']->value]["goodsId"]) {?>
                    <li>
                        <a class="wine-mid-img" href="goodsDetails.php?goodsId=<?php echo $_smarty_tpl->tpl_vars['item']->value["Id"];?>
" target="_blank">
                            <img class="lazy" data-original="<?php echo $_smarty_tpl->tpl_vars['goodsimg']->value[$_smarty_tpl->tpl_vars['key']->value]["img01"];?>
" alt="">
                        </a>
                        <a class="wine-mid-text" href="goodsDetails.php?goodsId=<?php echo $_smarty_tpl->tpl_vars['item']->value["Id"];?>
" target="_blank">
                            <i><?php echo $_smarty_tpl->tpl_vars['item']->value["dianpu"];?>
</i><span><?php echo $_smarty_tpl->tpl_vars['item']->value["title"];?>
</span>
                        </a>
                        <p class="wine-mid-price">
                            <span>￥</span><text><?php echo $_smarty_tpl->tpl_vars['item']->value["nowPrice"];?>
</text>
                        </p>
                        <i class="wine-mid-icon"></i>
                    </li>
                    <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    			</ul>
    		</div>
    		<div class="wine-body-right fr">
    			<div class="wine-right-tit titleColor02">葡萄酒 TOP10</div>
    			<ul class="wine-right-list">
    				<li>
    					<div class="topNum tActive fl">1</div>
    					<a class="wine-right-img fl" href="goodsDetails.php" target="_blank">
    						<img class="lazy" data-original="images/index/wine02-body-right01.jpg" alt="">
    					</a>
    					<div class="wine-right-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919拉菲官方旗舰店】</i><span>法国拉菲传奇波尔多红葡萄酒750ml</span>
	    					</a>
	    					<p class="wine-right-price">
    							<span>￥</span><text>86.00</text>
    						</p>
    					</div>
    				</li>
    				<li>
    					<div class="topNum tActive fl">2</div>
    					<a class="wine-right-img fl" href="goodsDetails.php" target="_blank">
    						<img class="lazy" data-original="images/index/wine02-body-right02.jpg" alt="">
    					</a>
    					<div class="wine-right-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919奔富自营店】</i><span>澳大利亚奔富酒园BIN2西拉（设拉子）红葡萄酒750ml</span>
	    					</a>
	    					<p class="wine-right-price">
    							<span>￥</span><text>188.00</text>
    						</p>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">3</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【源头采葡萄酒专营店】</i><span>2015奔富酒园寇兰山西拉赤霞珠750ml</span>
	    					</a>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">4</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919拉菲官方旗舰店】</i><span>法国拉菲传说波尔多红葡萄酒（红标/蓝标）750ml</span>
	    					</a>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">5</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919奔富自营店】</i><span>澳大利亚奔富洛神山庄设拉子加本力（西拉赤霞珠）干红750ml</span>
	    					</a>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">6</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919奔富自营店】</i><span>澳大利亚奔富洛神山庄加本力苏维翁（赤霞珠）干红葡萄酒750ml</span>
	    					</a>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">7</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919自营店】</i><span>智利智象金标赤霞珠干红葡萄酒750ml</span>
	    					</a>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">8</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919奔富自营店】</i><span>澳大利亚奔富洛神山庄梅洛干红葡萄酒750ml（螺旋盖/木塞随机发货）</span>
	    					</a>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">9</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【爱神湾品牌旗舰店】</i><span>澳大利亚爱神湾霞多丽干白葡萄酒750ml</span>
	    					</a>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">10</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【卢萨克城堡品牌旗舰店】</i><span>法国卢萨克城堡红葡萄酒750ml</span>
	    					</a>
    					</div>
    				</li>
    			</ul>
    		</div>
		</div>
		<div class="wine-bottom-container">
			<ul class="wine-bottom-list clearfix">
				<li>
					<a href="shopshouye.php"><img class="lazy" data-original="images/index/wine02-bottom01.jpg" alt=""></a>
				</li>
				<li>
					<a href="shopshouye.php"><img class="lazy" data-original="images/index/wine02-bottom02.jpg" alt=""></a>
				</li>
				<li>
					<a href="shopshouye.php"><img class="lazy" data-original="images/index/wine02-bottom03.jpg" alt=""></a>
				</li>
				<li>
					<a href="shopshouye.php"><img class="lazy" data-original="images/index/wine02-bottom04.jpg" alt=""></a>
				</li>
			</ul>
		</div>
	</div>
	<!-- 洋酒专区 -->
	<div class="wine-wrap wrapper">
		<div class="wine-top-container clearfix">
			<div class="wine-title fl">
				<s class="wine-tit-icon03"></s>
				<h3><a href="goodsList.php" target="_blank">洋酒专区</a></h3>
			</div>
			<ul class="wine-city fl">
				<li><a href="goodsList.php" target="_blank">尊尼获加</a></li>
				<li><a href="goodsList.php" target="_blank">芝华士</a></li>
			</ul>
			<ul class="wine-tit-menu fr">
				<li>促销活动</li>
				<li>商品推荐</li>
			</ul>
		</div>
		<div class="wine-activity-container">
			<div class="wine-act-top">
				<ul class="wine-act-tab">
					<li>促销活动</li>
					<li>商品推荐</li>
				</ul>
				<div class="wine-act-delBtn"></div>
			</div>
			<div class="wine-act-tab-container">
				<div class="wine-act-content01 clearfix">
    				<a class="fl" href="###ban" target="_blank">
    					<img class="lazy" data-original="images/index/wine01-act-left01.jpg" alt="">
    				</a>
    				<ul class="fr">
    					<li>
    						<a href="goodsDetails.php" target="_blank"><img class="lazy" data-original="images/index/wine01-act-right01.jpg" alt=""></a>
    					</li>
    					<li>
    						<a href="goodsDetails.php" target="_blank"><img class="lazy" data-original="images/index/wine01-act-right02.jpg" alt=""></a>
    					</li>
    					<li>
    						<a href="goodsDetails.php" target="_blank"><img class="lazy" data-original="images/index/wine01-act-right03.jpg" alt=""></a>
    					</li>
    				</ul>
    			</div>
    			<div class="wine-act-content02 clearfix">
    				<ul class="wine-act-list">
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine01-act-img01.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine01-act-img02.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine01-act-img03.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine01-act-img04.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine01-act-img05.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine01-act-img06.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine01-act-img07.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine01-act-img08.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine01-act-img09.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine01-act-img10.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine01-act-img11.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    				</ul>
    			</div>
			</div>
		</div>
		<div class="wine-body-container clearfix">
    		<div class="wine-body-left fl">
    			<ul class="wine-body-left-img fl">
    				<li style="display:block">
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine01-body-left01.jpg" alt=""></a>
    				</li>
    				<li>
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine01-body-left02.jpg" alt=""></a>
    				</li>
    				<li>
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine01-body-left03.jpg" alt=""></a>
    				</li>
    				<li>
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine01-body-left04.jpg" alt=""></a>
    				</li>
    				<li>
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine01-body-left05.jpg" alt=""></a>
    				</li>
    				<li>
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine01-body-left06.jpg" alt=""></a>
    				</li>
    				<li>
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine01-body-left07.jpg" alt=""></a>
    				</li>
    				<li>
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine01-body-left08.jpg" alt=""></a>
    				</li>
    			</ul>
				<ul class="wine-left-list">
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">茅台</a>
					</li>
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">五粮液</a>
					</li>
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">剑南春</a>
					</li>
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">泸州老窖</a>
					</li>
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">百年尖庄</a>
					</li>
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">郎酒</a>
					</li>
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">蜀之源</a>
					</li>
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">五粮春</a>
					</li>
				</ul>
    		</div>
    		<div class="wine-body-mid fl">
    			<ul class="wine-mid-list">
    				<li>
						<a class="wine-mid-img" href="goodsDetails.php" target="_blank">
							<img class="lazy" data-original="images/index/wine01-body-mid01.jpg" alt="">
						</a>
						<a class="wine-mid-text" href="goodsDetails.php" target="_blank">
							<i>【1919茅台自营店】</i><span>53度五星茅台500ml</span>
						</a>
						<p class="wine-mid-price">
							<span>￥</span><text>1299.00</text>
						</p>
						<i class="wine-mid-icon"></i>
    				</li>
    				<li>
    					<a class="wine-mid-img" href="goodsDetails.php" target="_blank">
							<img class="lazy" data-original="images/index/wine01-body-mid02.jpg" alt="">
						</a>
						<a class="wine-mid-text" href="goodsDetails.php" target="_blank">
							<i>【1919剑南春自营店】</i><span>52度剑南春（新包装）500ml</span>
						</a>
						<p class="wine-mid-price">
							<span>￥</span><text>368.00</text>
						</p>
						<i class="wine-mid-icon"></i>
    				</li>
    				<li>
    					<a class="wine-mid-img" href="goodsDetails.php" target="_blank">
							<img class="lazy" data-original="images/index/wine01-body-mid03.jpg" alt="">
						</a>
						<a class="wine-mid-text" href="goodsDetails.php" target="_blank">
							<i>【1919五粮液自营店】</i><span>52度五粮液（普通版）500ml</span>
						</a>
						<p class="wine-mid-price">
							<span>￥</span><text>819.00</text>
						</p>
						<i class="wine-mid-icon"></i>
    				</li>
    				<li>
    					<a class="wine-mid-img" href="goodsDetails.php" target="_blank">
							<img class="lazy" data-original="images/index/wine01-body-mid04.jpg" alt="">
						</a>
						<a class="wine-mid-text" href="goodsDetails.php" target="_blank">
							<i>【泸州老窖1919自营店】</i><span>52度泸州老窖特曲（老字号）500ml</span>
						</a>
						<p class="wine-mid-price">
							<span>￥</span><text>186.00</text>
						</p>
						<i class="wine-mid-icon"></i>
    				</li>
    				<li>
    					<a class="wine-mid-img" href="goodsDetails.php" target="_blank">
							<img class="lazy" data-original="images/index/wine01-body-mid05.jpg" alt="">
						</a>
						<a class="wine-mid-text" href="goodsDetails.php" target="_blank">
							<i>【1919洋河自营店】</i><span>52度洋河蓝色经典（海之蓝）480ml</span>
						</a>
						<p class="wine-mid-price">
							<span>￥</span><text>138.00</text>
						</p>
						<i class="wine-mid-icon"></i>
    				</li>
    				<li>
    					<a class="wine-mid-img" href="goodsDetails.php" target="_blank">
							<img class="lazy" data-original="images/index/wine01-body-mid06.jpg" alt="">
						</a>
						<a class="wine-mid-text" href="goodsDetails.php" target="_blank">
							<i>【1919郎酒自营店】</i><span>53度中华老字号1956老郎酒500ml</span>
						</a>
						<p class="wine-mid-price">
							<span>￥</span><text>98.53</text>
						</p>
						<i class="wine-mid-icon"></i>
    				</li>
    			</ul>
    		</div>
    		<div class="wine-body-right fr">
    			<div class="wine-right-tit titleColor03">洋酒 TOP10</div>
    			<ul class="wine-right-list">
    				<li>
    					<div class="topNum tActive fl">1</div>
    					<a class="wine-right-img fl" href="goodsDetails.php" target="_blank">
    						<img class="lazy" data-original="images/index/wine01-body-right01.jpg" alt="">
    					</a>
    					<div class="wine-right-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919剑南春自营店】</i><span>52度剑南春（新包装）500ml</span>
	    					</a>
	    					<p class="wine-right-price">
    							<span>￥</span><text>368.00</text>
    						</p>
    					</div>
    				</li>
    				<li>
    					<div class="topNum tActive fl">2</div>
    					<a class="wine-right-img fl" href="goodsDetails.php" target="_blank">
    						<img class="lazy" data-original="images/index/wine01-body-right02.jpg" alt="">
    					</a>
    					<div class="wine-right-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【交君专营店】</i><span>【交君专营店】泸州老窑国窖1573商务宴请用酒婚庆用酒礼节拜访用酒聚会用酒放心饮用</span>
	    					</a>
	    					<p class="wine-right-price">
    							<span>￥</span><text>368.00</text>
    						</p>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">3</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919西凤自营店】</i><span>45度西凤国臻酒500ml</span>
	    					</a>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">4</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919五粮液自营店】</i><span>52度五粮液（普通版）500ml</span>
	    					</a>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">5</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919西凤自营店】</i><span>52度西凤盛典酒（盛醇）500ml</span>
	    					</a>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">6</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919剑南春自营店】</i><span>52度珍藏级剑南春500ml</span>
	    					</a>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">7</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919自营店】</i><span>52度国窖1573 500ml</span>
	    					</a>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">8</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919自营店】</i><span>52度五粮液（普通版）425ml</span>
	    					</a>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">9</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919茅台自营店】</i><span>53度贵州茅台礼宾酒500ml</span>
	    					</a>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">10</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【牛栏山旗舰店】</i><span>36度百年牛栏山 400ml</span>
	    					</a>
    					</div>
    				</li>
    			</ul>
    		</div>
		</div>
		<div class="wine-bottom-container">
			<ul class="wine-bottom-list clearfix">
				<li>
					<a href="shopshouye.php"><img class="lazy" data-original="images/index/wine01-bottom01.jpg" alt=""></a>
				</li>
				<li>
					<a href="shopshouye.php"><img class="lazy" data-original="images/index/wine01-bottom02.jpg" alt=""></a>
				</li>
				<li>
					<a href="shopshouye.php"><img class="lazy" data-original="images/index/wine01-bottom03.jpg" alt=""></a>
				</li>
				<li>
					<a href="shopshouye.php"><img class="lazy" data-original="images/index/wine01-bottom04.jpg" alt=""></a>
				</li>
			</ul>
		</div>
	</div>
	<!-- 黄酒专区 -->
	<div class="wine-wrap wrapper">
		<div class="wine-top-container clearfix">
			<div class="wine-title fl">
				<s class="wine-tit-icon04"></s>
				<h3><a href="goodsList.php" target="_blank">黄酒专区</a></h3>
			</div>
			<ul class="wine-city fl">
				<li><a href="goodsList.php" target="_blank">古越龙山</a></li>
				<li><a href="goodsList.php" target="_blank">稽山鉴水</a></li>
				<li><a href="goodsList.php" target="_blank">古南丰</a></li>
			</ul>
			<ul class="wine-tit-menu fr">
				<li>促销活动</li>
				<li>商品推荐</li>
			</ul>
		</div>
		<div class="wine-activity-container">
			<div class="wine-act-top">
				<ul class="wine-act-tab">
					<li>促销活动</li>
					<li>商品推荐</li>
				</ul>
				<div class="wine-act-delBtn"></div>
			</div>
			<div class="wine-act-tab-container">
				<div class="wine-act-content01 clearfix">
    				<a class="fl" href="###ban" target="_blank">
    					<img class="lazy" data-original="images/index/wine02-act-left01.jpg" alt="">
    				</a>
    				<ul class="fr">
    					<li>
    						<a href="goodsDetails.php" target="_blank"><img class="lazy" data-original="images/index/wine02-act-right01.jpg" alt=""></a>
    					</li>
    					<li>
    						<a href="goodsDetails.php" target="_blank"><img class="lazy" data-original="images/index/wine02-act-right02.jpg" alt=""></a>
    					</li>
    					<li>
    						<a href="goodsDetails.php" target="_blank"><img class="lazy" data-original="images/index/wine02-act-right03.jpg" alt=""></a>
    					</li>
    				</ul>
    			</div>
    			<div class="wine-act-content02 clearfix">
    				<ul class="wine-act-list">
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine02-act-img01.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine02-act-img02.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine02-act-img03.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine02-act-img04.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine02-act-img05.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine02-act-img06.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine02-act-img07.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine02-act-img08.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine02-act-img09.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine02-act-img10.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine02-act-img11.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine02-act-img12.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    				</ul>
    			</div>
			</div>
		</div>
		<div class="wine-body-container clearfix">
    		<div class="wine-body-left fl">
    			<ul class="wine-body-left-img fl">
    				<li style="display:block">
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine02-body-left01.jpg" alt=""></a>
    				</li>
    				<li>
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine02-body-left02.jpg" alt=""></a>
    				</li>
    				<li>
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine02-body-left03.jpg" alt=""></a>
    				</li>
    				<li>
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine02-body-left04.jpg" alt=""></a>
    				</li>
    				<li>
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine02-body-left05.jpg" alt=""></a>
    				</li>
    				<li>
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine02-body-left06.jpg" alt=""></a>
    				</li>
    				<li>
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine02-body-left07.jpg" alt=""></a>
    				</li>
    				<li>
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine02-body-left08.jpg" alt=""></a>
    				</li>
    			</ul>
				<ul class="wine-left-list">
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">拉菲</a>
					</li>
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">奔富</a>
					</li>
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">拉维亭</a>
					</li>
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">守望堡</a>
					</li>
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">安朵</a>
					</li>
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">澳芝醇</a>
					</li>
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">彩狐狸</a>
					</li>
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">手把手</a>
					</li>
				</ul>
    		</div>
    		<div class="wine-body-mid fl">
    			<ul class="wine-mid-list">
    				<li>
						<a class="wine-mid-img" href="goodsDetails.php" target="_blank">
							<img class="lazy" data-original="images/index/wine02-body-mid01.jpg" alt="">
						</a>
						<a class="wine-mid-text" href="goodsDetails.php" target="_blank">
							<i>【1919拉菲官方旗舰店】</i><span>法国拉菲传奇波尔多红葡萄酒750ml</span>
						</a>
						<p class="wine-mid-price">
							<span>￥</span><text>86.00</text>
						</p>
						<i class="wine-mid-icon"></i>
    				</li>
    				<li>
    					<a class="wine-mid-img" href="goodsDetails.php" target="_blank">
							<img class="lazy" data-original="images/index/wine02-body-mid02.jpg" alt="">
						</a>
						<a class="wine-mid-text" href="goodsDetails.php" target="_blank">
							<i>【1919拉菲官方旗舰店】</i><span>法国拉菲传说波尔多红葡萄酒（红标/蓝标）750ml</span>
						</a>
						<p class="wine-mid-price">
							<span>￥</span><text>99.00</text>
						</p>
						<i class="wine-mid-icon"></i>
    				</li>
    				<li>
    					<a class="wine-mid-img" href="goodsDetails.php" target="_blank">
							<img class="lazy" data-original="images/index/wine02-body-mid03.jpg" alt="">
						</a>
						<a class="wine-mid-text" href="goodsDetails.php" target="_blank">
							<i>【1919奔富自营店】</i><span>澳大利亚奔富洛神山庄加本力苏维翁（赤霞珠）干红葡萄酒750ml</span>
						</a>
						<p class="wine-mid-price">
							<span>￥</span><text>49.00</text>
						</p>
						<i class="wine-mid-icon"></i>
    				</li>
    				<li>
    					<a class="wine-mid-img" href="goodsDetails.php" target="_blank">
							<img class="lazy" data-original="images/index/wine02-body-mid04.jpg" alt="">
						</a>
						<a class="wine-mid-text" href="goodsDetails.php" target="_blank">
							<i>【1919黄尾袋鼠官方旗舰店】</i><span>澳大利亚黄尾袋鼠梅洛（美乐）红葡萄酒750ml</span>
						</a>
						<p class="wine-mid-price">
							<span>￥</span><text>59.00</text>
						</p>
						<i class="wine-mid-icon"></i>
    				</li>
    				<li>
    					<a class="wine-mid-img" href="goodsDetails.php" target="_blank">
							<img class="lazy" data-original="images/index/wine02-body-mid05.jpg" alt="">
						</a>
						<a class="wine-mid-text" href="goodsDetails.php" target="_blank">
							<i>【1919小企鹅官方旗舰店】</i><span>澳大利亚小企鹅梅洛红葡萄酒750ml</span>
						</a>
						<p class="wine-mid-price">
							<span>￥</span><text>59.00</text>
						</p>
						<i class="wine-mid-icon"></i>
    				</li>
    				<li>
    					<a class="wine-mid-img" href="goodsDetails.php" target="_blank">
							<img class="lazy" data-original="images/index/wine02-body-mid06.jpg" alt="">
						</a>
						<a class="wine-mid-text" href="goodsDetails.php" target="_blank">
							<i>【1919黄尾袋鼠官方旗舰店】</i><span>澳大利亚黄尾袋鼠西拉子（设拉子）红葡萄酒750ml</span>
						</a>
						<p class="wine-mid-price">
							<span>￥</span><text>52.00</text>
						</p>
						<i class="wine-mid-icon"></i>
    				</li>
    			</ul>
    		</div>
    		<div class="wine-body-right fr">
    			<div class="wine-right-tit titleColor04">黄酒 TOP10</div>
    			<ul class="wine-right-list">
    				<li>
    					<div class="topNum tActive fl">1</div>
    					<a class="wine-right-img fl" href="goodsDetails.php" target="_blank">
    						<img class="lazy" data-original="images/index/wine02-body-right01.jpg" alt="">
    					</a>
    					<div class="wine-right-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919拉菲官方旗舰店】</i><span>法国拉菲传奇波尔多红葡萄酒750ml</span>
	    					</a>
	    					<p class="wine-right-price">
    							<span>￥</span><text>86.00</text>
    						</p>
    					</div>
    				</li>
    				<li>
    					<div class="topNum tActive fl">2</div>
    					<a class="wine-right-img fl" href="goodsDetails.php" target="_blank">
    						<img class="lazy" data-original="images/index/wine02-body-right02.jpg" alt="">
    					</a>
    					<div class="wine-right-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919奔富自营店】</i><span>澳大利亚奔富酒园BIN2西拉（设拉子）红葡萄酒750ml</span>
	    					</a>
	    					<p class="wine-right-price">
    							<span>￥</span><text>188.00</text>
    						</p>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">3</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【源头采葡萄酒专营店】</i><span>2015奔富酒园寇兰山西拉赤霞珠750ml</span>
	    					</a>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">4</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919拉菲官方旗舰店】</i><span>法国拉菲传说波尔多红葡萄酒（红标/蓝标）750ml</span>
	    					</a>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">5</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919奔富自营店】</i><span>澳大利亚奔富洛神山庄设拉子加本力（西拉赤霞珠）干红750ml</span>
	    					</a>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">6</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919奔富自营店】</i><span>澳大利亚奔富洛神山庄加本力苏维翁（赤霞珠）干红葡萄酒750ml</span>
	    					</a>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">7</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919自营店】</i><span>智利智象金标赤霞珠干红葡萄酒750ml</span>
	    					</a>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">8</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919奔富自营店】</i><span>澳大利亚奔富洛神山庄梅洛干红葡萄酒750ml（螺旋盖/木塞随机发货）</span>
	    					</a>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">9</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【爱神湾品牌旗舰店】</i><span>澳大利亚爱神湾霞多丽干白葡萄酒750ml</span>
	    					</a>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">10</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【卢萨克城堡品牌旗舰店】</i><span>法国卢萨克城堡红葡萄酒750ml</span>
	    					</a>
    					</div>
    				</li>
    			</ul>
    		</div>
		</div>
		<div class="wine-bottom-container">
			<ul class="wine-bottom-list clearfix">
				<li>
					<a href="shopshouye.php"><img class="lazy" data-original="images/index/wine02-bottom01.jpg" alt=""></a>
				</li>
				<li>
					<a href="shopshouye.php"><img class="lazy" data-original="images/index/wine02-bottom02.jpg" alt=""></a>
				</li>
				<li>
					<a href="shopshouye.php"><img class="lazy" data-original="images/index/wine02-bottom03.jpg" alt=""></a>
				</li>
				<li>
					<a href="shopshouye.php"><img class="lazy" data-original="images/index/wine02-bottom04.jpg" alt=""></a>
				</li>
			</ul>
		</div>
	</div>
	<!-- 啤酒专区 -->
	<div class="wine-wrap wrapper">
		<div class="wine-top-container clearfix">
			<div class="wine-title fl">
				<s class="wine-tit-icon05"></s>
				<h3><a href="goodsList.php" target="_blank">啤酒专区</a></h3>
			</div>
			<ul class="wine-city fl">
				<li><a href="goodsList.php" target="_blank">百威</a></li>
				<li><a href="goodsList.php" target="_blank">科罗娜</a></li>
				<li><a href="goodsList.php" target="_blank">菲德堡</a></li>
			</ul>
			<ul class="wine-tit-menu fr">
				<li>促销活动</li>
				<li>商品推荐</li>
			</ul>
		</div>
		<div class="wine-activity-container">
			<div class="wine-act-top">
				<ul class="wine-act-tab">
					<li>促销活动</li>
					<li>商品推荐</li>
				</ul>
				<div class="wine-act-delBtn"></div>
			</div>
			<div class="wine-act-tab-container">
				<div class="wine-act-content01 clearfix">
    				<a class="fl" href="###ban" target="_blank">
    					<img class="lazy" data-original="images/index/wine01-act-left01.jpg" alt="">
    				</a>
    				<ul class="fr">
    					<li>
    						<a href="goodsDetails.php" target="_blank"><img class="lazy" data-original="images/index/wine01-act-right01.jpg" alt=""></a>
    					</li>
    					<li>
    						<a href="goodsDetails.php" target="_blank"><img class="lazy" data-original="images/index/wine01-act-right02.jpg" alt=""></a>
    					</li>
    					<li>
    						<a href="goodsDetails.php" target="_blank"><img class="lazy" data-original="images/index/wine01-act-right03.jpg" alt=""></a>
    					</li>
    				</ul>
    			</div>
    			<div class="wine-act-content02 clearfix">
    				<ul class="wine-act-list">
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine01-act-img01.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine01-act-img02.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine01-act-img03.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine01-act-img04.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine01-act-img05.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine01-act-img06.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine01-act-img07.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine01-act-img08.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine01-act-img09.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine01-act-img10.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    					<li>
    						<a class="wine-act-img" href="goodsDetails.php" target="_blank">
    							<img class="lazy" data-original="images/index/wine01-act-img11.jpg" alt="">
    						</a>
    						<a class="wine-act-text" href="goodsDetails.php" target="_blank">
    							<i>【1919丰谷官方旗舰店】</i><span>52度丰谷特曲500ml</span>
    						</a>
    						<div class="wine-act-price-con clearfix">
    							<p class="wine-act-price-sale fl">
    								<span>￥</span><text>128.00</text>
    							</p>
    							<p class="wine-act-price-origin fl">
    								<span>￥</span><text>158.00</text>
    							</p>
    						</div>
    					</li>
    				</ul>
    			</div>
			</div>
		</div>
		<div class="wine-body-container clearfix">
    		<div class="wine-body-left fl">
    			<ul class="wine-body-left-img fl">
    				<li style="display:block">
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine01-body-left01.jpg" alt=""></a>
    				</li>
    				<li>
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine01-body-left02.jpg" alt=""></a>
    				</li>
    				<li>
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine01-body-left03.jpg" alt=""></a>
    				</li>
    				<li>
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine01-body-left04.jpg" alt=""></a>
    				</li>
    				<li>
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine01-body-left05.jpg" alt=""></a>
    				</li>
    				<li>
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine01-body-left06.jpg" alt=""></a>
    				</li>
    				<li>
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine01-body-left07.jpg" alt=""></a>
    				</li>
    				<li>
    					<a href="shopshouye.php" target="_blank"><img class="lazy" data-original="images/index/wine01-body-left08.jpg" alt=""></a>
    				</li>
    			</ul>
				<ul class="wine-left-list">
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">茅台</a>
					</li>
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">五粮液</a>
					</li>
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">剑南春</a>
					</li>
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">泸州老窖</a>
					</li>
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">百年尖庄</a>
					</li>
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">郎酒</a>
					</li>
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">蜀之源</a>
					</li>
					<li>
						<div class="wine-left-list-bc"></div>
						<a href="shopshouye.php">五粮春</a>
					</li>
				</ul>
    		</div>
    		<div class="wine-body-mid fl">
    			<ul class="wine-mid-list">
    				<li>
						<a class="wine-mid-img" href="goodsDetails.php" target="_blank">
							<img class="lazy" data-original="images/index/wine01-body-mid01.jpg" alt="">
						</a>
						<a class="wine-mid-text" href="goodsDetails.php" target="_blank">
							<i>【1919茅台自营店】</i><span>53度五星茅台500ml</span>
						</a>
						<p class="wine-mid-price">
							<span>￥</span><text>1299.00</text>
						</p>
						<i class="wine-mid-icon"></i>
    				</li>
    				<li>
    					<a class="wine-mid-img" href="goodsDetails.php" target="_blank">
							<img class="lazy" data-original="images/index/wine01-body-mid02.jpg" alt="">
						</a>
						<a class="wine-mid-text" href="goodsDetails.php" target="_blank">
							<i>【1919剑南春自营店】</i><span>52度剑南春（新包装）500ml</span>
						</a>
						<p class="wine-mid-price">
							<span>￥</span><text>368.00</text>
						</p>
						<i class="wine-mid-icon"></i>
    				</li>
    				<li>
    					<a class="wine-mid-img" href="goodsDetails.php" target="_blank">
							<img class="lazy" data-original="images/index/wine01-body-mid03.jpg" alt="">
						</a>
						<a class="wine-mid-text" href="goodsDetails.php" target="_blank">
							<i>【1919五粮液自营店】</i><span>52度五粮液（普通版）500ml</span>
						</a>
						<p class="wine-mid-price">
							<span>￥</span><text>819.00</text>
						</p>
						<i class="wine-mid-icon"></i>
    				</li>
    				<li>
    					<a class="wine-mid-img" href="goodsDetails.php" target="_blank">
							<img class="lazy" data-original="images/index/wine01-body-mid04.jpg" alt="">
						</a>
						<a class="wine-mid-text" href="goodsDetails.php" target="_blank">
							<i>【泸州老窖1919自营店】</i><span>52度泸州老窖特曲（老字号）500ml</span>
						</a>
						<p class="wine-mid-price">
							<span>￥</span><text>186.00</text>
						</p>
						<i class="wine-mid-icon"></i>
    				</li>
    				<li>
    					<a class="wine-mid-img" href="goodsDetails.php" target="_blank">
							<img class="lazy" data-original="images/index/wine01-body-mid05.jpg" alt="">
						</a>
						<a class="wine-mid-text" href="goodsDetails.php" target="_blank">
							<i>【1919洋河自营店】</i><span>52度洋河蓝色经典（海之蓝）480ml</span>
						</a>
						<p class="wine-mid-price">
							<span>￥</span><text>138.00</text>
						</p>
						<i class="wine-mid-icon"></i>
    				</li>
    				<li>
    					<a class="wine-mid-img" href="goodsDetails.php" target="_blank">
							<img class="lazy" data-original="images/index/wine01-body-mid06.jpg" alt="">
						</a>
						<a class="wine-mid-text" href="goodsDetails.php" target="_blank">
							<i>【1919郎酒自营店】</i><span>53度中华老字号1956老郎酒500ml</span>
						</a>
						<p class="wine-mid-price">
							<span>￥</span><text>98.53</text>
						</p>
						<i class="wine-mid-icon"></i>
    				</li>
    			</ul>
    		</div>
    		<div class="wine-body-right fr">
    			<div class="wine-right-tit titleColor05">啤酒 TOP10</div>
    			<ul class="wine-right-list">
    				<li>
    					<div class="topNum tActive fl">1</div>
    					<a class="wine-right-img fl" href="goodsDetails.php" target="_blank">
    						<img class="lazy" data-original="images/index/wine01-body-right01.jpg" alt="">
    					</a>
    					<div class="wine-right-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919剑南春自营店】</i><span>52度剑南春（新包装）500ml</span>
	    					</a>
	    					<p class="wine-right-price">
    							<span>￥</span><text>368.00</text>
    						</p>
    					</div>
    				</li>
    				<li>
    					<div class="topNum tActive fl">2</div>
    					<a class="wine-right-img fl" href="goodsDetails.php" target="_blank">
    						<img class="lazy" data-original="images/index/wine01-body-right02.jpg" alt="">
    					</a>
    					<div class="wine-right-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【交君专营店】</i><span>【交君专营店】泸州老窑国窖1573商务宴请用酒婚庆用酒礼节拜访用酒聚会用酒放心饮用</span>
	    					</a>
	    					<p class="wine-right-price">
    							<span>￥</span><text>368.00</text>
    						</p>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">3</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919西凤自营店】</i><span>45度西凤国臻酒500ml</span>
	    					</a>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">4</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919五粮液自营店】</i><span>52度五粮液（普通版）500ml</span>
	    					</a>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">5</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919西凤自营店】</i><span>52度西凤盛典酒（盛醇）500ml</span>
	    					</a>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">6</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919剑南春自营店】</i><span>52度珍藏级剑南春500ml</span>
	    					</a>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">7</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919自营店】</i><span>52度国窖1573 500ml</span>
	    					</a>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">8</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919自营店】</i><span>52度五粮液（普通版）425ml</span>
	    					</a>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">9</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【1919茅台自营店】</i><span>53度贵州茅台礼宾酒500ml</span>
	    					</a>
    					</div>
    				</li>
    				<li>
    					<div class="topNum fl">10</div>
    					<div class="wine-right-txt-con fl">
    						<a class="wine-right-text" href="goodsDetails.php" target="_blank">
	    						<i>【牛栏山旗舰店】</i><span>36度百年牛栏山 400ml</span>
	    					</a>
    					</div>
    				</li>
    			</ul>
    		</div>
		</div>
		<div class="wine-bottom-container">
			<ul class="wine-bottom-list clearfix">
				<li>
					<a href="shopshouye.php"><img class="lazy" data-original="images/index/wine01-bottom01.jpg" alt=""></a>
				</li>
				<li>
					<a href="shopshouye.php"><img class="lazy" data-original="images/index/wine01-bottom02.jpg" alt=""></a>
				</li>
				<li>
					<a href="shopshouye.php"><img class="lazy" data-original="images/index/wine01-bottom03.jpg" alt=""></a>
				</li>
				<li>
					<a href="shopshouye.php"><img class="lazy" data-original="images/index/wine01-bottom04.jpg" alt=""></a>
				</li>
			</ul>
		</div>
	</div>
    <ul class="nav-floors-container clearfix" id="nav-floors-container">
        <li>
            <i class="floor-icon01"></i>
            <font class="floor-font01">1F</font>
            <a class="floor-font01" href="javascript:;">白酒专区</a>
        </li>
        <li>
            <i class="floor-icon02"></i>
            <font class="floor-font02">2F</font>
            <a class="floor-font02" href="javascript:;">葡萄酒专区</a>
        </li>
        <li>
            <i class="floor-icon03"></i>
            <font class="floor-font03">3F</font>
            <a class="floor-font03" href="javascript:;">洋酒专区</a>
        </li>
        <li>
            <i class="floor-icon04"></i>
            <font class="floor-font04">4F</font>
            <a class="floor-font04" href="javascript:;">黄酒专区</a>
        </li>
        <li>
            <i class="floor-icon05"></i>
            <font class="floor-font05">5F</font>
            <a class="floor-font05" href="javascript:;">啤酒专区</a>
        </li>
        <li>
            <span class="floor-icon06"></span>
        </li>
    </ul>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
<?php echo '<script'; ?>
 src="js/common.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/shoplist.js"><?php echo '</script'; ?>
>
</html><?php }
}
