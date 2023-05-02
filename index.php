<?php include 'sessions.php'; ?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Virtual church Login</title>

        <!-- CSS -->
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>
	<?php
	
	
	if($dblevel==1){
		
		echo '<script>window.location = "Admin";</script>';	
	}
	elseif($dblevel==2){
		echo '<script>window.location = "Member";</script>';
		
	}
	elseif($dblevel==3){
		echo '<script>window.location = "District";</script>';
		
	}
	
	?>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <img src="Logo.png">
                            
							<h1>Church Name</h1>
                            	
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login to our site</h3>
                            		<p>Enter your username and password to log on:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" onsubmit="return false" id="loginform" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="form-username" placeholder="Username..."  class="form-username form-control" id="username" >
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password"  name="form-password" placeholder="Password..." class="form-password form-control" id="password1">
			                        </div>
									
			                        <button type="submit" class="btn blue">Sign in!</button>
									
									<div id="loginResponse"></div>
			                    </form>
		                    </div>
							    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        	<h3>For trial, click bellow</h3>
                        	<div class="social-login-buttons">
	                        	<div class="btn btn-link-2" onclick="memberlog()">
	                        		<i class="fa fa-users"></i> Member
	                        	</div>
	                        	<div class="btn btn-link-2"  onclick="adminlog()">
	                        		<i class="fa fa-user"></i> Admin
	                        	</div>
	                        	
                        	</div>
                        </div>
                    </div>
                        </div>
                    </div>
               
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
		<script src="scripts/login_confirm.js"></script>
		
		<script >
		function memberlog(){
			
			document.getElementById("username").value="joyce";
			document.getElementById("password1").value="gifted";
			
		}
		function adminlog(){
			
			document.getElementById("username").value="mweemba";
			document.getElementById("password1").value="gifted";
			
		}
		
		function coordinatorlog(){
			
			document.getElementById("username").value="admin2";
			document.getElementById("password1").value="gifted";
			
		}
		
		
		</script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>