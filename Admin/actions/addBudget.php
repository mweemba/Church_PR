	      
	
	 <?php 
	include '../../sessions.php';
	  $year=$_POST['yearId'];
	  $departmentID=$_POST['DepartmentId'];
$checsql="SELECT * FROM `budget` WHERE `YEAR`='$year' AND `Department_id`='$departmentID'";
	$results=mysqli_query($conn,$checsql);
	$num=mysqli_num_rows($results);
	if($num<1){
											
											
											$userqry="INSERT INTO `budget`(`YEAR`, `Budget_id`, `Department_id`,`status`) VALUES ('$year','','$departmentID','Active')";
											$results1=mysqli_query($conn,$userqry);
											if($results1){
												
												echo '<span class="alert alert-success" >The Budget has been added successfully</span>';
											}
											
											
											
	}else{
		
		echo '<span class="alert alert-danger >The Budget has not been added because it already exists</span>';
	}											