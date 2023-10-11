<?php 
include 'container.php';
?>
<?php 
include 'connection.php';

$query = mysqli_query($conn,"SELECT * FROM card_data where CardId='$myData'");

$rows = mysqli_num_rows($query);

if ($rows>0) {
	echo "<div class='alert alert-danger text-center'><i class='fas fa-exclamation-triangle'></i> <i>This Card Id is Registered To SomeElse<br> Use another Card</i></div>";
}
	

 ?>
<div class="input-group mb-2">
	

<div class="input-group-prepend">
    <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
</div>


<input type="text" name="CardId" value="<?php echo $myData ?>" readonly placeholder="Put Your Card To The Scanner" class="form-control text-center">
</div>
