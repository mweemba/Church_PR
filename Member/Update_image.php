<?php

function updateimage($data,$user_id){
	include '../Dbconnect.php';
 $query1="UPDATE `churchmember` SET `Face_picture`='$data' WHERE `ID Number`='$user_id'";

if(!$conn->multi_query($query1)){
		 
      
			return  "An error Occured";
		 
	 }else{
		 return  "success";
		
     
	 }
}
?>