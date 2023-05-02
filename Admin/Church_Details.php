<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; 

$EventID=$_GET['Eid'];
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
								<a href="#">Forms</a>
							</li>
							<li class="active">Money Recipt</li>
						</ul><!-- /.breadcrumb -->

						  
					</div>

					<div class="page-content">
						 
<?php if(!$EventID and defined('time_managagment'.'can_add')){?>
						<div class="page-header">
							<h1>
								New Event Item
								
							</h1>
							<div id="responseID"></div>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="col-xs-6">
								<form class="form-horizontal" action="Add_Event_item.php" enctype="multipart/form-data" method="POST" role="form">
									 <div class="form-group">
										<label class="col-sm-3 
										control-label " for="form-field-1"> Time Managment </label>
															<div class=" col-md-9 col-lg-9 col-sm-9">
															<select class="chosen-select form-control"  name="TimeManage_id" >
																<option value="">--Search Management--</option>
																<?php
																$sql="SELECT * FROM `time managments` INNER JOIN `department` ON `time managments`.`Dept_id`=`department`.`Id`";
																$stmt = $conn2->prepare($sql);
														
														  $stmt->execute(); 
			                                              while($rows = $stmt->fetch()){
																?>
																
																<option value="<?php echo $rows['Budget_id']; ?>" ><?php echo $rows['Name']; ?> -<?php echo $rows['Year']; ?> </option>
																<?php } ?>
															</select>
															</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Name</label>

										<div class="col-sm-9">
											<input type="text" name="EventName" placeholder="Event Name" class="col-xs-10 col-sm-5" />
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Description </label>

										<div class="col-sm-9">
											<input type="text" name="Description" placeholder="Description" class="col-xs-10 col-sm-5" />
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-1"> Year </label>

										<div class="col-sm-9">
											<select class="form-control" name="year" id="yearNo" onchange="changebudgetline()" required>
											   <option value="<?php echo  date("Y") ?> "><?php echo  date("Y")?>  </option>
																<?php
																$sql="SELECT * FROM `years` ORDER BY `years` DESC";
																$stmt = $conn2->prepare($sql);
														
														  $stmt->execute(); 
			                                              while($rows = $stmt->fetch()){
																?>
																
																<option value="<?php echo $rows['years']; ?>"><?php echo $rows['years']; ?> </option>
																<?php } ?>	
															</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-1"> Department</label>

										<div class="col-sm-9">
											<select class="form-control" name="Departments" id="Dept_id" onchange="changebudgetline()" required>
																<option value="">--Select Department--</option>
																<?php
																$sql="SELECT * FROM `department`";
																$stmt = $conn2->prepare($sql);
														
														  $stmt->execute(); 
			                                              while($rows = $stmt->fetch()){
																?>
																
																<option value="<?php echo $rows['Id']; ?>"><?php echo $rows['Name']; ?> </option>
																<?php } ?>	
															</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 
										control-label " for="form-field-1"> Objective </label>
															<div class=" col-md-9 col-lg-9 col-sm-9">
															<select class="form-control"   id="objective_list" required>
																<option value="">--Search Objective--</option>
																
															</select>
															</div>
									</div>
										
									
									<div class="form-group">
										<label class="col-sm-3 
										control-label " for="form-field-1">Budget Line </label>
															<div class=" col-md-9 col-lg-9 col-sm-9">
															<select class="form-control" id="budgets_lines_1"  name="budget_line"  required >
																<option value="">--Search Budget_Line--</option>
																
																
															</select>
															</div>
									</div>
									
									<div class="input-group">
																	<span><label class="col-lg-3 control-label" for="form-field-2"> Date</label></span>
																	<div class="col-sm-9">
																	<input class="form-control date-picker" name ="eventDate" id="id-date-picker-1" type="text" data-date-format="yyyy-mm-dd" required></div>
																	<span class="input-group-addon ">
																		<i class="fa fa-calendar bigger-110"></i>
																	</span>
																</div>
																<br>
																
																<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2">Venue</label>

										<div class="col-sm-9">
											<input type="text" name="Venue" placeholder="Venue" class="col-xs-10 col-sm-5" required="" />
											
										</div>
									</div>
								
									
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Time </label>

										<div class="col-sm-9">
											<input type="text" name="Event_time" placeholder="Time e.g 13:56" class="col-xs-10 col-sm-5" />
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-1">Is this a Major event </label>

										<div class="col-sm-9">
											<select class="form-control" name="majorevent">
											   <option value="Yes">Yes </option>
												 <option value="No">No </option>				
																	
															</select>
										</div>
									</div>
                                     <div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2">Event Image</label>
                                       
										<div class="col-sm-9">
											<input type="file" name="EventImage"  id="AssetImage" placeholder="EventImage" class="form-control" required />
											
										</div>
										</div>
									<div class="space-4"></div>

									

									<div class="space-4"></div>


									

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<input  class="btn btn-info"  name="sendEvent" type="submit" value="Add Item">
												
												
											

											&nbsp; &nbsp; &nbsp;
											<a href="Events.php"><button class="btn" type="button">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												back to Time-managements
											</button></a>
											<div id="ResponseMesage"></div>
										</div>
									</div>

									<div class="hr hr-24"></div>

																								</div>
											<?php 
if($_POST['sendEvent']){
	$budget_lid=$_POST['budget_line'];
	$Name=$_POST['EventName'];
	$Description=$_POST['Description'];
	$year=$_POST['year'];
	$Department=$_POST['Departments'];
	$DatePlanned=$_POST['eventDate'];
	$TimeManage_id=$_POST['TimeManage_id'];
	$objective_id=$_POST['objective_id'];
	$Venue=$_POST['Venue'];
	$Time=$_POST['Event_time'].':00';
	$status="Planning Stage";
	$MajorEvent=$_POST['majorevent'];
	$target_dir = "Files/Events/";
 $attachement1 = $target_dir.round(microtime(true)). basename($_FILES["EventImage"]["name"]);
	
$sql1="INSERT INTO `events`(`Event_Id`, `EventName`, `Planned_Date`, `Year`, `Comments`, `Budget_id`, `Status`, `Date_done`, `Objective_id`, `Dept_id`,
 `Time managment_id`, `Venue`, `Time`, `major_event`,`Event_pic`) 
 VALUES ('','$Name','$DatePlanned','$year','$Description','$budget_lid','$status','', '$objective_id','$Department','$TimeManage_id','$Venue','$Time','$MajorEvent','$attachement1')";
 move_uploaded_file($_FILES["EventImage"]["tmp_name"], $attachement1) ;
	$results=mysqli_query($conn,$sql1);
	if($results){
		echo '<span class="alert alert-success">The Event  has been added successfully </span>';
	}else{
		
		echo '<span class="alert alert-danger">The Event has not been added, Please try again </span>';
	}
}



  ?>			
								</form>
								
								
									
									</div>
										</div>

