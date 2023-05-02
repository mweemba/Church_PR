	         <table  id="BudgetItmtable" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														
														
														<th>Line</th>
														<th class="hidden-480">Department</th>
                                                       <th>Description</th>
														<th>
															<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
															Year
														</th>
														<th class="hidden-480">Amount(ZMW)</th>
                                                        
														<th>Action</th>
														
													</tr>
												</thead>

												<tbody>
													<div id="Tabledata"></div>
	
	 <?php 

	include '../../sessions.php';
	include'../actions/permissions.php'; 
	  $budget_id=$_POST['BudgetId'];
	 
	
	
										 $userqry="SELECT * FROM `budget_item`  INNER JOIN  `budget` ON `budget`.`budget_id`=`budget_item`.`Budget` INNER JOIN `department` ON `department`.`Id`=`budget`.`Department_id` WHERE  `budget_item`.`Budget`='$budget_id'";
											$results=mysqli_query($conn,$userqry);
											if(mysqli_num_rows($results)){
											while($row=mysqli_fetch_array($results)){
											
											?>
											<tr>
											<td><?php echo $row['Budget_Line'];?></td>
											<td><?php echo $row['Name'];?></td>
											<td><?php echo $row['Description'];?></td>
											<td><?php echo $row['YEAR'];?></td>
											<td><?php echo $row['Amount'];?></td>
											<td>
															<div class="hidden-sm hidden-xs action-buttons">
																<?php if(defined('budgets_budgets'.'can_view')){ ?>
																<a class="blue" href="add_Budget_item.php?Lid=<?php echo $row['Budget_Line'];?>">
																	<i class="ace-icon fa fa-search-plus bigger-130"></i>
																</a>
																<?php } if(defined('budgets_budgets'.'can_edit')){ ?>

																<a class="green" onclick="EditBudgetItem(<?php echo $row['Budget_Line']?>)">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>
																<?php }  if(defined('budgets_budgets'.'can_delete')){ ?>

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
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
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
											<?php } 
											}else{
												
												echo '<font color="Red">There are no Items found</font>';
											}
											
											?>
											
												
												</tbody>
											</table>