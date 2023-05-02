<?php
function getTransactionId(){
	
	include 'Dbconnect.php';

 $sql = "SHOW TABLE STATUS LIKE 'transaction'";
$result=$conn->query($sql);
$row = $result->fetch_assoc();

return  $row['Auto_increment'];
}

function getRecieptId(){
	
	include 'Dbconnect.php';
 $sql = "SHOW TABLE STATUS LIKE 'reciept'";
$result=$conn->query($sql);
$row = $result->fetch_assoc();

return $row['Auto_increment'];
}
?>