<?php

	require '../libs/Smarty.class.php';

	$smarty = new Smarty;

	require 'header_top.php';
	require 'header_bottom.php';

	$smarty->display('guide.html');
?>