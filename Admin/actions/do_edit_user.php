<?php 
include '../sessions.php';
$userid='';
$email=$_POST['email'];
$memberID=$_POST['member1'];
$Type=$_POST['Type'];
$active=$_POST['active'];;

$cateogryId=$_POST['cateogryId'];

$sql="UPDATE `users` SET `Type`='$Type',`level`='$cateogryId',
`email`='$email',`active`='$active' WHERE `memberID`='$memberID' ";
if(mysqli_query($conn,$sql)){
	echo 'success';
	//mail($email,"Confirm your email","Your user on Our Church site has been created Please ener the PIN below to confirm your email /n".$pin,"from: kamwala SDA Cgurch");
	 
}else{
	echo "The User could not be Edited due to some error";
	
}

?>