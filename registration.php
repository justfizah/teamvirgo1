<?php 

session_start();





$con = mysqli_connect('s9xpbd61ok2i7drv.cbetxkdyhwsb.us-east-1.rds.amazonaws.com','root','');



mysqli_select_db($con, 'bayyw9cgyjrq29a8');


$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


$s = " select * from db0bulyd29gens6a where username = '$username'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);


if ($num == 1) {
	echo "Username Already Taken";
}else{
	$reg= "insert into db0bulyd29gens6a(username , email , password) values ('$username' ,  '$email', '$password')";
	mysqli_query($con, $reg);

	echo "Registration Successful";
}

 ?>
