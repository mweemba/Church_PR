<?php include '../sessions.php';?><!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>Metronic | Layouts - Horzontal Menu 2</title>

	<meta content="width=device-width, initial-scale=1.0" name="viewport" />

	<meta content="" name="description" />

	<meta content="" name="author" />

	<!-- BEGIN GLOBAL MANDATORY STYLES -->

	<link href="media/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/style-metro.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/style.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/style-responsive.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>

	<link href="media/css/uniform.default.css" rel="stylesheet" type="text/css"/>

	<!-- END GLOBAL MANDATORY STYLES -->
		<link href="media/css/bootstrap-fileupload.css" rel="stylesheet" type="text/css" />

	<link href="media/css/chosen.css" rel="stylesheet" type="text/css" />

	<link href="media/css/profile.css" rel="stylesheet" type="text/css" />

	<link rel="shortcut icon" href="media/image/favicon.ico" />

</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->



	<!-- BEGIN HEADER -->

	
	<!-- END HEADER -->

	<!-- BEGIN CONTAINER -->   



		<!-- BEGIN EMPTY PAGE SIDEBAR -->

		<?php include 'header.php' ?>

		<!-- END EMPTY PAGE SIDEBAR -->

		<!-- BEGIN PAGE -->

		<div class="page-content">

			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->


			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- BEGIN PAGE CONTAINER-->

			<div class="container-fluid">
			

				<div class="row-fluid">

				

						<!-- BEGIN PORTLET-->
<?php include 'Side_Bar.php'; ?>



					<div class="span9 ">

						<!-- BEGIN PAGE HEADER-->
						<h3 class="page-title">

							My Profile <small>[<?php echo $firstname ; ?> <?php echo $lastname ; ?>]</small>

						</h3>
								<?php  if(isset($_POST['PassChangeButton'])){
            
{
		
	
$currentPass=$_POST['FirstName'];
 $last_name =$_POST['LastName'];
 $mid_name =$_POST['MiddleNames'];
 $memb_id=$_POST['IDNumber'];
 

 
 



$SQL3 = "UPDATE `users` SET `password`=[value-2]  WHERE `memberID`='$member_id'";
  
    $result3= mysqli_query($conn,$SQL3);
   if($result3){
   
  echo '<div class="alert alert-success"> The Password has been edited Successfully</div>';
    		
}else {


			
			echo '<div class="alert alert-danger"> The Password has NOT  been edited due to some error</div>';
		
//}

	
	}
	
}
}
				
																	
																	
																	if(isset($_POST['Update_prof'])){
            
{
		
	
$first_name=$_POST['FirstName'];
 $last_name =$_POST['LastName'];
 $mid_name =$_POST['MiddleNames'];
 $memb_id=$_POST['IDNumber'];
 
 $Email=$_POST['Email'];
 $Mobile=$_POST['MobileNumber'];
 
 $telephone=$_POST['telephone'];
 $fax=$_POST['fax'];
 
 $physical_address1=$_POST['PhysicalAddressLine1'];
 $physical_address2=$_POST['PhysicalAddressLine2'];
 $physical_address3=$_POST['PhysicalAddressLine3'];
 $postcode=$_POST['PostalCode'];
 
 $post_address1=$_POST['PostalAddressLine1'];
 $post_address2 =$_POST['PostalAddressLine2'];
 $post_address3 =$_POST['PostalAddressLine3'];
 $postcode1=$_POST['PostalCode1'];
 $zone =$_POST['zone'];
 $Profession=$_POST['Profession'];
 $Employed=$_POST['Employed'];
 
 



$SQL3 = "UPDATE `churchmember` SET `First Name`='$first_name',`Mid Name`='$mid_name',`Last Name`='$last_name',`Employed`='$Employed',
`Profession`='$Profession',`Physical Address 1`='$physical_address1',`Physical Address 2`='$physical_address2',`Physical Address 3`='$physical_address3',
`Postal Code`='$postcode',`Postal Address 1`='$post_address1',`Postal Address 2`='$post_address2',`Postal Address 3`='$post_address3',
`Postal Code1`='$postcode1',`Telephone`='$telephone',`Fax`='$fax',`Email`='$Email',`Cellphone`='$Mobile',
`zone`='$zone' WHERE `ID Number`='$member_id'";
  
    $result3= mysqli_query($conn,$SQL3);
   if($result3){
   
  echo '<div class="alert alert-success"> The Profile has been edited Successfully</div>';
    		
}else {


			
			echo '<div class="alert alert-danger"> The Profile has NOT  been edited due to some error</div>';
		
//}

	
	}
	
}
}


