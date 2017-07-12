<?php
/* Smarty version 3.1.30, created on 2017-06-19 20:01:00
  from "D:\WWW\1919\1919Shop\templates\beerFestival.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5947bcfc3bb515_98329180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1759744356655f1b263c54ea9fc9290b26e848c' => 
    array (
      0 => 'D:\\WWW\\1919\\1919Shop\\templates\\beerFestival.html',
      1 => 1497873540,
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
function content_5947bcfc3bb515_98329180 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/Reset.css">
        <link rel="stylesheet" href="css/list.css">
        <link rel="stylesheet" href="css/beerFestival.css">
        <?php echo '<script'; ?>
 src="js/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
    </head>
    <body>
    	<?php $_smarty_tpl->_subTemplateRender("file:header_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    	<?php $_smarty_tpl->_subTemplateRender("file:header_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
    <div id="shop">
        <div class="shoptitle wrapper clearfix">
            <a href="javascript:void(0);" class="quanbu fl">
                <span class="allFen fl" style="width:198px">夏季啤酒节 500万啤酒券开抢</span>
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
	<div class="beerFestival">
		<div class="banner">
			<ul>
				<li><a href="banner01_con.php"><img src="images/Beer festival/啤酒节-3_01.jpg" height="249" width="1920"></a></li>
				<li><a href="banner01_con.php"><img src="images/Beer festival/啤酒节-3_02.jpg" height="278" width="1920" alt=""></a></li>
				<li><a href="banner01_con.php"><img src="images/Beer festival/3_03.jpg" height="246" width="1920" alt=""></a></li>
				<li><a href="banner01_con.php"><img src="images/Beer festival/啤酒节-3_04.jpg" height="369" width="1920" alt=""></a></li>
				<li><a href="banner01_con.php"><img src="images/Beer festival/啤酒节-3_05.jpg" height="638" width="1920" alt=""></a></li>
			</ul>
		</div>
		<div class="beerGoods">
			<div class="g_main">
				<ul>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ale']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['type'] == "啤酒" && $_smarty_tpl->tpl_vars['item']->value["Id"] == $_smarty_tpl->tpl_vars['ala']->value[$_smarty_tpl->tpl_vars['key']->value]["goodsId"]) {?>
					<li>
						<div class="box1">
							<a href="goodsDetails.php?goodsId=<?php echo $_smarty_tpl->tpl_vars['item']->value['Id'];?>
">
								<img src="<?php echo $_smarty_tpl->tpl_vars['ala']->value[$_smarty_tpl->tpl_vars['key']->value]['img01'];?>
" height="200" width="200" alt="">
							</a>
						</div>
						<div class="box2">
							<p class="p1">
								<span class="box2_f">¥<span class="box2_f0"><?php echo $_smarty_tpl->tpl_vars['item']->value['nowPrice'];?>
</span></span>
								<span class="box2_f1"><?php echo $_smarty_tpl->tpl_vars['item']->value['oriPrice'];?>
</span>
							</p>
							<p class="p2">
								<a href="goodsDetails.php?goodsId=<?php echo $_smarty_tpl->tpl_vars['item']->value['Id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
							</p>
							<p class="p3"></p>
						</div>
						<div class="box3">
                            <img src="images/goodsList/zq-icon-24time.jpg" alt="">
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
	</div>
	<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </body>
</html><?php }
}
