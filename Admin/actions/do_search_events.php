	         <table  id="BudgetItmtable" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														
														
														<th>Event_ID</th>
														<th class="hidden-480">Planned_date</th>
                                                       <th>Description</th>
														<th>
															<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
															Year
														</th>
														<th class="hidden-480">Department</th>
                                                        
														<th>Action</th>
														
													</tr>
												</thead>

												<tbody>
													<div id="Tabledata"></div>
	
	 <?php 
	include '../../sessions.php';
	  $year=$_POST['yearId'];
	  $departmentID=$_POST['DepartmentId'];
	
	
										
										$userqry="SELECT  * FROM `events`  INNER JOIN `department` ON `events`.`Dept_id`=`department`.`Id` WHERE `year`='$year' AND `Dept_id`='$departmentID'";
											$results=mysqli_query($conn,$userqry);
											if(mysqli_num_rows($results)){
											while($row=mysqli_fetch_array($results)){
											
											?>
											<tr>
											<td><?php echo $row['Event_Id'];?></td>
											<td><?php echo $row['Planned_Date'];?></td>
											<td><?php echo $row['EventName'];?></td>
											<td><?php echo $row['Year'];?></td>
											<td><?php echo $row['Name'];?></td>
											<td>
															<div class="hidden-sm hidden-xs action-buttons">
																<a class="blue" href="add_Event_item.php?Eid=<?php echo $row['Event_Id'];?>">
																	<i class="ace-icon fa fa-search-plus bigger-130"></i>
																</a>

																<a class="green" href="add_Event_item.php?Eid=<?php echo $row['Event_Id'];?>">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<a class="red" href="#" onclick="DeleteBudgetItem(<?php echo $row['Event_Id'];?>)">
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