<?php 


include 'connection.php';

$data = $_GET['data'];

$query = mysqli_query($conn,"INSERT INTO try values('','$data','')");

if ($query == true) {
	echo "Good";
}
else{
	echo "Not";
 }


 ?>
