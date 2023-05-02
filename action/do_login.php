<?php
 session_start();
//error_reporting(0);
$user=$_POST['username'];
$pass=$_POST['password'];
//$user="mweemba";
//$pass="gifted";
// $ewncryptedpass=crypt($pass);
 require('../Dbconnect.php');
 include '../passwordLib.php';
 include 'Logs.php';
 
 if($user){
    
    if($pass){
        
	 $qr="SELECT * FROM `users` WHERE `username` ='$user' OR email='$user'";
		
        $query=mysqli_query($conn,$qr);
        $numrows=mysqli_num_rows($query);
        if ($numrows==1){
            
            $row=mysqli_fetch_assoc($query);
            $dbuser=$row['username'];
            $dbpass = $row['password'];
            $dbactive=$row['active'];
            $dblevel=$row['level'];
            $memberID=$row['memberID'];
            
            if(password_verify($pass ,$dbpass )){
			  
                if($dbactive==1){
                    if($dblevel==1 OR $dblevel==2 OR $dblevel==3){
                        
                        $_SESSION['memberID']=$memberID;
                        $_SESSION['username']=$dbuser;
                        $_SESSION['level']=$dblevel;
						
                       login_log($dbuser,$memberID);
                   echo 'success';
                    }else{
						
					echo 'You are Not Authorised to Access This page. Please see the Adiminstrator for help';	
					}
                    
              
                    }
                    else
                
                echo "you must activate your account to login.  <a href='VerifyAccount.php' >Click Here</a> to Activate";
                
                }else
            
            echo "You did not enter the correct password..";
            }else
            
            echo "Your user name was not found...<br> please sign up to have access";
            
               }else
    
    echo "you need to enter a password..";
       
       
       
       
    }else
       echo "you did not enter a username..";
 
 
 //}
 
  
      

?>   