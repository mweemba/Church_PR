<?php 
include '../../sessions.php';
$id=$_POST['userid'];

$sql="DELETE FROM `users` WHERE `memberID`='$id'";

if($conn->query($sql) === TRUE){
	echo 'success';
	
	
}else{
	echo "The User could not be deleted due to some error". mysqli_error();
	
}
?>