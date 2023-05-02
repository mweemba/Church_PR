<?php
function checkpermission($type,$perssion_category){

include '../../sessions.php';

$SQL3 = "SELECT `acc_id` FROM `accounts` WHERE `account_name`=:accounName";

   $stmt = $conn2->prepare($SQL3);
$accounNumbe=0;
$stmt->bindParam(":accounName",$accounName);

 $stmt->execute();
while($row5 = $stmt->fetch()){
												
  $accounNumber= $row5['acc_id'];

	 }
	 return $accounNumber;
	 } ?>
																