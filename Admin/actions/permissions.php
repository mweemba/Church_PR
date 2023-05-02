
<?php 
												$dblevel=trim($dblevel);
											$qry_perm="SELECT * FROM `permission_category` INNER JOIN `permission_group` ON `permission_category`.`perm_group_id`=`permission_group`.`id` INNER JOIN `roles_permissions` ON `roles_permissions`.`perm_cat_id`=`permission_category`.`id` WHERE `roles_permissions`.`role_id`=:row_id  ORDER BY `permission_group`.`id` ASC ";
											
											 $stmt = $conn2->prepare($qry_perm);
                                             
											 $stmt->bindParam(":row_id",$dblevel);
											  
											               $stmt->execute();
											                  while($row_p= $stmt->fetch()){
                                                                 
											                  	if($row_p['can_view']){ 
											                  	//echo $row_p['short_code'].'can_view'.'<br>';
											                  	//	echo $row_p['can_view'];
                                                                 
											                  	define($row_p['perm_short_code'].'can_view',TRUE);	
											                  	

											                  }
											                  	if($row_p['can_add']){ 

											                  	define($row_p['perm_short_code'].'can_add',TRUE);	

											                  }
											                  	if($row_p['can_edit']){ 

											                  	define($row_p['perm_short_code'].'can_edit',TRUE);	

											                  }
											                  	if($row_p['can_delete']){ 

											                  	define($row_p['perm_short_code'].'can_delete',TRUE);	

											                  }


																}	
	?>
	
	
				