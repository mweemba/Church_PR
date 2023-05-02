<?php include 'sessions.php'?>
<!DOCTYPE html>
<!-- 
Template Name: Kamwala SDA Church
Version: 1.0.0
Author: 
Website: 
Purchase: 
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Kamwala SDA Church</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta name="description"  content="Kamwala SDA Church"/>
	<meta name="keywords" content="Kamwala SDA Church, Marriage, Event, Temple, function" />
	<meta name="author"  content=""/>
	<meta name="MobileOptimized" content="320" />
	<!--srart theme style -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/animate.css"/>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css"/>
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css"/>
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css"/>
	<link rel="stylesheet" type="text/css" href="css/fonts.css"/>
	<link rel="stylesheet" type="text/css" href="css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="js/plugin/rs_slider/layers.css"/>
	<link rel="stylesheet" type="text/css" href="js/plugin/rs_slider/navigation.css"/>
	<link rel="stylesheet" type="text/css" href="js/plugin/rs_slider/settings.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link href="css/style2.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<!-- favicon links -->
	<link rel="shortcut icon" type="image/png" href="images/header/favicon.png" />
</head>
<body>
<!-- preloader Start -->
<div id="preloader">
	<div id="status"><img src="images/header/preloader.gif" id="preloader_image" alt="loader">
	</div>
