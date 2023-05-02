<?php
session_start();
error_reporting(0);
include 'Dbconnect.php';
$member_id=$_SESSION['member_id'];
//$dbuser=$_SESSION['user'];
$dblevel=$_SESSION['level'];
$semail="";
$firstname="";
$lastname="";
$credit_limit="";
date_default_timezone_set("Africa/Harare");
     $query="SELECT * FROM `churchmember` INNER JOIN  `users` ON `churchmember`.`ID Number`= `users`.`memberID` WHERE  `churchmember`.`ID Number`='$member_id'";
      
      $q1=mysqli_query($conn,$query)or die(mysqli_error());
        
        
            while ($row = mysqli_fetch_array($q1)) {
            $firstname=$row['First Name'];
           $lastname=$row['Last Name'];
            $semail = $row['email'];
            $member_id=$row['ID Number'];
			$dblevel =$row['level'];
			$username=$row['username'];
			$Face_picture=row['Face_picture'];
            }


?> 