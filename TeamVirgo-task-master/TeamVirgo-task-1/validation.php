<?php 

session_start();
// header('location: index.php');




$con = mysqli_connect('localhost','root','');



mysqli_select_db($con, 'userregistration');

// if(isset($_POST['value'])){
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


$s = " select * from usertable where username = '$username' && password ='$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);


if ($num == 1) {
	$_SESSION['username'] = $username;
	header('location: dashboard.php');
}else{
header('location:index.php');

}


 ?>
