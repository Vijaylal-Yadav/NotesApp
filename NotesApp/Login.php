<?php
if(isset($_POST['email']))
{
$con = mysqli_connect('localhost', 'root', '','reacttest');

// get the post records
$email =$_POST['email'];
$password =$_POST['password'];

// database insert SQL code
$sql = "SELECT * FROM `users` WHERE mail ='$email' AND pass = '$password'";

// insert in database 
$rs = mysqli_query($con, $sql);
$count = mysqli_num_rows($rs);
if($count > 0)
{
	$msg = 'Login Complete! Thanks';
     echo "<script>window.location.assign('newnote.html'); </script>";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>