<?php 


include 'connection.php';


$Id = $_POST['Id'];

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn,"UPDATE `admins` SET `username` = '$username', `password` = '$password' WHERE `admins`.`Id` = '$Id';");

if ($query== true) {
	
	echo "<script>alert('Edit Saved ... You Have been Logged Out')</script>";
	include 'logout.php';
}else{
echo "not yet";

}

 ?>