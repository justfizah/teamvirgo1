<?php 

session_start();





$con = mysqli_connect('s9xpbd61ok2i7drv.cbetxkdyhwsb.us-east-1.rds.amazonaws.com' ,'db0bulyd29gens6a','', 'bayyw9cgyjrq29a8');



mysqli_select_db($con, 'bayyw9cgyjrq29a8');


$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


$s = " select * from usertable where username = '$username'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if (!preg_match("/^[a-zA-Z]*$/", $username) || !preg_match("/^[a-zA-Z]*$/", $email)) {
           header("Location: ../signup.php?signup=invalid");
           exit();
}
if ($num == 1) {
	echo "Username Already Taken";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
               header("Location: ../signup.php?signup=email");
               exit();
}
else{
	$reg= "insert into usertable(username , email , password) values ('$username' ,  '$email', '$password')";
	mysqli_query($con, $reg);
	echo "Registration Successful";
}

 ?>
