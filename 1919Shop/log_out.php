<?php
	session_start();
	session_destroy();
	echo "注销成功";
	echo "<script>window.location='login.php'</script>";
?>