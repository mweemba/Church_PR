<?php 

include 'sessions.php';
$Lid=$_POST['Line'];

$sql="DELETE FROM `budget_item` WHERE `Budget_Line`='$Lid'";

if($conn->query($sql) === TRUE){
	echo 'success';
	
	
}else{
	echo "The User could not be deleted due to some error";
	
}
?>