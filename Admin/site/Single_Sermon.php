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
							<iframe  src="Admin/<?php echo $row['Audio_contant']?>" type="audio/mpeg">
						 
						</iframe>
								
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
									<?php $userqry="SELECT * FROM `sermon_comments` WHERE `Sermon_ID`='$seromID'";
											$results=mysqli_query($conn,$userqry);
											
											 $numbe=mysqli_num_rows($results);
										
											
											?>
										<div class="blog_single_comment_heading">
											<h4>Comments (<?php echo $numbe ;?>)</h4>
										</div>
										<?php ?>
									</div>
									
									<?php 
											$userqry="SELECT * FROM `sermon_comments` WHERE `Sermon_ID`='$seromID'";
											$results=mysqli_query($conn,$userqry);
											
											while($row=mysqli_fetch_array($results)){
											
											?>
									<div class="blog_comment1_wrapper">
										<div class="blog_comment1_img">
											<img src="images/ProfileImages/user.png" alt="comment_img" style="height:115pxl" class="img-responsive img-circle"/>
										</div>
										<div class="blog_comment1_cont">
											<h3><?php echo $row['Name'] ?><i class="fa fa-circle"></i> <span><?php echo $Time_Date=date('d-M-Y', strtotime($row['Date_time']));?> </span></h3>
											<p><?php echo $row['Comment'] ?></p>
										</div>
									</div>
											<?php }?>
								</div>
							</div>
							
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="contect_heading_wrapper">
							<div class="gc_blog_single_form_heading">
								<h4>Leave A Comments</h4>
							</div>
						</div>
						<div class="row">
							<div class="blog_contect_wrapper">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="contect_form1">
										<input id="name" type="text" placeholder="Full Name *"> <i class="fa fa-user"></i><input id="SID"  value="<?php echo $seromID; ?>" type="text" hidden placeholder="">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="contect_form2">
										<input type="email" id="email" name="email" placeholder="Email *"><i class="fa fa-envelope"></i>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="contect_form4">
										<textarea rows="4" name="comment"  id="comment" placeholder="Write Comment"></textarea><i class="fa fa-pencil-square-o"></i>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="contect_btn">
										<ul>
										<input type="Submit" class="gc_btn" onclick="sendComment()" name="loginbtn" placeholder="Login" value="Submit">
											<li></li>
										</ul>
									</div>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
			<?php }
			
			include 'includes/level1/page_sidebar.php'; ?>
		
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
<script type="text/javascript" src="Scripts/comments.js"></script>
<!--main js file end-->
</body>
</html>