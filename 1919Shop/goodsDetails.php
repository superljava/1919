<?php

	require '../libs/Smarty.class.php';

	$smarty = new Smarty;

	require 'header_top.php';
	require 'header_bottom.php';

	$goodsId = $_GET["goodsId"];

	$mysqli = new mysqli("localhost:3306", "root", "root", "1919data");

	if ($mysqli -> connect_errno)
	{
		$mysqli -> connect_error;
	}

	$mysqli -> set_charset("utf8");
	$resContent = $mysqli -> query("select * from goods where Id=" . $goodsId) -> fetch_array(MYSQLI_ASSOC);
	$resImg = $mysqli -> query("select * from goodsimg where goodsId=" . $goodsId) -> fetch_row();

	$arrImg = array();
	for ($i = 0; $i < count($resImg); $i++)
	{
		if (strlen($resImg[$i]) > 3)
		{
			array_push($arrImg, $resImg[$i]);
		}
	}
	$smarty -> assign("goods", $resContent);
	$smarty -> assign("goodsimg", $arrImg);

	$smarty->display('goodsDetails.html');
?>
