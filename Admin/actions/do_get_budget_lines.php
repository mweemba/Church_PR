
<?php 
include '../../Dbconnect.php';
 $departmentID=$_POST['departmentId'];
 
	$year=date('Y');
	
											echo $userqry="SELECT * FROM `budget_item` INNER JOIN `budget` ON `budget`.`Budget_id`=`budget_item`.`Budget` WHERE `YEAR`='$year' AND `budget`.`Department_id`='$departmentID'";
											$results=mysqli_query($conn,$userqry);
											if(mysqli_num_rows($results)){
											while($row=mysqli_fetch_array($results)){
											
											?>
											
											<option  value="<?php echo $row['Budget_Line'];?>"><?php echo $row['Description'];?> - <?php echo $row['Amount'];?></option>
											
											
											
											
											<?php }

											}
											?>
												