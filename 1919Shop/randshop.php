<?php
	
	$mysqli = new mysqli("localhost:3306", "root", "root", "1919data");

	if ($mysqli -> connect_errno)
	{
		$mysqli -> connect_error;
	}

	$mysqli -> set_charset("utf8");

	$resContent = $mysqli -> query("select * from goods") -> fetch_all(MYSQLI_ASSOC);
	$resImg = $mysqli -> query("select * from goodsimg") -> fetch_all();

	

	$a = json_encode($resImg);
	$b = json_encode($resContent);
	echo $a."*".$b;
	

	// $arr = array();
	// while(count($arr)<4){
	// 	$arr[]=rand(1,10);
	// 	$arr = array_unique($arr);
	// }
	
	// implode("",$arr);
	
	// echo $resImg[$arr[0]][2]."*".$resImg[$arr[1]][2]."*".$resImg[$arr[2]][2]."*".$resImg[$arr[3]][2];

	
	
	
	
	

	
	
?>