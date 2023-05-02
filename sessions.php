<?php  session_start();
error_reporting(0);
include 'Dbconnect.php';


$member_id=$_SESSION['memberID'];
//$dbuser=$_SESSION['user'];
$dblevel=$_SESSION['level'];
$semail="";
$firstname="";
$lastname="";
$midname="";
$credit_limit="";
$church_id="";
$Face_picture='';
$Currency='ZMW';
$District_allocation=0.30;
$Conference='';

 

date_default_timezone_set("Africa/Harare");
    $query="SELECT * FROM `churchmember` INNER JOIN  `users` ON `churchmember`.`ID Number`= `users`.`memberID` WHERE  `churchmember`.`ID Number`='$member_id'";
      
      $q1=mysqli_query($conn,$query)or die(mysqli_error());
        
        
            while ($row = mysqli_fetch_array($q1)) {
            $firstname=$row['First Name'];
           $lastname=$row['Last Name'];
		   $midname=$row['Mid Name'];
            $semail = $row['email'];
            $member_id=$row['ID Number'];
			$dblevel =$row['level'];
			$username=$row['username'];
			$Face_picture=$row['Face_picture'];
			$church_id=$row['Church ID'];
            }

       
include 'church_details.php';

          



?> 