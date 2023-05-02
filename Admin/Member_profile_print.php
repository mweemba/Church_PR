<?php include 'includes/header.php'; 
include 'includes/sidebar.php';
$membidid=$_GET['mid'];
 ?>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="index.php">Home</a>
							</li>

							<li>
								<a href="Member_profile_print.php">Personal profile</a>
							</li>
						
						</ul><!-- /.breadcrumb -->

						  
					</div>

					<div class="page-content">
						 

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="space-6"></div>
								<?php	
															 $sqqlmem="SELECT `Gender`, `Status`, `Title`, `First Name`, `Mid Name`, `Last Name`, `ID Number`, `Date of Birth`, `Employed`, `Profession`, `Church Employee`, `Join Type`, `Join Date`, `Officiating Minister`, `Church Action`, `Conference Action`, `Physical Address 1`, `Physical Address 2`, `Physical Address 3`, `Postal Code`, `Postal Address 1`, `Postal Address 2`, `Postal Address 3`, `Postal Code1`, `Telephone`, `Fax`, `Email`, `Cellphone`, `zone`, `Face_picture`, `Church ID`  FROM `churchmember` WHERE `ID Number`='$membidid'";
 $result=mysqli_query($conn,$sqqlmem);
	 while($rows1=mysqli_fetch_array($result)){
																?>

								<div class="row">
									<div class="col-sm-10 col-sm-offset-1">
										<div class="widget-box transparent">
											<div class="widget-header widget-header-large">
												<h3 class="widget-title grey lighter">
													<i class="ace-icon fa fa-user green"></i>
													Member Profile
												</h3>

												

												<div class="widget-toolbar hidden-480">
													<a href="#">
													<button onclick="window.print();">Print Profile</button>
														<i class="ace-icon fa fa-print"></i>
													</a>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main padding-24">
													<div class="row">
														<div class="col-sm-6">
															<div class="row">
																
																<img style="display: block;
  margin-left: auto;
  margin-right: auto;" height="300" src="<?php  if(!$rows1['Face_picture']){ echo 'images/ProfileImages/user.png'; } else{echo $rows1['Face_picture']; };?>"/><br><br>
															</div>

															<div>
																
																
															</div>
														</div><!-- /.col -->

														<div class="col-sm-6">
															<div class="row">
																<div class="col-xs-11 label label-lg label-success arrowed-in arrowed-right">
																	<b>Member Information</b>
																</div>
															</div>

															<div> 
																<ul class="list-unstyled  spaced">
																
																    <li>
																		<i class="ace-icon fa fa-caret-right green"></i>Title: <b><?php echo $rows1['Title']?></b>
																	</li>
																	<li>
																		<i class="ace-icon fa fa-caret-right green"></i>First Name: <b><?php echo $rows1['First Name']?></b>
																	</li>

																	<li>
																		<i class="ace-icon fa fa-caret-right green"></i>Middle Name: <b><?php echo $rows1['Mid Name']?></b>
																	</li>

																	<li>
																		<i class="ace-icon fa fa-caret-right green"></i>Last Name : <b><?php echo $rows1['Last Name']?></b>
																	</li>
																	<li>
																		<i class="ace-icon fa fa-caret-right green"></i>Gender: <b><?php echo $rows1['Gender']?></b>
																	</li>
																	<li>
																		<i class="ace-icon fa fa-caret-right green"></i>ID number : <b><?php echo $rows1['ID Number']?></b>
																	</li>
																	<li>
																		<i class="ace-icon fa fa-caret-right green"></i>Date of Birth : <b><?php echo $rows1['Date of Birth']?></b>
																	</li>
																	
																	<li>
																		<i class="ace-icon fa fa-caret-right green"></i>Employee? : <b><?php echo $rows1['Employed']?></b>
																	</li>
																	<li>
																		<i class="ace-icon fa fa-caret-right green"></i>Proffesion : <b><?php echo $rows1['Profession']?></b>
																	</li>

																	<li class="divider"></li>

																
																</ul>
															</div>
														</div><!-- /.col -->
													</div><!-- /.row -->
													<div class="row">
														<div class="col-sm-6">
															<div class="row">
																<div class="col-xs-11 label label-lg label-info arrowed-in arrowed-right">
																	<b>Contact Information</b>
																</div>
															</div>

															<div>
																<ul class="list-unstyled spaced">
																
																	<li>
																		<i class="ace-icon fa fa-caret-right blue"></i>Mobile Number:<b><?php echo $rows1['Cellphone']?></b>
																	</li>
																	

																	<li>
																		<i class="ace-icon fa fa-caret-right blue"></i><b>Phone Number: <?php echo $rows1['Telephone']?></b>
																	</li>
																	

																	<li>
																		<i class="ace-icon fa fa-caret-right blue"></i>Email:<b><?php echo $rows1['Email']?></b>
																	</li>
																	<li>
																		<i class="ace-icon fa fa-caret-right blue"></i>Fax:<b><?php echo $rows1['Fax']?></b>
																	</li>

																	<li>
																		<i class="ace-icon fa fa-caret-right blue"></i>
                                                                                          Physical Address:
																		<b><?php echo $rows1['Physical Address 1']?></b>
																		<b><?php echo $rows1['Physical Address 2']?></b>
																		<b><?php echo $rows1['Physical Address 3']?></b>
																	</li>

																	<li class="divider"></li>

																	<li>
																		<i class="ace-icon fa fa-caret-right blue"></i>
																		Postal Address: 
																		<b><?php echo $rows1['Postal Address 1']?></b>
																		<b><?php echo $rows1['Postal Address 2']?></b>
																		<b><?php echo $rows1['Postal Address 3']?></b>
																	</li>
																</ul>
															</div>
														</div><!-- /.col -->

														<div class="col-sm-6">
															<div class="row">
																<div class="col-xs-11 label label-lg label-success arrowed-in arrowed-right">
																	<b>Church Information</b>
																</div>
															</div>

															<div>
															
																<ul class="list-unstyled  spaced">
																	<li>
																		<i class="ace-icon fa fa-caret-right green"></i>Name of Congregation: <b><?php echo $rows1['Postal Address 3']?></b>
																	</li>
																	<li>
																		<i class="ace-icon fa fa-caret-right green"></i>Membership Status:<b><?php echo $rows1['Status']?></b>
																	</li>


																	<li>
																		<i class="ace-icon fa fa-caret-right green"></i>Date Joined:<b><?php echo $rows1['Join Date']?></b>
																	</li>

																	<li>
																		<i class="ace-icon fa fa-caret-right green"></i>Joined Type:<b><?php echo $rows1['Join Type']?></b>
																	</li>
																	<li>
																		<i class="ace-icon fa fa-caret-right green"></i>Biptising Minister:<b><?php echo $rows1['Officiating Minister']?></b>
																	</li>
																	<li>
																		<i class="ace-icon fa fa-caret-right green"></i>Church Action:<b><?php echo $rows1['Church Action']?></b>
																	</li>
																	<li>
																		<i class="ace-icon fa fa-caret-right green"></i>Conference Action:<b><?php echo $rows1['Conference Action']?></b>
																	</li>
																	<li>
																		<i class="ace-icon fa fa-caret-right green"></i>Current Cell group/Zone: <b><?php echo $rows1['Postal Address 3']?></b>
																	</li>

																	<li class="divider"></li>

																	
																</ul>
															</div>
														</div><!-- /.col -->
													</div><!-- /.row -->

													<div class="row">
														<div class="col-sm-6">
															<div class="row">
																<div class="col-xs-11 label label-lg label-info arrowed-in arrowed-right">
																	<b>Spiritual Gifts/Talents</b>
																</div>
															</div>

															<div>
															<br>
															<table class="table table-striped table-bordered">
															<thead>
																<tr>
																	<th class="center">#</th>
																	<th>Gift/Talent Name</th>
																	<th class="hidden-xs">Description</th>
																	
															</thead>

															<tbody>
															<?php	
															 $sqqlmem="SELECT `talent_id`, `talent_name`, `talent Description`, `member_id` FROM `member_talent` WHERE `member_id`='$membidid'";
 $result=mysqli_query($conn,$sqqlmem);
	 while($rows3=mysqli_fetch_array($result)){
																?>
																<tr>
																	<td class="center"><?php echo $rows3['talent_id']; ?></td>

																	<td>
																		<?php echo $rows3['talent_name']; ?>
																	</td>
																	<td class="hidden-xs">
																		<?php echo $rows3['talent Description']; ?>
																	</td>
																	
																</tr>
	 <?php } ?>

															</tbody>
														</table>
													
																
																</div>
														</div><!-- /.col -->

														<div class="col-sm-6">
															<div class="row">
																<div class="col-xs-11 label label-lg label-success arrowed-in arrowed-right">
																	<b>Departments/Participations</b>
																</div>
															</div>

															<div>
															<br>
															<table class="table table-striped table-bordered">
															<thead>
																<tr>
																	<th class="center">#</th>
																	<th>Department</th>
																	<th class="hidden-xs">Description</th>
																	<th class="hidden-xs">Year</th>
																	
															</thead>

															<tbody>
															<?php	
																											 $sqqlmem="SELECT * FROM `member_involvment` 
																											 INNER JOIN `department`  ON `department`.`Id`=`member_involvment`.`dept_id` WHERE `member_id`='$membidid'";
												 $result=mysqli_query($conn,$sqqlmem);
													 while($rows3=mysqli_fetch_array($result)){
																?>
																<tr>
																	<td class="center"><?php echo $rows3['talent_id']; ?></td>

																	<td>
																		<?php echo $rows3['Name']; ?>
																	</td>
																	<td >
																		<?php echo $rows3['description']; ?>
																	</td>
																	<td class="hidden-xs">
																		<?php echo $rows3['year']; ?>
																	</td>
																	
																</tr>
	 <?php } ?>

															</tbody>
														</table>
													
																
																</div>
													
															</div>
														</div><!-- /.col -->
													</div><!-- /.row -->


													<div class="space"></div>

													<div>
														</div>

													<div class="hr hr8 hr-double hr-dotted"></div>

													

													<div class="space-6"></div>
													
												</div>
											</div>
										</div>
									</div>
								</div>
	 <?php } ?>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							
							Code_IT &copy; 2020
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
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

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
	</body>
</html>
