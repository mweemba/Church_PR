<?php
include'../sessions.php';
$member_id=$_GET['mid'];

	
	 $deleteQuery="INSERT INTO `deletedchurchmember`(`Gender`, `Status`, `Title`, `First Name`, `Mid Name`, `Last Name`, `ID Number`, `Date of Birth`, `Employed`, `Profession`, 
	 `Church Employee`, `Join Type`, `Join Date`, `Officiating Minister`, `Church Action`, `Conference Action`, `Physical Address 1`, `Physical Address 2`, `Physical Address 3`, `Postal Code`, `Postal Address 1`, 
	 `Postal Address 2`, `Postal Address 3`, `Postal Code1`, `Telephone`, `Fax`, `Email`, `Cellphone`, `zone`, `Face_picture`, `Church ID`) 
	 SELECT `Gender`, `Status`, `Title`, `First Name`, `Mid Name`, `Last Name`, `ID Number`, `Date of Birth`, `Employed`, `Profession`,
	 `Church Employee`, `Join Type`, `Join Date`, `Officiating Minister`, `Church Action`, `Conference Action`, `Physical Address 1`, `Physical Address 2`, `Physical Address 3`, `Postal Code`, `Postal Address 1`, `Postal Address 2`, `Postal Address 3`, 
	 `Postal Code1`, `Telephone`, `Fax`, `Email`, `Cellphone`, `zone`, `Face_picture`, `Church ID` FROM `churchmember` WHERE `ID Number`='$member_id';
	 DELETE FROM `churchmember` WHERE `ID Number`='$member_id'";
	 $result3= mysqli_query($conn,$deleteQuery);
   if($result3){
   
  echo "<script>window.location = 'Members.php?del=Y'</script>";
 
    		
}else {


			
		echo "<script>window.location = 'Members.php?del=N'</script>";
		
//}

	
	}
	

  
?>  