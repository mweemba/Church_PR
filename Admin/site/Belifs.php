<?php include 'includes/level1/header.php';
$seromID=$_GET['SID'];
?>
<!-- Header Wrapper End -->
<!-- gc Tittle Wrapper Start -->
<div class="gc_tittle_main_wrapper">
	<div class="gc_tittle_img_overlay"></div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="gc_main_tittle_heading">
			<?php 
											$userqry="SELECT * FROM `sermons` WHERE `Sermon_Id`='$seromID'";
											$results=mysqli_query($conn,$userqry);
											
											while($row=mysqli_fetch_array($results)){
											
											?>
			<h2><?php echo $row['Tittle']; ?></h2>
		</div>
	</div>	
	
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding_zero">
		<div class="gc_main_tittle_side_nav">
			<ul>
			
				<li><a href="#">Home</a> &nbsp;&nbsp;&nbsp;&nbsp;></li>
				<li><?php echo $row['Tittle']; ?></li>
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
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="gc_blog_index_post_wrapper">
							<div class="gc_blog_index_img_wrapper">
								<?php echo $row['Video_content']; ?>
							</div>
							<div class="gc_blog_index_date_main_sec">
								<div class="gc_blog_index_date_wrapper">
									<div class="gc_blog_index_date">
										<p>10 <br><span>May</span></p>
									</div>
								</div>
								<div class="gc_blog_index_date_cont_wrapper gc_blog_single_index_pera_cont_wrapper">
									<h4><?php echo $row['Tittle']; ?></h4>
									<p><?php echo $row['Description']; ?></p>
								</div>
							</div>	
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="gc_blog_index_post_wrapper">
							<div class="gc_blog_index_date_main_sec gc_blog_single_index_date_cont_wrapper">
							<audio controls>
						  <source src="Admin/<?php echo $row['Audio_contant']?>" type="audio/mpeg">
						</audio>
								
							</div>	
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="gc_blog_index_post_wrapper">
							<div class="gc_blog_index_date_main_sec gc_blog_single_index_date_cont_wrapper">
							<p><?php echo $row['Text_content'];?></p>
								
							</div>	
						</div>
					</div>
					
					<div id="commentdata" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="blog_single_comment_wrapper">
									<div class="blog_single_comment_heading_wrapper">
									Our Most Important Belief
Our most important belief is in the Good News of Jesus Christ, known as the Everlasting Gospel. The good news is that God came to this planet 2,000 years ago in the person of Jesus Christ. Jesus lived a perfect, obedient life and never sinned. He was fully God and fully man. His life and teachings were the most complete revelation we have of the personality, love, and character of God. Jesus showed us what God is like. His life is recorded in what is called the New Testament.

Jesus offered His life on the cross and allowed himself to be counted guilty for every wrong act and thought committed by every human being who was ever born into this world, from Adam to the last child born.

Because of His gracious act of dying for the whole world, God raised up Jesus on the third day. He appeared to many people who, as a result, became convinced that He was alive. The Scriptures tell us that He ascended back into Heaven, where He presently mediates as our Advocate until His promised return to this world again in these last days. At that time, all sin will be finally put away forever and there will be a new Heaven and a new Earth.

A personal relationship with Jesus begins with accepting His death on the cross for yourself and allowing Him to be the Lord of your life. When we believe this, we are declared righteous before God and it is as if we had never sinned. The believer is adopted as His child. Then we are baptized by immersion, which is the visible symbol of this spiritual birth and our new relationship with God. There is a mysterious change that occurs in the human heart that comes about only by the power of the Holy Spirit. To permit this to happen is the most important step that any human being can take in this mortal life. To resist this wooing of God in your heart to join His family is eternally dangerous. Without this clear, fundamental understanding of what the Gospel (or Good News) of Jesus Christ really is, nothing else we could tell you would make any sense.


Read more at http://www.hartsdalesda.org/beliefs.html#psl0rMQ3SbV0b6DZ.99
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
			<?php }
			
			include 'include/level1/page_sidebar.php'; ?>
		
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
<script type="text/javascript" src="Scripts/comments.js"></script>
<!--main js file end-->
</body>
</html>