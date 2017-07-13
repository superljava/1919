<?php

	header("Content-Type:text/html;charset=UTF-8");

	session_start();

	$userName = $_SESSION['userName'];
	$request = $_GET["request"];

	$mysqli = new mysqli("localhost:3306", "root", "root", "1919data");

	if ($mysqli -> connect_errno)
	{
		$mysqli -> connect_error;
	}

	$mysqli -> set_charset("utf8");
	$res = $mysqli -> query("select * from goodsbasket where userName = '" . $userName . "'") -> fetch_assoc();

	if ($request == "update")
	{
		$goodsSelect = $_GET["goodsSelect"];
		$mysqli -> query("update goodsbasket set goodsSelect=" . $goodsSelect . " where userName='" . $userName . "'");
	}
	else if($request == "delete")
	{
		$goodsId = $_GET["goodsId"];
		$mysqli -> query("delete from goodsbasket where userName = '" . $userName . "' and goodsId = " . $goodsId);
		$res = $mysqli -> query("select * from goodsbasket where userName = '" . $userName . "'") -> fetch_all(MYSQLI_ASSOC);
		echo json_encode($res);
	}
	else if($request == "single")
	{
		$goodsSelect = $_GET["goodsSelect"];
		$goodsId = $_GET["goodsId"];
		$mysqli -> query("update goodsbasket set goodsSelect = " . $goodsSelect . " where userName = '" . $userName . "' and goodsId = " . $goodsId);
	}
?>