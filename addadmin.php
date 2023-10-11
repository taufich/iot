<?php 


if (isset($_POST['button'])) {
	include 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn,"SELECT username from admins");

$rows = mysqli_num_rows($query);

while ($data = mysqli_fetch_array($query)) {
	$username_from_db = $data['username'];

	

}
if ($username == $username_from_db) {
		echo "<div class='alert alert-danger text-center'><b>Username has been used<br> Try Another</b> <i class='fas fa-times'></i></div>";
	}
	else{
		$queryy = mysqli_query($conn,"INSERT INTO admins values('','$username','$password')");

if ($queryy==true) {
	echo "<div class='alert alert-success text-center'><b>Admin Created</b> <i class='fas fa-thumbs-up'></i></div>";
}
else{
	echo "<div class='alert alert-danger text-center'><b>Admin Not Created</b> <i class='fas fa-thumbs-down'></i></div>";
}
	}

}

 ?>