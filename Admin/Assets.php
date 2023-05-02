<?php include 'includes/header.php' ?>
<?php include 'includes/sidebar.php';
if(!defined('assets_assets'.'can_view')){
	

include 'error_permissions.php';
}else{


 ?>

		

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						    
						  
					</div>

					<div class="page-content">
						 

						<div class="page-header">
						<div id="responseID"></div>
							<h1>
								Search Church Assets
								
							</h1>
							<hr>
							<form class="form-horizontal" enctype="multipart/form-data" method="POST"  role="form">
								<div class="col-xs-6">
								
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2">Item Name </label>

										<div class="col-sm-9">
											<input type="text" name="ItemName" placeholder="Item Name"  class="form-control" />
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2">Description </label>

										<div class="col-sm-9">
											<input type="text" name="Description" placeholder="Description" class="form-control"  />
											
										</div>
									</div>
											<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-1">Category </label>

										<div class="col-sm-9">
											<select class="form-control" name="Category">
																<option value="">--Select Category--</option>
																<option value="Current Asset">Current Asset</option>
																<option value="Fixed Asset">Fixed Asset</option>
                                                                
															</select>
										</div>
									</div>
                                     <div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Asset Condition </label>

										<div class="col-sm-9">
											<input type="text" name="AssetCondition" placeholder="Asset Condition" class="form-control"  />
											
										</div>
									</div>
									
									
									
                                 <div class="input-group">
																	<span><label class="col-lg-3 control-label" for="form-field-2"> Date Aquired(After) </label></span>
																	<div class="col-sm-9">
																	<input class="form-control date-picker" name ="dateAquired_after" id="id-date-picker-1" type="text" data-date-format="yyyy-mm-dd"></div>
																	<span class="input-group-addon ">
																		<i class="fa fa-calendar bigger-110"></i>
																	</span>
																</div>
																<br>
																 <div class="input-group">
																	<span><label class="col-lg-3 control-label" for="form-field-2"> Date Aquired(Before) </label></span>
																	<div class="col-sm-9">
																	<input class="form-control date-picker" name ="dateAquired_before" id="id-date-picker-1" type="text" data-date-format="yyyy-mm-dd"></div>
																	<span class="input-group-addon ">
																		<i class="fa fa-calendar bigger-110"></i>
																	</span>
																</div>
																<br>
																
                                    <div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Purchase Price(More than) </label>

										<div class="col-sm-9">
											<input type="text" name="purchaseprice_more" placeholder="Purchase Price" class="form-control"  />
											
										</div>
									</div>
									  <div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Purchase Price(Less than) </label>

										<div class="col-sm-9">
											<input type="text" name="purchaseprice_less" placeholder="Purchase Price" class="form-control"  />
											
										</div>
									</div>
									</div>
																								<div class="col-xs-6">
									
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Current Value (More than)</label>

										<div class="col-sm-9">
											<input type="text" name="CurrentValue_more" placeholder="Current Value" class="form-control"  />
											
										</div>
									</div>	
                                 <div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Current Value(Less than) </label>

										<div class="col-sm-9">
											<input type="text" name="CurrentValue_less" placeholder="Current Value" class="form-control"  />
											
										</div>
									</div>										
                                  <div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Current Location </label>

										<div class="col-sm-9">
											<input type="text" name="Location" placeholder="Current Location" class="form-control"  />
											
										</div>
									</div>	
                                            <div class="input-group">
																	<span><label class="col-lg-3 control-label" for="form-field-2"> Date of Retirement(Before) </label></span>
																	<div class="col-sm-9">
																	<input class="form-control date-picker" name ="retirementDate_before" id="id-date-picker-1" type="text" data-date-format="yyyy-mm-dd"></div>
																	<span class="input-group-addon ">
																		<i class="fa fa-calendar bigger-110"></i>
																	</span>
																</div>
																<br>									
										  <div class="input-group">
																	<span><label class="col-lg-3 control-label" for="form-field-2"> Date of Retirement(After) </label></span>
																	<div class="col-sm-9">
																	<input class="form-control date-picker" name ="retirementDate_after" id="id-date-picker-1" type="text" data-date-format="yyyy-mm-dd"></div>
																	<span class="input-group-addon ">
																		<i class="fa fa-calendar bigger-110"></i>
																	</span>
																</div>
																<br>
																
																								
										
											<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2">Manufacturer</label>

										<div class="col-sm-9">
											<input type="text" name="Manufacturer" placeholder="Manufacturer" class="form-control"  />
											
										</div>
										</div><div class="space-4"></div>													<div class="form-group">
										<label class="col-sm-3 control-label" for="form-field-2">Model </label>

										<div class="col-sm-9">
											<input type="text" name="Model " placeholder="Model" class="form-control" />
											
										</div>
									</div>
									
									
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-1"> Department Responsible </label>

										<div class="col-sm-9">
											<select class="form-control" name="Zone">
																<option value="">--Select Department--</option>
															<?php	$sql1="SELECT `Id`, `Name`, `Church`, `Description` FROM `department`";
																 $stmt = $conn2->prepare($userqry);
																  
																  $stmt->execute(); 
                                                              while($rows1 = $stmt->fetch()){
																?>
																<option value="<?php echo $rows1['Id'];?>"> <?php echo $rows1['Name'];?></option>
																<?php } ?>
																
															</select>
										</div>
									</div>
																								 
                                 
									
									
									
									
									</div>
									<div class="col-md-12">
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<input  class="btn btn-info" type="submit" name="generate"  value="Search Report">

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
											<div id="ResponseMesage"></div>
										</div>
									</div>
									

                                 </div>
														
								</form>
								
							<br>
							<?php if(defined('assets_assets'.'can_add')){ ?>
<a href="add_Asset.php"><button type="button" class="btn btn-info btn-sm">
															<i class="ace-icon fa fa-plus bigger-110"></i>New Asset
														</button></a>
													<?php }?>
							<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
						</div><!-- /.page-header -->

						

								
								<div class="row">
									<div class="col-xs-12">
									
										
										<div class="table-header">
											Member list
										</div>
                                     
										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>ID</th>
															<th>ITem Name</th>
															<th>Description</th>

															<th>
																Category
																
															</th>
															<th>Purchase Price</th>
															<th>Asset Condition</th>
															

														<th></th>
													</tr>
												</thead>

												<tbody>
												<?php 
												$userqry="";
											
												if($_POST['generate']){
	
										
											 $Description=$_POST['Description'];
											$Category=$_POST['Category'];
											$AssetCondition=$_POST['AssetCondition'];
											$dateAquired_before=$_POST['dateAquired_before'];
											$dateAquired_after=$_POST['dateAquired_after'];
											$purchaseprice_more=$_POST['purchaseprice_more'];
											$purchaseprice_less=$_POST['purchaseprice_less'];
											$CurrentValue_more=$_POST['CurrentValue_more'];
											$CurrentValue_less=$_POST['CurrentValue_less'];
											$Location=$_POST['Location'];
											$retirementDate_before=$_POST['retirementDate_before'];
											$retirementDate_after=$_POST['retirementDate_after'];
											$Manufacturer=$_POST['Manufacturer'];
											$Model=$_POST['Model'];
											$DepartmentResponsible=$_POST['DepartmentResponsible'];
												
											 $select = "SELECT * FROM `assets`";

  
  $where = 'WHERE TRUE';
  
  if ($Description){
     $where .= " AND `assets`.`Description` =:AsetDescription";
  }
 
  if ($dateAquired_after){
    $where .= " AND `assets`.`Year` =:dateAquired_after";
  }
   if ($dateAquired_before){
    $where .= " AND `assets`.`Year` =:dateAquired_before";
  }
   if ($Category){
    $where .= " AND `assets`.`Category` =:Category";
  }
   if ($AssetCondition){
    $where .= " AND `assets`.`AssetCondition` =AssetCondition";
  }
 
  if ($purchaseprice_more_than){
	 
    $where .= "AND  `assets`.`Purchase Price` >:purchaseprice_more_than";

	
  }
   if ($purchaseprice_less_than){
	 
     $where .= "AND  `assets`.`Purchase Price` <:purchaseprice_less_than";

	
  }
   if ($Location){
    $where .= " AND `assets`.`Location`LIKE:Location";
  }
   if ($CurrentValue_more){
    $where .= " AND `assets`.`Current Value` >:CurrentValue_more";
  }
    if ($CurrentValue_less){
    $where .= " AND `assets`.`Current Value` <:CurrentValue_less";
  }
   if ($retirementDate_after){
    $where .= " AND `assets`.`Retired Date` >:retirementDate_after";
  }
  if ($retirementDate_before){
    $where .= " AND `assets`.`Retired Date` >:retirementDate_before";
  }
   if ($Manufacturer){
    $where .= " AND `assets`.`Manufacturer` LIKE:Manufacturer";
  }
   if ($Model){
    $where .= " AND `assets`.`Model` =:Model";
  }
    if ($DepartmentResponsible){
    $where .= " AND `assets`.`Owner` =:DepartmentResponsible";
  }

												 
  
 
 $userqry = $select . $where;
 
 $stmt = $conn2->prepare($userqry);
 
											
											 
											  
															if ($Description){
															 $stmt->bindParam(":AsetDescription",$Description);
														  }
														 
														  if ($dateAquired_after){
															$stmt->bindParam(":dept",$dept);
														  }
														   if ($dateAquired_before){
															$stmt->bindParam(":dateAquired_aftert",$dateAquired_after);
														  }
														   if ($Category){
															$stmt->bindParam(":Category",$Category);;
														  }
														   if ($AssetCondition){
															$stmt->bindParam(":AssetCondition",$AssetCondition);
														  }
														 
														  if ($purchaseprice_more_than){
															 
															$stmt->bindParam(":purchaseprice_more_than",$purchaseprice_more_than);

															
														  }
														   if ($purchaseprice_less_than){
															 
															$stmt->bindParam(":purchaseprice_less_than",$purchaseprice_less_than);

															
														  }
														   if ($Location){
															$stmt->bindParam(":Location",$Location);
														  }
														   if ($CurrentValue_more){
															$stmt->bindParam(":CurrentValue_more",$CurrentValue_more);
														  }
															if ($CurrentValue_less){
															$stmt->bindParam(":CurrentValue_less",$CurrentValue_less);
														  }
														   if ($retirementDate_after){
															$stmt->bindParam(":retirementDate_after",$retirementDate_after);
														  }
														  if ($retirementDate_before){
															$stmt->bindParam(":retirementDate_before",$retirementDate_before);
														  }
														   if ($Manufacturer){
															$stmt->bindParam(":Manufacturer",$Manufacturer);
														  }
														   if ($Model){
															$stmt->bindParam(":Model",$Model);
														  }
															if ($DepartmentResponsible){
															$stmt->bindParam(":DepartmentResponsible",$DepartmentResponsible);
														  }
											 
										
											  $stmt->execute();
											// print_r($stmt->errorInfo());
 
												 }else{		
												 	
												  
												
											$userqry="SELECT * FROM `assets`";
											$stmt = $conn2->prepare($userqry);
											 $stmt->execute();
											 
												 }
												
														
											while($row = $stmt->fetch()){
											
											?>
													<tr>
														
                                                       
														<td>
														<?php echo $row['ID'];?>
														</td>
														<td><?php echo $row['Item'];?></td>
														<td ><?php echo $row['Description'];?></td>
														<td><?php echo $row['Category'];?></td>
                                                         
														<td>
															<?php echo $row['Purchase Price'];?>
														</td>
<td>
														<?php echo $row['AssetCondition'];?>
														</td>
														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																<?php if(defined('assets_assets'.'can_view')){ ?>
																<a class="blue" href="add_Asset.php?aID=<?php echo $row['ID'];?>">
																	<i class="ace-icon fa fa-search-plus bigger-130"></i>
																</a>
                                                                 <?php } if(defined('assets_assets'.'can_edit')){ ?>
																<a class="green" href="add_Asset.php?aID=<?php echo $row['ID'];?>">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>
																<?php } if(defined('assets_assets'.'can_delete')){ ?>

																<a class="red" href="Delete_asset.php?ID=<?php echo $row['ID'];?>">
																	<i class="ace-icon fa fa-trash-o bigger-130"></i>
																</a>
															<?php } ?>
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

			<<div class="footer">
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
