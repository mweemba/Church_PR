	      
	
	 <?php 
	include '../../sessions.php';
	  $year=$_POST['yearId'];
	  $Budget_id=$_POST['Budget_id'];
	  $departmentID=$_POST['DepartmentId'];
echo $checsql="UPDATE `budget` SET `YEAR`='$year',`Department_id`='$departmentID' WHERE `Budget_id`='$Budget_id'";
	$results=mysqli_query($conn,$checsql);
	
	if($results){
											
											
										
		echo '<span class="alert alert-success" >The Budget has been Saved successfully</span>';
											
											
											
											
	}else{
		
		echo '<span class="alert alert-danger >The Budget has NOT  been Saved</span>';
	}											