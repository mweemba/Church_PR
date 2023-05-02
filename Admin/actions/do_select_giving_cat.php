
<?php
include '../../sessions.php';

$category=$_POST['Cate_id'];

?>
			
																
																
																
																<option value="">--Select Type--</option>
																<?php
																echo $sql="SELECT `Revenue_id`, `Revenue_name`, `Category` FROM `revenue_types` WHERE `Category`='$category'";
																$result=mysqli_query($conn,$sql);
																while($rows=mysqli_fetch_assoc($result)){
																?>
																
																<option value="<?php echo $rows['Revenue_id']; ?>"><?php echo $rows['Revenue_name']; ?> </option>
																
																<?php }  ?>
																
																
									




	
	


