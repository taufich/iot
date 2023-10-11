<?php 

session_start();
error_reporting(0);
include 'connection.php' ;

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn,"SELECT * from admins where username = '$username' and password = '$password' limit 1");

$rows = mysqli_num_rows($query);

$_SESSION['UserSession'] = $username;

if ($rows==1) {
	include 'dashboard.php';
	echo "<script>alert('Welcome $username')</script>";
}
else{
	echo "<script>alert('Incorrect Credentials')</script>";
	include 'index.php';


}


 ?>