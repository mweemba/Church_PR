<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Metronic | Layouts - Promo Page</title>
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
	<link href="media/css/promo.css" rel="stylesheet" type="text/css"/>
	<link href="media/css/animate.css" rel="stylesheet" type="text/css"/>
	<link rel="shortcut icon" href="media/image/favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<?php include 'header.php' ?>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->   
	<div class="page-container row-fluid">
		<!-- BEGIN EMPTY PAGE SIDEBAR -->
		
		<!-- BEGIN PAGE -->
		<div class="page-content no-min-height">
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
			<div class="container-fluid promo-page">
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div class="span12">					
					
						<div class="block-transparent">						
							<div class="container">							<h3 class="page-title">									My Church Sermons								</h3>							<form>					<div class="control-group">													            													<div class="controls controls-row">														<select id="Year" class="large m-wrap" tabindex="1" onchange='userprayer()'>															<option value="<?php echo date('Y')?>"><?php echo date('Y')?></option>							<?php																$sql="SELECT * FROM `years` ORDER BY `years` DESC";																$result=mysqli_query($conn,$sql);																while($rows=mysqli_fetch_assoc($result)){																?>																																<option value="<?php echo $rows['years']; ?>"><?php echo $rows['years']; ?> </option>																<?php } ?>																														</select>																												<select id="Month" class="large m-wrap" tabindex="1" onchange='userprayer()' >														<option value="<?php echo date('m')?>" ><?php echo date('F')?></option>							<option value='1'>January</option>							<option value='2'>February</option>							<option value='3'>March</option>							<option value='4'>April</option>							<option value='5'>May</option>							<option value='6'>June</option>							<option value='7'>July</option>							<option value='8'>August</option>							<option value='9'>September</option>							<option value='10'>October</option>							<option value='11'>November</option>							<option value='12'>December</option>														</select>																												<div class="input-icon left">										<i class="icon-search"></i>										<input type="text" class="m-wrap span12" placeholder="Title">									</div>																												<button type="submit" class="btn purple">Search</button>																																																																																																</div><div id="response"></div>												</div>					</form>						<?php $userqry="SELECT * FROM `sermons` ORDER BY `sermons`.`Date_Preached` DESC LIMIT 1";											$results=mysqli_query($conn,$userqry);																						while($row=mysqli_fetch_array($results)){																						?>
								<div class="row-fluid margin-bottom-20">
									<div class="span6 margin-bottom-20">
										<h2><?php echo $row['Tittle']?></h2>
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos <a href="#">ellentesque la vehi</a> dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
										<p>Lunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita <a href="#">distinctio lorem ipsum dolor</a> sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
									</div>
									<div class="span6 margin-bottom-20">
										<?php echo $row['Video_content']; ?>
									</div>
								</div>											<?php } ?>
								<hr>
								<div class="row-fluid">								<?php $userqry="SELECT * FROM `sermons` ORDER BY `sermons`.`Date_Preached` DESC LIMIT 4";											$results=mysqli_query($conn,$userqry);																						while($row=mysqli_fetch_array($results)){																						?>
									<div class="span3">
										<h3><a href="#"><?php echo $row['Tittle']?></a></h3>
										<?php echo $row['Small_s']; ?>
									</div>											<?php } ?>
							
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
		<!-- END PAGE CONTAINER--> 
	</div>
	<!-- END PAGE --> 
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER1 -->
	<div class="footer">
		<div class="container">
			<div class="footer-inner">
				2013 &copy; Metronic by keenthemes.
			</div>
			<div class="footer-tools">
				<span class="go-top">
				<i class="icon-angle-up"></i>
				</span>
			</div>
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
	<script src="media/js/app.js"></script>      
	<script>
		jQuery(document).ready(function() {    
		   App.init();
		   jQuery('#promo_carousel').carousel({
		      interval: 10000,
		      pause: 'hover'
		   });
		});
	</script>
	<!-- END JAVASCRIPTS -->
<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script></body>
<!-- END BODY -->
</html>