?> 
						
				<div class="row-fluid profile">

					<div class="span12">

						<!--BEGIN TABS-->

						<div class="tabbable tabbable-custom tabbable-full-width">

							<ul class="nav nav-tabs">

								<li class="active"><a href="#tab_1_1" data-toggle="tab">Overview</a></li>

								<li><a href="#tab_1_2" data-toggle="tab">Profile Info</a></li>

								<li><a href="#tab_1_3" data-toggle="tab">Edit Profile</a></li>

							</ul>

							<div class="tab-content">

								<div class="tab-pane row-fluid active" id="tab_1_1">

									<ul class="unstyled profile-nav span3">

										<li >  <?php if($Face_picture){echo '<img src="media/image/profile/'.$Face_picture.'" >' ; }else {  ?> <i class="icon-user" style="font-size:300px;" ></i>  <?php } ?>
										</li>

										<li><a href="#">Projects</a></li>

										<li><a href="#">Messages <span>3</span></a></li>

										<li><a href="#">Friends</a></li>

										<li><a href="#">Settings</a></li>

									</ul>

									<div class="span9">

										<div class="row-fluid">

											<div class="span8 profile-info">

												<h1><?php echo $firstname ; ?>  <?php echo $midname ; ?> <?php echo $lastname ; ?></h1>

												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet dolore magna aliquam tincidunt erat volutpat laoreet dolore magna aliquam tincidunt erat volutpat.</p>

												<p><a href="#">www.mywebsite.com</a></p>

												<ul class="unstyled inline">

													<li><i class="icon-map-marker"></i> Spain</li>

													<li><i class="icon-calendar"></i> 18 Jan 1982</li>

													<li><i class="icon-briefcase"></i> Design</li>

													<li><i class="icon-star"></i> Top Seller</li>

													<li><i class="icon-heart"></i> BASE Jumping</li>

												</ul>

											</div>

											<!--end span8-->

											<div class="span4">

												<div class="portlet sale-summary">

													<div class="portlet-title">

														<div class="caption">Sales Summary</div>

														<div class="tools">

															<a class="reload" href="javascript:;"></a>

														</div>

													</div>

													<ul class="unstyled">

														<li>

															<span class="sale-info">TODAY SOLD <i class="icon-img-up"></i></span> 

															<span class="sale-num">23</span>

														</li>

														<li>

															<span class="sale-info">WEEKLY SALES <i class="icon-img-down"></i></span> 

															<span class="sale-num">87</span>

														</li>

														<li>

															<span class="sale-info">TOTAL SOLD</span> 

															<span class="sale-num">2377</span>

														</li>

														<li>

															<span class="sale-info">EARNS</span> 

															<span class="sale-num">$37.990</span>

														</li>

													</ul>

												</div>

											</div>

											<!--end span4-->

										</div>

										<!--end row-fluid-->

										<div class="tabbable tabbable-custom tabbable-custom-profile">

											<ul class="nav nav-tabs">

												<li class="active"><a href="#tab_1_11" data-toggle="tab">Latest Customers</a></li>

												<li class=""><a href="#tab_1_22" data-toggle="tab">Feeds</a></li>

											</ul>

											<div class="tab-content">

												<div class="tab-pane active" id="tab_1_11">

													<div class="portlet-body" style="display: block;">

														<table class="table table-striped table-bordered table-advance table-hover">

															<thead>

																<tr>

																	
																	<th><i class="icon-briefcase"></i> Date</th>

																	<th class="hidden-phone"><i class="icon-question-sign"></i> Sender</th>

																	<th><i class="icon-bookmark"></i> Subject</th>

																	<th>Message</th>

																</tr>

															</thead>

															<tbody>
                                                             <?php 
														   
														   $sql="SELECT *
														   FROM `messages` WHERE `RecieverID`='$member_id' OR  `RecieverID`=0 And `Church ID`='$church_id' ";
														   
														   $q1=mysqli_query($conn,$sql);
        
        
            while ($row = mysqli_fetch_array($q1)) {
														   ?>
																<tr>

																	<td><a href="#"><?php $row['datesent']; ?></a></td>

																	<td class="hidden-phone"><?php $row['Sender_id']; ?></td>

																	<td><?php $row['Subject']; ?></span></td>

																	<td><a class="btn mini green-stripe" href="#"><?php $row['Message']; ?></a></td>

																</tr>
			<?php } ?>
															</tbody>

														</table>

													</div>

												</div>

												<!--tab-pane-->

												<div class="tab-pane" id="tab_1_22">

													<div class="tab-pane active" id="tab_1_1_1">

														<div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible1="1">

															<ul class="feeds">

																<li>

																	<div class="col1">

																		<div class="cont">

																			<div class="cont-col1">

																				<div class="label label-success">                        

																					<i class="icon-bell"></i>

																				</div>

																			</div>

																			<div class="cont-col2">

																				<div class="desc">

																					You have 4 pending tasks.

																					<span class="label label-important label-mini">

																					Take action 

																					<i class="icon-share-alt"></i>

																					</span>

																				</div>

																			</div>

																		</div>

																	</div>

																	<div class="col2">

																		<div class="date">

																			Just now

																		</div>

																	</div>

																</li>

																<li>

																	<a href="#">

																		<div class="col1">

																			<div class="cont">

																				<div class="cont-col1">

																					<div class="label label-success">                        

																						<i class="icon-bell"></i>

																					</div>

																				</div>

																				<div class="cont-col2">

																					<div class="desc">

																						New version v1.4 just lunched!   

																					</div>

																				</div>

																			</div>

																		</div>

																		<div class="col2">

																			<div class="date">

																				20 mins

																			</div>

																		</div>

																	</a>

																</li>

																<li>

																	<div class="col1">

																		<div class="cont">

																			<div class="cont-col1">

																				<div class="label label-important">                      

																					<i class="icon-bolt"></i>

																				</div>

																			</div>

																			<div class="cont-col2">

																				<div class="desc">

																					Database server #12 overloaded. Please fix the issue.                      

																				</div>

																			</div>

																		</div>

																	</div>

																	<div class="col2">

																		<div class="date">

																			24 mins

																		</div>

																	</div>

																</li>

																<li>

																	<div class="col1">

																		<div class="cont">

																			<div class="cont-col1">

																				<div class="label label-info">                        

																					<i class="icon-bullhorn"></i>

																				</div>

																			</div>

																			<div class="cont-col2">

																				<div class="desc">

																					New order received. Please take care of it.                 

																				</div>

																			</div>

																		</div>

																	</div>

																	<div class="col2">

																		<div class="date">

																			30 mins

																		</div>

																	</div>

																</li>

																<li>

																	<div class="col1">

																		<div class="cont">

																			<div class="cont-col1">

																				<div class="label label-success">                        

																					<i class="icon-bullhorn"></i>

																				</div>

																			</div>

																			<div class="cont-col2">

																				<div class="desc">

																					New order received. Please take care of it.                 

																				</div>

																			</div>

																		</div>

																	</div>

																	<div class="col2">

																		<div class="date">

																			40 mins

																		</div>

																	</div>

																</li>

																<li>

																	<div class="col1">

																		<div class="cont">

																			<div class="cont-col1">

																				<div class="label label-warning">                        

																					<i class="icon-plus"></i>

																				</div>

																			</div>

																			<div class="cont-col2">

																				<div class="desc">

																					New user registered.                

																				</div>

																			</div>

																		</div>

																	</div>

																	<div class="col2">

																		<div class="date">

																			1.5 hours

																		</div>

																	</div>

																</li>

																<li>

																	<div class="col1">

																		<div class="cont">

																			<div class="cont-col1">

																				<div class="label label-success">                        

																					<i class="icon-bell-alt"></i>

																				</div>

																			</div>

																			<div class="cont-col2">

																				<div class="desc">

																					Web server hardware needs to be upgraded. 

																					<span class="label label-inverse label-mini">Overdue</span>             

																				</div>

																			</div>

																		</div>

																	</div>

																	<div class="col2">

																		<div class="date">

																			2 hours

																		</div>

																	</div>

																</li>

																<li>

																	<div class="col1">

																		<div class="cont">

																			<div class="cont-col1">

																				<div class="label">                       

																					<i class="icon-bullhorn"></i>

																				</div>

																			</div>

																			<div class="cont-col2">

																				<div class="desc">

																					New order received. Please take care of it.                 

																				</div>

																			</div>

																		</div>

																	</div>

																	<div class="col2">

																		<div class="date">

																			3 hours

																		</div>

																	</div>

																</li>

																<li>

																	<div class="col1">

																		<div class="cont">

																			<div class="cont-col1">

																				<div class="label label-warning">                        

																					<i class="icon-bullhorn"></i>

																				</div>

																			</div>

																			<div class="cont-col2">

																				<div class="desc">

																					New order received. Please take care of it.                 

																				</div>

																			</div>

																		</div>

																	</div>

																	<div class="col2">

																		<div class="date">

																			5 hours

																		</div>

																	</div>

																</li>

																<li>

																	<div class="col1">

																		<div class="cont">

																			<div class="cont-col1">

																				<div class="label label-info">                        

																					<i class="icon-bullhorn"></i>

																				</div>

																			</div>

																			<div class="cont-col2">

																				<div class="desc">

																					New order received. Please take care of it.                 

																				</div>

																			</div>

																		</div>

																	</div>

																	<div class="col2">

																		<div class="date">

																			18 hours

																		</div>

																	</div>

																</li>

																<li>

																	<div class="col1">

																		<div class="cont">

																			<div class="cont-col1">

																				<div class="label">                       

																					<i class="icon-bullhorn"></i>

																				</div>

																			</div>

																			<div class="cont-col2">

																				<div class="desc">

																					New order received. Please take care of it.                 

																				</div>

																			</div>

																		</div>

																	</div>

																	<div class="col2">

																		<div class="date">

																			21 hours

																		</div>

																	</div>

																</li>

																<li>

																	<div class="col1">

																		<div class="cont">

																			<div class="cont-col1">

																				<div class="label label-info">                        

																					<i class="icon-bullhorn"></i>

																				</div>

																			</div>

																			<div class="cont-col2">

																				<div class="desc">

																					New order received. Please take care of it.                 

																				</div>

																			</div>

																		</div>

																	</div>

																	<div class="col2">

																		<div class="date">

																			22 hours

																		</div>

																	</div>

																</li>

																<li>

																	<div class="col1">

																		<div class="cont">

																			<div class="cont-col1">

																				<div class="label">                       

																					<i class="icon-bullhorn"></i>

																				</div>

																			</div>

																			<div class="cont-col2">

																				<div class="desc">

																					New order received. Please take care of it.                 

																				</div>

																			</div>

																		</div>

																	</div>

																	<div class="col2">

																		<div class="date">

																			21 hours

																		</div>

																	</div>

																</li>

																<li>

																	<div class="col1">

																		<div class="cont">

																			<div class="cont-col1">

																				<div class="label label-info">                        

																					<i class="icon-bullhorn"></i>

																				</div>

																			</div>

																			<div class="cont-col2">

																				<div class="desc">

																					New order received. Please take care of it.                 

																				</div>

																			</div>

																		</div>

																	</div>

																	<div class="col2">

																		<div class="date">

																			22 hours

																		</div>

																	</div>

																</li>

																<li>

																	<div class="col1">

																		<div class="cont">

																			<div class="cont-col1">

																				<div class="label">                       

																					<i class="icon-bullhorn"></i>

																				</div>

																			</div>

																			<div class="cont-col2">

																				<div class="desc">

																					New order received. Please take care of it.                 

																				</div>

																			</div>

																		</div>

																	</div>

																	<div class="col2">

																		<div class="date">

																			21 hours

																		</div>

																	</div>

																</li>

																<li>

																	<div class="col1">

																		<div class="cont">

																			<div class="cont-col1">

																				<div class="label label-info">                        

																					<i class="icon-bullhorn"></i>

																				</div>

																			</div>

																			<div class="cont-col2">

																				<div class="desc">

																					New order received. Please take care of it.                 

																				</div>

																			</div>

																		</div>

																	</div>

																	<div class="col2">

																		<div class="date">

																			22 hours

																		</div>

																	</div>

																</li>

																<li>

																	<div class="col1">

																		<div class="cont">

																			<div class="cont-col1">

																				<div class="label">                       

																					<i class="icon-bullhorn"></i>

																				</div>

																			</div>

																			<div class="cont-col2">

																				<div class="desc">

																					New order received. Please take care of it.                 

																				</div>

																			</div>

																		</div>

																	</div>

																	<div class="col2">

																		<div class="date">

																			21 hours

																		</div>

																	</div>

																</li>

																<li>

																	<div class="col1">

																		<div class="cont">

																			<div class="cont-col1">

																				<div class="label label-info">                        

																					<i class="icon-bullhorn"></i>

																				</div>

																			</div>

																			<div class="cont-col2">

																				<div class="desc">

																					New order received. Please take care of it.                 

																				</div>

																			</div>

																		</div>

																	</div>

																	<div class="col2">

																		<div class="date">

																			22 hours

																		</div>

																	</div>

																</li>

															</ul>

														</div>

													</div>

												</div>

												<!--tab-pane-->

											</div>

										</div>

									</div>

									<!--end span9-->

								</div>

								<!--end tab-pane-->

								<div class="tab-pane profile-classic row-fluid" id="tab_1_2">
									<?php 
									
								 $query="SELECT * FROM `churchmember` INNER JOIN  `users` ON `churchmember`.`ID Number`= `users`.`memberID` INNER JOIN `zones` ON `churchmember`.`zone` =`zones`.`Zone_id` WHERE  `churchmember`.`ID Number`='$member_id'";
      
      $q1=mysqli_query($conn,$query)or die(mysqli_error());
        
        
            while ($row = mysqli_fetch_array($q1)) {
            $firstname=$row['First Name'];
           $lastname=$row['Last Name'];
		   $midname=$row['Mid Name'];
            $semail = $row['email'];
            $member_id=$row['ID Number'];
			$dblevel =$row['level'];
			$username=$row['username'];
			$Face_picture=$row['Face_picture'];
			$church_id=$row['Church ID'];
			
			
            
									?>

									<div class="span2"><img src="media/image/profile/<?php if($Face_picture){ echo $Face_picture ; } else{ ?>avatar.png <?php } ?>"> </div>

									<ul class="unstyled span10">

									
                                        <li><span>Title:</span> <?php echo $row['Title'];?></li>
										<li><span>Last Name:</span> <?php echo $row['Last Name'];?></li>

										<li><span>Other Names:</span> <?php echo $row['Mid Name']; ?> <?php echo $row['First Name']; ?></li>

										

										<li><span>ID:</span> <?php echo $row['ID Number'] ;?></li>

										<li><span>Birthday:</span> <?php echo $row['Date of Birth'];?></li>

										<li><span>Occupation:</span><?php echo $row['Profession']; ?></li>

										<li><span>Status:</span><?php echo $row['Status']; ?></li>

										<li><span>Physical Address:</span> <?php echo $row['Physical Address 1']; ?> <?php echo $row['Physical Address 2']; ?> <?php echo $row['Physical Address 3']; ?></li>

										<li><span>Email:</span><?php echo $row['Email']; ?></li>
										
										<li><span>Zone:</span><?php echo $row['Name']; ?></li>
										
										<li><span>Join Method:</span><?php echo $row['Join Type']; ?></li> 
										
										<li><span>Join Date:</span><?php echo $row['Join Date']; ?></li>
										
										<li><span>Baptized By:</span><?php echo $row['Officiating Minister']; ?></li>
										
										
										<li><span>Profession:</span><?php echo $row['First Name'];?></li>
										
                                        <li><span>Church Employee:</span><?php echo $row['Church Employee']; ?></li>
										
										
										<?php } ?>
									</ul>

								</div>

								<!--tab_1_2-->

								<div class="tab-pane row-fluid profile-account" id="tab_1_3">

									<div class="row-fluid">

										<div class="span12">

											<div class="span3">

												<ul class="ver-inline-menu tabbable margin-bottom-10">

													<li class="active">

														<a data-toggle="tab" href="#tab_1-1">

														<i class="icon-cog"></i> 

														Personal info

														</a> 

														<span class="after"></span>                                    

													</li>

													<li class=""><a data-toggle="tab" href="#tab_2-2"><i class="icon-picture"></i> Change Avatar</a></li>

													<li class=""><a data-toggle="tab" href="#tab_3-3"><i class="icon-lock"></i> Change Password</a></li>

													

												</ul>

											</div>

											<div class="span9">

												<div class="tab-content">

													<div id="tab_1-1" class="tab-pane active">

														<div style="height: auto;" id="accordion1-1" class="accordion collapse">

															<form action="#" id="self_edit Details" method="POST">

																<?php 
									
									 $query="SELECT * FROM `churchmember` INNER JOIN  `users` ON `churchmember`.`ID Number`= `users`.`memberID` INNER JOIN `zones` ON `churchmember`.`zone` =`zones`.`Zone_id` WHERE  `churchmember`.`ID Number`='$member_id'";
      
      $q1=mysqli_query($conn,$query);
    
        
            while ($row = mysqli_fetch_array($q1)) {
            $firstname=$row['First Name'];
           $lastname=$row['Last Name'];
		   $midname=$row['Mid Name'];
            $semail = $row['email'];
            $member_id=$row['ID Number'];
			$dblevel =$row['level'];
			$username=$row['username'];
			$Face_picture=$row['Face_picture'];
			$church_id=$row['Church ID'];
			
			
            
									?>

																<label class="control-label">First Name</label>

																<input type="text" name="FirstName" value="<?php echo $row['First Name']; ?>" class="m-wrap span8" />

																<label class="control-label">Last Name</label>

																<input type="text" name="LastName" value="<?php echo $row['Last Name']; ?>"  class="m-wrap span8" />
																
																<label class="control-label">Middle  Names</label>

																<input type="text" name="MiddleNames" value="<?php echo $row['Mid Name']; ?>"  class="m-wrap span8" />
																
																<label class="control-label">ID Number</label>

																<input type="text"  name="IDNumber" value="<?php echo $row['ID Number']; ?>"  class="m-wrap span8" />
																
                              
																<label class="control-label">Mobile Number</label>

																<input type="text"  name="MobileNumber" value="<?php echo $row['Cellphone']; ?>"  class="m-wrap span8" />
																
																<label class="control-label">Telephone Number</label>
																

																<input type="text" name="telephone" value="<?php echo $row['Telephone']; ?>" class="m-wrap span8" /> 
																
																<label class="control-label">Fax Number</label>
																

																<input type="text" name="fax" value="<?php echo $row['Fax']; ?>" class="m-wrap span8" /> 

																<label class="control-label">Email</label>

																<input type="text" name="Email" value="<?php echo $row['Email']; ?>"  class="m-wrap span8" />

																
																<label class="control-label">Physical Address Line 1</label>

																<input type="text" name="PhysicalAddressLine1" value="<?php echo $row['Physical Address 1']; ?>"  class="m-wrap span8" /> 
																
																<label class="control-label">Physical Address Line 2</label>

																<input type="text" name="PhysicalAddressLine2" value="<?php echo $row['Physical Address 2']; ?>"  class="m-wrap span8" /> 
																
																<label class="control-label">PhysicalAddressLine3</label>
																<input type="text" name="PhysicalAddressLine3" value="<?php echo $row['Physical Address 3']; ?>"  class="m-wrap span8" /> 
																
																<label class="control-label">Postal Code</label>
																<input type="text" name="PostalCode" value="<?php echo $row['Postal Code']; ?>"  class="m-wrap span8" /> 
																
																
																<label class="control-label">Postal Address Line 1</label>

																<input type="text" name="PostalAddressLine1" value="<?php echo $row['Postal Address 1']; ?>" class="m-wrap span8" /> 
																
																<label class="control-label">Postal Address Line 2</label>

																<input type="text"  name="PostalAddressLine2" value="<?php echo $row['Postal Address 2']; ?>" class="m-wrap span8" /> 
																
																<label class="control-label">Postal Address Line 3</label>
																<input type="text"  name="PostalAddressLine3" value="<?php echo $row['Postal Address 3']; ?>" class="m-wrap span8" />
																
					                                             <label class="control-label">Postal Code</label>
																

																<input type="text" name="PostalCode1" value="<?php echo $row['Postal Code1']; ?>" class="m-wrap span8" /> 
																
																<label class="control-label">Zone</label>
																<select class="span8 m-wrap"  name="zone" tabindex="1">

																	

																	<option value="<?php echo $row['zone']; ?>"> <?php echo $row['Name']; ?>
																</option>
																<?php 
																$sql="SELECT * FROM `zones`";
																$q1=mysqli_query($conn,$sql)or die(mysqli_error());
        
        
																while ($row5 = mysqli_fetch_array($q1)) {
																$name=$row5['Name'];
																$id=$row5['Zone_id'];
																
																?>
																<option value="<?php echo $id; ?>"> <?php echo $name ; ?>
																</option>
																<?php } ?>

																	</select>
																
																
																<label class="control-label">Employed</label>

																<select  name="Employed" class="span8 m-wrap" data-placeholder="Choose a Category" tabindex="1">

																	<option  value="<?php echo $row['Employed']; ?>"> <?php echo $row['Employed']; ?>

																	<option value="Yes">Yes</option>

																	<option value="No">No</option>

																

																	</select>
																
																
																<label class="control-label">Profession</label>

																<input type="text" value="<?php echo $row['Profession']; ?>"  name="Profession" class="m-wrap span8" /> 

																
																
			<?php } ?>

																<div class="submit-btn">

																	<Button type="submit" name="Update_prof" class="btn green">Save Changes</Button>

																	<a href="#" class="btn">Cancel</a>

																</div>

															</form>

														</div>

													</div>

													<div id="tab_2-2" class="tab-pane">

														<div style="width: 240px;" id="accordion2-2" class="accordion collapse">


															<div class="slim"
																 data-label="Drop your picture here"
																 data-fetcher="fetch.php"
																 data-service="async.php"
																 data-size="240,240"
																 data-ratio="1:1"
																 data-max-file-size="10"
																 data-instant-edit="true"
															     data-meta-memberid="<?php echo $member_id ; ?>"
																 >
																<input type="file" name="slim[]" required />
																<img src="media/image/profile/<?php if($Face_picture){ echo $Face_picture ; } else{ ?>avatar.png <?php } ?>">
															</div>

															

														
															

														</div>

													</div>

													<div id="tab_3-3" class="tab-pane">

														<div style="height: auto;" id="accordion3-3" class="accordion collapse">

															<form action="#" method="POST" onsubmit="return false">

																<label class="control-label">Current Password</label>

																<input type="password" id="currentPass"  onkeyup="oldpassvalidate()" class="m-wrap span8" /><span id="emailOLDpass" ></span>

																<label class="control-label">New Password</label>

																<input type="password" id="inputPassword3" name="newPass" onkeyup="passidvalidation()" class="m-wrap span8" /><span id="passwordValidate"></span>

																<label class="control-label">Re-type New Password</label>

																<input type="password" onkeyup="checkBothpasswords()" name="newPass2" id="inputPassword2" class="m-wrap span8" /><span id="checkbothpass"></span>

																<div class="submit-btn">

																	<Button class="btn green" name="PassChangeButton" onclick="">Change Password</Button>

																	<a href="#" class="btn">Cancel</a>

																</div>

																<div id="passResponse"></div>
															</form>

														</div>

													</div>

													<div id="tab_4-4" class="tab-pane">

														<div style="height: auto;" id="accordion4-4" class="accordion collapse">

															<form action="#">

																<div class="profile-settings row-fluid">

																	<div class="span9">

																		<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus..</p>

																	</div>

																	<div class="control-group span3">

																		<div class="controls">

																			<label class="radio">

																			<input type="radio" name="optionsRadios1" value="option1" />

																			Yes

																			</label>

																			<label class="radio">

																			<input type="radio" name="optionsRadios1" value="option2" checked />

																			No

																			</label>  

																		</div>

																	</div>

																</div>

																<!--end profile-settings-->

																<div class="profile-settings row-fluid">

																	<div class="span9">

																		<p>Enim eiusmod high life accusamus terry richardson ad squid wolf moon</p>

																	</div>

																	<div class="control-group span3">

																		<div class="controls">

																			<label class="checkbox">

																			<input type="checkbox" value="" /> All

																			</label>

																			<label class="checkbox">

																			<input type="checkbox" value="" /> Friends

																			</label>

																		</div>

																	</div>

																</div>

																<!--end profile-settings-->

																<div class="profile-settings row-fluid">

																	<div class="span9">

																		<p>Pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson</p>

																	</div>

																	<div class="control-group span3">

																		<div class="controls">

																			<label class="checkbox">

																			<input type="checkbox" value="" /> Yes

																			</label>

																		</div>

																	</div>

																</div>

																<!--end profile-settings-->

																<div class="profile-settings row-fluid">

																	<div class="span9">

																		<p>Cliche reprehenderit enim eiusmod high life accusamus terry</p>

																	</div>

																	<div class="control-group span3">

																		<div class="controls">

																			<label class="checkbox">

																			<input type="checkbox" value="" /> Yes

																			</label>

																		</div>

																	</div>

																</div>

																<!--end profile-settings-->

																<div class="profile-settings row-fluid">

																	<div class="span9">

																		<p>Oiusmod high life accusamus terry richardson ad squid wolf fwopo</p>

																	</div>

																	<div class="control-group span3">

																		<div class="controls">

																			<label class="checkbox">

																			<input type="checkbox" value="" /> Yes

																			</label>

																		</div>

																	</div>

																</div>

																<!--end profile-settings-->

																<div class="space5"></div>

																<div class="submit-btn">

																	<a href="#" class="btn green">Save Changes</a>

																	<a href="#" class="btn">Cancel</a>

																</div>

															</form>

														</div>

													</div>

												</div>

											</div>

											<!--end span9-->                                   

										</div>

									</div>

								</div>

								<!--end tab-pane-->

								<div class="tab-pane" id="tab_1_4">

									<div class="row-fluid add-portfolio">

										<div class="pull-left">

											<span>502 Items sold this week</span>

										</div>

										<div class="pull-left">

											<a href="#" class="btn icn-only green">Add a new Project <i class="m-icon-swapright m-icon-white"></i></a>                          

										</div>

									</div>

									<!--end add-portfolio-->

									<div class="row-fluid portfolio-block">

										<div class="span5 portfolio-text">

											<img src="media/image/logo_metronic.jpg" alt="" />

											<div class="portfolio-text-info">

												<h4>Metronic - Responsive Template</h4>

												<p>Lorem ipsum dolor sit consectetuer adipiscing elit.</p>

											</div>

										</div>

										<div class="span5" style="overflow:hidden;">

											<div class="portfolio-info">

												Today Sold

												<span>187</span>

											</div>

											<div class="portfolio-info">

												Total Sold

												<span>1789</span>

											</div>

											<div class="portfolio-info">

												Earns

												<span>$37.240</span>

											</div>

										</div>

										<div class="span2 portfolio-btn">

											<a href="#" class="btn bigicn-only"><span>Manage</span></a>                      

										</div>

									</div>

									<!--end row-fluid-->

									<div class="row-fluid portfolio-block">

										<div class="span5 portfolio-text">

											<img src="media/image/logo_azteca.jpg" alt="" />

											<div class="portfolio-text-info">

												<h4>Metronic - Responsive Template</h4>

												<p>Lorem ipsum dolor sit consectetuer adipiscing elit.</p>

											</div>

										</div>

										<div class="span5">

											<div class="portfolio-info">

												Today Sold

												<span>24</span>

											</div>

											<div class="portfolio-info">

												Total Sold

												<span>660</span>

											</div>

											<div class="portfolio-info">

												Earns

												<span>$7.060</span>

											</div>

										</div>

										<div class="span2 portfolio-btn">

											<a href="#" class="btn bigicn-only"><span>Manage</span></a>                      

										</div>

									</div>

									<!--end row-fluid-->

									<div class="row-fluid portfolio-block">

										<div class="span5 portfolio-text">

											<img src="media/image/logo_conquer.jpg" alt="" />

											<div class="portfolio-text-info">

												<h4>Metronic - Responsive Template</h4>

												<p>Lorem ipsum dolor sit consectetuer adipiscing elit.</p>

											</div>

										</div>

										<div class="span5" style="overflow:hidden;">

											<div class="portfolio-info">

												Today Sold

												<span>24</span>

											</div>

											<div class="portfolio-info">

												Total Sold

												<span>975</span>

											</div>

											<div class="portfolio-info">

												Earns

												<span>$21.700</span>

											</div>

										</div>

										<div class="span2 portfolio-btn">

											<a href="#" class="btn bigicn-only"><span>Manage</span></a>                      

										</div>

									</div>

									<!--end row-fluid-->

								</div>

								<!--end tab-pane-->

								<div class="tab-pane row-fluid" id="tab_1_6">

									<div class="row-fluid">

										<div class="span12">

											<div class="span3">

												<ul class="ver-inline-menu tabbable margin-bottom-10">

													<li class="active">

														<a data-toggle="tab" href="#tab_1">

														<i class="icon-briefcase"></i> 

														General Questions

														</a> 

														<span class="after"></span>                                    

													</li>

													<li><a data-toggle="tab" href="#tab_2"><i class="icon-group"></i> Membership</a></li>

													<li><a data-toggle="tab" href="#tab_3"><i class="icon-leaf"></i> Terms Of Service</a></li>

													<li><a data-toggle="tab" href="#tab_1"><i class="icon-info-sign"></i> License Terms</a></li>

													<li><a data-toggle="tab" href="#tab_2"><i class="icon-tint"></i> Payment Rules</a></li>

													<li><a data-toggle="tab" href="#tab_3"><i class="icon-plus"></i> Other Questions</a></li>

												</ul>

											</div>

											<div class="span9">

												<div class="tab-content">

													<div id="tab_1" class="tab-pane active">

														<div style="height: auto;" id="accordion1" class="accordion collapse">

															<div class="accordion-group">

																<div class="accordion-heading">

																	<a href="#collapse_1" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">

																	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ?

																	</a>

																</div>

																<div class="accordion-body collapse in" id="collapse_1">

																	<div class="accordion-inner">

																		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.

																	</div>

																</div>

															</div>

															<div class="accordion-group">

																<div class="accordion-heading">

																	<a href="#collapse_2" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">

																	Pariatur cliche reprehenderit enim eiusmod highr brunch ?

																	</a>

																</div>

																<div class="accordion-body collapse" id="collapse_2">

																	<div class="accordion-inner">

																		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.

																	</div>

																</div>

															</div>

															<div class="accordion-group">

																<div class="accordion-heading">

																	<a href="#collapse_3" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">

																	Food truck quinoa nesciunt laborum eiusmod nim eiusmod high life accusamus  ?

																	</a>

																</div>

																<div class="accordion-body collapse" id="collapse_3">

																	<div class="accordion-inner">

																		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.

																	</div>

																</div>

															</div>

															<div class="accordion-group">

																<div class="accordion-heading">

																	<a href="#collapse_4" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">

																	High life accusamus terry richardson ad ?

																	</a>

																</div>

																<div class="accordion-body collapse" id="collapse_4">

																	<div class="accordion-inner">

																		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.

																	</div>

																</div>

															</div>

															<div class="accordion-group">

																<div class="accordion-heading">

																	<a href="#collapse_5" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">

																	Reprehenderit enim eiusmod high life accusamus terry quinoa nesciunt laborum eiusmod ?

																	</a>

																</div>

																<div class="accordion-body collapse" id="collapse_5">

																	<div class="accordion-inner">

																		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.

																	</div>

																</div>

															</div>

															<div class="accordion-group">

																<div class="accordion-heading">

																	<a href="#collapse_6" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">

																	Wolf moon officia aute non cupidatat skateboard dolor brunch ?

																	</a>

																</div>

																<div class="accordion-body collapse" id="collapse_6">

																	<div class="accordion-inner">

																		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.

																	</div>

																</div>

															</div>

														</div>

													</div>

													<div id="tab_2" class="tab-pane">

														<div style="height: auto;" id="accordion2" class="accordion collapse">

															<div class="accordion-group">

																<div class="accordion-heading">

																	<a href="#collapse_2_1" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">

																	Cliche reprehenderit, enim eiusmod high life accusamus enim eiusmod ?

																	</a>

																</div>

																<div class="accordion-body collapse in" id="collapse_2_1">

																	<div class="accordion-inner">

																		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.

																	</div>

																</div>

															</div>

															<div class="accordion-group">

																<div class="accordion-heading">

																	<a href="#collapse_2_2" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">

																	Pariatur cliche reprehenderit enim eiusmod high life non cupidatat skateboard dolor brunch ?

																	</a>

																</div>

																<div class="accordion-body collapse" id="collapse_2_2">

																	<div class="accordion-inner">

																		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.

																	</div>

																</div>

															</div>

															<div class="accordion-group">

																<div class="accordion-heading">

																	<a href="#collapse_2_3" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">

																	Food truck quinoa nesciunt laborum eiusmod ?

																	</a>

																</div>

																<div class="accordion-body collapse" id="collapse_2_3">

																	<div class="accordion-inner">

																		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.

																	</div>

																</div>

															</div>

															<div class="accordion-group">

																<div class="accordion-heading">

																	<a href="#collapse_2_4" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">

																	High life accusamus terry richardson ad squid enim eiusmod high ?

																	</a>

																</div>

																<div class="accordion-body collapse" id="collapse_2_4">

																	<div class="accordion-inner">

																		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.

																	</div>

																</div>

															</div>

															<div class="accordion-group">

																<div class="accordion-heading">

																	<a href="#collapse_2_5" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">

																	Reprehenderit enim eiusmod high life accusamus terry quinoa nesciunt laborum eiusmod ?

																	</a>

																</div>

																<div class="accordion-body collapse" id="collapse_2_5">

																	<div class="accordion-inner">

																		<p>

																			Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.

																		</p>

																		<p> 

																			moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmodBrunch 3 wolf moon tempor

																		</p>

																	</div>

																</div>

															</div>

															<div class="accordion-group">

																<div class="accordion-heading">

																	<a href="#collapse_2_6" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">

																	Wolf moon officia aute non cupidatat skateboard dolor brunch ?

																	</a>

																</div>

																<div class="accordion-body collapse" id="collapse_2_6">

																	<div class="accordion-inner">

																		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.

																	</div>

																</div>

															</div>

															<div class="accordion-group">

																<div class="accordion-heading">

																	<a href="#collapse_2_7" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">

																	Reprehenderit enim eiusmod high life accusamus terry quinoa nesciunt laborum eiusmod ?

																	</a>

																</div>

																<div class="accordion-body collapse" id="collapse_2_7">

																	<div class="accordion-inner">

																		<p>

																			Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.

																		</p>

																		<p> 

																			moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmodBrunch 3 wolf moon tempor

																		</p>

																	</div>

																</div>

															</div>

														</div>

													</div>

													<div id="tab_3" class="tab-pane">

														<div style="height: auto;" id="accordion3" class="accordion collapse">

															<div class="accordion-group">

																<div class="accordion-heading">

																	<a href="#collapse_3_1" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle collapsed">

																	Cliche reprehenderit, enim eiusmod ?

																	</a>

																</div>

																<div class="accordion-body collapse in" id="collapse_3_1">

																	<div class="accordion-inner">

																		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.

																	</div>

																</div>

															</div>

															<div class="accordion-group">

																<div class="accordion-heading">

																	<a href="#collapse_3_2" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle collapsed">

																	Pariatur skateboard dolor brunch ?

																	</a>

																</div>

																<div class="accordion-body collapse" id="collapse_3_2">

																	<div class="accordion-inner">

																		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.

																	</div>

																</div>

															</div>

															<div class="accordion-group">

																<div class="accordion-heading">

																	<a href="#collapse_3_3" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle collapsed">

																	Food truck quinoa nesciunt laborum eiusmod ?

																	</a>

																</div>

																<div class="accordion-body collapse" id="collapse_3_3">

																	<div class="accordion-inner">

																		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.

																	</div>

																</div>

															</div>

															<div class="accordion-group">

																<div class="accordion-heading">

																	<a href="#collapse_3_4" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle collapsed">

																	High life accusamus terry richardson ad squid enim eiusmod high ?

																	</a>

																</div>

																<div class="accordion-body collapse" id="collapse_3_4">

																	<div class="accordion-inner">

																		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.

																	</div>

																</div>

															</div>

															<div class="accordion-group">

																<div class="accordion-heading">

																	<a href="#collapse_3_5" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle collapsed">

																	Reprehenderit enim eiusmod high  eiusmod ?

																	</a>

																</div>

																<div class="accordion-body collapse" id="collapse_3_5">

																	<div class="accordion-inner">

																		<p>

																			Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.

																		</p>

																		<p> 

																			moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmodBrunch 3 wolf moon tempor

																		</p>

																	</div>

																</div>

															</div>

															<div class="accordion-group">

																<div class="accordion-heading">

																	<a href="#collapse_3_6" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle collapsed">

																	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ?

																	</a>

																</div>

																<div class="accordion-body collapse" id="collapse_3_6">

																	<div class="accordion-inner">

																		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.

																	</div>

																</div>

															</div>

															<div class="accordion-group">

																<div class="accordion-heading">

																	<a href="#collapse_3_7" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle collapsed">

																	Reprehenderit enim eiusmod high life accusamus aborum eiusmod ?

																	</a>

																</div>

																<div class="accordion-body collapse" id="collapse_3_7">

																	<div class="accordion-inner">

																		<p>

																			Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.

																		</p>

																		<p> 

																			moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmodBrunch 3 wolf moon tempor

																		</p>

																	</div>

																</div>

															</div>

															<div class="accordion-group">

																<div class="accordion-heading">

																	<a href="#collapse_3_8" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle collapsed">

																	Reprehenderit enim eiusmod high life accusamus terry quinoa nesciunt laborum eiusmod ?

																	</a>

																</div>

																<div class="accordion-body collapse" id="collapse_3_8">

																	<div class="accordion-inner">

																		<p>

																			Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.

																		</p>

																		<p> 

																			moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmodBrunch 3 wolf moon tempor

																		</p>

																	</div>

																</div>

															</div>

														</div>

													</div>

												</div>

											</div>

											<!--end span9-->                                   

										</div>

									</div>

								</div>

								<!--end tab-pane-->

							</div>

						</div>

						<!--END TABS-->

					</div>

				</div>


									<!-- END PAGE HEADER-->

						<!-- BEGIN PAGE CONTENT-->

						
						
					</div>

				</div>

				<!-- END PAGE CONTENT-->

			</div>

			<!-- END PAGE CONTAINER--> 

		</div>

		<!-- END PAGE -->    

	</div>

	<!-- END CONTAINER -->

	<!-- BEGIN FOOTER -->

	<div class="footer">

		<div class="footer-inner">

			2013 &copy; Metronic by keenthemes.

		</div>

		<div class="footer-tools">

			<span class="go-top">

			<i class="icon-angle-up"></i>

			</span>

		</div>

	</div>

	<!-- END FOOTER -->

	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

	<!-- BEGIN CORE PLUGINS -->

	<script src="media/js/jquery-1.10.1.min.js" type="text/javascript"></script>

	<script src="media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

	<script src="media/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      

	<script src="media/js/bootstrap.min.js" type="text/javascript"></script>

	<!--[if lt IE 9]>

	<script src="media/js/excanvas.min.js"></script>

	<script src="media/js/respond.min.js"></script>  

	<![endif]-->   

	<script src="media/js/jquery.slimscroll.min.js" type="text/javascript"></script>

	<script src="media/js/jquery.blockui.min.js" type="text/javascript"></script>  

	<script src="media/js/jquery.cookie.min.js" type="text/javascript"></script>

	<script src="media/js/jquery.uniform.min.js" type="text/javascript" ></script>

	<!-- END CORE PLUGINS -->

	<script src="media/js/app.js"></script>      

	<script>

		jQuery(document).ready(function() {    

		   App.init();

		});

	</script>

	<!-- END JAVASCRIPTS -->

<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script></body>

<!-- END BODY -->

</html>