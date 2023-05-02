	  
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
														<th class="hidden-480">Total()</th>
                                                        
														<th>Action</th>
														
													</tr>
												</thead>

												<tbody>
													
	
	 <?php 
	include '../../sessions.php';
	 include'../actions/permissions.php'; 
	  $year=$_POST['year'];
	 
	setlocale(LC_MONETARY, 'en_ZM');
	
										 $userqry="SELECT `Budget_id`,`Name`,`YEAR`,SUM(`budget_item`.`Amount`) AS amountsum,`Id` FROM `budget` INNER JOIN `department` ON `department`.`Id`=`budget`.`Department_id`  INNER JOIN `budget_item` ON `budget_item`.`Budget`=`budget`.`Budget_id` WHERE `YEAR`='$year' GROUP BY `Budget_id`";
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
																
                                                                 <?php if(defined('budgets_budgets'.'can_edit'))
                                                                 { ?>
																<a class="green" onclick="showBudgetID('<?php echo $row['YEAR']?>','<?php echo $row['Id']?>','<?php echo $row['Name']?>s','<?php echo $row['Budget_id'];?>')">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>
																<?php } if(defined('budgets_budgets'.'can_delete')){ ?>

																<a class="red" href="#" onclick="DeleteBudgetItem(<?php echo $row['Budget_Line'];?>)">
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
													
													<th><?php echo $Currency.' '.number_format($Grandtotal,2);?></th>
												</tfooter>tfooter>
											</table>
 <!-- Modal -->