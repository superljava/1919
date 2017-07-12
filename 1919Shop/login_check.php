<?php
header("Content-Type:text/html;charset=UTF-8");
$user=$_POST['user'];
$pwd=$_POST['pwd'];
$mysqli=new mysqli('localhost:3306','root','root','1919data');
$mysqli->set_charset('utf8');
$res1=$mysqli->query("select * from user where userName='".$user."'")->fetch_all();
$res2=$mysqli->query("select * from user where userName='".$user."' and pwd='".$pwd."'")->fetch_all();
if(!$res1){
	echo "<script>alert('账号不存在');window.location='register.php'</script>";
}else if(!$res2){
	echo "<script>alert('密码错误');window.location='login.php'</script>";
}else{
	session_start();
	$_SESSION['userName']=$user;
	echo "<script>window.location='index.php'</script>";
}
?>