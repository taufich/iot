<?php 


	include 'connection.php';

$CardId = $_POST['CardId'];

$Owner = $_POST['Owner'];

$Role = $_POST['Role'];

$query = mysqli_query($conn,"INSERT INTO card_data values('','$CardId','$Owner','$Role')");

if ($query == true) {
	echo "<script>alert('Card Registered')</script>";
	include 'cardregistration.php';
}
else{
	echo "<script>alert('Card Not Registered')</script>";
	include 'cardregistration.php';
}


 ?>