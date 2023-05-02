<?php include 'includes/header.php' ?>
<?php include 'includes/sidebar.php';
if(!defined('budgets_budgets'.'can_view')){
	

include 'error_permissions.php';
}else{


 ?>
			
			<div class="main-content">
			<form>
			<div class="modal fade" id="addBudgetItem" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Budget Item</h4>
        </div>
        <div class="modal-body">
       
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div></form>
				<div class="main-content-inner">
					

					<div class="page-content">
						 

						<div class="page-header">
							<h1>
								Budgets
								
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="col-xs-6">
								<form class="form-horizontal" role="form">
									

									
                              
									
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-1"> Budget</label>

										<div class="col-sm-9">
											<select class="chosen-select form-control" id="Budget" onchange="doidbudget()">
																<option value="">--Select Budget--</option>
																<?php
																$sql="SELECT *  FROM `budget` INNER JOIN `department` ON `department`.`Id`=`budget`.`Department_id` ORDER BY `YEAR` DESC";
																$result=mysqli_query($conn,$sql);
																while($rows=mysqli_fetch_assoc($result)){
																?>
																
																<option value="<?php echo $rows['Budget_id']; ?>"><?php echo $rows['Name']; ?> -<?php echo $rows['YEAR']; ?> </option>
																<?php } ?>	
															</select>
										</div>
									</div>
									<div class="space-4"></div>

									

									

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											

											&nbsp; &nbsp; &nbsp;
											<button class="btn" onclick="SearchBudget()"  type="button">
												<i class="ace-icon fa fa-search"></i>
												Search Budget Items
											</button>&nbsp; &nbsp; &nbsp;
											
											
										</div>
									</div>
                          <div id="responseID"></div>
									<div class="hr hr-24"></div>
</form>

				<form class="form-horizontal" role="form">
									

									
                              <div class="page-header">
							<h1>
								Manage Budgets
								
							</h1>
						</div><!-- /.page-header -->
									
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-1"> Year</label>

										<div class="col-sm-9">
											<select class="chosen-select form-control" id="budget_year" onchange="doidbudget()">
																<option value="<?php echo date('Y') ?>"><?php echo date('Y') ?></option>
																<?php
																$sql="SELECT * FROM `years` ORDER BY `years`.`years` DESC";
																$result=mysqli_query($conn,$sql);
																while($rows=mysqli_fetch_assoc($result)){
																?>
																
																<option value="<?php echo $rows['years']; ?>"> <?php echo $rows['years']; ?> </option>
																<?php } ?>	
															</select>
										</div>
									</div>
									<div class="space-4"></div>

									

									

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button  class="btn btn-info" onclick="SearchForBudget()" type="button">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Search Budgets
											</button>

											&nbsp; &nbsp; &nbsp;
											<?php if(defined('budgets_budgets'.'can_add')){ ?>
											<button class="btn"   type="button" data-target="#NewTalent" data-toggle="modal">
												New Budget <i class="ace-icon fa fa-plus"></i>
												
											</button>&nbsp; &nbsp; &nbsp;
										<?php }?>
											
											
										</div>
									</div>
                          <div id="responseID"></div>
									<div id="budgets_list">


</form>
 <table  id="BudgetItmtable" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														
														
														<th>Budget ID</th>
														
                                                       <th>Department</th>
														<th>
															<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
															Year
														</th>
														<th class="hidden-480">Total</th>
                                                        
														<th>Action</th>
														
													</tr>
												</thead>

												<tbody>
													
	
	 <?php 
	include '../../sessions.php';
	  $budget_id=$_POST['BudgetId'];
	 
	$currentyear=date('Y');
	
										  $userqry="SELECT `Budget_id`,`Name`,`YEAR`,SUM(`budget_item`.`Amount`) AS amountsum,`Id` FROM `budget` INNER JOIN `department` ON `department`.`Id`=`budget`.`Department_id`  INNER JOIN `budget_item` ON `budget_item`.`Budget`=`budget`.`Budget_id` WHERE `YEAR`='$currentyear' GROUP BY `Budget_id`";
										  $Grandtotal=0;
											$results=mysqli_query($conn,$userqry);
											if(mysqli_num_rows($results)){
											while($row=mysqli_fetch_array($results)){
											
											?>
											<tr>
											<td><?php echo $row['Budget_id'];?></td>
											<td><?php echo $row['Name'];?></td>
											<td><?php echo $row['YEAR'];?></td>
											<td><?php $value=$row['amountsum']; echo $Currency.' '. number_format($value,2); ?></td>
											
											<td>
															<div class="hidden-sm hidden-xs action-buttons">
																
																<a class="green" onclick="showBudgetID('<?php echo $row['YEAR']?>','<?php echo $row['Id']?>','<?php echo $row['Name']?>s','<?php echo $row['Budget_id'];?>')">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<a class="red" href="#" onclick="return confirm('Are You sure you want to delete this item')">
																	<i class="ace-icon fa fa-trash-o bigger-130"></i>
																</a>
															</div>

															<div class="hidden-md hidden-lg">
																<div class="inline pos-rel">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																		<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" onclick="showBudgetID()" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
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
											<?php 
                                       $Grandtotal+= $value;
										} 
											}else{
												
												echo '<font color="Red">There are no Items found</font>';
											}
											
											?>
											
												
												</tbody>
												<tfooter>
													<th colspan="3" style="text-align: right;">Total</th>
													
													<th><?php echo  $Currency.' '.number_format($Grandtotal,2);?></th>
												</tfooter>
											</table>
											</div>
 <!-- Modal -->
  <div class="modal fade" id="newBudgetItem_form" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Budget Item</h4>
        </div>
        <div class="modal-body">
         <form class="form-horizontal" id="addBudgetItem_form" onsubmit="return false" method="POST" role="form">
		
									 <div class="form-group">
										<label class="col-sm-3 
										control-label " for="form-field-1"> Budget </label>
															<div class=" col-md-9 col-lg-9 col-sm-9">
														<input type="text"   id="budget_id_id"   class="col-xs-12 col-sm-12"  disabled > 
														 <input type="text"   id="budget_id" hidden="hidden"  class="col-xs-12 col-sm-12"  disabled >
															</div>

									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Description </label>

										<div class="col-sm-9">
											<input type="text" name="Description" placeholder="Description"  id="itemDescription" class="col-xs-10 col-sm-12" />
											
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Amount</label>

										<div class="col-sm-9">
											<input type="number" name="amount" placeholder="amount" id="amount_budget" class="col-xs-10 col-sm-12" />
											
										</div>
									</div>

									<div class="space-4"></div>

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<input  class="btn btn-info"   type="submit" onclick="AddBudgetItem()" value="Add Item">
												
												
											

											&nbsp; &nbsp; &nbsp;
											<a href="Budgets.php"><button class="btn" type="button">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												back to Budgets
											</button></a>
											
										</div>
									</div>
									<div id="response_budget_item" style="text-align: center;"></div>

									<div class="hr hr-24"></div>

																							
														
								</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
   <div class="modal fade" id="newBudgetForm" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">New budget</h4>
        </div>
        <div class="modal-body">
         <form class="form-horizontal" id="addBudgetItem_form" onsubmit="return false" method="POST" role="form">
			
									
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Year </label>

										<div class="col-sm-9">
											<select class="form-control col-xs-10 col-sm-12" id="budget_year_2" onchange="doidbudget()">
																<option value="<?php echo date('Y') ?>"><?php echo date('Y') ?></option>
																<?php
																$sql="SELECT * FROM `years` ORDER BY `years`.`years` DESC";
																$result=mysqli_query($conn,$sql);
																while($rows=mysqli_fetch_assoc($result)){
																?>
																
																<option value="<?php echo $rows['years']; ?>"> <?php echo $rows['years']; ?> </option>
																<?php } ?>	
															</select>
											
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2">Department</label>

										<div class="col-sm-9">
											<select class="form-control col-xs-10 col-sm-12" id="Department_2" onchange="doidbudget()">
																<option value="">--Select Department--</option>
																<?php
																$sql="SELECT `Id`, `Name`, `Church`, `Dept_Description` FROM `department`";
																$result=mysqli_query($conn,$sql);
																while($rows=mysqli_fetch_assoc($result)){
																?>
																
																<option value="<?php echo $rows['Id']; ?>"> <?php echo $rows['Name']; ?> </option>
																<?php } ?>	
															</select>
											
										</div>
									</div>

									<div class="space-4"></div>

									<div id="response_budget_new" style="text-align: center;"></div>

									<div class="hr hr-24"></div>

																							
														
								</form>
        </div>
        <div class="modal-footer">
        	<input  class="btn btn-info"   type="submit" onclick="addBudget()" value="Add Item">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <div class="modal fade" id="EditBudgetForm" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit budget</h4>
        </div>
        <div class="modal-body">
         <form class="form-horizontal" id="addBudgetItem_form" onsubmit="return false" method="POST" role="form">
			
									
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Year </label>

										<div class="col-sm-9">
											<select class="form-control col-xs-10 col-sm-12" id="budget_year_selected" onchange="doidbudget()">
																<option value="<?php echo date('Y') ?>"><?php echo date('Y') ?></option>
																<?php
																$sql="SELECT * FROM `years` ORDER BY `years`.`years` DESC";
																$result=mysqli_query($conn,$sql);
																while($rows=mysqli_fetch_assoc($result)){
																?>
																
																<option value="<?php echo $rows['years']; ?>"> <?php echo $rows['years']; ?> </option>
																<?php } ?>	
															</select>
															<input type="hidden" id="Budget_id_edit_budget" value="">
											
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2">Department</label>

										<div class="col-sm-9">
											<select class="form-control col-xs-10 col-sm-12" id="Department_selected" onchange="doidbudget()">
																<option value="">--Select Department--</option>
																<?php
																$sql="SELECT `Id`, `Name`, `Church`, `Dept_Description` FROM `department`";
																$result=mysqli_query($conn,$sql);
																while($rows=mysqli_fetch_assoc($result)){
																?>
																
																<option value="<?php echo $rows['Id']; ?>"> <?php echo $rows['Name']; ?> </option>
																<?php } ?>	
															</select>
											
										</div>
									</div>

									<div class="space-4"></div>

									<div id="response_budget_edit" style="text-align: center;"></div>

									<div class="hr hr-24"></div>

																							
														
								</form>
        </div>
        <div class="modal-footer">
        	<input  class="btn btn-info"   type="submit" onclick="EditBudget()" value="Save">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>



   <div class="modal fade" id="EditBudgetItem_form" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Budget Item</h4>
        </div>
        <div class="modal-body">
         <form class="form-horizontal" id="addBudgetItem_form" onsubmit="return false" method="POST" role="form">
		
								
								<div id="Editdata">	

								</div>


									
									<div id="response_budget_item_edit" style="text-align: center;"></div>

									<div class="hr hr-24"></div>

																							
														
								</form>
        </div>
        <div class="modal-footer">
         <input  class="btn btn-info"   type="submit" onclick="EditBudgetItem_act()" value="Save"> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


																								
																								</div>


														
								
								
								
									<div class="col-xs-6">
										

										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="table-header">
											Budget Items
										</div>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
										
													<div id="Tabledata"></div>



											
										</div>
										<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<?php if(defined('budgets_budgets'.'can_add')){ ?>
											<input  class="btn btn-info"   type="submit" onclick="showNewitemmodel()" data-target="#newBudgetItem_form" value="New Item">
												
												<?php } ?>
											

											&nbsp; &nbsp; &nbsp;
											
											
										</div>
									</div>
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
		<script //src="assets/js/jquery-2.1.4.min.js"></script>

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

	

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="assets/js/jquery-ui.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/bootbox.js"></script>
		<script src="assets/js/jquery.easypiechart.min.js"></script>
		<script src="assets/js/jquery.gritter.min.js"></script>
		<script src="assets/js/spin.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
      <script src="scripts/Reciept.js"></script>
	  <script src="scripts/budgets.js"></script>
	  
	   
		<!-- inline scripts related to this page -->
		<script type="text/javascript">


function doidbudget(){
					 var budget_item=document.getElementById("Budget");
                     var budget_name= budget_item.options[budget_item.selectedIndex].text;
                      var budget_id= budget_item.options[budget_item.selectedIndex].value;
                      document.getElementById("budget_id_id").setAttribute('value',budget_name);
                   document.getElementById("budget_id").setAttribute('value',budget_id);

				}
function showNewitemmodel(){


 var budget_item=document.getElementById("Budget");
  var budget_id= budget_item.options[budget_item.selectedIndex].value;
  if(budget_id.trim()){

  	$('#newBudgetItem_form').modal();
  }else{
  	alert('Please Select a Budget');
  }


}

function showBudgetID(Year,Department_id,Department_name,Budget_id){


 var budget_year=document.getElementById("budget_year_selected");
  budget_year.options[budget_year.selectedIndex].text=Year;
   budget_year.options[budget_year.selectedIndex].value=Year;

   var dept=document.getElementById("Department_selected");
  dept.options[dept.selectedIndex].text=Department_name;
  dept.options[dept.selectedIndex].value=Department_id;

console.log(Budget_id);
  document.getElementById("Budget_id_edit_budget").value=Budget_id;
  	$('#EditBudgetForm').modal();
  



}
	


function showEditItemModel(){
 var budget_item=document.getElementById("Budget");
  var budget_id= budget_item.options[budget_item.selectedIndex].value;
  if(budget_id.trim()){

  	$('#EditBudgetForm').modal();
  }else{
  	alert('Please Select a Budget');
  }


}
		

		  


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
			
				
				$("#budget_item_add").on(ace.click_event, function() {
                    var contentdata=document.getElementById("newitem").innerHTML
                    var budget_item=document.getElementById("Budget");
                     var budget_id= budget_item.options[budget_item.selectedIndex].value;
                    
                     
                    if(budget_id.trim()==''){
                        
                    	alert("Please Select a budget");
                    }else{
                    
                      //document.getElementById("budget_id_id").value=budget_id;
                      //console.log(document.getElementById("budget_id_id").value);

                    	bootbox.dialog({
						message: contentdata,
					
					});
                    	
                    }					
				});
			
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
				
				
				
				$(document).one('ajaxloadstart.page', function(e) {
					autosize.destroy('textarea[class*=autosize]')
					
					$('.limiterBox,.autosizejs').remove();
					$('.daterangepicker.dropdown-menu,.colorpicker.dropdown-menu,.bootstrap-datetimepicker-widget.dropdown-menu').remove();
				});
			
			});
		</script>
	</body>
</html>
