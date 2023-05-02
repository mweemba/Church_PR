
<?php
function get_dept_analysis($dept_id,$year,$dept_name){


		include '../sessions.php';
  $userqry1="SELECT * FROM `budget_item`  INNER JOIN  `budget` ON `budget`.`budget_id`=`budget_item`.`Budget` INNER JOIN `department` ON `department`.`Id`=`budget`.`Department_id` WHERE  `Department_id`='$dept_id' AND `YEAR`='$year'";
	

						?>
                       
						<div class="row">

									<div class="col-sm-5">
										<div class="widget-box">
											<div class="widget-header">
												<h4 class="widget-title lighter">
													<?php echo $dept_name; ?>
													
												</h4>

												<div class="widget-toolbar">
													<a href="#" data-action="collapse">
														<i class="ace-icon fa fa-chevron-up"></i>
													</a>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main no-padding">
													<table class="table table-bordered table-striped">
														<thead class="thin-border-bottom">
															<tr>
																<th>
																	<i class="ace-icon fa fa-caret-right blue"></i>Budget Line
																</th>

																<th>
																	<i class="ace-icon fa fa-caret-right blue"></i>Description
																</th>

																<th class="hidden-480">
																	<i class="ace-icon fa fa-caret-right blue"></i>Amount
																</th>
																<th class="hidden-480">
																	<i class="ace-icon fa fa-caret-right blue"></i>Spent
																</th>
																<th class="hidden-480">
																	<i class="ace-icon fa fa-caret-right blue"></i>Variaince
																</th>
															</tr>
														</thead>

														<tbody>
															

						<?php									

$results2=mysqli_query($conn,$userqry1);
										$total_spent=0;
										$total_budget=0;

											while($row7=mysqli_fetch_array($results2)){
											
											
//SELECT `Budget_Line`, `Amount`, `Spent`, `Description`, `Budget` FROM `budget_item` WHERE 1
$total_spent+=$row7['Spent'];
										$total_budget+=$row7['Amount'];

 ?>
	


 <tr>
																
																<td><?php echo $row7['Budget_Line'] ;?></td>

																<td>
																	
																	<?php echo $row7['Description']; ?>
																</td>

																<td>
																	
																	<?php echo number_format($row7['Amount'],2) ?>
																</td>
																<td>
																	
																	<?php echo number_format($row7['Spent'],2); ?>
																</td>
																<td>
																	
																	<?php echo number_format($row7['Amount']-$row7['Spent'],2) ;?>
																</td>


															</tr>

<?php
} 



?>




														

														
														</tbody>
														<tfooter>
															<th colspan="2"></th>
															<th>Total Budget : ZMW <?php echo number_format($total_budget,2) ;?></th><th>Total Spent: <?php echo'ZMW'.' '. number_format($total_spent,2) ; $percent=0;
                                                           $percent=round(($total_spent/$total_budget)*100); 
															?></th>
														</tfooter>

													</table>

												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
										</div><!-- /.widget-box -->
									</div><!-- /.col -->

									<div class="col-sm-7">

										<div class="<?php if($percent>49){?>infobox<?php }  ?> infobox-blue2">
											<div class="infobox-progress">
												<div class="easy-pie-chart percentage" data-percent="<?php echo $percent; ?>" data-size="250">
													<span class="percent">Percentage Achieved: <?php echo $percent; ?></span>%
												</div>
											</div>

											<div class="infobox-data">
												

												
											</div>
										</div>
									</div><!-- /.col -->
								</div><!-- /.row --> <div class="page-header">
								 </div>

								<?php
}



								?>