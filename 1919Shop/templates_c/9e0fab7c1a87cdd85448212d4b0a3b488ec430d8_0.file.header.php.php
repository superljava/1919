<?php
/* Smarty version 3.1.30, created on 2017-06-10 16:14:59
  from "D:\WWW\1919\demo\header.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593baa83731803_99868519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e0fab7c1a87cdd85448212d4b0a3b488ec430d8' => 
    array (
      0 => 'D:\\WWW\\1919\\demo\\header.php',
      1 => 1497082497,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_593baa83731803_99868519 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php

	';?>// $userName = "1";
	// if (isset($userName))
	// {
	// 	$userName = "123";
	// }
	// else
	// {
	// 	$smarty -> assign("empetDisplay", "");
	// 	$smarty -> assign("listDisplay", "display: none");
	// 	$smarty -> display('shoppingCart.html');
	// 	die;
	// }

	// $mysqli = new mysqli("localhost:3306", "root", "root", "1919data");

	// if ($mysqli -> connect_errno)
	// {
	// 	$mysqli -> connect_error;
	// }

	// $mysqli -> set_charset("utf8");
	// $res = $mysqli -> query("select * from goodsbasket where userName=" . $userName) -> fetch_all(MYSQLI_ASSOC);

	// if ($res)
	// {
	// 	$smarty -> assign("empetDisplay", "display: none");
	// 	$smarty -> assign("listDisplay", "");
	// 	$smarty -> assign("goods", $res);
	// }
	// else
	// {
	// 	$smarty -> assign("empetDisplay", "");
	// 	$smarty -> assign("listDisplay", "display: none");
	// }
	$smarty -> assign("empetDisplay", "");
	$smarty -> assign("listDisplay", "display: none");
	
	$smarty -> display('header.php');
<?php echo '?>';
}
}
