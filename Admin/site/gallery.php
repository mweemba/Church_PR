<?php include 'includes/level1/header.php';?>
<!-- Header Wrapper End -->
<!-- gc Tittle Wrapper Start -->
<div class="gc_tittle_main_wrapper">
	<div class="gc_tittle_img_overlay"></div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="gc_main_tittle_heading">
			<h2>Our Gallery</h2>
		</div>
	</div>	
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding_zero">
		<div class="gc_main_tittle_side_nav">
			<ul>
				<li><a href="#">Home</a> &nbsp;&nbsp;&nbsp;&nbsp;></li>
				<li>Gallery</li>
			</ul>
		</div>
	</div>
</div>
<!-- gc Tittle Wrapper End -->
<!-- GC filter Wrapper Start -->
<div class="gc_fliter_main_wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="gc_filter_heading_wrapper">
					<div class="gc_filter_heading">
						<h2>Discover the church</h2>
						<h1>Kamwala SDA Church Photo Gallery</h1>
					</div>
				</div>
			</div>
			<div class="portfolio-area ptb-100">
                  <div class="container">
                    <div class="portfolio-filter clearfix text-center">
                      <ul class="list-inline" id="filter">
					  
                          <li><a class="active" data-group="all">All</a></li>
						  <?php $Galqry="SELECT `Cat_id`, `Name` FROM `photocategory`";
											$results=mysqli_query($conn,$Galqry);
											
											while($row=mysqli_fetch_array($results)){
											
											?>
											<li><a data-group="<?php echo $row['Cat_id'];?>"><?php echo $row['Name'];?></a></li>
											<?php }?>
                          
                          
                      </ul>
                    </div>
                    <div class="row three-column">
                      <div id="gridWrapper" class="clearfix">
					  	<?php 
											$userqry="SELECT `Photo_id`, `Category`, `Address` FROM `Photos`";
											$results=mysqli_query($conn,$userqry);
											
											while($row=mysqli_fetch_array($results)){
											
											?>
												
                        <div class="col-xs-12 col-sm-6 col-md-6 portfolio-wrapper III_column" data-groups='["all", "<?php echo $row['Category'];?>"]'>
                          <div class="portfolio-thumb">

							<div class="gc_filter_cont_overlay_wrapper">
										<img src="<?php echo $row['Address'];?>" class="zoom image img-responsive" alt="service_img"/>
										<div class="gc_filter_cont_overlay">
											<div class="gc_filter_text"><a href="<?php echo $row['Address'];?>"><i class="fa fa-plus"></i></a></div>
										</div>
									</div>

                          </div><!-- /.portfolio-thumb -->
                        </div>
											<?php } ?>

                      </div><!--/#gridWrapper-->
                    </div><!-- /.row -->
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="gc_filter_btn">
								<ul>
									<li><a href="#">LOAD MORE</a></li>
								</ul>
							</div>
						</div>
					</div>
                  </div> <!-- /.container -->
                </div> <!--/.portfolio-area-->
		</div>
	</div>
</div>
<!-- GC filter Wrapper End -->
<!-- Tweet Feed Wrapper Start -->
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