<?php

	require '../libs/Smarty.class.php';

	$smarty = new Smarty;

	require 'header_top.php';
	require 'header_bottom.php';

	$mysqli = new mysqli('localhost:3306','root','root','1919data');

	if($mysqli->connect_errno){
		$mysqli->connect_error;
	}
	$mysqli->set_charset('utf8');

	$res=$mysqli->query("select * from goods")->fetch_all(MYSQLI_ASSOC);

	$res1=$mysqli->query("select * from goodsimg")->fetch_all(MYSQLI_ASSOC);

	$smarty->assign("lise",$res);

	$smarty->assign("lisa",$res1);

	$smarty->display('liquorZone.html');
?>