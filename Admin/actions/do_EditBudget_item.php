	      
<?php
include '../../Dbconnect.php';
	$itemID=$_POST['itemID'];
	$amount=$_POST['Amount'];
	$Description=$_POST['Description'];
	
	$spent=0;
	
 $sql1="UPDATE `budget_item` SET `Amount`='$amount',`Description`='$Description' WHERE `Budget_Line`='$itemID'";
	$results=mysqli_query($conn,$sql1);
	if($results){
echo 'success';
		echo '';
	}else{
		echo 'Not Successfull';
		
	}
										

?>