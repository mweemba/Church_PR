<?php include 'includes/header.php' ;?>
<?php include 'includes/sidebar.php'; 
$recieptno=$_GET['dta'];
?>
			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">More Pages</a>
							</li>
							<li class="active">Reciept</li>
						</ul><!-- /.breadcrumb -->

						  
					</div>

					<div class="page-content">
						 

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="space-6"></div>

								<div class="row">
									<div class="col-sm-10 col-sm-offset-1">
										<div class="widget-box transparent">
										<?php 
										$sql1="SELECT * FROM `reciept` INNER JOIN `churchmember` ON   `reciept`.`memberID`=`churchmember`.`ID Number` WHERE `recieptID`='$recieptno'";
										$result=mysqli_query($conn,$sql1);
										while($row=mysqli_fetch_array($result)){
											
										?>
											<div class="widget-header widget-header-large">
												<h3 class="widget-title grey lighter">
													<i class="ace-icon fa fa-leaf green"></i>
													 Receipt
												</h3>

												<div class="widget-toolbar no-border invoice-info">
													<span class="invoice-info-label">Receipt No:</span>
													<span class="red">#<?php echo $row['recieptID'];?></span>

													<br />
													<span class="invoice-info-label">Date:</span> <span class="blue"><?php $date=$row['Date']; echo date('d-m-Y', strtotime($date));?></span>
													
												</div>

												<div class="widget-toolbar hidden-480">
													<a href="#">
														<i class="ace-icon fa fa-print"></i>
													</a>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main padding-24">
													<div class="row">
														<div class="col-sm-6">
															<div class="row">
																<div class="col-xs-11 label label-lg label-info arrowed-in arrowed-right">
																	<b>Kamwala SDA Church</b>
																</div>
															</div>

															<div>
																<ul class="list-unstyled spaced">
																	<li>
																		<i class="ace-icon fa fa-caret-right blue"></i>Tokyo way, Lusaka
																	</li>

																	<li>
																		<i class="ace-icon fa fa-caret-right blue"></i>10101
																	</li>

																	<li>
																		<i class="ace-icon fa fa-caret-right blue"></i>State, Zambia
																	</li>

																	<li>
																		<i class="ace-icon fa fa-caret-right blue"></i>
Phone:
																		<b class="red">111-111-111</b>
																	</li>

																	<li class="divider"></li>

																</ul>
															</div>
														</div><!-- /.col -->

														<div class="col-sm-6">
															<div class="row">
																<div class="col-xs-11 label label-lg label-success arrowed-in arrowed-right">
																	<b><?php  echo $row['Last Name']; ?> <?php  echo $row['Mid Name']; ?> <?php  echo $row['First Name']; ?></b>
																</div>
															</div>

															<div>
																<ul class="list-unstyled  spaced">
																	<li>
																		<i class="ace-icon fa fa-caret-right green"></i><?php echo $row['Email'];?> 
																	</li>

																	<li>
																		<i class="ace-icon fa fa-caret-right green"></i><?php echo $row['Physical Address 1'];?>
																	</li>

																	<li>
																		<i class="ace-icon fa fa-caret-right green"></i><?php echo $row['Physical Address 2'];?>
																	</li>

																	<li class="divider"></li>

																	<li>
																		<i class="ace-icon fa fa-caret-right green"></i>
																		Contact Number : <?php echo $row['Cellphone'];?>
																	</li>
																</ul>
															</div>
										<?php }?>
														</div><!-- /.col -->
													</div><!-- /.row -->

													<div class="space"></div>

													<div>
														<table class="table table-striped table-bordered">
															<thead>
																<tr>
																	<th class="center">Transaction#</th>
																	<th>Category</th>
																	<th class="hidden-xs">Destination</th>
																	<th class="hidden-480">Amount (ZMW )</th>
																	
																</tr>
															</thead>

															<tbody>
															<?php 
															$total ="";
															$sql2="SELECT * FROM `transaction` WHERE `recieptID`='$recieptno'";
															$items = mysqli_query($conn,$sql2);
															while($row = mysqli_fetch_array($items)) {
                    
																?>
															
																<tr>
																	<td class="center"><?php echo $row['transactionID'];?></td>

																	<td>
																		<?php echo $row['Category'];?>
																	</td>
																	<td>
																		<?php echo $row['department'];?>
																	</td>
																	<td ><?php echo $row['Amount'];?> </td>
																	
																</tr>
															<?php 
															$total += $row['Amount'];
															} ?>
																
															</tbody>
														</table>
													</div>

													<div class="hr hr8 hr-double hr-dotted"></div>

													<div class="row">
														<div class="col-sm-5 pull-right">
															<h4 class="pull-right">
																Total amount :
																<span class="red"><?php
																
																$fmt = new NumberFormatter( 'de_DE', NumberFormatter::CURRENCY );
                                                               echo $fmt->formatCurrency($total,"ZMW")."\n";?></span>
															</h4>
														</div>
														<div class="col-sm-7 pull-left"> Extra Information </div>
													</div>

													<div class="space-6"></div>
													<div class="well">
														Thank you for choosing Ace Company products.
				We believe you will be satisfied by our services.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder"></span>
							Code It &copy; 2020
						</span>

						&nbsp; &nbsp;
						
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
	</body>
</html>
