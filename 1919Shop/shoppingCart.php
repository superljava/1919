<?php

	require '../libs/Smarty.class.php';

	$smarty = new Smarty;

	require 'header_top.php';

	if (isset($_SESSION['userName']))
	{
		$userName = $_SESSION['userName'];
	}
	else
	{
		$smarty -> assign("empetDisplay", "");
		$smarty -> assign("listDisplay", "display: none");
		$smarty -> display('shoppingCart.html');
		die;
	}

	$mysqli = new mysqli("localhost:3306", "root", "root", "1919data");

	if ($mysqli -> connect_errno)
	{
		$mysqli -> connect_error;
	}

	$mysqli -> set_charset("utf8");
	$res = $mysqli -> query("select * from goodsbasket where userName=" . $userName) -> fetch_all(MYSQLI_ASSOC);

	if ($res)
	{
		$smarty -> assign("empetDisplay", "display: none");
		$smarty -> assign("listDisplay", "");
		$smarty -> assign("goods", $res);
	}
	else
	{
		$smarty -> assign("empetDisplay", "");
		$smarty -> assign("listDisplay", "display: none");
		$smarty -> assign("goods", false);
	}
	

	$smarty -> display('shoppingCart.html');
?>