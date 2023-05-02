<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Virtual Church</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="media/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="media/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="media/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="media/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="media/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="media/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="media/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	<link rel="shortcut icon" href="media/image/favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<?php include 'header.php' ?>
		<!-- END EMPTY PAGE SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div id="portlet-config" class="modal hide">
				<div class="modal-header">
					<button data-dismiss="modal" class="close" type="button"></button>
					<h3>portlet Settings</h3>
				</div>
				<div class="modal-body">
					<p>Here will be a configuration form</p>
				</div>
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<div class="row-fluid">
	<?php include 'Side_Bar.php'; ?>
					<div class="span9 ">
						<!-- BEGIN PAGE HEADER-->
						<div class="row-fluid">
							<div class="span12">
								<!-- BEGIN STYLE CUSTOMIZER -->
								<div class="color-panel hidden-phone">
									<div class="color-mode-icons icon-color"></div>
									<div class="color-mode-icons icon-color-close"></div>
									<div class="color-mode">
										<p>THEME COLOR</p>
										<ul class="inline">
											<li class="color-black current color-default" data-style="default"></li>
											<li class="color-blue" data-style="blue"></li>
											<li class="color-brown" data-style="brown"></li>
											<li class="color-purple" data-style="purple"></li>
											<li class="color-grey" data-style="grey"></li>
											<li class="color-white color-light" data-style="light"></li>
										</ul>
										<label>
											<span>Layout</span>
											<select class="layout-option m-wrap small">
												<option value="fluid" selected>Fluid</option>
												<option value="boxed">Boxed</option>
											</select>
										</label>
										<label>
											<span>Header</span>
											<select class="header-option m-wrap small">
												<option value="fixed" selected>Fixed</option>
												<option value="default">Default</option>
											</select>
										</label>
										<label>
											<span>Sidebar</span>
											<select class="sidebar-option m-wrap small">
												<option value="fixed">Fixed</option>
												<option value="default" selected>Default</option>
											</select>
										</label>
										<label>
											<span>Footer</span>
											<select class="footer-option m-wrap small">
												<option value="fixed">Fixed</option>
												<option value="default" selected>Default</option>
											</select>
										</label>
									</div>
								</div>
								<!-- END BEGIN STYLE CUSTOMIZER --> 
								<!-- BEGIN PAGE TITLE & BREADCRUMB-->
								<h3 class="page-title">
									Church Events
								</h3>
								<ul class="breadcrumb">
									<li>
										<i class="icon-home"></i>
										<a href="index.php">Home</a> 
										<i class="icon-angle-right"></i>
									</li>
									<li>
										<a href="events.php">events</a>
										
									</li>
									
								</ul>
								<!-- END PAGE TITLE & BREADCRUMB-->
							</div>
						</div>
						<!-- END PAGE HEADER-->
						<!-- BEGIN PAGE CONTENT-->                    <form>					<div class="control-group">																										<div class="controls controls-row">														<select id="Year" class="large m-wrap" tabindex="1" onchange='userEvents()'>															<option value="<?php echo date('Y')?>"><?php echo date('Y')?></option>							<?php																$sql="SELECT * FROM `years` ORDER BY `years` DESC";																$result=mysqli_query($conn,$sql);																while($rows=mysqli_fetch_assoc($result)){																?>																																<option value="<?php echo $rows['years']; ?>"><?php echo $rows['years']; ?> </option>																<?php } ?>																														</select>																												<select id="Month" class="large m-wrap" tabindex="1" onchange='userEvents()' >														<option value="<?php echo date('m')?>" ><?php echo date('F')?></option>							<option value='1'>January</option>							<option value='2'>February</option>							<option value='3'>March</option>							<option value='4'>April</option>							<option value='5'>May</option>							<option value='6'>June</option>							<option value='7'>July</option>							<option value='8'>August</option>							<option value='9'>September</option>							<option value='10'>October</option>							<option value='11'>November</option>							<option value='12'>December</option>														</select>																													<select id="dept" class="large m-wrap" tabindex="1" onchange='userEvents()'>															<option value="0">All Departments</option>							<?php																$sql="SELECT * FROM `department`";																$result=mysqli_query($conn,$sql);																while($rows=mysqli_fetch_assoc($result)){																?>																																<option value="<?php echo $rows['Id']; ?>"><?php echo $rows['Name']; ?> </option>																<?php } ?>																														</select>																												<div id="response"></div>																											</div>												</div>					</form>
						<div class="row-fluid">
							
							<div class="span12">
								<!-- BEGIN BORDERED TABLE PORTLET-->
								<div class="portlet box yellow">
									<div class="portlet-title">
										<div class="caption"><i class="icon-coffee"></i>Church Events</div>
										<div class="tools">
											
											
										</div>
									</div>
									<div class="portlet-body">																		<div id="Tabledata">
										<table  class="table table-bordered table-hover">
											<thead>
												<tr>
							          <th scope="col">Date#</th>									  <th scope="col">Event Name</th>									  <th scope="col">Department</th>									  <th scope="col">Venue</th>									  <th scope="col">Time</th>
												</tr>
											</thead>
											</table>											</div>
									</div>
								</div>
								<!-- END BORDERED TABLE PORTLET-->
							</div>
						</div>
					</div>
				</div>
				<!-- END PAGE CONTENT-->
			</div>
			<!-- END PAGE CONTAINER--> 
		</div>
		<!-- END PAGE -->    
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div class="footer">
		<div class="footer-inner">
			2013 &copy; Metronic by keenthemes.
		</div>
		<div class="footer-tools">
			<span class="go-top">
			<i class="icon-angle-up"></i>
			</span>
		</div>
	</div>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->
	<script src="media/js/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="media/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<script src="media/js/bootstrap.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
	<script src="media/js/excanvas.min.js"></script>
	<script src="media/js/respond.min.js"></script>  
	<![endif]-->   
	<script src="media/js/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="media/js/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="media/js/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="media/js/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<script src="media/js/app.js"></script>    <script type="text/javascript" src="scripts/userData.js"></script>    
	<script>
		jQuery(document).ready(function() {    
		   App.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->
<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script></body>
<!-- END BODY -->
</html>