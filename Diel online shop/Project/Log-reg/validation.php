<?php

session_start();

$con = mysqli_connect('localhost', 'root','q');
mysqli_select_db($con ,'registration/login');
$name = $_POST['user'];
$pass = $_POST['password'];
$s = "select * from users where name = '$name'&& password = '$pass'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
	header('location:registered index.php');
}else{

	header('location:log-reg.php');
}
?>