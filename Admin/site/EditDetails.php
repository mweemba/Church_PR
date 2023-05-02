<?php include 'includes/level1/header.php';?>
<!-- Header Wrapper End -->
<!-- gc Tittle Wrapper Start -->
<div class="gc_tittle_main_wrapper">
	<div class="gc_tittle_img_overlay"></div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="gc_main_tittle_heading">
			<h2>Member Dashoard</h2>
		</div>
	</div>	
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding_zero">
		<div class="gc_main_tittle_side_nav">
			<ul>
				<li><a href="#">Home</a> &nbsp;&nbsp;&nbsp;&nbsp;></li>
				<li>Member Dashoard</li>
			</ul>
		</div>
	</div>
</div>
<!-- gc Tittle Wrapper End -->
<!-- gc blog category left side Start -->
<div class="gc_blog_categories_main_wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
			
				<div class="row">
					
					<?php 
					 $membersql="SELECT `username`, `password`, `Type`, `UserID`, `memberID`, `level`, `email`, `active`, `pin` FROM `users` WHERE `memberID`='$member_id'"; 
								$q1=mysqli_query($conn,$query)or die(mysqli_error());
        
        
            while ($row = mysqli_fetch_array($q1)) {
            $firstname=$row['First Name'];
					?>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="blog_single_admin_sec_wrapper">
							<div class="blog_single_admin_sec">
								<div class="admin_img_wrapper">
									<img src=" <?php echo $row['Face_picture']; ?>" style="height:131;" alt="admin_img" class="img-responsive"/>
								</div>
								<div class="admin_cont_wrapper">
									<h3>User name : <?php echo $row['username']; ?></h3>
									<p>level: <?php echo $row['Type'] ;?></p>
								</div>
							</div>
						</div>
					</div>
			<?php }?>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="gc_blog_index_post_wrapper">
							<div class="gc_blog_index_date_main_sec gc_blog_single_index_date_cont_wrapper">
							
								<h1> Edit MY Details</h1>
								<?php
															 $sqqlmem="SELECT * FROM `churchmember` WHERE `ID Number`='$member_id'";
 $result=mysqli_query($conn,$sqqlmem);
	 while($rows1=mysqli_fetch_array($result)){
																?>
						
								<!-- PAGE CONTENT BEGINS -->
								
								<form class="form-horizontal" method="POST" enctype="multipart/form-data" action="EditDetails.php" role="form">
								
								
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
																<option value="Yes">Yes</option>
																<option value="No">No</option>
                                                                
															</select>
										</div>
										</div>
										
																				

									<div class="hr hr-24"></div>

																								
										
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
																<option value="0">--Select-Zone</option>
																<option value="1">Misisi Zone A</option>
																<option value="2">Misisi Zone B</option>
																<option value="3">Kamwala South A</option>
																<option value="4">Kamwala South B</option>
																<option value="5">Kamwala South C</option>
																
															</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Member Photo </label>

										<div class="col-sm-9">
											<input type="File" name="facephoto"  value="<?php echo $rows1['Cellphone']?>"  required class="form-control" />
											
										</div>
									</div>
									
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button  class="btn btn-info" name="add_update" type="submit">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Save 
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
											<div id="ResponseMesage"></div>
										</div>
									</div>
								
									


								
								
									
										

<?php
																}
 
 if(isset($_POST['add_update'])){

$employed=$_POST['employed'];
$Profession=$_POST['Profession'];
$ChurchEmployee=$_POST['ChurchEmployee'];
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
   $attach=basename($_FILES["facephoto"]["name"]);
$target_dir = "images/ProfileImages/";
 $attachement1 = $target_dir .round(microtime(true)). basename($_FILES["facephoto"]["name"]);
 
$sqlupdate="UPDATE `churchmember` SET `Employed`='$employed',`Profession`='$Profession',
 `Church Employee`='$ChurchEmployee',`Physical Address 1`='$res1',`Physical Address 2`='$res2',`Physical Address 3`='$res3',`Postal Code`='$postcode1',
 `Postal Address 1`='$Postal1',`Postal Address 2`='$Postal2',`Postal Address 3`='$Postal3',`Postal Code1`='$postcode2',`Telephone`='$Telephone',`Fax`='$fax',
 `Email`='$Email',`Cellphone`='$Cell',`zone`='$Zone',`Face_picture`=IF(LENGTH('$attach')=0,`Face_picture`, '$attachement1') WHERE `ID Number`='$member_id'";
  move_uploaded_file($_FILES["facephoto"]["tmp_name"], $attachement1);

	 if(mysqli_query($conn,$sqlupdate)){
		 
      echo  "<span class='alert alert-success'>The Changes have been successfully Saved</span>";
			
		 
	 }else{
		 
		echo  "<span class='alert alert-danger'>An error Occured</span>";
     
	 }

	 
 }?>				
								
								</form>
								
								<Br><Br><Br>						
								
								
							
							</div>	
						</div>
					</div>
					
					
					</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 gc_blog_category_right_section_main">
				<?php include 'includes/level1/usermenu.php';?>
				</div>
		</div>
	</div>
