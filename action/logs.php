<?php

 function login_log($dbuser,$memberID){
	 $login_date_time
	 
	 $membSQL="INSERT INTO `log_login`(`log_id`, `username`, `login_date_time`, `ip_address`, `session`)
	 VALUES (:log_id,:username,:login_date_time,:ip_address,:session)";
 $stmt = $conn2->prepare($membSQL);
$stmt->bindParam("log_id",$log_id);
  $stmt->bindParam("username",$dbuser);
  $stmt->bindParam("login_date_time",$login_date_time);
  $stmt->bindParam("ip_address",$ip_address);
  $stmt->bindParam("session",$session);

  
	$stmt->execute;
		
     
	 
	 
 }

?>