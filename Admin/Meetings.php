<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; 

if(!defined('worship_meetings'.'can_view')){
	

include 'error_permissions.php';
}else{

?>

		

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						    
						  
					</div>

					<div class="page-content">
							<?php 
					$meetin_id=$_GET['meetin_id'];
if($_GET['del']){


$sql="DELETE FROM `meetings` WHERE `meetin_id`=:meetin_id";
  $stmt = $conn2->prepare($sql);

$stmt->bindParam(":meetin_id",$meetin_id);
    if($stmt->execute()){
   
  echo '<div class="alert alert-success"> The Item has been Successfully Deleted</div>';

    		

	   }else{
		   echo '<div class="alert alert-danger"> The Item has NOT been Deleted</div>';
		   
	   }

}
					?>
					<div
					<div class="page-header">
						 

						<div  class="col-sm-12">
						<div id="responseID"></div>
							<h1>
								Meetings
								
							</h1>
													<form class="form-horizontal"  method="POST" role="form">
								<div class="col-xs-6">
								 <div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-1">Title </label>

										<div class="col-sm-9">
											<input class="form-control" name="title"   type="text" >
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-1"> Level</label>
															<div class="col-sm-9">
											<select class="form-control" name="level" id="form-field-select-1" >
																<option value="">--Select Level--</option>
																<option value="Local Church">Local Church</option>
																<option value="District">District</option>
																<option value="Conference">Conference</option>
																<option value="Union">Union</option>
																<option value="Division">Division</option>
																<option value="General Conference">General Conference</option>
																
											</select>
											
											
										</div>
									</div>
                                     <div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Status</label>

										<div class="col-sm-9">
											<select class="form-control"name="status" id="form-field-select-1" >
																<option value="">--Select status--</option>
																<option value="To take place">To take place</option>
																<option value="Cancelled">Cancelled</option>
																<option value="Past">Past</option>
																
											</select>
											
										</div>
									</div>
									 
									 <!--- start of colum 2 -->
									</div>
										<div class="col-xs-6">
								 <div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-1">Venue </label>

										<div class="col-sm-9">
											<input class="form-control" name="venue"   type="text" >
										</div>
									</div>
								
									 

									<div class="space-4"></div>
										  <div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-1"> Date
										</label>

											<div class="col-sm-9">
																	
																<div class="input-group">
																	<input class="form-control date-picker" value="" name="meeting_date" id="id-date-picker-1" type="text" data-date-format="yyyy-mm-dd"   />
																	<span class="input-group-addon">
																		<i class="fa fa-calendar bigger-110"></i>
																	</span>
																</div>
															
																	
																</div>
									</div>
									 

								
                                        </div>

									

									<div class="clearfix form-actions col-md-12">
										<div class="col-md-offset-3 col-md-6">
											<input  class="btn btn-info" type="submit" name="generate" value="Search Report">
											
											
											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
											<div id="ResponseMesage"></div>
										</div>
									</div>

									<div class="hr hr-24"></div>

																							
											
									
								</form>
								</div>
								
	<?php if(defined('worship_meetings'.'can_add')){ ?>							
										
      <a href="NewMeeting.php"><button type="button" class="btn btn-info btn-sm">
															<i class="ace-icon fa fa-plus bigger-110"></i>New Meeting
														</button></a>

	<?php } ?>
								
							<div class="clearfix">
							    
											<div class="pull-right tableTools-container"></div>
										</div>
						</div><!-- /.page-header -->
                    
		
								<div class="row">
									<div class="col-xs-12">
									
										
										<div class="table-header">
											Meetings list
										</div>
                                     
										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>ID</th>
															<th>Title</th>
															<th>Date and Time</th>

															<th>
																
																Level
															</th>
															<th>Officer</th>
															<th>status</th>
															
															

														<th></th>
													</tr>
												</thead>

												<tbody>
												<?php 
												
												if(isset($_POST['generate'])){
													
													
													
												$Title=$_POST['title'];
												
												$level=$_POST['level'];
												$status=$_POST['status'];
												$Venue=$_POST['venue'];
												
												$meeting_date=$_POST['meeting_date'];
													
													
                                           $select="SELECT * FROM `Meetings`";
  
													  $where = "WHERE TRUE";
													  
													 
													   if($Title){
													$where .= " AND `Meetings`.`title` LIKE :Title";
													}
													if($meeting_date){
													$where .= " AND `Meetings`.`meeting_date` =:meeting_date";
													}
													if($level){
													$where .= " AND `Meetings`.`level` =:level1";
													}
													if($status){
													$where .= " AND `Meetings`.`status` =:status";
													}
													if($Venue){
													$where .= " AND `Meetings`.`venue` LIKE :venue";
													}
													
													$userqry = $select . $where;
													   $stmt = $conn2->prepare($userqry);
                                                    if($Title){
														$Title="%".$Title."%";
													$stmt->bindParam(":Title",$Title);
													}
													if($meeting_date){
													$stmt->bindParam(":meeting_date",$meeting_date);
													}
													if($level){
													$stmt->bindParam(":level1",$level);
													}
													if($status){
													$stmt->bindParam(":status",$status);
													}
													if($Venue){
														$Venue="%".$Venue."%";
													$stmt->bindParam(":venue",$Venue);
													}
													
                                                  $userqry = $select . $where;
												 
												  
											 $stmt->execute();
												
													//print_r($stmt->errorInfo());
												}else{
											$userqry="SELECT * FROM `Meetings`";
									          $stmt = $conn2->prepare($userqry);
											 $stmt->execute();
												}
											while($row = $stmt->fetch()){
											
											?>
													<tr>
														
                                                       
														<td>
														<?php echo $row['meetin_id'];?>
														</td>
														<td><?php echo $row['title'];?></td>
														<td >Date:<?php echo $row['meeting_date'];?> Time: <?php echo $row['Meeting_time'];?></td>
														<td><?php echo $row['level'];?> </td>
                                                         
														<td>
															<?php echo $row['officers'];?>
														</td>
<td>
														<?php echo $row['status'];?>
														</td>
														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																<?php if(defined('worship_meetings'.'can_edit')){ ?>
																<a class="blue"  href="EditMeeting.php?meetin_id=<?php echo $row['meetin_id']?>">
																	<i class="ace-icon fa fa-search-plus bigger-130"></i>
																</a>
																<?php } if(defined('worship_meetings'.'can_edit')){ ?>

																<a class="green"  href="EditMeeting.php?meetin_id=<?php echo $row['meetin_id']?>" >
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>
																<?php } if(defined('worship_meetings'.'can_delete')){ ?>

																<a  onclick="return confirm('Are You sure you want to delete this item')" class="red" href="Meetings.php?meetin_id=<?php echo $row['meetin_id']?>&del=yes">
																	<i class="ace-icon fa fa-trash-o bigger-130"></i>
																</a>
															<?php } ?>
															</div>

															<div class="hidden-md hidden-lg">
																<div class="inline pos-rel">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																		<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																		

																		<li>
																			<a href="edit_Sermon.php?SID=<?php echo $row['Sermon_Id']?>" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a  onclick="return confirm('Are You sure you want to delete this item')" class="red" href="Meetings.php?Sermon_id=<?php echo $row['Sermon_Id']?>&del=yes">
																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>
											<?php } ?>

                                           </tbody>
											</table>
										</div>
									</div>
								</div>

								<div id="modal-table" class="modal fade" tabindex="-1">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header no-padding">
												<div class="table-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
														<span class="white">&times;</span>
													</button>
													Results for "Latest Registered Domains
												</div>
											</div>

											<div class="modal-body no-padding">
												<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
													<thead>
														<tr>
															<th>ID</th>
															<th>Last Name</th>
															<th>Other names</th>

															<th>
																
																Residence Address
															</th>
															<th>Date Joined</th>
															<th>contact no</th>
															
														</tr>
													</thead>

													<tbody>
														<tr>
															<td>
																<a href="#">ace.com</a>
															</td>
															<td>$45</td>
															<td>3,330</td>
															<td>Feb 12</td>
														</tr>

														<tr>
															<td>
																<a href="#">base.com</a>
															</td>
															<td>$35</td>
															<td>2,595</td>
															<td>Feb 18</td>
														</tr>

														<tr>
															<td>
																<a href="#">max.com</a>
															</td>
															<td>$60</td>
															<td>4,400</td>
															<td>Mar 11</td>
														</tr>

														<tr>
															<td>
																<a href="#">best.com</a>
															</td>
															<td>$75</td>
															<td>6,500</td>
															<td>Apr 03</td>
														</tr>

														<tr>
															<td>
																<a href="#">pro.com</a>
															</td>
															<td>$55</td>
															<td>4,250</td>
															<td>Jan 21</td>
														</tr>
													</tbody>
												</table>
											</div>

											<div class="modal-footer no-margin-top">
												<button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
													<i class="ace-icon fa fa-times"></i>
													Close
												</button>

												<ul class="pagination pull-right no-margin">
													<li class="prev disabled">
														<a href="#">
															<i class="ace-icon fa fa-angle-double-left"></i>
														</a>
													</li>

													<li class="active">
														<a href="#">1</a>
													</li>

													<li>
														<a href="#">2</a>
													</li>

													<li>
														<a href="#">3</a>
													</li>

													<li class="next">
														<a href="#">
															<i class="ace-icon fa fa-angle-double-right"></i>
														</a>
													</li>
												</ul>
											</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

		<?php } ?>

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
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="assets/js/dataTables.buttons.min.js"></script>
		<script src="assets/js/buttons.flash.min.js"></script>
		<script src="assets/js/buttons.html5.min.js"></script>
		<script src="assets/js/buttons.print.min.js"></script>
		<script src="assets/js/buttons.colVis.min.js"></script>
		<script src="assets/js/dataTables.select.min.js"></script>


		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
       <script src="scripts/authent.js"></script>
		<!-- inline scripts related to this page -->
		<script type="text/javascript">
		
	
			jQuery(function($) {
				//initiate dataTables plugin
				var myTable = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null, null,null, null, null,
					  { "bSortable": false }
					],
					"aaSorting": [],
					
					
					//"bProcessing": true,
			        //"bServerSide": true,
			        //"sAjaxSource": "http://127.0.0.1/table.php"	,
			
					//,
					//"sScrollY": "200px",
					//"bPaginate": false,
			
					//"sScrollX": "100%",
					//"sScrollXInner": "120%",
					//"bScrollCollapse": true,
					//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
					//you may want to wrap the table inside a "div.dataTables_borderWrap" element
			
					//"iDisplayLength": 50
			
			
					select: {
						style: 'multi'
					}
			    } );
			
				
				
				$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
				
				new $.fn.dataTable.Buttons( myTable, {
					buttons: [
					  {
						"extend": "colvis",
						"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
						"className": "btn btn-white btn-primary btn-bold",
						columns: ':not(:first):not(:last)'
					  },
					  {
						"extend": "copy",
						"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "csv",
						"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "excel",
						"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "pdf",
						"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "print",
						"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
						"className": "btn btn-white btn-primary btn-bold",
						autoPrint: false,
						message: 'This print was produced using the Print button for DataTables'
					  }		  
					]
				} );
				myTable.buttons().container().appendTo( $('.tableTools-container') );
				
				//style the message box
				var defaultCopyAction = myTable.button(1).action();
				myTable.button(1).action(function (e, dt, button, config) {
					defaultCopyAction(e, dt, button, config);
					$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
				});
				
				
				var defaultColvisAction = myTable.button(0).action();
				myTable.button(0).action(function (e, dt, button, config) {
					
					defaultColvisAction(e, dt, button, config);
					
					
					if($('.dt-button-collection > .dropdown-menu').length == 0) {
						$('.dt-button-collection')
						.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
						.find('a').attr('href', '#').wrap("<li />")
					}
					$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
				});
			
				////
			
				setTimeout(function() {
					$($('.tableTools-container')).find('a.dt-button').each(function() {
						var div = $(this).find(' > div').first();
						if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
						else $(this).tooltip({container: 'body', title: $(this).text()});
					});
				}, 500);
				
				
				
				
				
				myTable.on( 'select', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
					}
				} );
				myTable.on( 'deselect', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
					}
				} );
			
			
			
			
				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
				
				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$('#dynamic-table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) myTable.row(row).select();
						else  myTable.row(row).deselect();
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
					var row = $(this).closest('tr').get(0);
					if(this.checked) myTable.row(row).deselect();
					else myTable.row(row).select();
				});
			
			
			
				$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
					e.stopImmediatePropagation();
					e.stopPropagation();
					e.preventDefault();
				});
				
				
				
				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if($row.is('.detail-row ')) return;
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});
			
				
			
				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				
				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
				
				
				
				
				/***************/
				$('.show-details-btn').on('click', function(e) {
					e.preventDefault();
					$(this).closest('tr').next().toggleClass('open');
					$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
				});
				/***************/
				
				
				
				
				
				/**
				//add horizontal scrollbars to a simple table
				$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
				  {
					horizontal: true,
					styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
					size: 2000,
					mouseWheelLock: true
				  }
				).css('padding-top', '12px');
				*/
			
			
			})
		</script>
	</body>
</html>
