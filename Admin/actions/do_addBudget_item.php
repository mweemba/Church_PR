	      
<?php
include '../../Dbconnect.php';
	$budget_id=$_POST['Budget_id'];
	$amount=$_POST['Amount'];
	$Description=$_POST['Description'];
	
	$spent=0;
	
 $sql1="INSERT INTO `budget_item`(`Budget_Line`, `Amount`, `Spent`, `Description`, `Budget`) 
	VALUES ('','$amount','$spent','$Description','$budget_id')";
	$results=mysqli_query($conn,$sql1);
	if($results){
echo 'success';
		echo '';
	}else{
		echo 'Not Successfull';
		
	}
										

?>