</div>
<!-- Top Scroll Start -->
<a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
<!-- Top Scroll End -->
<!-- Header Wrapper Start -->
<div section-scroll='0' class="gc_scroll_wrap">
<div class="gc_main_menu_wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-md-2 col-sm-12 col-xs-12 hidden-xs hidden-sm">
				<div class="gc_header_wrapper">
					<div class="gc_logo">
						<a href="index.php"><img src="images/header/logo.png" alt="Logo" title="Kamwala SDA Church" class="img-responsive"></a>
					</div>
				</div>	
			</div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">			
	<div class="header-area hidden-menu-bar stick" id="sticker">
                    	<!-- mainmenu start -->
                        <div class="mainmenu">
                            <ul>
								 <li class="has-mega gc_main_navigation"><a href="index.php" class="gc_main_navigation">  Home</a>
                                	<!-- mega menu start -->
									
                                </li>
                                <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation"> About Us</a>
                                	<!-- mega menu start -->
									<ul>
                                		<li class="parent"><a href="WhatWebelieve.php">What we belive</a></li>
                                		<li class="parent"><a href="Adventist_history.php">Our History</a></li>
                                		<li class="parent"><a href="contact.php">Contact Us</a></li>
                                		
                                		
                                	</ul>
                                </li>
								
                                <li class="parent gc_main_navigation"><a href="about.php" class="gc_main_navigation">Worship</a>
                                	<!-- sub menu start -->
                                	<ul>
                                		<li class="parent"><a href="sermons.php">Video Sermons</a>
                                			<!-- second child menu start -->
											
                                			<!-- second child menu end -->
                                		</li>
                                		<li class="parent"><a href="sermons.php">Audio Sermons</a>
                                			<!-- second child menu start -->
											
                                			<!-- second child menu end -->
                                		</li>
                                		<li class="parent"><a href="sermons.php">Written Sermons</a>
                                			<!-- second child menu start -->
											
                                			<!-- second child menu end -->
                                		</li>
                                		
                                		
                                			<!-- second child menu end -->
                                		
                                	</ul>
                                	<!-- sub menu end -->
                                </li>
                                <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">News</a>
                                	<!-- mega menu start -->
									<ul>
                                		<li class="parent"><a href="upcoming.php">weekly Bulletin</a></li>
                                		<li class="parent"><a href="upcoming.php">Events</a></li>
                                		
                                		
                                	</ul>
                                </li>
                                <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">  Gallery</a>
                                	<!-- mega menu start -->
									<ul>
                                		<li class="parent"><a href="gallery.php">Building</a></li>
                                		<li class="parent"><a href="gallery.php">Events</a></li>
                                		<li class="parent"><a href="gallery.php">Worship</a></li>
                                		
                                	</ul>
                                </li>
                               <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">Ministries</a>
                                	<!-- mega menu start -->
									<ul>
                                		<li class="parent"><a href="AdventistYouth.php">Youth ministries</a></li>
                                		<li class="parent"><a href="Communications.php">Communications</a></li>
                                		<li class="parent"><a href="CommunityService.php">Community Service</a></li>
										<li class="parent"><a href="Health.php">Health Ministries</a></li>
										<li class="parent"><a href="PersonalMinisries.php">Personal Ministries</a></li>
										<li class="parent"><a href="WomensMinisries.php">Women's Ministries</a></li>
										<li class="parent"><a href="Prisons.php">Prisons Ministries</a></li>
                                	</ul>
                                </li>
								
								 
								 <li class="has-mega gc_main_navigation"><?php
			$notlogged='<a  href="Login.php" class="gc_main_navigation" >User Profile</a>
			
			<ul><li class="parent"><a href="Login.php">Login</a></li>
                
                                		<li class="parent"><a href="JoinUs.php">Join us</a></li>
                                		
										
                                	</ul></li>';
			$logged='<a h class="gc_main_navigation">Welcome '.$firstname.'</a>
			<ul>
                                		<li class="parent"><a href="logout.php">logout</a></li>
                                		<li class="parent"><a href="UserProfile.php">Member Dashboard</a></li>
                                		<li class="parent"><a href="Give.php">Return Tithe</a></li>
										<li class="parent"><a href="ChangePassword.php">Change Password</a></li>
										
                                	</ul></li>';
			
			if($member_id){
				
				echo $logged;
			}else{
				
				echo $notlogged;
			}
			?>
                                	<!-- mega menu start -->
									<ul>
                                		<li class="parent"><a href="gallery_II.php">weekly Bulletin</a></li>
                                		<li class="parent"><a href="gallery_III.php">Events</a></li>
                                		
                                		
                                	</ul>
                                </li>
                            </ul>
                        </div>
                    	<!-- mainmenu end -->
		                <!-- mobile menu area start -->
		               <header class="mobail_menu">
							<div class="container-fluid">
								<div class="row">	
									<div class="col-xs-6 col-sm-6">
										<div class="gc_logo">
											<a href="index.php"><img src="images/header/logo.png" alt="Logo" title="Kamwala SDA Church"></a>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6">
												<div class="cd-dropdown-wrapper">
													<a class="house_toggle" href="#0">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px"><g><g><path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#00468c"/></g><g><path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#00468c"/></g><g><path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#00468c"/></g><g><path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#00468c"/></g><g><path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#00468c"/></g></g></svg>
													</a>
												<nav class="cd-dropdown">
											<h2><a href="#">Kamwala SDA <span>Church</span></a></h2>
											<a href="#0" class="cd-close">Close</a>
											<ul class="cd-dropdown-content">
												<li>
													<form class="cd-search">
														<input type="search" placeholder="Search...">
													</form>
												</li>
												<li class="has-children">
													<a href="index.php">Home</a>

												<!-- .cd-secondary-dropdown -->
												</li> <!-- .has-children -->
												
												
												<li class="has-children">
													<a href="#">Worship</a>

													<ul class="cd-secondary-dropdown is-hidden">
														<li class="go-back"><a href="#0">Menu</a></li>
																<li class="parent"><a href="sermons.php">Video Sermons</a>
                                			<!-- second child menu start -->
											
                                			<!-- second child menu end -->
                                		</li>
                                		<li class="parent"><a href="sermons.php">Audio Sermons</a>
                                			<!-- second child menu start -->
											
                                			<!-- second child menu end -->
                                		</li>
                                		<li class="parent"><a href="sermons.php">Written Sermons</a>
                                			<!-- second child menu start -->
											
                                			<!-- second child menu end -->
                                		</li>
															
													</ul> <!-- .cd-secondary-dropdown -->
												</li> <!-- .has-children -->
												<li class="has-children">
													<a href="#">News</a>

													<ul class="cd-secondary-dropdown is-hidden">
														<li class="go-back"><a href="#0">Menu</a></li>
																<li class="parent"><a href="upcoming.php">weekly Bulletin</a></li>
                                		<li class="parent"><a href="upcoming.php">Events</a></li>
																</li> <!-- .has-children -->
															
													</ul> <!-- .cd-secondary-dropdown -->
												</li> <!-- .has-children -->
												<li class="has-children">
													<a href="#">Gallery</a>

													<ul class="cd-secondary-dropdown is-hidden">
														<li class="go-back"><a href="#0">Menu</a></li>
																<li class="parent"><a href="gallery.php">Building</a></li>
                                		<li class="parent"><a href="gallery.php">Events</a></li>
                                		<li class="parent"><a href="gallery.php">Worship</a></li>>
															
													</ul> <!-- .cd-secondary-dropdown -->
												</li> <!-- .has-children -->
												<li class="has-children">
													<a href="#">Ministries</a>

													<ul class="cd-secondary-dropdown is-hidden">
														<li class="go-back"><a href="#0">Menu</a></li>
																<li class="parent"><a href="AdventistYouth.php">Youth ministries</a></li>
                                		<li class="parent"><a href="Communications.php">Communications</a></li>
                                		<li class="parent"><a href="CommunityService.php">Community Service</a></li>
										<li class="parent"><a href="Health.php">Health Ministries</a></li>
										<li class="parent"><a href="PersonalMinisries.php">Personal Ministries</a></li>
										<li class="parent"><a href="WomensMinisries.php">Women's Ministries</a></li>
										<li class="parent"><a href="Prisons.php">Prisons Ministries</a></li>
															
													</ul> <!-- .cd-secondary-dropdown -->
												</li> <!-- .has-children -->
												<li>
													<a href="contact.php">Contact Us</a>
												</li>
												
												
												<?php
			$notlogged='<li class="has-children">
													<a href="#">User Profile</a>

													<ul class="cd-secondary-dropdown is-hidden">
													
														<li class="go-back"><a href="#0">Menu</a></li>
														
																<li class="parent"><a href="JoinUs.php">Join us</a></li>
                                		
															<li class="parent"><a href="Login.php">Login</a></li>
													</ul> <!-- .cd-secondary-dropdown -->
												</li> <!-- .has-children -->	
									
									';
			$logged='<li class="has-children"><a href="#" >Welcome '.$firstname.'</a>
			<ul class="cd-secondary-dropdown is-hidden">
			                <li class="go-back"><a href="#0">Menu</a></li>
                                		<li class="parent"><a href="logout.php">logout</a></li>
                                		<li class="parent"><a href="UserProfile.php">Member Dashboard</a></li>
                                		<li class="parent"><a href="Give.php">Return Tithe</a></li>
										<li class="parent"><a href="ChangePassword.php">Change Password</a></li>
										
                                	</ul></li>';
			
			if($member_id){
				
				echo $logged;
			}else{
				
				echo $notlogged;
			}
			?>
												
											</ul> <!-- .cd-dropdown-content -->
		
												

										</nav> <!-- .cd-dropdown -->
										
									</div>
								</div>	
							</div>		
						</div><!-- .cd-dropdown-wrapper -->	
						</header>
					</div>	
				</div>	
				<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 hidden-sm hidden-xs">						
	<div class="gc_right_menu">
		<ul>
		
			<li><?php
			$notlogged='<a  href="JoinUs.php" class="gc_btn" >Join Us</a></li>';
			$logged='<a h class="gc_btn">Welcome '.$firstname.'</a></li>';
			
			if($member_id){
				
				echo $notlogged;
			}else{
				
				echo $notlogged;
			}
			?>
			<li>
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_2" x="0px" y="0px" viewBox="0 0 58.995 58.995" style="enable-background:new 0 0 58.995 58.995;" xml:space="preserve"><path id="share" d="M39.927,41.929c-0.524,0.524-0.975,1.1-1.365,1.709l-17.28-10.489c0.457-1.144,0.716-2.388,0.716-3.693  c0-1.305-0.259-2.549-0.715-3.693l17.284-10.409C40.342,18.142,43.454,20,46.998,20c5.514,0,10-4.486,10-10s-4.486-10-10-10  s-10,4.486-10,10c0,1.256,0.243,2.454,0.667,3.562L20.358,23.985c-1.788-2.724-4.866-4.529-8.361-4.529c-5.514,0-10,4.486-10,10  s4.486,10,10,10c3.495,0,6.572-1.805,8.36-4.529L37.661,45.43c-0.43,1.126-0.664,2.329-0.664,3.57c0,2.671,1.04,5.183,2.929,7.071  c1.949,1.949,4.51,2.924,7.071,2.924s5.122-0.975,7.071-2.924c1.889-1.889,2.929-4.4,2.929-7.071s-1.04-5.183-2.929-7.071  C50.169,38.029,43.826,38.029,39.927,41.929z M46.998,2c4.411,0,8,3.589,8,8s-3.589,8-8,8s-8-3.589-8-8S42.586,2,46.998,2z   M11.998,37.456c-4.411,0-8-3.589-8-8s3.589-8,8-8s8,3.589,8,8S16.409,37.456,11.998,37.456z M52.654,54.657  c-3.119,3.119-8.194,3.119-11.313,0c-1.511-1.511-2.343-3.521-2.343-5.657s0.832-4.146,2.343-5.657  c1.56-1.56,3.608-2.339,5.657-2.339s4.097,0.779,5.657,2.339c1.511,1.511,2.343,3.521,2.343,5.657S54.166,53.146,52.654,54.657z" fill="#00468c"/></svg>
				<div class="gc_share_box">
					<ul>
						<li><a href="#" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" title="Flickr"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>
						<li><a href="#" title="Google+"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li><a href="#" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a href="#" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li><a href="#" title="Skype"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
						<li><a href="#" title="Whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
						<li><a href="#" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" title="Youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</li>
			<li id="search_button">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_3" x="0px" y="0px" viewBox="0 0 451 451" style="enable-background:new 0 0 451 451;" xml:space="preserve"><g><path id="search" d="M447.05,428l-109.6-109.6c29.4-33.8,47.2-77.9,47.2-126.1C384.65,86.2,298.35,0,192.35,0C86.25,0,0.05,86.3,0.05,192.3   s86.3,192.3,192.3,192.3c48.2,0,92.3-17.8,126.1-47.2L428.05,447c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4   C452.25,441.8,452.25,433.2,447.05,428z M26.95,192.3c0-91.2,74.2-165.3,165.3-165.3c91.2,0,165.3,74.2,165.3,165.3   s-74.1,165.4-165.3,165.4C101.15,357.7,26.95,283.5,26.95,192.3z" fill="#00468c"/></g></svg>
			</li>
			<li>
			<div id="search_open" class="gc_search_box">
				<input type="text" placeholder="Search here">
				<button><i class="fa fa-search" aria-hidden="true"></i></button>
			</div>
			</li>	
			<li style="font-size:30px;cursor:pointer" onclick="openNav()">
			<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="16px" y="0px"
	 viewBox="0 0 53 53" style="enable-background:new 0 0 53 53;" xml:space="preserve">
