
<?php
	header("Content-Type:text/html;charset=UTF-8");

	$type = $_GET["type"];
	$title = $_GET["title"];
	$dianpu = $_GET["dianpu"];
	$oriPrice = $_GET["oriPrice"];
	$nowPrice = $_GET["nowPrice"];
	$store = $_GET["store"];
	$img01 = $_GET["img01"];
	$img02 = $_GET["img02"];
	$img03 = $_GET["img03"];
	$img04 = $_GET["img04"];
	$img05 = $_GET["img05"];

	$mysqli = new mysqli("localhost:3306", "root", "root", "1919data");

	if ($mysqli -> connect_errno)
	{
		$mysqli -> connect_error;
	}

	$mysqli -> set_charset("utf8");
	$mysqli -> query("insert into goods (type, title, dianpu, oriPrice, nowPrice, store) values ('" . $type . "','" . $title . "','" . $dianpu . "'," . $oriPrice . "," . $nowPrice . "," . $store .")");
	$goodsId = $mysqli -> insert_id;
	$mysqli -> query("insert into goodsimg (goodsId, img01, img02, img03, img04, img05) values ('" . $goodsId . "','" . $img01 . "','" . $img02 . "','" . $img03 . "','" . $img04 . "','" . $img05 . "')");
	echo "插入成功";
?>
