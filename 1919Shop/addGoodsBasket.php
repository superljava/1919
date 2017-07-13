<?php

	header("Content-Type:text/html;charset=UTF-8");

	session_start();

	if (isset($_SESSION['userName']))
	{
		$userName = $_SESSION['userName'];
		$goodsId = $_GET["goodsId"];
		$number = $_GET["number"];
	}
	else
	{
		die("window.location='login.php'");
	}

	$mysqli = new mysqli("localhost:3306", "root", "root", "1919data");

	if ($mysqli -> connect_errno)
	{
		$mysqli -> connect_error;
	}

	$mysqli -> set_charset("utf8");
	$res = $mysqli -> query("select * from goodsbasket where userName = '" . $userName . "'and goodsId = " . $goodsId) -> fetch_assoc();
	$resInfo = $mysqli -> query("select * from goods where Id = " . $goodsId) -> fetch_assoc();
	$resImg = $mysqli -> query("select * from goodsimg where goodsId = " . $goodsId) -> fetch_assoc();

	if ($res)
	{
		$allNumber = intval($res["number"]) + intval($number);
		$mysqli -> query("update goodsbasket set number = " . $allNumber . " where userName = '" . $userName . "' and goodsId = " . $goodsId);
		$res = $mysqli -> query("select * from goodsbasket where userName = '" . $userName . "'") -> fetch_all(MYSQLI_ASSOC);
		echo json_encode($res);
	}
	else
	{
		$mysqli -> query("insert into goodsbasket (userName, goodsId, title, goodsImg, price, number, store, goodsSelect) values ('" . $userName . "','" . $goodsId . "','" . $resInfo["title"] . "','" . $resImg["img01"] . "','" . $resInfo["nowPrice"] . "'," . $number . "," .  $resInfo["store"] .", 1)");
		$res = $mysqli -> query("select * from goodsbasket where userName = '" . $userName . "'") -> fetch_all(MYSQLI_ASSOC);
		echo json_encode($res);
	}
?>