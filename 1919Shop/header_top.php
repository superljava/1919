<?php
	
	header("Content-Type:text/html;charset=UTF-8");

	session_start();

	if(!isset($_SESSION['userName']))
	{
		$smarty -> assign("empty", "");
		$smarty -> assign("emptyLogin", "display:none");
		$smarty -> assign("sess", false);
	}
	else
	{
		$userName = $_SESSION['userName'];

		$smarty -> assign("empty", "display:none");
		$smarty -> assign("emptyLogin", "");

		$smarty -> assign("sess", $_SESSION['userName']);
	}
?>