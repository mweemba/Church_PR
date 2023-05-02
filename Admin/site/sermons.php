<?php include 'includes/level1/header.php';?>
<!-- Header Wrapper End -->
<!-- gc Tittle Wrapper Start -->
<div class="gc_tittle_main_wrapper">
	<div class="gc_tittle_img_overlay"></div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="gc_main_tittle_heading">
			<h2>Sermons</h2>
		</div>
	</div>	
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding_zero">
		<div class="gc_main_tittle_side_nav">
			<ul>
				<li><a href="#">Home</a> &nbsp;&nbsp;&nbsp;&nbsp;></li>
				<li>Sermons</li>
			</ul>
		</div>
	</div>
</div>
<!-- gc Tittle Wrapper End -->
<!-- gc event gallery Start -->
<div class="gc_event_index_main_wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="gc_event_index_heading_wrapper">
					<div class="gc_event_index_heading">
						<h2>Sermons</h2>
						
					</div>
				</div>
			</div>
			<div class="col-lg-offset-4 col-md-offset-3 col-sm-offset-3 col-lg-2 col-md-3 col-sm-3 col-xs-12">
				<div class="gc_causes_select_box_wrapper">
					<div class="gc_causes_select_box">
						<select>
							<option>May 2017</option>
							<option>May 2017</option>
							<option>May 2017</option>
						</select><i class="fa fa-angle-down"></i>
					</div>
				</div>	
			</div>
			<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
				<div class="gc_causes_search_box_wrapper gc_event_index_search_box_wrapper">
					<div class="gc_causes_search_box">
						<input type="text" placeholder="Search Text">
						<button><i class="fa fa-search"></i></button>
					</div>
				</div>
			</div>	
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="container">
					<div class="row">
					<?php $userqry="SELECT * FROM `sermons`";
											$results=mysqli_query($conn,$userqry);
											
											while($row=mysqli_fetch_array($results)){
											
											?>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="gc_serm_cont_main_wrapper gc_sermon_index_section">
								<h5><?php echo date('d-F-Y', strtotime($row['Date_Preached']) )?> </h5>
								<h6><?php echo $row['Subject']?></h6>
								<h4><?php echo $row['Tittle']?></h4>
								<p><?php echo $row['Description']?>.  <a href="#">Read More</a></p>
								<ul>
									<li><a href="#"><i class="fa fa-microphone"></i></a></li>
									<li><a href="Single_Sermon.php?SID=<?php echo $row['Sermon_Id'] ?>" ><i class="fa fa-youtube-play"></i></a></li>
									<li><a href="#"><i class="fa fa-cloud-download"></i></a></li>
									<li><a href="#"><i class="fa fa-file-text-o"></i></a></li>
									<li><a href="#"><i class="fa fa-share-alt"></i></a></li>
								</ul>
								<div class="gc_serm_img_wrapper">
									<img src="Admin/<?php echo $row['Sermon_pic']?>" class="img-responsive" style="height: 50px;" alt="serm_img"/>
									<h2>- by <span><?php echo $row['Preacher']?></span></h2>
								</div>
							</div>
						</div>
											<?php }?>
						
					</div>
				</div>	
			</div>
		</div>
	</div>
</div>	
<!-- gc event gallery End -->
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
<div class="gc_footer_main_wrapper gc_event_index_footer gc_about_footer_wrapper">
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