<path style="fill:#E7ECED;" d="M18.613,41.552l-7.907,4.313c-0.464,0.253-0.881,0.564-1.269,0.903C14.047,50.655,19.998,53,26.5,53
	c6.454,0,12.367-2.31,16.964-6.144c-0.424-0.358-0.884-0.68-1.394-0.934l-8.467-4.233c-1.094-0.547-1.785-1.665-1.785-2.888v-3.322
	c0.238-0.271,0.51-0.619,0.801-1.03c1.154-1.63,2.027-3.423,2.632-5.304c1.086-0.335,1.886-1.338,1.886-2.53v-3.546
	c0-0.78-0.347-1.477-0.886-1.965v-5.126c0,0,1.053-7.977-9.75-7.977s-9.75,7.977-9.75,7.977v5.126
	c-0.54,0.488-0.886,1.185-0.886,1.965v3.546c0,0.934,0.491,1.756,1.226,2.231c0.886,3.857,3.206,6.633,3.206,6.633v3.24
	C20.296,39.899,19.65,40.986,18.613,41.552z"/>
<g>
	<path style="fill:#556080;" d="M26.953,0.004C12.32-0.246,0.254,11.414,0.004,26.047C-0.138,34.344,3.56,41.801,9.448,46.76
		c0.385-0.336,0.798-0.644,1.257-0.894l7.907-4.313c1.037-0.566,1.683-1.653,1.683-2.835v-3.24c0,0-2.321-2.776-3.206-6.633
		c-0.734-0.475-1.226-1.296-1.226-2.231v-3.546c0-0.78,0.347-1.477,0.886-1.965v-5.126c0,0-1.053-7.977,9.75-7.977
		s9.75,7.977,9.75,7.977v5.126c0.54,0.488,0.886,1.185,0.886,1.965v3.546c0,1.192-0.8,2.195-1.886,2.53
		c-0.605,1.881-1.478,3.674-2.632,5.304c-0.291,0.411-0.563,0.759-0.801,1.03V38.8c0,1.223,0.691,2.342,1.785,2.888l8.467,4.233
		c0.508,0.254,0.967,0.575,1.39,0.932c5.71-4.762,9.399-11.882,9.536-19.9C53.246,12.32,41.587,0.254,26.953,0.004z"/>
</g>

</svg>
				</li>
		</ul>
		<div id="mySidenav" class="sidenav gc_single_index_menu"> 
			<ul>
			  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<?php  
			$logged='
                                		<li class="parent"><a href="logout.php">logout</a></li>
                                		<li class="parent"><a href="UserProfile.php">Member Dashboard</a></li>
                                		<li class="parent"><a href="Give.php">Return Tithe</a></li>
										<li class="parent"><a href="ChangePassword.php">Change Password</a></li>';
			
			$notlogged='<li class="parent"><a href="JoinUs.php">Join us</a></li>
                                		
						<li class="parent"><a href="Login.php">Login</a></li>';
			if($member_id){
				
				echo $logged;
			}else{
				
				echo $notlogged;
			}
			?>
				
			</ul>
		</div>
	</div>
	</div>
</div>
</div>
</div>	
<!-- Header Wrapper End -->