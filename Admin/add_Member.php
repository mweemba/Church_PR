<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; 

$membidid=$_GET['mid'];


?>
			
			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							
							<li class="active">Member</li>
						</ul><!-- /.breadcrumb -->

						  
					</div>

					<div class="page-content">
						 
<?php



 if(!$membidid AND defined('members'.'can_add')){ ?>
						<div class="page-header">
							<h1>
								New Member
								
							</h1>
							<div id="responseID"></div>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
								<form class="form-horizontal" method="POST" action="add_Member.php" role="form">
								<div class="col-xs-6">
								<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-1"> Tittle <span><font color="red">*</font></span></label>

										<div class="col-sm-9">
											<select class="form-control" name ="Tittle">
																<option value="">--Select Tittle--</option>
																<option value="Mr">Mr</option>
																<option value="Mrs">Mrs</option>
                                                                <option value="Dr">Dr</option>
																<option value="Prof">Prof.</option>
															</select>
										</div>
									</div>
                                 <div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-1"> Gender <span><font color="red">*</font></span></label>

										<div class="col-sm-9">
											<select class="form-control" name ="Gender">
																<option value="">--Select Gender--</option>
																<option value="Male">Male</option>
																<option value="Female">Female</option>
                                                                
															</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-1">Status <span><font color="red">*</font></span></label>

										<div class="col-sm-9">
											<select class="form-control" name ="status">
																<option value="">--Select status--</option>
																<option value="Regular Standing">Regular Standing</option>
																<option value="On Sencour">On Sencour</option>
                                                                <option value="Removed">Removed</option>
																
															</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2">First Name <span><font color="red">*</font></span></label>

										<div class="col-sm-9">
											<input type="text" name="FirstName" placeholder="First Name"  class="form-control" required />
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2">Middle Name </label>

										<div class="col-sm-9">
											<input type="text" name="MiddleName" placeholder="Middle Name" class="form-control"  />
											
										</div>
									</div>
                                     <div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Last Name <span><font color="red">*</font></span></label>

										<div class="col-sm-9">
											<input type="text" name="LastName" placeholder="Last Name" class="form-control"  required />
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> ID Number<span><font color="red">*</font></span></label>

										<div class="col-sm-9">
											<input type="text" id="IDNumber" name="IDNumber" placeholder="NRC or Passport #" class="form-control" required  />
											
										</div>
									</div>
									
									
                                 <div class="input-group">
																	<span><label class="col-lg-3 control-label" for="form-field-2"> Date of Birth <span><font color="red">*</font></span></label></span>
																	<div class="col-sm-9">
																	<input class="form-control date-picker" name ="dob" id="id-date-picker-1" type="text" data-date-format="yyyy-mm-dd"></div>
																	<span class="input-group-addon ">
																		<i class="fa fa-calendar bigger-110"></i>
																	</span>
																</div>
																<br>
																<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-1">Employed <span><font color="red">*</font></span></label>

										<div class="col-sm-9">
											<select class="form-control" name="employed" required>
																<option value="">--Select job status--</option>
																<option value="Yes">Yes</option>
																<option value="No">No</option>
                                                                
															</select>
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Profession </label>

										<div class="col-sm-9">
											<input type="text" name="Profession" placeholder="Profession" class="form-control" required  />
											
										</div>
									</div>
									
																<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-1">Are you a  Church Employee <span><font color="red">*</font></span></label>

										<div class="col-sm-9">
											<select class="form-control" name="ChurchEmployee" required >
																<option value="">--Select option--</option>
																<option value="1">Yes</option>
																<option value="2">No</option>
                                                                
															</select>
										</div>
										</div>
										
																<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-1">How did you Join the Church ? <span><font color="red">*</font></span></label>

										<div class="col-sm-9">
											<select class="form-control" name="MethodJoin">
																<option value="">--Select Method--</option>
																<option value="1">Baptism</option>
																<option value="2">Proffession of faith</option>
                                                                
															</select>
										</div>
										</div>
										<div class="input-group">
																	<span><label class="col-lg-3 control-label" for="form-field-2"> Date Joined <span><font color="red">*</font></span></label></span>
																	<div class="col-sm-9">
																	<input class="form-control date-picker" name ="joinDate" id="id-date-picker-1" required  type="text" data-date-format="yyyy-mm-dd"></div>
																	<span class="input-group-addon ">
																		<i class="fa fa-calendar bigger-110"></i>
																	</span>
																</div>
										
									<div class="space-4"></div>
                                   <div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Officiating Minister <span><font color="red">*</font></span></label>

										<div class="col-sm-9">
											<input type="text" name="minister" placeholder="Officiating Minister"  required  class="form-control" />
											
										</div>
									</div>
									

									<div class="space-4"></div>

<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2">Church Action </label>

										<div class="col-sm-9">
											<select class="form-control" name="ChurchAction">
																<option value="">--Select option--</option>
																<option value="removal">removal</option>
																<option value="Senciour">Senciour<option>
                                                                
															</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Conference Action </label>

										<div class="col-sm-9">
											<select class="form-control" name="ConfAction">
																<option value="">--Select option--</option>
																<option value="removal">removal</option>
																<option value="Senciour">Senciour<option>
                                                                
															</select>
										</div>
									</div>
									
					

									<div class="hr hr-24"></div>

																								</div>
																								<div class="col-xs-6">
										
											<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2">Resident Address Line 1 <span><font color="red">*</font></span></label>

										<div class="col-sm-9">
											<input type="text" name="res1" placeholder="Resident Address Line 1 " class="form-control" required  />
											
										</div>
										</div><div class="space-4"></div>													<div class="form-group">
										<label class="col-sm-3 control-label" for="form-field-2">Resident Address Line 2 <span><font color="red">*</font></span></label>

										<div class="col-sm-9">
											<input type="text" name="res2" placeholder="Resident Address Line 2" class="form-control" required />
											
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2">Resident Address Line 3 </label>

										<div class="col-sm-9">
											<input type="text" name="res3" placeholder="Resident Address Line 3" class="form-control" />
											
										</div>
									</div>
																								 
                                     <div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Postal Code <span><font color="red">*</font></span></label>

										<div class="col-sm-9">
											<input type="text" name="postcode1" placeholder="Postal Code" class="form-control" required />
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2">Postal Address Line 1<span><font color="red">*</font></span></label>

										<div class="col-sm-9">
											<input type="text" name="Postal1" placeholder="Postal Address Line 1" class="form-control" required />
											
										</div>
										</div><div class="space-4"></div>
										<div class="form-group">
										<label class="col-sm-3 control-label" for="form-field-2">Postal Address Line 2<span><font color="red">*</font></span></label>

										<div class="col-sm-9">
											<input type="text" name="Postal2" placeholder="Postal Address Line 2" class="form-control" required />
											
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2">Postal Address Line 3</label>

										<div class="col-sm-9">
											<input type="text" name="Postal3" placeholder="Postal Address Line 3" class="form-control" />
											
										</div>
									</div>
                                     <div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Postal Code <span><font color="red">*</font></span></label>

										<div class="col-sm-9">
											<input type="text" name="postcode2" placeholder="Postal Code" class="form-control" required  />
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Telephone </label>

										<div class="col-sm-9">
											<input type="text" name="Telephone" placeholder="username" class="form-control" />
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> fax</label>

										<div class="col-sm-9">
											<input type="text" name="fax" placeholder="fax" class="form-control" />
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Email </label>

										<div class="col-sm-9">
											<input type="text" name="Email" placeholder="Email " class="form-control" />
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Cell Phone number <span><font color="red">*</font></span></label>

										<div class="col-sm-9">
											<input type="text" name="CellNo" placeholder="Cell Phone number "  required class="form-control" />
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-1"> Zone <span><font color="red">*</font></span></label>

										<div class="col-sm-9">
											<select class="form-control" name="Zone" required>
																<option value="">--Select Zone--</option>
															<?php	$sql1="SELECT `Zone_id`, `Name`, `Area`, `Comment` FROM `zones`";
																$result1=mysqli_query($conn,$sql1);
																while($rows1=mysqli_fetch_array($result1)){
																?>
																<option value="<?php echo $rows1['Zone_id'];?>"> <?php echo $rows1['Name'];?></option>
																<?php } ?>
																
															</select>
										</div>
									</div>
									
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button  class="btn btn-info" name="add_btn" type="submit">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Add user
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
											<div id="ResponseMesage"></div>
										</div>
									</div>
									</div>
									


														
								</form>
								
								
									
									</div>
										</div>
<?php 
      if(isset($_POST['add_btn'])){
$Gender=$_POST['Gender'];
$status=$_POST['status'];
$Tittle=$_POST['Tittle'];
$FirstName=$_POST['FirstName'];
$MiddleName=$_POST['MiddleName'];
$LastName=$_POST['LastName'];
$IDNumber=$_POST['IDNumber'];
$dob=$_POST['dob'];
$employed=$_POST['employed'];
$Profession=$_POST['Profession'];
$ChurchEmployee=$_POST['ChurchEmployee'];
$MethodJoin=$_POST['MethodJoin'];
$Minister=$_POST['minister'];
$ChurchAction=$_POST['ChurchAction'];
$ConferenceAction=$_POST['ConfAction'];
$DateJoin=$_POST['joinDate'];
$res1=$_POST['res1'];
$res2=$_POST['res2'];
$res3=$_POST['res3'];
$postcode1=$_POST['postcode1'];
$Postal1=$_POST['Postal1'];
$Postal2=$_POST['Postal2'];
$Postal3=$_POST['Postal3'];
$postcode2=$_POST['postcode2'];
$Telephone=$_POST['Telephone'];
$fax=$_POST['fax'];
$Email=$_POST['Email'];
$Cell=$_POST['CellNo'];
$Zone=$_POST['Zone'];

$membSQL="INSERT INTO `churchmember`(`Gender`, `Status`, `Title`, `First Name`, `Mid Name`, `Last Name`, `ID Number`, `Date of Birth`, `Employed`, `Profession`,
 `Church Employee`, `Join Type`, `Join Date`, `Officiating Minister`, `Church Action`, `Conference Action`, `Physical Address 1`, `Physical Address 2`, `Physical Address 3`,
 `Postal Code`, `Postal Address 1`, `Postal Address 2`, `Postal Address 3`, `Postal Code1`, `Telephone`, `Fax`, `Email`, `Cellphone`, `zone`, `Face_picture`) VALUES 
 ('$Gender','$status','$Tittle','$FirstName','$MiddleName','$LastName','$IDNumber','$dob','$employed','$Profession','$ChurchEmployee','$MethodJoin','$DateJoin','$Minister','$ChurchAction','$ConferenceAction',
	  '$res1','$res2','$res3','$postcode1','$Postal1','$Postal2','$Postal3','$postcode2','$Telephone','$fax','$Email','$Cell','$Zone','')";
	  

	 if(mysqli_query($conn,$membSQL)){
		 
     echo  "<script type\"text/javascrpassipt\" >".
  		"alert('The member has been added successfully Saved');".
    		"</script>";
		 
	 }else{
		 
		 
     echo  "<script type\"text/javascrpassipt\" >".
  		"alert('There was an error');".
    		"</script>";
	 }

	 
	  }
	  


 } elseif($membidid AND defined('members'.'can_edit')) { 


?>
 
<div class="page-header">
							<h1>
								Edit Member
								
							</h1>
							<div id="responseID"></div>
						</div><!-- /.page-header -->
<?php
															 $sqqlmem="SELECT * FROM `churchmember` WHERE `ID Number`='$membidid'";
 $result=mysqli_query($conn,$sqqlmem);
	 while($rows1=mysqli_fetch_array($result)){
																?>
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
								<form class="form-horizontal" method="POST" action="add_Member.php?mid=<?php echo $rows1['ID Number']?>" role="form">
								<div class="col-xs-6">
								<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-1"> Tittle </label>

										<div class="col-sm-9">
											<select class="form-control" name ="Tittle">
																<option value="<?php echo $rows1['Title']?>"><?php echo $rows1['Title']?></option>
																<option value="Mr">Mr</option>
																<option value="Mrs">Mrs</option>
                                                                <option value="Dr">Dr</option>
																<option value="Prof">Prof.</option>
															</select>
										</div>
									</div>
                                 <div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-1"> Gender </label>

										<div class="col-sm-9">
											<select class="form-control" name ="Gender">
																<option value="<?php echo $rows1['Gender']?>"><?php echo $rows1['Gender']?></option>
																<option value="Male">Male</option>
																<option value="Female">Female</option>
                                                                
															</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-1">Status </label>

										<div class="col-sm-9">
											<select class="form-control" name ="status">
																<option value="<?php echo $rows1['Status']?>"><?php echo $rows1['Status']?></option>
																<option value="Regular Standing">Regular Standing</option>
																<option value="On Sencour">On Sencour</option>
                                                                <option value="Removed">Removed</option>
																
															</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2">First Name </label>

										<div class="col-sm-9">
											<input type="text" name="FirstName" placeholder="First Name"  value="<?php echo $rows1['First Name']?>" class="form-control" required /><span><font color="red">*</font></span>
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2">Middle Name </label>

										<div class="col-sm-9">
											<input type="text" name="MiddleName" placeholder="Middle Name"  value="<?php echo $rows1['Mid Name']?>" class="form-control"  />
											
										</div>
									</div>
                                     <div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Last Name </label>

										<div class="col-sm-9">
											<input type="text" name="LastName" placeholder="Last Name" value="<?php echo $rows1['Last Name']?>" class="form-control"  required />
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> ID Number</label>

										<div class="col-sm-9">
											<input type="text" id="IDNumber" name="IDNumber" value="<?php echo $rows1['ID Number']?>" placeholder="NRC or Passport #" class="form-control" required  />
											
										</div>
									</div>
									
									
                                 <div class="input-group">
																	<span><label class="col-lg-3 control-label" for="form-field-2"> Date of Birth </label></span>
																	<div class="col-sm-9">
																	<input class="form-control date-picker" value="<?php echo $rows1['Date of Birth']?>"  name ="dob" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy"></div>
																	<span class="input-group-addon ">
																		<i class="fa fa-calendar bigger-110"></i>
																	</span>
																</div>
																<br>
																<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-1">Employed </label>

										<div class="col-sm-9">
											<select class="form-control" name="employed">
																<option value="<?php echo $rows1['Employed']?>"><?php echo $rows1['Employed']?></option>
																<option value="Yes">Yes</option>
																<option value="No">No</option>
                                                                
															</select>
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Profession </label>

										<div class="col-sm-9">
											<input type="text" name="Profession" placeholder="Profession"  value="<?php echo $rows1['Profession']?>" class="form-control" required  />
											
										</div>
									</div>
									
																<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-1">Are you a  Church Employee </label>

										<div class="col-sm-9">
											<select class="form-control" name="ChurchEmployee">
																<option value="<?php echo $rows1['Church Employee']?>"><?php echo $rows1['Church Employee']?></option>
																<option value="1">Yes</option>
																<option value="2">No</option>
                                                                
															</select>
										</div>
										</div>
										
																<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-1">How did you Join the Church ?</label>

										<div class="col-sm-9">
											<select class="form-control" name="MethodJoin">
																<option value="<?php echo $rows1['Join Type']?>"><?php echo $rows1['Join Type']?></option>
																<option value="1">Baptism</option>
																<option value="2">Proffession of faith</option>
                                                                
															</select>
										</div>
										</div>
										<div class="input-group">
																	<span><label class="col-lg-3 control-label" for="form-field-2"> Date Joined </label></span>
																	<div class="col-sm-9">
																	<input class="form-control date-picker"  value="<?php echo $rows1['Join Date']?>"  name ="joinDate" id="id-date-picker-1" required  type="text" data-date-format="dd-mm-yyyy"></div>
																	<span class="input-group-addon ">
																		<i class="fa fa-calendar bigger-110"></i>
																	</span>
																</div>
										
									<div class="space-4"></div>
                                   <div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Officiating Minister </label>

										<div class="col-sm-9">
											<input type="text" name="minister"  value="<?php echo $rows1['Officiating Minister']?>" placeholder="Officiating Minister"  required  class="form-control" />
											
										</div>
									</div>
									

									<div class="space-4"></div>

<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2">Church Action </label>

										<div class="col-sm-9">
											<select class="form-control" name="ChurchAction">
																<option value="<?php echo $rows1['Church Action']?>"><?php echo $rows1['Church Action']?></option>
																<option value="removal">removal</option>
																<option value="Senciour">Senciour<option>
                                                                
															</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Conference Action </label>

										<div class="col-sm-9">
											<select class="form-control" name="ConfAction">
																<option value="<?php echo $rows1['Conference Action']?>"><?php echo $rows1['Conference Action']?></option>
																<option value="removal">removal</option>
																<option value="Senciour">Senciour<option>
                                                                
															</select>
										</div>
									</div>
									
					

									<div class="hr hr-24"></div>

																								</div>
																								<div class="col-xs-6">
										
											<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2">Resident Address Line 1 </label>

										<div class="col-sm-9">
											<input type="text" name="res1" placeholder="Resident Address Line 1 "  value="<?php echo $rows1['Physical Address 1']?>" class="form-control" required  />
											
										</div>
										</div><div class="space-4"></div>													<div class="form-group">
										<label class="col-sm-3 control-label" for="form-field-2">Resident Address Line 2 </label>

										<div class="col-sm-9">
											<input type="text" name="res2" placeholder="Resident Address Line 2"  value="<?php echo $rows1['Physical Address 2']?>" class="form-control" />
											
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2">Resident Address Line 3 </label>

										<div class="col-sm-9">
											<input type="text" name="res3" placeholder="Resident Address Line 3"  value="<?php echo $rows1['Physical Address 3']?>" class="form-control" />
											
										</div>
									</div>
																								 
                                     <div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Postal Code </label>

										<div class="col-sm-9">
											<input type="text" name="postcode1" placeholder="Postal Code"  value="<?php echo $rows1['Postal Code']?>" class="form-control" required />
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2">Postal Address Line 1</label>

										<div class="col-sm-9">
											<input type="text" name="Postal1" placeholder="Postal Address Line 1"  value="<?php echo $rows1['Postal Address 1']?>" class="form-control" required />
											
										</div>
										</div><div class="space-4"></div>
										<div class="form-group">
										<label class="col-sm-3 control-label" for="form-field-2">Postal Address Line 2</label>

										<div class="col-sm-9">
											<input type="text" name="Postal2" placeholder="Postal Address Line 2"  value="<?php echo $rows1['Postal Address 2']?>" class="form-control" />
											
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2">Postal Address Line 3</label>

										<div class="col-sm-9">
											<input type="text" name="Postal3" placeholder="Postal Address Line 3"   value="<?php echo $rows1['Postal Address 3']?>"class="form-control" />
											
										</div>
									</div>
                                     <div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Postal Code </label>

										<div class="col-sm-9">
											<input type="text" name="postcode2" placeholder="Postal Code" class="form-control" value="<?php echo $rows1['Postal Code1']?>" required  />
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Telephone </label>

										<div class="col-sm-9">
											<input type="text" name="Telephone" placeholder="username"  value="<?php echo $rows1['Telephone']?>" class="form-control" />
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Fax</label>

										<div class="col-sm-9">
											<input type="text" name="fax" placeholder="fax"  value="<?php echo $rows1['Fax']?>" class="form-control" />
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Email </label>

										<div class="col-sm-9">
											<input type="text" name="Email" placeholder="Email "  value="<?php echo $rows1['Email']?>" class="form-control" />
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Cell Phone number </label>

										<div class="col-sm-9">
											<input type="text" name="CellNo" placeholder="Cell Phone number "  value="<?php echo $rows1['Cellphone']?>"  required class="form-control" />
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-1"> Zone </label>

										<div class="col-sm-9">
											<select class="form-control" name="Zone">
																<option value="<?php echo $rows1['Title']?>"><?php echo $rows1['Title']?></option>
															
																
															</select>
										</div>
									</div>
									
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button  class="btn btn-info" name="add_update" type="submit">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Save 
											</button>

											&nbsp; &nbsp; &nbsp;
											<a href="Members.php"><button class="btn" >
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Back to Members
											</button></a>
											<div id="ResponseMesage"></div>
										</div>
									</div>
									</div>
									


														
								</form>
								
								
								
									
										</div>

<?php
																}
																
 }
