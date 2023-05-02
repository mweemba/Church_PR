<?php 
include 'sessions.php';
$aID=$_GET['ID'];

$sql="DELETE FROM `assets` WHERE `ID`='$aID'";

if($conn->query($sql) === TRUE){
	echo  "<script type\"text/javascrpassipt\" >".
  		"alert('The Item has been deleted);".
    		"</script>";
	echo '<script>window.location = "Assets.php";</script>';
	
}else{
	
	echo  "<script type\"text/javascrpassipt\" >".
  		"alert('The Item not been Deleted);".
    		"</script>";
	echo '<script>window.location = "Assets.php";</script>';
}
?>