<?php } elseif($EventID and defined('time_managagment'.'can_edit')) {    $attachement1=""; ?>
<div class="page-header">
							<h1>
								Edit Event 
								
							</h1>
							<div id="responseID"></div>
						</div><!-- /.page-header -->
<?php
															 $sql1="SELECT * FROM `events` INNER JOIN `department` ON `events`.`Dept_id`=`department`.`Id` 
															 INNER JOIN `budget_item` ON `events`.`Budget_id`=`budget_item`.`Budget_Line`
															 INNER JOIN `time managments` ON `events`.`Time managment_id`=  `time managments`.`Plan_id`
															 INNER JOIN `objectives` ON `events`.`Objective_id`=`objectives`.`Objective_id` 
															 WHERE `Event_Id`=:EventID";
																$stmt = $conn2->prepare($sql1);
														  $stmt->bindParam(":EventID",$EventID);
														  $stmt->execute(); 
			                                              while($rows2 = $stmt->fetch()){
																?>
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="col-xs-6">
								<form class="form-horizontal" action="Add_Event_item.php?Eid=<?php echo $EventID ?>" enctype="multipart/form-data" method="POST" role="form">
									 <div class="form-group">
										<label class="col-sm-3 
										control-label " for="form-field-1"> Time Managment </label>
															<div class=" col-md-9 col-lg-9 col-sm-9">
															<select class="chosen-select form-control"  name="TimeManage_id" >
																<option value="<?php echo $rows2['Budget_id']; ?>" ><?php echo $rows2['Name']; ?> -<?php echo $rows2['Year']; ?> </option>
																<?php
																$sql="SELECT * FROM `time managments` INNER JOIN `department` ON `time managments`.`Dept_id`=`department`.`Id`";
																$stmt = $conn2->prepare($sql);
														
														  $stmt->execute(); 
			                                              while($rows = $stmt->fetch()){ ?> 
																
																<option value="<?php echo $rows['Budget_id']; ?>" ><?php echo $rows['Name']; ?> -<?php echo $rows['Year']; ?> </option>
																<?php } ?>
															</select>
															</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Name</label>

										<div class="col-sm-9">
											<input type="text" name="EventName"  value="<?php echo $rows2['EventName']; ?>"  placeholder="Event Name" class="col-xs-10 col-sm-5" />
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Description </label>

										<div class="col-sm-9">
											<input type="text" name="Description" value="<?php echo $rows2['Comments']; ?>" placeholder="Description" class="col-xs-10 col-sm-5" />
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-1"> Department</label>

										<div class="col-sm-9">
											<select class="form-control" name="Department">
																<option value="<?php echo $rows2['Id']; ?>"><?php echo $rows2['Name']; ?> </option>
																<?php
																$sql="SELECT * FROM `department`";
																$result=mysqli_query($conn,$sql);
																while($rows=mysqli_fetch_assoc($result)){
																?>
																
																<option value="<?php echo $rows['Id']; ?>"><?php echo $rows['Name']; ?> </option>
																<?php } ?>	
															</select>
										</div>
									</div>
								

										<div class="form-group">
										<label class="col-sm-3 
										control-label " for="form-field-1"> Objective </label>
															<div class=" col-md-9 col-lg-9 col-sm-9">
															<select class="form-control"   id="objective_list_2" required>
																<option value="<?php echo $rows2['Objective_id']; ?>" ><?php echo $rows2['ObjectiveDescription']; ?> -  <?php echo $rows2['Name']; ?> </option>
																
															</select>
															</div>
									</div>
										
									
									<div class="form-group">
										<label class="col-sm-3 
										control-label " for="form-field-1">Budget Line </label>
															<div class=" col-md-9 col-lg-9 col-sm-9">
															<select class="form-control" id="budgets_lines_2"  name="budget_line"  required >
																<option value="<?php echo $rows2['Budget_Line']; ?>" ><?php echo $rows2['Description']; ?> - <?php echo $rows2['Name']; ?> <?php echo $rows2['year']; ?> </option>
																
																
																
															</select>
															</div>
									</div>
									
									
									
									<div class="input-group">
																	<span><label class="col-lg-3 control-label" for="form-field-2"> Date</label></span>
																	<div class="col-sm-9">
																	<input class="form-control date-picker" name ="eventDate" value="<?php echo $rows2['Planned_Date']; ?>" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy"></div>
																	<span class="input-group-addon ">
																		<i class="fa fa-calendar bigger-110"></i>
																	</span>
																</div>
																<br>
									 <div class="input-group">
																	<span><label class="col-lg-3 control-label" for="form-field-2"> Date Done</label></span>
																	<div class="col-sm-9">
																	<input class="form-control date-picker" name ="DateDone" value="<?php echo $rows2['Date_done']; ?>" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy"></div>
																	<span class="input-group-addon ">
																		<i class="fa fa-calendar bigger-110"></i>
																	</span>
																</div>
																<br>
																
																
																<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2">Venue</label>

										<div class="col-sm-9">
											<input type="text" name="Venue" placeholder="Venue" value="<?php echo $rows2['Venue']; ?>" class="col-xs-10 col-sm-5" />
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-1"> Year </label>

										<div class="col-sm-9">
											<select class="form-control" name="year">
											<option value="<?php echo $rows2['Year']; ?>"><?php echo $rows2['Year']; ?> </option>
											   <option value="<?php echo  date("Y") ?> "><?php echo  date("Y")?>  </option>
																<?php
																$sql="SELECT * FROM `years` ORDER BY `years` DESC";
															$stmt = $conn2->prepare($sql);
														
														  $stmt->execute(); 
			                                              while($rows = $stmt->fetch()){ ?>
																?>
																
																<option value="<?php echo $rows['years']; ?>"><?php echo $rows['years']; ?> </option>
																<?php } ?>	
															</select>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Time </label>

										<div class="col-sm-9">
											<input type="text" name="Event_time"  value="<?php echo $rows2['Time']; ?>" placeholder="Time e.g 13:56" class="col-xs-10 col-sm-5" />
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-1">Is this a Major event </label>

										<div class="col-sm-9">
											<select class="form-control" name="majorevent">
											   <option value="<?php echo $rows2['major_event']; ?>"><?php echo $rows2['major_event']; ?> </option>
												 <option value="Yes">Yes </option>
                                                  <option value="No">No </option>												 
																	
															</select>
										</div>
									</div>
                                     <div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2">Event Image</label>
                                       
										<div class="col-sm-9">
											<input type="file" name="EventImage" value="<?php echo $rows2['Event_pic']; ?>" id="AssetImage" placeholder="EventImage" class="form-control" />
											
										</div>
										</div>
									<div class="space-4"></div>
                                     
									
                                   <div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2">Status </label>

										<div class="col-sm-9">
											<input type="text" name="Description" value="<?php echo $rows2['Status']; ?>" placeholder="Description" class="col-xs-10 col-sm-5" />
											
										</div>
									</div> 
									<div class="space-4"></div>

                                    <?php $attachement1=$rows2['Event_pic']  ?>"
									

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<input  class="btn btn-info"  name="EditEvent" type="submit" value="Save Changes">
												
												
											

											&nbsp; &nbsp; &nbsp;
											<a href="Events.php"><button class="btn" type="button">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												back to Time-managements
											</button></a>
											<div id="ResponseMesage"></div>
										</div>
									</div>

									<div class="hr hr-24"></div>

																								</div>
											<?php 
											
if($_POST['EditEvent']){
	$budget_lid=$_POST['budget_line'];
	$Name=$_POST['EventName'];
	$Description=$_POST['Description'];
	$year=$_POST['year'];
	$Department=$_POST['Department'];
	$DatePlanned=$_POST['eventDate'];
	$TimeManage_id=$_POST['TimeManage_id'];
	$objective_id=$_POST['objective_id'];
	$Venue=$_POST['Venue'];
	$Time=$_POST['Event_time'].':00';
	$status=$_POST['majorevent'];
	$DateDone=$_POST['DateDone'];
	$MajorEvent=$_POST['majorevent'];
	$target_dir = "Files/Events/";
	$attach1=basename($_FILES["EventImage"]["name"]);
 $attachement1 = $target_dir.round(microtime(true)). basename($_FILES["EventImage"]["name"]);
	
 $sql1="UPDATE `events` SET `EventName`='$Name',`Planned_Date`='$DatePlanned',`Year`='$year',`Comments`='$Description',
`Budget_id`='$budget_lid',`Status`='$status',`Date_done`='$DateDone',`Objective_id`='$objective_id',`Dept_id`='$Department',`Time managment_id`='$TimeManage_id',
`Venue`='$Venue',`Time`='$Time',`major_event`='$MajorEvent',`Event_pic`=IF(LENGTH('$attach1')=0,`Event_pic`, '$attachement1') WHERE `Event_Id`='$EventID' ";
 move_uploaded_file($_FILES["EventImage"]["tmp_name"], $attachement1) ;
	$results=mysqli_query($conn,$sql1);
	if($results){
		echo '<span class="alert alert-success">The Eventitem has been edited successfully </span>';
	}else{
		
		echo '<span class="alert alert-danger">The Event has not been edited, Please try again </span>';
	}
}



} ?>	
								</form>
								
								 <img src="<?php echo $attachement1; ?>">
									<div class="space-4"></div>

									

									<div class="space-4"></div>


									

									

									<div class="hr hr-24"></div>

																								</div>
														
								
								
								
									
									</div>
										</div>

<?php
																
 } ?>				
										</div>
									</div>
								


								
													</div>
												</div>
											</div>

											
										</div>
									</div>
								</div><!-- PAGE CONTENT ENDS -->
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

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="assets/js/jquery-ui.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/chosen.jquery.min.js"></script>
		<script src="assets/js/spinbox.min.js"></script>
		<script src="assets/js/bootstrap-datepicker.min.js"></script>
		<script src="assets/js/bootstrap-timepicker.min.js"></script>
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/daterangepicker.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		<script src="assets/js/bootstrap-colorpicker.min.js"></script>
		<script src="assets/js/jquery.knob.min.js"></script>
		<script src="assets/js/autosize.min.js"></script>
		<script src="assets/js/jquery.inputlimiter.min.js"></script>
		<script src="assets/js/jquery.maskedinput.min.js"></script>
		<script src="assets/js/bootstrap-tag.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
      <script src="scripts/Reciept.js"></script>
	   <script src="scripts/authent.js"></script>
	   <script src="scripts/budgets.js"></script>
		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				$('#id-disable-check').on('click', function() {
					var inp = $('#form-input-readonly').get(0);
					if(inp.hasAttribute('disabled')) {
						inp.setAttribute('readonly' , 'true');
						inp.removeAttribute('disabled');
						inp.value="This text field is readonly!";
					}
					else {
						inp.setAttribute('disabled' , 'disabled');
						inp.removeAttribute('readonly');
						inp.value="This text field is disabled!";
					}
				});
			
			
				if(!ace.vars['touch']) {
					$('.chosen-select').chosen({allow_single_deselect:true}); 
					//resize the chosen on window resize
			
					$(window)
					.off('resize.chosen')
					.on('resize.chosen', function() {
						$('.chosen-select').each(function() {
							 var $this = $(this);
							 $this.next().css({'width': $this.parent().width()});
						})
					}).trigger('resize.chosen');
					//resize chosen on sidebar collapse/expand
					$(document).on('settings.ace.chosen', function(e, event_name, event_val) {
						if(event_name != 'sidebar_collapsed') return;
						$('.chosen-select').each(function() {
							 var $this = $(this);
							 $this.next().css({'width': $this.parent().width()});
						})
					});
			
			
					$('#chosen-multiple-style .btn').on('click', function(e){
						var target = $(this).find('input[type=radio]');
						var which = parseInt(target.val());
						if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
						 else $('#form-field-select-4').removeClass('tag-input-style');
					});
				}
			
			
				$('[data-rel=tooltip]').tooltip({container:'body'});
				$('[data-rel=popover]').popover({container:'body'});
			
				autosize($('textarea[class*=autosize]'));
				
				$('textarea.limited').inputlimiter({
					remText: '%n character%s remaining...',
					limitText: 'max allowed : %n.'
				});
			
				$.mask.definitions['~']='[+-]';
				$('.input-mask-date').mask('99/99/9999');
				$('.input-mask-phone').mask('(999) 999-9999');
				$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
				$(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
			
			
			
				$( "#input-size-slider" ).css('width','200px').slider({
					value:1,
					range: "min",
					min: 1,
					max: 8,
					step: 1,
					slide: function( event, ui ) {
						var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
						var val = parseInt(ui.value);
						$('#form-field-4').attr('class', sizing[val]).attr('placeholder', '.'+sizing[val]);
					}
				});
			
				$( "#input-span-slider" ).slider({
					value:1,
					range: "min",
					min: 1,
					max: 12,
					step: 1,
					slide: function( event, ui ) {
						var val = parseInt(ui.value);
						$('#form-field-5').attr('class', 'col-xs-'+val).val('.col-xs-'+val);
					}
				});
			
			
				
				//"jQuery UI Slider"
				//range slider tooltip example
				$( "#slider-range" ).css('height','200px').slider({
					orientation: "vertical",
					range: true,
					min: 0,
					max: 100,
					values: [ 17, 67 ],
					slide: function( event, ui ) {
						var val = ui.values[$(ui.handle).index()-1] + "";
			
						if( !ui.handle.firstChild ) {
							$("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>")
							.prependTo(ui.handle);
						}
						$(ui.handle.firstChild).show().children().eq(1).text(val);
					}
				}).find('span.ui-slider-handle').on('blur', function(){
					$(this.firstChild).hide();
				});
				
				
				$( "#slider-range-max" ).slider({
					range: "max",
					min: 1,
					max: 10,
					value: 2
				});
				
				$( "#slider-eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
					// read initial values from markup and remove that
					var value = parseInt( $( this ).text(), 10 );
					$( this ).empty().slider({
						value: value,
						range: "min",
						animate: true
						
					});
				});
				
				$("#slider-eq > span.ui-slider-purple").slider('disable');//disable third item
			
				
				$('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
				//pre-show a file name, for example a previously selected file
				//$('#id-input-file-1').ace_file_input('show_file_list', ['myfile.txt'])
			
			
				$('#id-input-file-3').ace_file_input({
					style: 'well',
					btn_choose: 'Drop files here or click to choose',
					btn_change: null,
					no_icon: 'ace-icon fa fa-cloud-upload',
					droppable: true,
					thumbnail: 'small'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
				
				//$('#id-input-file-3')
				//.ace_file_input('show_file_list', [
					//{type: 'image', name: 'name of image', path: 'http://path/to/image/for/preview'},
					//{type: 'file', name: 'hello.txt'}
				//]);
			
				
				
			
				//dynamically change allowed formats by changing allowExt && allowMime function
				$('#id-file-format').removeAttr('checked').on('change', function() {
					var whitelist_ext, whitelist_mime;
					var btn_choose
					var no_icon
					if(this.checked) {
						btn_choose = "Drop images here or click to choose";
						no_icon = "ace-icon fa fa-picture-o";
			
						whitelist_ext = ["jpeg", "jpg", "png", "gif" , "bmp"];
						whitelist_mime = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/bmp"];
					}
					else {
						btn_choose = "Drop files here or click to choose";
						no_icon = "ace-icon fa fa-cloud-upload";
						
						whitelist_ext = null;//all extensions are acceptable
						whitelist_mime = null;//all mimes are acceptable
					}
					var file_input = $('#id-input-file-3');
					file_input
					.ace_file_input('update_settings',
					{
						'btn_choose': btn_choose,
						'no_icon': no_icon,
						'allowExt': whitelist_ext,
						'allowMime': whitelist_mime
					})
					file_input.ace_file_input('reset_input');
					
					file_input
					.off('file.error.ace')
					.on('file.error.ace', function(e, info) {
						//console.log(info.file_count);//number of selected files
						//console.log(info.invalid_count);//number of invalid files
						//console.log(info.error_list);//a list of errors in the following format
						
						//info.error_count['ext']
						//info.error_count['mime']
						//info.error_count['size']
						
						//info.error_list['ext']  = [list of file names with invalid extension]
						//info.error_list['mime'] = [list of file names with invalid mimetype]
						//info.error_list['size'] = [list of file names with invalid size]
						
						
						/**
						if( !info.dropped ) {
							//perhapse reset file field if files have been selected, and there are invalid files among them
							//when files are dropped, only valid files will be added to our file array
							e.preventDefault();//it will rest input
						}
						*/
						
						
						//if files have been selected (not dropped), you can choose to reset input
						//because browser keeps all selected files anyway and this cannot be changed
						//we can only reset file field to become empty again
						//on any case you still should check files with your server side script
						//because any arbitrary file can be uploaded by user and it's not safe to rely on browser-side measures
					});
					
					
					/**
					file_input
					.off('file.preview.ace')
					.on('file.preview.ace', function(e, info) {
						console.log(info.file.width);
						console.log(info.file.height);
						e.preventDefault();//to prevent preview
					});
					*/
				
				});
			
				$('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
				.closest('.ace-spinner')
				.on('changed.fu.spinbox', function(){
					//console.log($('#spinner1').val())
				}); 
				$('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, touch_spinner: true, icon_up:'ace-icon fa fa-caret-up bigger-110', icon_down:'ace-icon fa fa-caret-down bigger-110'});
				$('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'ace-icon fa fa-plus bigger-110', icon_down:'ace-icon fa fa-minus bigger-110', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
				$('#spinner4').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'ace-icon fa fa-plus', icon_down:'ace-icon fa fa-minus', btn_up_class:'btn-purple' , btn_down_class:'btn-purple'});
			
				//$('#spinner1').ace_spinner('disable').ace_spinner('value', 11);
				//or
				//$('#spinner1').closest('.ace-spinner').spinner('disable').spinner('enable').spinner('value', 11);//disable, enable or change value
				//$('#spinner1').closest('.ace-spinner').spinner('value', 0);//reset to 0
			
			
				//datepicker plugin
				//link
				$('.date-picker').datepicker({
					autoclose: true,
					todayHighlight: true
				})
				//show datepicker when clicking on the icon
				.next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
			
				//or change it into a date range picker
				$('.input-daterange').datepicker({autoclose:true});
			
			
				//to translate the daterange picker, please copy the "examples/daterange-fr.js" contents here before initialization
				$('input[name=date-range-picker]').daterangepicker({
					'applyClass' : 'btn-sm btn-success',
					'cancelClass' : 'btn-sm btn-default',
					locale: {
						applyLabel: 'Apply',
						cancelLabel: 'Cancel',
					}
				})
				.prev().on(ace.click_event, function(){
					$(this).next().focus();
				});
			
			
				$('#timepicker1').timepicker({
					minuteStep: 1,
					showSeconds: true,
					showMeridian: false,
					disableFocus: true,
					icons: {
						up: 'fa fa-chevron-up',
						down: 'fa fa-chevron-down'
					}
				}).on('focus', function() {
					$('#timepicker1').timepicker('showWidget');
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
				
			
				
				if(!ace.vars['old_ie']) $('#date-timepicker1').datetimepicker({
				 //format: 'MM/DD/YYYY h:mm:ss A',//use this option to display seconds
				 icons: {
					time: 'fa fa-clock-o',
					date: 'fa fa-calendar',
					up: 'fa fa-chevron-up',
					down: 'fa fa-chevron-down',
					previous: 'fa fa-chevron-left',
					next: 'fa fa-chevron-right',
					today: 'fa fa-arrows ',
					clear: 'fa fa-trash',
					close: 'fa fa-times'
				 }
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
			
				$('#colorpicker1').colorpicker();
				//$('.colorpicker').last().css('z-index', 2000);//if colorpicker is inside a modal, its z-index should be higher than modal'safe
			
				$('#simple-colorpicker-1').ace_colorpicker();
				//$('#simple-colorpicker-1').ace_colorpicker('pick', 2);//select 2nd color
				//$('#simple-colorpicker-1').ace_colorpicker('pick', '#fbe983');//select #fbe983 color
				//var picker = $('#simple-colorpicker-1').data('ace_colorpicker')
				//picker.pick('red', true);//insert the color if it doesn't exist
			
			
				$(".knob").knob();
				
				
				var tag_input = $('#form-field-tags');
				try{
					tag_input.tag(
					  {
						placeholder:tag_input.attr('placeholder'),
						//enable typeahead by specifying the source array
						source: ace.vars['US_STATES'],//defined in ace.js >> ace.enable_search_ahead
						/**
						//or fetch data from database, fetch those that match "query"
						source: function(query, process) {
						  $.ajax({url: 'remote_source.php?q='+encodeURIComponent(query)})
						  .done(function(result_items){
							process(result_items);
						  });
						}
						*/
					  }
					)
			
					//programmatically add/remove a tag
					var $tag_obj = $('#form-field-tags').data('tag');
					$tag_obj.add('Programmatically Added');
					
					var index = $tag_obj.inValues('some tag');
					$tag_obj.remove(index);
				}
				catch(e) {
					//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
					tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
					//autosize($('#form-field-tags'));
				}
				
				
				/////////
				$('#modal-form input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'ace-icon fa fa-cloud-upload',
					droppable:true,
					thumbnail:'large'
				})
				
				//chosen plugin inside a modal will have a zero width because the select element is originally hidden
				//and its width cannot be determined.
				//so we set the width after modal is show
				$('#modal-form').on('shown.bs.modal', function () {
					if(!ace.vars['touch']) {
						$(this).find('.chosen-container').each(function(){
							$(this).find('a:first-child').css('width' , '210px');
							$(this).find('.chosen-drop').css('width' , '210px');
							$(this).find('.chosen-search input').css('width' , '200px');
						});
					}
				})
				/**
				//or you can activate the chosen plugin after modal is shown
				//this way select element becomes visible with dimensions and chosen works as expected
				$('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
				*/
			
				
				
				$(document).one('ajaxloadstart.page', function(e) {
					autosize.destroy('textarea[class*=autosize]')
					
					$('.limiterBox,.autosizejs').remove();
					$('.daterangepicker.dropdown-menu,.colorpicker.dropdown-menu,.bootstrap-datetimepicker-widget.dropdown-menu').remove();
				});
			
			});
		</script>
	</body>
</html>
