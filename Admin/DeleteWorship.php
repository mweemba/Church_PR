
<?php 

$Sermon_id=$_GET['Sermon_id'];

$sql="DELETE FROM `sermons` WHERE `Sermon_Id`=:sermon_id";
  $stmt = $conn2->prepare($sql);

$stmt->bindParam(":sermon_id",$Sermon_id);
  if($stmt->execute()){
   
  echo '<div class="alert alert-success"> The Item has been Successfully Deleted</div>';

    		

	   }else{
		   echo '<div class="alert alert-danger"> The Item has NOT been Deleted</div>';
		   
	   }
?>