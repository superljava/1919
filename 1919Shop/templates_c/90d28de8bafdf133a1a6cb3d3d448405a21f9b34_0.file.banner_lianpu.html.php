<?php
/* Smarty version 3.1.30, created on 2017-06-14 18:01:04
  from "D:\WWW\1919\1919Shop\templates\banner_lianpu.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59410960bff027_32668888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90d28de8bafdf133a1a6cb3d3d448405a21f9b34' => 
    array (
      0 => 'D:\\WWW\\1919\\1919Shop\\templates\\banner_lianpu.html',
      1 => 1497434460,
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
function content_59410960bff027_32668888 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>1919酒类直供-白酒、红酒、葡萄酒、洋酒、啤酒酒类网上商城</title>
	<link rel="stylesheet" href="css/Reset.css">
	<link rel="stylesheet" href="css/banner_lianpu.css">
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

	<ul class="a_con_pic_lianpu">
		<li><a href="###"><img src="images/banner_lianpu_01.jpg" alt=""></a></li>
		<li><a href="###"><img src="images/banner_lianpu_02.jpg" alt=""></a></li>
		<li><a href="###"><img src="images/banner_lianpu_03.jpg" alt=""></a></li>
	</ul>
	<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
<?php echo '<script'; ?>
 src="js/banner_lianpu.js"><?php echo '</script'; ?>
>
</html><?php }
}
