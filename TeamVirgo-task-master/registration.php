<?php 

session_start();





$con = mysqli_connect('localhost','root','');



mysqli_select_db($con, 'userregistration');


$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


$s = " select * from usertable where username = '$username'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);


if ($num == 1) {
	echo "Username Already Taken";
}else{
	$reg= "insert into usertable(username , email , password ) values ('$username' ,  '$email', '$password')";
	mysqli_query($con, $reg);
	echo "Registration Successful";}

 ?>