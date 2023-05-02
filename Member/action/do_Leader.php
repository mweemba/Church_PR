		<?php include '../../sessions.php';
		$Year=$_POST['Year'];
		
		$deptId=$_POST['deptId'];
		
			
								$sql='';
								if($deptId=='0'){
								$sql="SELECT * FROM `Leaders` INNER JOIN `churchmember` on `churchmember`.`ID Number`=`Leaders`.`Member_Id` INNER JOIN
								`department` on `department`.`Id`=`Leaders`.`Department_id` WHERE `PosStatus`<>'Deleted' AND  `leaders`.`Year`='$Year'";
								}
								 else{
									 
									$sql="SELECT * FROM `Leaders` INNER JOIN `churchmember` on `churchmember`.`ID Number`=`Leaders`.`Member_Id` INNER JOIN
								`department` on `department`.`Id`=`Leaders`.`Department_id` WHERE `PosStatus`<>'Deleted' AND  `leaders`.`Year`='$Year' AND `leaders`.`Department_id`='$deptId'";
								 }
								$q1=mysqli_query($conn,$sql);
								
								if(mysqli_num_rows($q1) >0){
		?>	
			
		<table class="table table-bordered table-hover">
  <thead>

	<tr>

   <th>Year</th>
	<th>Position</th>
	 <th>Name</th>
	<th>Church Board Member</th>
	<th>Department</th>
	<th>Status</th>

	</tr>
  </thead>
  
								<?php  
                                
        
        
            while ($row = mysqli_fetch_array($q1)) {
      
								
								?>
								
								
	<tr>
														
	   <td>
		<?php echo $row['Year'];?>
		</td>
		<td>
		<?php echo $row['Pos_Name'];?>
		</td>
		<td ><a href="profile2.php?mid=<?php echo $row['Member_Id'];?>" ><?php echo $row['First Name'];?> <?php echo $row['Last Name'];?></a></td>

		<td><?php echo $row['Board_member']; ; ?></td>
		 
		<td>
			<?php echo $row['Name'];?>
		</td>
		<td>
			<?php echo $row['PosStatus'];?>
		</td>
		</tr>	
									
									
			<?php } ?>
				<tbody>
   
      </tbody>
</table>	
<?php }
else { echo 0; }

 ?>