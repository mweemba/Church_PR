<?php 
include '../sessions.php';
$userid='';
$email=$_POST['email'];
$memberID=$_POST['member1'];
$Type=$_POST['Type'];
$active=0;
$username=$_POST['username'];
$password=$_POST['pass'];
$cateogryId=$_POST['cateogryId'];
$pin=rand(000001,999999);
$options = [
    'cost' => 11,
    'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
];
$encryptpass = password_hash($password, PASSWORD_BCRYPT, $options);
$qr="SELECT * FROM `users` WHERE `username`='$user' OR `email`='$email' OR `memberID`='$memberID'";
		
        $query=mysqli_query($conn,$qr);
        $numrows=mysqli_num_rows($query);

if(!$memberID OR !$email OR !$username OR  !$password ){
	
	echo 'Some data is missing, Please complete the form';
}

elseif($numrows>1){
	echo 'This user already exists';
}
else{
$sql="INSERT INTO `users`(`username`, `password`, `Type`, `UserID`, `memberID`, `level`, `email`, `active`,`pin`)
 VALUES ('$username','$encryptpass','$Type','$userid','$memberID','$cateogryId','$email','$active','$pin')";
if(mysqli_query($conn,$sql)){
	echo 'success';
	mail($email,"Confirm your email","Your user on Our Church site has been created Please ener the PIN below to confirm your email /n".$pin,"from: kamwala SDA Cgurch");
	 
}else{
	echo "The User could not be deleted due to some error";
	
}
}
?>