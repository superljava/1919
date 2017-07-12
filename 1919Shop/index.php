<?php

	require '../libs/Smarty.class.php';

	$smarty = new Smarty;

	require 'header_top.php';
	require 'header_bottom.php';

	$mysqli = new mysqli("localhost:3306", "root", "root", "1919data");

	if ($mysqli -> connect_errno)
	{
		$mysqli -> connect_error;
	}

	$mysqli -> set_charset("utf8");
	$resContent = $mysqli -> query("select * from goods") -> fetch_all(MYSQLI_ASSOC);
	$resImg = $mysqli -> query("select * from goodsimg") -> fetch_all(MYSQLI_ASSOC);

	$wine01 = array();
	$wine01Img = array();
	$wineRmd01 = array();
	$wineRmd01Img = array();

	$wine02 = array();
	$wine02Img = array();
	$wineRmd02 = array();
	$wineRmd02Img = array();

	$wine03 = array();
	$wine03Img = array();
	$wineRmd03 = array();
	$wineRmd03Img = array();

	for ($i=0; $i < count($resContent); $i++)
	{
		if ($resContent[$i]["type"] == "白酒")
		{
			array_push($wine01, $resContent[$i]);
			array_push($wine01Img, $resImg[$i]);
		}
		else if ($resContent[$i]["type"] == "葡萄酒")
		{
			array_push($wine02, $resContent[$i]);
			array_push($wine02Img, $resImg[$i]);
		}
		else if ($resContent[$i]["type"] == "啤酒")
		{
			array_push($wine03, $resContent[$i]);
			array_push($wine03Img, $resImg[$i]);
		}
	}

	$num = count($resContent);

	for ($i=0; $i < $num; $i++)
	{
		$ran = rand(0, count($resContent) - 1);
		if ($resContent[$ran]["type"] == "白酒")
		{
			array_push($wineRmd01, $resContent[$ran]);
			array_push($wineRmd01Img, $resImg[$ran]);
		}
		else if ($resContent[$ran]["type"] == "葡萄酒")
		{
			array_push($wineRmd02, $resContent[$ran]);
			array_push($wineRmd02Img, $resImg[$ran]);
		}
		else if ($resContent[$ran]["type"] == "啤酒")
		{
			array_push($wineRmd03, $resContent[$ran]);
			array_push($wineRmd03Img, $resImg[$ran]);
		}
		array_splice($resContent, $ran, 1);
		array_splice($resImg, $ran, 1);
	}

	$smarty -> assign("wine01", $wine01);
	$smarty -> assign("wine01Img", $wine01Img);
	$smarty -> assign("wineRmd01", $wineRmd01);
	$smarty -> assign("wineRmd01Img", $wineRmd01Img);

	$smarty -> assign("wine02", $wine02);
	$smarty -> assign("wine02Img", $wine02Img);
	$smarty -> assign("wineRmd02", $wineRmd02);
	$smarty -> assign("wineRmd02Img", $wineRmd02Img);

	$smarty -> assign("wine03", $wine03);
	$smarty -> assign("wine03Img", $wine03Img);
	$smarty -> assign("wineRmd03", $wineRmd03);
	$smarty -> assign("wineRmd03Img", $wineRmd03Img);

	$smarty -> display('index.html');
?>