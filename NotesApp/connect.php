<?php
// database connection code
if(isset($_POST['fname']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','reacttest');

// get the post records

$firtname =$_POST['fname'];
$lastname =$_POST['lname'];
$email =$_POST['email'];
$password =$_POST['password'];

// database insert SQL code
$sql = "INSERT INTO `users` (`Id`, `Firstname`, `lastname`, `mail`, `pass`) 
VALUES ('NULL', '$firtname', '$lastname', '$email', '$password')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
     $msg = 'Login Complete! Thanks';
     echo "<script>window.location.assign('Login.html'); </script>";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>