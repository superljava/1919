<?php

	if(!isset($_SESSION['userName']))
	{
		$smarty -> assign("empetDisplay", "");
		$smarty -> assign("listDisplay", "display: none");

		$smarty -> assign("goodsBasket", false);
		$smarty -> assign("allPiece", 0);
	}
	else
	{
		$userName = $_SESSION['userName'];

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
			$smarty -> assign("goodsBasket", $res);

			$allPiece = 0;
			$allPrice = 0;

			for ($i = 0; $i < count($res); $i++)
			{ 
				$allPiece += $res[$i]["number"];
				$allPrice += $res[$i]["price"] * $res[$i]["number"];
			}
			$smarty -> assign("allPiece", $allPiece);
			$smarty -> assign("allPrice", sprintf("%.2f", $allPrice));
		}
		else
		{
			$smarty -> assign("empetDisplay", "");
			$smarty -> assign("listDisplay", "display: none");
			$smarty -> assign("goodsBasket", false);
			$smarty -> assign("allPiece", 0);
		}
	}
?>