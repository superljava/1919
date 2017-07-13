<?php
header("Content-Type:text/html;charset=UTF-8");
$user=$_POST['tel'];
$pwd=$_POST['pwd'];
$mysqli=new mysqli('localhost:3306','root','root','1919data');
$mysqli->set_charset('utf8');
$res=$mysqli->query("select * from user where userName='".$user."'")->fetch_all();
if(!$res){
	$mysqli->query("insert into user (userName,pwd) values ('".$user."','".$pwd."')");
	echo "<script>alert('注册成功');window.location='login.php'</script>";
}else{
	echo "<script>alert('用户名已经被注册');window.location='register.php'</script>";
}
?>