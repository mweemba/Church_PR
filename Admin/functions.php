
<?php function sendmessage($sender,$message,$Destination,$firstname){
 include'../Dbconnect.php'; 	
	$date=date("Y-m-d h:i:sa");
	if($Destination){
 $SQL="INSERT INTO `sms`(`sms_id`, `Date_time`, `message`, `sender`, `reciever`, `status`) 
	VALUES ('','$date','$message','$sender','$Destination','Pending')";
											$results=mysqli_query($conn,$SQL);
	$from=$sender;					

									$text = 'Dear \n'.$firstname."$message"'\nFrom '.$from;
$url =
"http://api2.amdtelecom.net:8208/?username=".$username."&password=".$password.
"&from=".$from."&to=".$Destination"&text=".urlencode($text)."";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);
		
										
											if($results){


												echo '<h3 ><i><color red>'.$Destination.'Status: SENT</i></p>';


											}else{
												echo '<p><i>'.$Destination.'status:<span class="alert alert-danger">NOT SENT</span></i></p>';
											}
												
												
}											
else{
    echo '<p><i>'.$Destination.'status:<span class="alert alert-danger">NOT Number</span></i></p>';

}

}


function sendnotice($sender,$message,$Destination){
 include'../Dbconnect.php'; 	
	
	if($Destination){
 $SQL="INSERT INTO `dashboard_notices`(`Notice_id`, `Subject`, `Content`, `attachment`, `attachment2`, `attachment3`, `sentby`, `date_time`) VALUES ('','','','','','','',''))";
											$results=mysqli_query($conn,$SQL);
	$from=$sender;					

		
										
											if($results){


												echo '<h3 ><i><color red>'.$Destination.'Status: SENT</i></p>';


											}else{
												echo '<p><i>'.$Destination.'status:<span class="alert alert-danger">NOT SENT</span></i></p>';
											}
												
												
}											
else{
    echo '<p><i>'.$Destination.'status:<span class="alert alert-danger">NOT Number</span></i></p>';

}

}



?>