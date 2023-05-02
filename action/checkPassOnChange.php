<?php 
include '../includes/Dbconnect.php';
$user_id=$_POST['user_id'];
 $oldpass=$_POST['oldpass'];

 $qr="SELECT * FROM `user_tbl` WHERE `username`='$dbuser'";
		
        $query=mysqli_query($conn,$qr);
        $numrows=mysqli_num_rows($query);
        if ($numrows==1){
            
            $row=mysqli_fetch_assoc($query);
            $dbpass = $row['password'];
            
            
            if(password_verify($oldpass ,$dbpass )){
			  
                echo 'success';
              
                    }
                    else{
                
             
                echo 'The password is not correct';
                }
		}else{
			
			 echo 'The user is not found';
		}
            
?>