<?php

	require '../libs/Smarty.class.php';

	$smarty = new Smarty;

	require 'header_top.php';
	require 'header_bottom.php';
 	
	$mysqli = new mysqli("localhost:3306","root","root","1919data");

	if ($mysqli -> connect_errno)
	{
		$mysqli -> connect_error;
	}
	$mysqli -> set_charset("utf8");
	$resContent = $mysqli -> query("select * from goods") -> fetch_all(MYSQLI_ASSOC);
	$resImg = $mysqli -> query("select * from goodsimg") -> fetch_all(MYSQLI_ASSOC);


	$wine01 = array();
	$wine01Img = array();
	$wine02 = array();
	$wine02Img = array();

	for ($i=0; $i <16; $i++)
	{
		array_push($wine01, $resContent[$i]);
		array_push($wine01Img, $resImg{$i});
	}

	for ($i=0; $i <4; $i++)
	{	
		$ran = rand(0, count($resContent)-1);
		// $ran1 = rand(0, count($resImg)-1);
		array_push($wine02, $resContent[$ran]);
		array_push($wine02Img, $resImg[$ran]);
		array_splice($resContent, $ran, 1);
		array_splice($resImg, $ran, 1);
	}

	$smarty -> assign("wine01", $wine01);
	$smarty -> assign("wine01Img", $wine01Img);
	$smarty -> assign("wine02",$wine02);
	$smarty -> assign("wine02Img",$wine02Img);

	$smarty->display('goodsList.html');
?>