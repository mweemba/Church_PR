	<?php
	include '../../sessions.php';
		$emails="";
$group=$_POST['group'];
//$message_id=1;
//$group="All";
	if($group=="All"){
	
	  $propertySQL="SELECT `Email` FROM `churchmember`";
											$stmt = $conn2->prepare($propertySQL);
											//$stmt->bindParam(":message_id",$message_id);
											$stmt->execute();
											$count=0;
											while($row5 = $stmt->fetch()){
												if($row5['Email']){
												$emails=$emails.$row5['Email'].',';
												
							       
												}
											}	
											
	}
					                      echo $emails;		
	?>
	
	
									
										
							