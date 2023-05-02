
<?php

function updatedb($data,$prop_id,$thumb){
	include '../includes/Dbconnect.php';
 $query1="INSERT INTO `properties_imagess`(`images_id`, `name`, `path`, `prop_id`, `thumb`) VALUES ('','$data','','$prop_id','$thumb')";

if(!$conn->multi_query($query1)){
		 
      
			return  "An error Occured";
		 
	 }else{
		 return  "success";
		
     
	 }
}
?>