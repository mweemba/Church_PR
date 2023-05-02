<?php
 $Type=$_POST['reporttype'];
 $startDate=$_POST['startDate'];
 $Endday=$_POST['Endday'];
 $Department=$_POST['Department'];

  $select = 'SELECT *';
  $from = 'FROM `transaction`';
  
  
  $where = ' WHERE TRUE';
  
  if ($startDate){
    $where .= " AND date =>".$startDate;
  }
 
  if ($Endday){
    $where .= " AND date =<".$Endday;
  }
   if ($Department){
    $where .= " AND department = ".$Department;
  }
 
  
 
  $sql = $select . $from . $where;
?>

<div class="row">
									<div class="col-xs-12">
										
										<div class="table-header">
											Income Statement   From:    To:   
										</div>
                                     
										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>Transaction ID</th>
															<th>Reciept ID</th>
															<th>Department</th>

															<th>
																
																Naration
															</th>
															<th>Amount</th>
															<th>Date and Time </th>
															

														<th></th>
													</tr>
												</thead>

												<tbody>
												<?php 
											
											$results=mysqli_query($conn,$sql);
											
											while($row=mysqli_fetch_array($results)){
											SELECT `transactionID`, `recieptID`, `IDnumber`, `type`, `Category`, `department`, `date`, `Amount`, `Naration`, `church`, `District` FROM `transaction` WHERE 1
											?>
													<tr>
														
                                                       
														<td>
														<?php echo $row['transactionID'];?>
														</td>
														<td><?php echo $row['recieptID'];?></td>
														<td ><?php echo $row['department'];?> <?php echo $row['First Name'];?></td>
														<td><?php echo $row['Naration'];?> </td>
                                                         
														<td>
															<?php echo $row['Amount'];?>
														</td>
<td>
														<?php echo $row['date'];?>
														</td>
																</tr>
											<?php } ?>

                                           </tbody>
											</table>
										</div>
									</div>
								</div>
