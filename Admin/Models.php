
<!-- add budget item-->
<div class="modal fade" id="addBudgetItem" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
		<form>
		
		<div class="form-group">
										<label class="col-sm-3 control-label " for="form-field-1">Category </label>

										<div class="col-sm-9">
											<select class="form-control" name="Category">
																<option value="<?php echo $rows1['Category']?>"><?php echo $rows1['Category']?></option>
																<option value="Current Asset">Current Asset</option>
																<option value="Fixed Asset">Fixed Asset</option>
                                                                
															</select>
										</div>
									</div>

		  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
		</form>
      </div>
      
    </div>
  </div>

  
 <!-- ///add budget item-->
	
	

	
 