<?php 


	include 'connection.php';

	$myData=$_GET['data'];



	$write="<?php $" . "myData='" . $myData . "'; "  . "?>";

	$red=file_put_contents('container.php', $write);


	if ($red == true) {
		echo "byakunze";

		$query = mysqli_query($conn,"SELECT * FROM card_data where CardId='$myData'");

		$rows = mysqli_num_rows($query);

		if ($rows>0) {
			echo "Allowed";
		}else{
			echo "Not Allowed";
		}
	}



	else{
		echo "byanze";
	}



 ?>