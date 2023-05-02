
<?php
include '../../sessions.php';

?>

<div class="form-group" >
										<label class="col-sm-3 control-label " for="form-field-1"> Department</label>

										<div class="col-sm-9">
											<select class="form-control" id="Account_id" onchange="find_sub_accounts()">
																
																
																
																<option value="">--Select Department--</option>
																<?php
														$sql="SELECT `acc_id`, `account_name`, `account_description`, `department_id`, `status` FROM `accounts`";
															 $stmt = $conn2->prepare($sql);
													$stmt->execute();
														
											while($rows = $stmt->fetch()){
											
																?>
																
											<option value="<?php echo $rows['acc_id']; ?>"><?php echo $rows['account_name']; ?> </option>
																
																<?php }  ?>
																
																
															</select>
										</div>
										</div>

										<div class="form-group" >
										<label class="col-sm-3 control-label " for="form-field-1"> Sub Departments</label>

										<div class="col-sm-9">
											<select class="form-control" id="sub_account" >
																
																
																
																<option value="">--Select Sub Department--</option>
																<option value="">Nil</option>
																
																
																 </option>
																
																
																
																
															</select>
										</div>
										</div>




	
	


