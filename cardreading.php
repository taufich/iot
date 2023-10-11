
<?php 

include 'container.php';

include 'connection.php';

$query = mysqli_query($conn,"SELECT * FROM card_data where CardId='$myData'");

$rows = mysqli_num_rows($query);

if ($rows>0) {
	while ($data = mysqli_fetch_array($query)) {
		?>


<div class="card-body">
                                    
                                        <table class="table table-hover table-stripped">
                                            <tr>
                                                <th>Id Number</th>
                                                <td><?php echo $data['CardId']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Name</th>
                                                <td><?php echo $data['Owner']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Job</th>
                                                <td><?php echo $data['Role']; ?></td>
                                            </tr>
                                            
                                        </table>
                                 
                                    
                                </div>
                                <div class="card-footer">
                                  <center> <label class="text font-weight-bold">Card Registered</label></center>
                                </div>


 <?php
	}
}else{
	?>
<div class="card-body">
                                    
                                        <table class="table table-hover table-stripped">
                                            <tr>
                                                <th>Id Number</th>
                                                <td><?php echo $myData; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Name</th>
                                                <td>-------------------------</td>
                                            </tr>
                                            <tr>
                                                <th>Job</th>
                                                <td>-------------------------</td>
                                            </tr>
                                            
                                        </table>
                                 
                                    
                                </div>
                                <div class="card-footer">
                                  <center> <label class="text font-weight-bold">Card Not Registered</label></center>
                                  <center><a href="cardregistration.php">Register Card</a></center>
                                </div>
	<?php
}

 ?>