else{
																	include 'error_permissions.php';
																}

 if(isset($_POST['add_update'])){
$Gender=$_POST['Gender'];
$status=$_POST['status'];
$Tittle=$_POST['Tittle'];
$FirstName=$_POST['FirstName'];
$MiddleName=$_POST['MiddleName'];
$LastName=$_POST['LastName'];
$IDNumber=$_POST['IDNumber'];
$dob=$_POST['dob'];
$employed=$_POST['employed'];
$Profession=$_POST['Profession'];
$ChurchEmployee=$_POST['ChurchEmployee'];
$MethodJoin=$_POST['MethodJoin'];
$Minister=$_POST['minister'];
$ChurchAction=$_POST['ChurchAction'];
$ConferenceAction=$_POST['ConfAction'];
$DateJoin=$_POST['joinDate'];
$res1=$_POST['res1'];
$res2=$_POST['res2'];
$res3=$_POST['res3'];
$postcode1=$_POST['postcode1'];
$Postal1=$_POST['Postal1'];
$Postal2=$_POST['Postal2'];
$Postal3=$_POST['Postal3'];
$postcode2=$_POST['postcode2'];
$Telephone=$_POST['Telephone'];
$fax=$_POST['fax'];
$Email=$_POST['Email'];
$Cell=$_POST['CellNo'];
$Zone=$_POST['Zone'];

 
$sqlupdate="UPDATE `churchmember` SET `Gender`='$Gender',`Status`='$status',`Title`='$Tittle',`First Name`='$FirstName',`Mid Name`='$MiddleName',`Last Name`='$LastName',`Date of Birth`='$dob',`Employed`='$employed',`Profession`='$Profession',
 `Church Employee`='$ChurchEmployee',`Join Type`='$MethodJoin',`Join Date`='$DateJoin',`Officiating Minister`='$Minister',`Church Action`='$ChurchAction',
 `Conference Action`='$ConferenceAction',`Physical Address 1`='$res1',`Physical Address 2`='$res2',`Physical Address 3`='$res3',`Postal Code`='$postcode1',
 `Postal Address 1`='$Postal1',`Postal Address 2`='$Postal2',`Postal Address 3`='$Postal3',`Postal Code1`='$postcode2',`Telephone`='$Telephone',`Fax`='$fax',
 `Email`='$Email',`Cellphone`='$Cell',`zone`='$Zone',`Face_picture`='' WHERE `ID Number`='$membidid'";
 

	 if(mysqli_query($conn,$sqlupdate)){
		 
      echo  "<script type\"text/javascrpassipt\" >".
  		"alert('The Changes have been successfully Saved);".
    		"</script>";
			
		 
	 }else{
		 
		echo  "<script type\"text/javascrpassipt\" >".
  		"alert('There was an error');".
    		"</script>";
     
	 }

	 
 }?>				
										</div>
									</div>
								


								
													</div>
												</div>
											</div>

											
										</div>
									</div>
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
		

			<<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder"></span>
							Code It &copy; 2020
						</span>

						&nbsp; &nbsp;
						
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="assets/js/jquery-ui.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/chosen.jquery.min.js"></script>
		<script src="assets/js/spinbox.min.js"></script>
		<script src="assets/js/bootstrap-datepicker.min.js"></script>
		<script src="assets/js/bootstrap-timepicker.min.js"></script>
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/daterangepicker.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		<script src="assets/js/bootstrap-colorpicker.min.js"></script>
		<script src="assets/js/jquery.knob.min.js"></script>
		<script src="assets/js/autosize.min.js"></script>
		<script src="assets/js/jquery.inputlimiter.min.js"></script>
		<script src="assets/js/jquery.maskedinput.min.js"></script>
		<script src="assets/js/bootstrap-tag.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
      <script src="scripts/Reciept.js"></script>
	   <script src="scripts/authent.js"></script>
		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				$('#id-disable-check').on('click', function() {
					var inp = $('#form-input-readonly').get(0);
					if(inp.hasAttribute('disabled')) {
						inp.setAttribute('readonly' , 'true');
						inp.removeAttribute('disabled');
						inp.value="This text field is readonly!";
					}
					else {
						inp.setAttribute('disabled' , 'disabled');
						inp.removeAttribute('readonly');
						inp.value="This text field is disabled!";
					}
				});
			
			
				if(!ace.vars['touch']) {
					$('.chosen-select').chosen({allow_single_deselect:true}); 
					//resize the chosen on window resize
			
					$(window)
					.off('resize.chosen')
					.on('resize.chosen', function() {
						$('.chosen-select').each(function() {
							 var $this = $(this);
							 $this.next().css({'width': $this.parent().width()});
						})
					}).trigger('resize.chosen');
					//resize chosen on sidebar collapse/expand
					$(document).on('settings.ace.chosen', function(e, event_name, event_val) {
						if(event_name != 'sidebar_collapsed') return;
						$('.chosen-select').each(function() {
							 var $this = $(this);
							 $this.next().css({'width': $this.parent().width()});
						})
					});
			
			
					$('#chosen-multiple-style .btn').on('click', function(e){
						var target = $(this).find('input[type=radio]');
						var which = parseInt(target.val());
						if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
						 else $('#form-field-select-4').removeClass('tag-input-style');
					});
				}
			
			
				$('[data-rel=tooltip]').tooltip({container:'body'});
				$('[data-rel=popover]').popover({container:'body'});
			
				autosize($('textarea[class*=autosize]'));
				
				$('textarea.limited').inputlimiter({
					remText: '%n character%s remaining...',
					limitText: 'max allowed : %n.'
				});
			
				$.mask.definitions['~']='[+-]';
				$('.input-mask-date').mask('99/99/9999');
				$('.input-mask-phone').mask('(999) 999-9999');
				$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
				$(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
			
			
			
				$( "#input-size-slider" ).css('width','200px').slider({
					value:1,
					range: "min",
					min: 1,
					max: 8,
					step: 1,
					slide: function( event, ui ) {
						var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
						var val = parseInt(ui.value);
						$('#form-field-4').attr('class', sizing[val]).attr('placeholder', '.'+sizing[val]);
					}
				});
			
				$( "#input-span-slider" ).slider({
					value:1,
					range: "min",
					min: 1,
					max: 12,
					step: 1,
					slide: function( event, ui ) {
						var val = parseInt(ui.value);
						$('#form-field-5').attr('class', 'col-xs-'+val).val('.col-xs-'+val);
					}
				});
			
			
				
				//"jQuery UI Slider"
				//range slider tooltip example
				$( "#slider-range" ).css('height','200px').slider({
					orientation: "vertical",
					range: true,
					min: 0,
					max: 100,
					values: [ 17, 67 ],
					slide: function( event, ui ) {
						var val = ui.values[$(ui.handle).index()-1] + "";
			
						if( !ui.handle.firstChild ) {
							$("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>")
							.prependTo(ui.handle);
						}
						$(ui.handle.firstChild).show().children().eq(1).text(val);
					}
				}).find('span.ui-slider-handle').on('blur', function(){
					$(this.firstChild).hide();
				});
				
				
				$( "#slider-range-max" ).slider({
					range: "max",
					min: 1,
					max: 10,
					value: 2
				});
				
				$( "#slider-eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
					// read initial values from markup and remove that
					var value = parseInt( $( this ).text(), 10 );
					$( this ).empty().slider({
						value: value,
						range: "min",
						animate: true
						
					});
				});
				
				$("#slider-eq > span.ui-slider-purple").slider('disable');//disable third item
			
				
				$('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
				//pre-show a file name, for example a previously selected file
				//$('#id-input-file-1').ace_file_input('show_file_list', ['myfile.txt'])
			
			
				$('#id-input-file-3').ace_file_input({
					style: 'well',
					btn_choose: 'Drop files here or click to choose',
					btn_change: null,
					no_icon: 'ace-icon fa fa-cloud-upload',
					droppable: true,
					thumbnail: 'small'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
				
				//$('#id-input-file-3')
				//.ace_file_input('show_file_list', [
					//{type: 'image', name: 'name of image', path: 'http://path/to/image/for/preview'},
					//{type: 'file', name: 'hello.txt'}
				//]);
			
				
				
			
				//dynamically change allowed formats by changing allowExt && allowMime function
				$('#id-file-format').removeAttr('checked').on('change', function() {
					var whitelist_ext, whitelist_mime;
					var btn_choose
					var no_icon
					if(this.checked) {
						btn_choose = "Drop images here or click to choose";
						no_icon = "ace-icon fa fa-picture-o";
			
						whitelist_ext = ["jpeg", "jpg", "png", "gif" , "bmp"];
						whitelist_mime = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/bmp"];
					}
					else {
						btn_choose = "Drop files here or click to choose";
						no_icon = "ace-icon fa fa-cloud-upload";
						
						whitelist_ext = null;//all extensions are acceptable
						whitelist_mime = null;//all mimes are acceptable
					}
					var file_input = $('#id-input-file-3');
					file_input
					.ace_file_input('update_settings',
					{
						'btn_choose': btn_choose,
						'no_icon': no_icon,
						'allowExt': whitelist_ext,
						'allowMime': whitelist_mime
					})
					file_input.ace_file_input('reset_input');
					
					file_input
					.off('file.error.ace')
					.on('file.error.ace', function(e, info) {
						//console.log(info.file_count);//number of selected files
						//console.log(info.invalid_count);//number of invalid files
						//console.log(info.error_list);//a list of errors in the following format
						
						//info.error_count['ext']
						//info.error_count['mime']
						//info.error_count['size']
						
						//info.error_list['ext']  = [list of file names with invalid extension]
						//info.error_list['mime'] = [list of file names with invalid mimetype]
						//info.error_list['size'] = [list of file names with invalid size]
						
						
						/**
						if( !info.dropped ) {
							//perhapse reset file field if files have been selected, and there are invalid files among them
							//when files are dropped, only valid files will be added to our file array
							e.preventDefault();//it will rest input
						}
						*/
						
						
						//if files have been selected (not dropped), you can choose to reset input
						//because browser keeps all selected files anyway and this cannot be changed
						//we can only reset file field to become empty again
						//on any case you still should check files with your server side script
						//because any arbitrary file can be uploaded by user and it's not safe to rely on browser-side measures
					});
					
					
					/**
					file_input
					.off('file.preview.ace')
					.on('file.preview.ace', function(e, info) {
						console.log(info.file.width);
						console.log(info.file.height);
						e.preventDefault();//to prevent preview
					});
					*/
				
				});
			
				$('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
				.closest('.ace-spinner')
				.on('changed.fu.spinbox', function(){
					//console.log($('#spinner1').val())
				}); 
				$('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, touch_spinner: true, icon_up:'ace-icon fa fa-caret-up bigger-110', icon_down:'ace-icon fa fa-caret-down bigger-110'});
				$('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'ace-icon fa fa-plus bigger-110', icon_down:'ace-icon fa fa-minus bigger-110', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
				$('#spinner4').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'ace-icon fa fa-plus', icon_down:'ace-icon fa fa-minus', btn_up_class:'btn-purple' , btn_down_class:'btn-purple'});
			
				//$('#spinner1').ace_spinner('disable').ace_spinner('value', 11);
				//or
				//$('#spinner1').closest('.ace-spinner').spinner('disable').spinner('enable').spinner('value', 11);//disable, enable or change value
				//$('#spinner1').closest('.ace-spinner').spinner('value', 0);//reset to 0
			
			
				//datepicker plugin
				//link
				$('.date-picker').datepicker({
					autoclose: true,
					todayHighlight: true
				})
				//show datepicker when clicking on the icon
				.next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
			
				//or change it into a date range picker
				$('.input-daterange').datepicker({autoclose:true});
			
			
				//to translate the daterange picker, please copy the "examples/daterange-fr.js" contents here before initialization
				$('input[name=date-range-picker]').daterangepicker({
					'applyClass' : 'btn-sm btn-success',
					'cancelClass' : 'btn-sm btn-default',
					locale: {
						applyLabel: 'Apply',
						cancelLabel: 'Cancel',
					}
				})
				.prev().on(ace.click_event, function(){
					$(this).next().focus();
				});
			
			
				$('#timepicker1').timepicker({
					minuteStep: 1,
					showSeconds: true,
					showMeridian: false,
					disableFocus: true,
					icons: {
						up: 'fa fa-chevron-up',
						down: 'fa fa-chevron-down'
					}
				}).on('focus', function() {
					$('#timepicker1').timepicker('showWidget');
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
				
			
				
				if(!ace.vars['old_ie']) $('#date-timepicker1').datetimepicker({
				 //format: 'MM/DD/YYYY h:mm:ss A',//use this option to display seconds
				 icons: {
					time: 'fa fa-clock-o',
					date: 'fa fa-calendar',
					up: 'fa fa-chevron-up',
					down: 'fa fa-chevron-down',
					previous: 'fa fa-chevron-left',
					next: 'fa fa-chevron-right',
					today: 'fa fa-arrows ',
					clear: 'fa fa-trash',
					close: 'fa fa-times'
				 }
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
			
				$('#colorpicker1').colorpicker();
				//$('.colorpicker').last().css('z-index', 2000);//if colorpicker is inside a modal, its z-index should be higher than modal'safe
			
				$('#simple-colorpicker-1').ace_colorpicker();
				//$('#simple-colorpicker-1').ace_colorpicker('pick', 2);//select 2nd color
				//$('#simple-colorpicker-1').ace_colorpicker('pick', '#fbe983');//select #fbe983 color
				//var picker = $('#simple-colorpicker-1').data('ace_colorpicker')
				//picker.pick('red', true);//insert the color if it doesn't exist
			
			
				$(".knob").knob();
				
				
				var tag_input = $('#form-field-tags');
				try{
					tag_input.tag(
					  {
						placeholder:tag_input.attr('placeholder'),
						//enable typeahead by specifying the source array
						source: ace.vars['US_STATES'],//defined in ace.js >> ace.enable_search_ahead
						/**
						//or fetch data from database, fetch those that match "query"
						source: function(query, process) {
						  $.ajax({url: 'remote_source.php?q='+encodeURIComponent(query)})
						  .done(function(result_items){
							process(result_items);
						  });
						}
						*/
					  }
					)
			
					//programmatically add/remove a tag
					var $tag_obj = $('#form-field-tags').data('tag');
					$tag_obj.add('Programmatically Added');
					
					var index = $tag_obj.inValues('some tag');
					$tag_obj.remove(index);
				}
				catch(e) {
					//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
					tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
					//autosize($('#form-field-tags'));
				}
				
				
				/////////
				$('#modal-form input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'ace-icon fa fa-cloud-upload',
					droppable:true,
					thumbnail:'large'
				})
				
				//chosen plugin inside a modal will have a zero width because the select element is originally hidden
				//and its width cannot be determined.
				//so we set the width after modal is show
				$('#modal-form').on('shown.bs.modal', function () {
					if(!ace.vars['touch']) {
						$(this).find('.chosen-container').each(function(){
							$(this).find('a:first-child').css('width' , '210px');
							$(this).find('.chosen-drop').css('width' , '210px');
							$(this).find('.chosen-search input').css('width' , '200px');
						});
					}
				})
				/**
				//or you can activate the chosen plugin after modal is shown
				//this way select element becomes visible with dimensions and chosen works as expected
				$('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
				*/
			
				
				
				$(document).one('ajaxloadstart.page', function(e) {
					autosize.destroy('textarea[class*=autosize]')
					
					$('.limiterBox,.autosizejs').remove();
					$('.daterangepicker.dropdown-menu,.colorpicker.dropdown-menu,.bootstrap-datetimepicker-widget.dropdown-menu').remove();
				});
			
			});
		</script>
	</body>
</html>
