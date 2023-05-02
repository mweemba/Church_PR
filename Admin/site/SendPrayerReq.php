<?php include 'includes/level1/header.php';?>	
<!-- Header Wrapper End -->
<!-- gc Tittle Wrapper Start -->
<div class="gc_tittle_main_wrapper">
	<div class="gc_tittle_img_overlay"></div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="gc_main_tittle_heading">
			<h2>Send Prayer Request</h2>
		</div>
	</div>	
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding_zero">
		<div class="gc_main_tittle_side_nav">
			<ul>
				<li><a href="#">Home</a> &nbsp;&nbsp;&nbsp;&nbsp;></li>
				<li>Send Prayer Request</li>
			</ul>
		</div>
	</div>
</div>
<!-- gc Tittle Wrapper End -->
<!-- GC map Wrapper Start -->

<!-- GC map Wrapper End -->
<!-- gc causes single contect-form section Start -->
<div class="gc_causes_single_contact_form_wrapper gc_contact_section_form_wrapper">
	<div class="container">
		<div class="row">
		<form action="SendPrayerReq.php" method="POST" >
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 gc_contact_heading_main_wrapper">
				<div class="gc_blog_heading_wrapper">
					<div class="gc_blog_heading">
						
						<h1>Send Prayer Request Here</h1>
					</div>
				</div>
			</div>
				
			<div class="gc_causes_single_teatarea">
				<div class="gc_causes_single_forms gc_causes_single_forms2">
					<textarea placeholder="Details" rows="5"  name="Details"required></textarea><i class="fa fa-pencil-square-o"></i>
				</div>
			</div>
				
			
			
				<div class="gc_causes_single_form_btn gc_contact_section_main_btn col-lg-4 col-md-12 col-sm-12 col-xs-12">
					<ul>
						<button type="submit" name="sendreq" id="virtualPost"  class="gc_btn">Send Now</button>
					</ul>
				</div>
				<div class="gc_causes_single_form_btn gc_contact_section_main_btn col-lg-4 col-md-12 col-sm-12 col-xs-12">
					<ul>
						<a href="index.php" class="gc_btn">Cancel</a>
					</ul>
				</div>

			</div>
			<?php  if(isset($_POST['sendreq'])){
            
{
			
		include 'Dbconnect.php';
		

$Details = $_POST['Details'];

 $todaysdate=date('Y-m-d');

  $SQL3 = "INSERT INTO `PrayerRequest`(`id`, `member_id`, `Details`, `Response`, `Status`, `Testimony`, `DateGiven`) VALUES
  ('','$member_id','$Details','','We are praying for you','','$todaysdate')";
  
    //$result3= mysqli_query($conn,$SQL3);
   if(!mysqli_query($conn,$SQL3)){
   echo "<div class='alert alert-danger'>The Request could not be sent due to some error</div>";
  
    		
}else {
 
	  echo '<script>window.location = "UserPrayerReq.php";</script>';
	}
	
}
}


?> 
			</form>
			<div id="loginresponse"></div>
		</div>
	</div>
</div>
<!-- gc causes single contect-form section End -->
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
<?php include 'includes/level1/footer.php';?>