</div>
<!-- gc blog category left side End -->
<!-- Tweet Feed Wrapper Start -->
<div class="container">
<div class="tc_twtfd_wrapper">
	
		<div class="row">
			<div id="myCarousel" class="vertical-slider carousel vertical slide col-md-12" data-ride="carousel">
				<div class="row">
					<div class="col-md-12 hidden-xs">
						<span data-slide="next" class="btn-vertical-slider fa fa-angle-up tc_up_btn" style="font-size: 28px; top: 0px;"></span>  
					</div>
				</div>
				<br>
				<!-- Carousel items -->
				<div class="carousel-inner">
					<div class="item">
						<div class="row">
							<div class="col-xs-12 col-sm-1 col-md-1">
								<div class="tc_twitter_img_wrapper">
									<img src="images/content/twitter_icon.png" class="twitter icon" alt="twitter icon">
								</div>	
							</div>
							<div class="col-xs-12 col-sm-9 col-md-9">
								<small>- @webstrot </small>
								<p>Font Awesome is always getting a little awesome-er. So here's what's new in the latest version, Font Awesome 4.6.Have some ideas for new features? Help contribute.</p>
								<span class="tc_date_wrapper">29 March 2017</span>
							</div>
						</div>
					</div>
					<div class="item active">
						<div class="row">
							<div class="col-xs-12 col-sm-1 col-md-1">
								<div class="tc_twitter_img_wrapper">
									<img src="images/content/twitter_icon.png" class="twitter icon" alt="twitter icon">
								</div>
							</div>
							<div class="col-xs-12 col-sm-9 col-md-9">
								<small>- @webstrot </small>
								<p>Font Awesome is always getting a little awesome-er. So here's what's new in the latest version, Font Awesome 4.6.Have some ideas for new features? Help contribute.</p>
								<span class="tc_date_wrapper">29 March 2017</span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 hidden-xs">
						<span data-slide="prev" class="btn-vertical-slider fa fa-angle-down tc_down_btn" style="font-size: 28px; top: 0px;"></span>  
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 visible-xs">
						<span data-slide="next" class="btn-vertical-slider fa  fa-angle-right tc_up_btn" style="font-size: 28px; top: 0px;"></span>  
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 visible-xs">
						<span data-slide="prev" class="btn-vertical-slider fa fa-angle-left tc_down_btn" style="font-size: 28px; top: 0px;"></span>  
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Tweet Feed Wrapper End -->
<!-- GC footer Wrapper Start -->
<div class="gc_footer_main_wrapper gc_event_index_footer">
	<div class="gc_footer_img_overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="gc_footer_logo_wrapper">
					<div class="gc_footer_logo">
						<img src="images/header/footer_logo.png" class="img-responsive" alt="footer logo"/>
					</div>	
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="gc_footer_social_icon_wrapper">
					<div class="gc_footer_social_icon">
						<ul>
							<li><a href="#"><i class="fa fa-facebook-square"></i> Facebook</a></li>
							<li><a href="#"><i class="fa fa-twitter-square"></i> Twitter</a></li>
							<li><a href="#"><i class="fa fa-google-plus-square"> Google Plus</i></a></li>
							<li><a href="#"><i class="fa fa-pinterest-square"></i> Pintrest</a></li>
							<li><a href="#"><i class="fa fa-instagram"> Instagram</i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="gc_footer_news_wrapper">
					<div class="gc_footer_news">
						<h3>Newsletter</h3>
						<p>Nam nec tellus a odio tincidunt a auctor a nare odio sed. This is Pshop's version  Offer.</p>
					</div>
					<div class="gc_footer_news_email">
						<h3>Get Our Newletter</h3>
						<input type="email" placeholder="Email"><i class="fa fa-envelope"></i>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="gc_footer_letestnews_wrapper">
					<div class="gc_footer_news">
						<h3>Latest News</h3>
					</div>
					<div class="gc_footer_ln_main_wrapper">
						<div class="gc_footer_ln_img_wrapper">
							<img src="images/content/footer_news1.jpg" class="img-responsive" alt="ln_img"/>
						</div>
						<div class="gc_footer_ln_cont_wrapper">
							<h4>Lord of our life & our salvation</h4>
							<p>12 May 2017</p>
						</div>
					</div>
					<div class="gc_footer_ln_main_wrapper2">
						<div class="gc_footer_ln_img_wrapper">
							<img src="images/content/footer_news2.jpg" class="img-responsive" alt="ln_img"/>
						</div>
						<div class="gc_footer_ln_cont_wrapper">
							<h4>Lord of our life & our salvation</h4>
							<p>12 May 2017</p>
						</div>
					</div>					
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="gc_footer_ul_wrapper">
					<div class="gc_footer_news">
						<h3>Useful Links</h3>
					</div>
					<div class="gc_footer_ul_main_wrapper">
						<div class="gc_footer_ul_wrapper">
							<ul>
								<li><i class="fa fa-hand-o-right"></i> <a href="#">Who we are?</a></li>
								<li><i class="fa fa-hand-o-right"></i> <a href="#">Support and FAQ’s</a></li>
								<li><i class="fa fa-hand-o-right"></i> <a href="#">Payments</a></li>
								<li><i class="fa fa-hand-o-right"></i> <a href="#">Donations Trems</a></li>
								<li><i class="fa fa-hand-o-right"></i> <a href="#">Volunteer</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="gc_footer_insta_wrapper">
					<div class="gc_footer_news">
						<h3>Instragram</h3>
					</div>
					<div class="gc_footer_insta_main_wrapper">
						<div class="gc_footer_insta_wrapper">
							<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
								<div class="gc_footer_insta_img_wrapper">
									<img src="images/content/footer_insta_img1.jpg" class="" alt="insta_img">
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
								<div class="gc_footer_insta_img_wrapper">
									<img src="images/content/footer_insta_img2.jpg" class="" alt="insta_img">
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
								<div class="gc_footer_insta_img_wrapper">
									<img src="images/content/footer_insta_img3.jpg" class="" alt="insta_img">
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 gc_padding_top">
								<div class="gc_footer_insta_img_wrapper">
									<img src="images/content/footer_insta_img4.jpg" class="" alt="insta_img">
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 gc_padding_top">
								<div class="gc_footer_insta_img_wrapper">
									<img src="images/content/footer_insta_img5.jpg" class="" alt="insta_img">
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 gc_padding_top">
								<div class="gc_footer_insta_img_wrapper">
									<img src="images/content/footer_insta_img6.jpg" class="" alt="insta_img">
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="gc_bottom_footer_main_wrapper">
	<div class="container-fluid">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<div class="gc_bottom_footer_copy_wrapper">
				<p>Copyright © 2017 <a href="#">Grace Church</a>. All rights reserved. Design by <a href="#">Webstrot</a></p>
			</div>	
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<div class="gc_bottom_footer_right_wrapper">
				<ul>
					<li><a href="#">PRIVACY POLICY</a></li>
					<li><a href="#">TERMS & CONDITIONS</a></li>
					<li><a href="#">COPYRIGHT  POLICY</a></li>
				</ul>
			</div>	
		</div>
	</div>
</div>
<!-- GC footer Wrapper End -->
<!--main js file start--> 
<script type="text/javascript" src="js/jquery_min.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.menu-aim.js"></script> 
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/jquery.shuffle.min.js"></script>
<script type="text/javascript" src="js/modernizr.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="js/jquery.countTo.js"></script>
<script type="text/javascript" src="js/jquery.inview.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<!--main js file end-->
</body>
</html>