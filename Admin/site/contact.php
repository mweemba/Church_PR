<?php include 'includes/level1/header.php'?>
<!-- Header Wrapper End -->
<!-- gc Tittle Wrapper Start -->
<div class="gc_tittle_main_wrapper">
	<div class="gc_tittle_img_overlay"></div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="gc_main_tittle_heading">
			<h2>Contact Us</h2>
		</div>
	</div>	
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding_zero">
		<div class="gc_main_tittle_side_nav">
			<ul>
				<li><a href="#">Home</a> &nbsp;&nbsp;&nbsp;&nbsp;></li>
				<li>Contact Us</li>
			</ul>
		</div>
	</div>
</div>
<!-- gc Tittle Wrapper End -->
<!-- GC map Wrapper Start -->
<div class="gc_map_main_wrapper gc_contact_map_wrapper">
	<div class="container">
		<div class="gc_get_box_wrapper">
			<div class="gc_get_heading_icon">
				<img src="images/header/map_icon.png" alt="map_icon"/>
			</div>
			<div class="gc_get_heading">
				<h1>Get In Touch</h1>
			</div>
			<div class="gc_get_pera">
				
			</div>
			<div class="gc_map_add_wrapper gc_map_add_wrapper1">
				<div class="gc_map_location_icon_wrapper">
					<i class="fa fa-map-marker"></i>
				</div>
				<div class="gc_map_location_icon_cont_wrapper">
					<h3>Along Tokyo way, kamwala South. Box 30787</h3>
				</div>
			</div>	
			<div class="gc_map_add_wrapper gc_map_add_wrapper2">
				<div class="gc_map_location_icon_wrapper">
					<i class="fa fa-phone"></i>
				</div>
				<div class="gc_map_location_icon_cont_wrapper">
					<h3> +2609654566</h3>
				</div>
			</div>
			<div class="gc_map_add_wrapper gc_map_add_wrapper3">
				<div class="gc_map_location_icon_wrapper">
					<i class="fa fa-envelope"></i>
				</div>
				<div class="gc_map_location_icon_cont_wrapper">
					<h3> <a href="#">info@kamwalasda.com</a></h3>
				</div>
			</div>
		</div>
		<div class="gc_right_map_main_wrapper">
			<div id="map" style="width:100%; float:left; height:450px;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7691.692844781167!2d28.283896514450422!3d-15.43883817308364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc5101c63dd23bfd6!2sKamwala+SDA+Church!5e0!3m2!1sen!2szm!4v1540377340030" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
			<div class="gc_map_label_wrapper">
				<p><a href="#">Go to Map</a></p>
			</div>
		</div>
	</div>
</div>
<!-- GC map Wrapper End -->
<!-- gc causes single contect-form section Start -->
<div class="gc_causes_single_contact_form_wrapper gc_contact_section_form_wrapper">
	<div class="container">
		<div class="row">
		<?php  if(isset($_POST['Send'])){
            
{
			
		include 'Dbconnect.php';
		

$Name = $_POST['Name'];
$Email = $_POST['Email'];
$message = $_POST['message'];
$recieverEmail = 'mw33mba@gmail.com';
 $todaysdate=date('Y-m-d');

  $SQL3 = "INSERT INTO `PrayerRequest`(`id`, `member_id`, `Details`, `Response`, `Status`, `Testimony`, `DateGiven`) VALUES
  ('','$member_id','$Details','','We are praying for you','','$todaysdate')";
  
    //$result3= mysqli_query($conn,$SQL3);
   if(!mysqli_query($conn,$SQL3)){
   echo "<div class='alert alert-danger'>The Request could not be sent due to some error</div>";
  
    		
}else {
 
	  echo "<div class='alert alert-success'>Your message has been sent, Thank you for contacting us<br> We will get back to you as soon as possible</div>";
	}
	
}
}


?> 
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 gc_contact_heading_main_wrapper">
				<div class="gc_blog_heading_wrapper">
					<div class="gc_blog_heading">
						
						<h1>Get in Touch</h1>
					</div>
					
					
				</div>
			</div>
			
			<form action="contact.php" method="POST">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="gc_causes_single_forms">
					<input type="text" name="name" placeholder="Full Name*" required><i class="fa fa-user"></i>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="gc_causes_single_forms gc_causes_single_forms2">
					<input type="email" name="email" placeholder="Email*" required><i class="fa fa-envelope"></i>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="gc_causes_single_forms gc_causes_single_forms2">
					<input type="text" placeholder="Subject" name="subject" required><i class="fa fa-star"></i>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="gc_causes_single_teatarea">
					 <textarea placeholder="Message" rows="5"></textarea name="message"><i class="fa fa-pencil-square-o"></i>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="gc_causes_single_form_btn gc_contact_section_main_btn">
					<ul>
						<input type="submit"  class="gc_btn" name="Send" value ="Send Now">
					</ul>
				</div>
			</div>
			
			</form>
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
<?php include 'includes/level1/footer2.php'?>
	
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
<script>
	function initMap() {
	var uluru = {lat: -36.742775, lng:  174.731559};
	var map = new google.maps.Map(document.getElementById('map'), {
	zoom: 15,
	scrollwheel: false,
	center: uluru
	});
	var marker = new google.maps.Marker({
	position: uluru,
	map: map
	});
	}
</script>

</body>
</html>