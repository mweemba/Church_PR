<?php include 'includes/level1/header.php';?>
<!-- Header Wrapper End -->
<!-- gc Tittle Wrapper Start -->
<div class="gc_tittle_main_wrapper">
	<div class="gc_tittle_img_overlay"></div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="gc_main_tittle_heading">
			<h2>Upcoming Events</h2>
		</div>
	</div>	
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding_zero">
		<div class="gc_main_tittle_side_nav">
			<ul>
				<li><a href="#">Home</a> &nbsp;&nbsp;&nbsp;&nbsp;></li>
				<li>Events</li>
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
						<h2>Join Us Events</h2>
						<h1>Upcoming Events</h1>
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
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 gc_event_index_content">
				<div class="row">
				
				<?php $userqry="SELECT `Event_Id`, `EventName`, `Planned_Date`, `Year`, `Comments`, `Budget_id`, `Status`, `Date_done`, `Objective_id`, `Dept_id`, `Time managment_id`, `Venue`, `Time`, `major_event`, `Event_pic` FROM `events`";
											$results=mysqli_query($conn,$userqry);
											
											while($row=mysqli_fetch_array($results)){
											
											?>
					<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 show_hide_img3 gc_com_second_slide_wrapper">
									<div class="gc_upcom_slider_wrapper">
										<div class="gc_com_slider_img_wrapper">
											<img src="Admin/<?php echo $row['Event_pic']?>" alt="slider_img" class="zoom image img-responsive"/>
										</div>
										<div class="gc_com_slider_cont_wrapper">
											<div class="gc_com_slider_cont">
												<div class="gc_event_time_main_wrapper gc_com_slider_time_wrapper">
													<div class="gc_event_time_wrapper">
														<div class="gc_event_time">
														</div>
														<div class="gc_event_time_cont">
															<i class="fa fa-circle"></i>
															<p>@ <?php echo $row['Time']?></p>
														</div>
													</div>
												</div>
												<div class="gc_event_bottom_cont gc_com_bottom_cont_wrapper">
													<h2><?php echo $row['EventName']?></h2>
													<div class="gc_user_icon_wrapper">
														<i class="fa fa-user"></i>
													</div>
													<h3>- by : <span><?php echo $row['Name']?></span></h3>
													<div class="gc_location_icon_wrapper">
														<i class="fa fa-map-marker"></i>
													</div>
													<h4><?php echo $row['Venue']?></h4>
												</div>
												<div class="gc_event_btn gc_com_slider_btn">
													<ul>
														<li><a href="#">JOIN US!</a></li>
													</ul>
												</div>
												<div class="gc_event_date_wrapper gc_upcom_date_wrapper gc_event_index_wrapper">
													<h1>14</h1>
													<p>May <br>2017</p>
												</div>
											</div>
										</div>
									</div>	
								</div>
					<?php } ?>
								
					
					

					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="pager_wrapper">
						<ul class="pagination">
						  <li><a href="#">Priv.</a></li>
						  <li><a href="#">1</a></li>
						  <li><a href="#">2</a></li>
						  <li><a href="#">3</a></li>
						  <li class="hidden-xs"><a href="#">4</a></li>
						  <li><a href="#">Next</a></li>
						</ul>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>	
<!-- gc event gallery End -->
<!-- GC sermons Wrapper Start -->

<!-- GC sermons Wrapper End -->
<!-- Tweet Feed Wrapper Start -->
<div class="container">
<div class="tc_twtfd_wrapper gc_twitter_upcoming_wrapper gc_twitter_upcoming_wrapper2">
	
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
</body>
</html>