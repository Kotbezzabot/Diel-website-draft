<?php

session_start();
header('location:log-reg.php');
$con = mysqli_connect('localhost'
	
	, 'root'

	, 'q');
mysqli_select_db($con ,'registration/login');
$name = $_POST['user'];
$email = $_POST['email'];
$phone_number = $_POST['phone'];
$pass = $_POST['password'];

 
$s = "select * from users where name = '$name'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
	echo "Username is already taken";
	header('location:log-reg.php');
}else{
	$reg = "insert into users(name, email, password, Phone_num) values ('$name','$email','$pass','$phone_number')";
	mysqli_query($con, $reg);
	echo "Registration is successfull";
	
}
?>