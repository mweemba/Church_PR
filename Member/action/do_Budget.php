		<?php include '../../sessions.php';
		$Year=$_POST['Year'];
		
		
		
			
							
							
								$sql="SELECT `Budget_id`,`Name`,`YEAR`,SUM(`budget_item`.`Amount`) AS amountsum,`Id`
								FROM `budget` INNER JOIN `department` ON `department`.`Id`=`budget`.`Department_id`  INNER JOIN `budget_item` ON `budget_item`.`Budget`=`budget`.`Budget_id` WHERE `YEAR`='$Year' GROUP BY `Budget_id`";
								
								
								$q1=mysqli_query($conn,$sql);
								
								if(mysqli_num_rows($q1) >0){
		?>	
			
		<table class="table table-bordered table-hover">
  <thead>

	<tr>

   <th>Budget ID</th>														
<th>Department</th>
<th>Year</th>
<th >Total</th>

<th>View</th>

	</tr>
  </thead>
  
								<?php  
                                
        
        
            while ($row = mysqli_fetch_array($q1)) {
      
								
								?>							
	<tr>												
	<td><?php echo $row['Budget_id'];?></td>
	<td><?php echo $row['Name'];?></td>
	<td><?php echo $row['YEAR'];?></td>
	<td><?php $value=$row['amountsum']; echo $Currency.' '. number_format($value,2); ?></td>
	<td><a href="#" class="btn bigicn-only grey"><i class="m-icon-big-swapright m-icon-white"></i></a></td>
		</tr>	
									
									
			<?php } ?>
				<tbody>
   
      </tbody>
</table>	
<?php }
else { echo 0; }

 ?>