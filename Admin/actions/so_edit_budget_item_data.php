	      
<?php
include '../../Dbconnect.php';
	$itemID=$_POST['itemID'];

	
		 
	 $sql1="SELECT * FROM `budget_item`  INNER JOIN  `budget` ON `budget`.`budget_id`=`budget_item`.`Budget` INNER JOIN `department` ON `department`.`Id`=`budget`.`Department_id` WHERE `Budget_Line`='$itemID'";
		$result2=mysqli_query($conn,$sql1);
	while($rows2=mysqli_fetch_array($result2)){
																
	$results=mysqli_query($conn,$sql1);
	

?>

	 <div class="form-group">
										<label class="col-sm-3 
										control-label " for="form-field-1"> Budget </label>
															<div class=" col-md-9 col-lg-9 col-sm-9">
														<input type="text"  value="<?php echo $rows2['Name']?>-<?php echo $rows2['YEAR']?>" id="budget_id_id"   class="col-xs-12 col-sm-12"  disabled > 
														 <input type="text"   id="budget_id_2" hidden="hidden"  value="<?php echo $rows2['Budget_Line']?>" class="col-xs-12 col-sm-12"  disabled >
															</div>

									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Item Description </label>

										<div class="col-sm-9">
											<input type="text" id="itemDescriptio_1" name="Description" placeholder="Description" value="<?php echo $rows2['Description']?>"  class="col-xs-10 col-sm-12" />
											
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Amount</label>

										<div class="col-sm-9">
											<input type="number" id="itemAmount"name="amount"  value="<?php echo $rows2['Amount']?>" placeholder="amount" id="amount_budget" class="col-xs-10 col-sm-12" />
											
										</div>
									</div>


<?php

		
	}

										

?>