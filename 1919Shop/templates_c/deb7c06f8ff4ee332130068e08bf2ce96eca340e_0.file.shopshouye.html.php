<?php
/* Smarty version 3.1.30, created on 2017-07-21 16:18:56
  from "D:\WWW\1919\1919Shop\templates\shopshouye.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5971b8f08a08a8_72743492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'deb7c06f8ff4ee332130068e08bf2ce96eca340e' => 
    array (
      0 => 'D:\\WWW\\1919\\1919Shop\\templates\\shopshouye.html',
      1 => 1500625133,
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
function content_5971b8f08a08a8_72743492 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>店铺首页</title>
	<link rel="stylesheet" href="css/Reset.min.css">
	<link rel="stylesheet" href="css/shopshouye.min.css">
	<?php echo '<script'; ?>
 src="js/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery_lazyload.min.js"><?php echo '</script'; ?>
>
</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:header_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:header_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
			<ul id="list">
			</ul>
		</div>

		<div class="dianpu_shangpin fl">
			<ul class="dianpu_shangpin_nav">
				<li>综合排序</li>
				<li>价格</li>
			</ul>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goods']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
			<?php if ($_smarty_tpl->tpl_vars['item']->value["type"] == "啤酒" && $_smarty_tpl->tpl_vars['key']->value < 52 && $_smarty_tpl->tpl_vars['item']->value["Id"] == $_smarty_tpl->tpl_vars['goodsimg']->value[$_smarty_tpl->tpl_vars['key']->value]["goodsId"]) {?>
				<div class="dianpu_shangpin_news">
					<a href="goodsDetails.php?goodsId=<?php echo $_smarty_tpl->tpl_vars['item']->value["Id"];?>
">
						<img src="<?php echo $_smarty_tpl->tpl_vars['goodsimg']->value[$_smarty_tpl->tpl_vars['key']->value]["img01"];?>
"  alt="">
						<p class="dianpu_shangpin_pri"><span class="list_now_pri"><span class="rmb">￥</span><i><?php echo $_smarty_tpl->tpl_vars['item']->value["nowPrice"];?>
</i></span><span class="list_yuan_pri"><span class="rmb">￥</span><i>$<?php echo $_smarty_tpl->tpl_vars['item']->value["oriPrice"];?>
</i></span></p>
						<a href="goodsDetails.php?goodsId=<?php echo $_smarty_tpl->tpl_vars['item']->value["Id"];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value["title"];?>
</a>
					</a>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['item']->value["type"] == "白酒" && $_smarty_tpl->tpl_vars['key']->value < 1 && $_smarty_tpl->tpl_vars['item']->value["Id"] == $_smarty_tpl->tpl_vars['goodsimg']->value[$_smarty_tpl->tpl_vars['key']->value]["goodsId"]) {?>
				<div class="dianpu_shangpin_news">
					<a href="goodsDetails.php?goodsId=<?php echo $_smarty_tpl->tpl_vars['item']->value["Id"];?>
">
						<img src="<?php echo $_smarty_tpl->tpl_vars['goodsimg']->value[$_smarty_tpl->tpl_vars['key']->value]["img01"];?>
"  alt="">
						<p class="dianpu_shangpin_pri"><span class="list_now_pri"><span class="rmb">￥</span><i><?php echo $_smarty_tpl->tpl_vars['item']->value["nowPrice"];?>
</i></span><span class="list_yuan_pri"><span class="rmb">￥</span><i>$<?php echo $_smarty_tpl->tpl_vars['item']->value["oriPrice"];?>
</i></span></p>
						<a href="goodsDetails.php?goodsId=<?php echo $_smarty_tpl->tpl_vars['item']->value["Id"];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value["title"];?>
</a>
					</a>
				</div>
			<?php }?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
	<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
<?php echo '<script'; ?>
 src="js/shopshouye.min.js"><?php echo '</script'; ?>
>
</html><?php }
}
