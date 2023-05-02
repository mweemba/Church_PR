 
 
 
 <div class="modal fade" id="NewTalent" role="dialog">

 
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">New Talent</h4>
        </div>
        <div class="modal-body">
		<form action="#" method="GET" class="form-horizontal">
								
								<form class="form-horizontal" action="#" id="addBudgetItem_form" onsubmit="return false" method="POST" role="form">
		
									 <div class="form-group">
										<label class="col-sm-3 
										control-label " for="form-field-1"> Talent ID </label>
															<div class=" col-md-9 col-lg-9 col-sm-9">
														<input type="text"  class="col-xs-12 col-sm-12"  value="<?php echo $rows1['First Name'];?> <?php echo $rows1['Mid Name']?>  <?php echo $rows1['Last Name']?>"> 
														 
															</div>

									</div>
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Talent Name </label>

										<div class="col-sm-9">
											<input type="text" name="Talentname"  class="col-xs-10 col-sm-12">
											
										</div>
									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label "  for="form-field-2"> Description</label>

										<div class="col-sm-9">
											<textarea type="number" name="talentDecription"  id="talentDecription" class="col-xs-10 col-sm-12"></textarea>
											
										</div>
									</div>
									

									<div class="space-4"></div>
									

									<div class="clearfix">
										<div class="col-md-offset-3 col-md-9">
											<input class="btn btn-info" type="submit" name="submitTalentNew" value="Add Item">
											
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
	
	 
 <div class="modal fade" id="NewParticipation" role="dialog">

 
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">New Member Involvment</h4>
        </div>
        <div class="modal-body">

								
								<form class="form-horizontal"   method="POST" role="form">
		
									 <div class="form-group">
										<label class="col-sm-3 
										control-label " for="form-field-1"> Name</label>
															<div class=" col-md-9 col-lg-9 col-sm-9">
														<input type="text"  class="col-xs-12 col-sm-12"  value="<?php echo $rows1['First Name'];?> <?php echo $rows1['Mid Name']?>  <?php echo $rows1['Last Name']?>"> 
														 
															</div>

									</div>
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Involvment Description </label>

										<div class="col-sm-9">
											<input type="text" name="description"  class="col-xs-10 col-sm-12">
											
										</div>
									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label "  for="form-field-2"> Department</label>

										<div class="col-sm-9">
											<select class="form-control" name="Department">
																<option value="">--Select Department--</option>
																<?php
																$sql="SELECT * FROM `department`";
																 $stmt = $conn2->prepare($sql);
											 
											               $stmt->execute();
											                  while($rows= $stmt->fetch()){
																?>
																
																<option value="<?php echo $rows['Id']; ?>"><?php echo $rows['Name']; ?> </option>
																<?php } ?>	
															</select>
											
										</div>
									</div>
									

									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label "  for="form-field-2"> Year</label>

										<div class="col-sm-9">
										<select class="form-control" name="year">
											 <option value="<?php echo  date("Y") ?> "><?php echo  date("Y")?>  </option>
																<?php
															$ulimit=date("Y")+5;
															$llimit=date("Y")-5;
															
															
																$sql="SELECT * FROM `years` WHERE `years`>:llimit AND `years`<:ulimit  ORDER BY `years` ASC";
																	 $stmt = $conn2->prepare($sql);
																	  $stmt->bindParam(":llimit",$llimit);
																	   $stmt->bindParam(":ulimit",$ulimit);
											 
											               $stmt->execute();
											                  while($rows= $stmt->fetch()){
																?>
																
																
																<option value="<?php echo $rows['years']; ?>"><?php echo $rows['years']; ?> </option>
																<?php } ?>	
																
																</select>
											
										</div>
									</div>
									

									<div class="space-4"></div>
									

									<div class="clearfix">
										<div class="col-md-offset-3 col-md-9">
											<input class="btn btn-info" type="submit" name="submitinvolvmentNew" value="Add Item">
											
											<button class="btn"  data-dismiss="modal"type="button">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												back to Profile
											</button>
											
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
	
	 <div class="modal fade" id="NewDocument" role="dialog">
	  <div class="modal-dialog">
	<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">New Document</h4>
        </div>
        <div class="modal-body">

								
								<form class="form-horizontal" enctype="multipart/form-data"   method="POST" role="form">
		
									 <div class="form-group">
										<label class="col-sm-3 
										control-label " for="form-field-1"> Document Name</label>
															<div class=" col-md-9 col-lg-9 col-sm-9">
														<input type="text" name="documentname" class="col-xs-12 col-sm-12"  value=""> 
														 
															</div>

									</div>
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Upload Document </label>

										<div class="col-sm-9">
											
											 <input type="file" name="Ducument_upload" class="col-xs-10 col-sm-12" id="bluebook" accept=".pdf" >
											
										</div>
									</div>
									
									<div class="space-4"></div>
									
									

									<div class="space-4"></div>
									

									
									

									<div class="clearfix">
										<div class="col-md-offset-3 col-md-9">
											<input class="btn btn-info" type="submit" name="submitNewDocument" value="Add Item">
											
											<button class="btn"  data-dismiss="modal"type="button">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												back to Profile
											</button>
											
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

	 <div class="modal fade" id="EditParticipation" role="dialog">

 
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">New Member Involvment</h4>
        </div>
        <div class="modal-body">

								
								<form class="form-horizontal"   method="POST" role="form">
		
									 <div class="form-group">
										<label class="col-sm-3 
										control-label " for="form-field-1"> ID</label>
															<div class=" col-md-9 col-lg-9 col-sm-9">
														<input type="text" name="editinvolv_id" id="editinvolv_id" class="col-xs-12 col-sm-12"  value=""> 
														 
															</div>

									</div>
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Involvment Description </label>

										<div class="col-sm-9">
											<input type="text" id="edit_involv_description" name="description" class="col-xs-10 col-sm-12">
											
										</div>
									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label "  for="form-field-2"> Department</label>

										<div class="col-sm-9">
											<select class="form-control" id="edit_involv_dept" name="Department">
																<option value="">--Select Department--</option>
																<?php
																$sql="SELECT * FROM `department`";
																 $stmt = $conn2->prepare($sql);
											 
											               $stmt->execute();
											                  while($rows= $stmt->fetch()){
																?>
																
																<option value="<?php echo $rows['Id']; ?>"><?php echo $rows['Name']; ?> </option>
																<?php } ?>	
															</select>
											
										</div>
									</div>
									

									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label "  for="form-field-2"> Year</label>

										<div class="col-sm-9">
										<select class="form-control" id="edit_involv_year" name="year">
											 <option value="<?php echo  date("Y") ?> "><?php echo  date("Y")?>  </option>
																<?php
															$ulimit=date("Y")+5;
															$llimit=date("Y")-5;
															
															
																$sql="SELECT * FROM `years` WHERE `years`>:llimit AND `years`<:ulimit  ORDER BY `years` ASC";
																	 $stmt = $conn2->prepare($sql);
																	  $stmt->bindParam(":llimit",$llimit);
																	   $stmt->bindParam(":ulimit",$ulimit);
											 
											               $stmt->execute();
											                  while($rows= $stmt->fetch()){
																?>
																
																
																<option value="<?php echo $rows['years']; ?>"><?php echo $rows['years']; ?> </option>
																<?php } ?>	
																
																</select>
											
										</div>
									</div>
									

									<div class="space-4"></div>
									

									<div class="clearfix">
										<div class="col-md-offset-3 col-md-9">
											<input class="btn btn-info" type="submit" name="submitinvolvmentedit" value="Save">
											
											<button class="btn"  data-dismiss="modal"type="button">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												back to Profile
											</button>
											
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
		
	<div class="modal fade" id="EditDocuments" role="dialog">

 
     <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Document</h4>
        </div>
        <div class="modal-body">
		<form action="#" method="POST" enctype="multipart/form-data" class="form-horizontal">
								
								
		
										 <div class="form-group">
										<label class="col-sm-3 
										control-label " for="form-field-1"> Document ID</label>
															<div class=" col-md-9 col-lg-9 col-sm-9">
														<input type="text" name="document_id" id="edit_document_id" class="col-xs-12 col-sm-12"  value=""> 
														 
															</div>

									</div>
													 <div class="form-group">
										<label class="col-sm-3 
										control-label " for="form-field-1"> Document Name</label>
															<div class=" col-md-9 col-lg-9 col-sm-9">
														<input type="text" name="documentname" id="edit_document_name" class="col-xs-12 col-sm-12"  value=""> 
														 
															</div>

									</div>
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Upload Document </label>

										<div class="col-sm-9">
											
											 <input type="file" name="Ducument_upload1" class="col-xs-10 col-sm-12" id="Uplaod_file_id" accept=".pdf" >
											<br>
											<br>
											 <a id="document_link" target="_new" href="" ><button class="btn" type="button">
												<i class="ace-icon glyphicon glyphicon-download bigger-110"></i>
												Download File
											</button></a>
											
										</div>
									</div>
									
									
									
									
									

									<div class="clearfix">
										<div class="col-md-offset-3 col-md-9">
											<input class="btn btn-info" type="submit" name="submitEditDocument" value="Save">
											
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
	
	<div class="modal fade" id="EditTalent" role="dialog">

 
     <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Talent/Gift</h4>
        </div>
        <div class="modal-body">
		<form action="#" method="POST" class="form-horizontal">
								
								<form class="form-horizontal" id="addBudgetItem_form" onsubmit="return false" method="POST" role="form">
		
									 <div class="form-group">
										<label class="col-sm-3 
										control-label " for="form-field-1"> Talent ID </label>
															<div class=" col-md-9 col-lg-9 col-sm-9">
														<input type="text" id="Talentedit_id" name="Talentedit"  class="col-xs-12 col-sm-12" readonly value=""> 
														
															</div>

									</div>
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-2"> Talent </label>

										<div class="col-sm-9">
											<input type="text" name="Talentname" id="Talentedit_name"  class="col-xs-10 col-sm-12">
											
										</div>
									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label "  for="form-field-2"> Description</label>

										<div class="col-sm-9">
											<textarea type="number" name="talentDecription"  id="Talentedit_decript" class="col-xs-10 col-sm-12"></textarea>
											
										</div>
									</div>
									

									<div class="space-4"></div>
									

									<div class="clearfix">
										<div class="col-md-offset-3 col-md-9">
											<input class="btn btn-info" type="submit" name="submitTalentEdit" value="Add Item">
											
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