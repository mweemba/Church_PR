		<?php include 'sessions.php';
		$Year=$_POST['Year'];
		$Month=$_POST['Month'];
		
		
		?>	
			
		<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Date#</th>
      <th scope="col">Event Name</th>
      <th scope="col">Department</th>
      <th scope="col">Venue</th>
	  <th scope="col">time</th>
    </tr>
  </thead>
  
								<?php  
                                $month=date('m');
								$year=date('Y');
								 $sql="SELECT * FROM `events` INNER JOIN `department` ON `events`.`Dept_id` =`department`.`Id` WHERE  MONTH(`Planned_Date`)='$Month' AND YEAR(`Planned_Date`)='$Year'"; 
								$q1=mysqli_query($conn,$sql)or die(mysqli_error());
        
        
            while ($row1 = mysqli_fetch_array($q1)) {
            $eventDate=$row1['Planned_Date'];
           $name=$row1['EventName'];
            $depratment= $row1['Name'];
            $venue=$row1['Venue'];
			$time =$row1['Time'];
            
								
								?>
								
								
							 <tr>
	<td><?php echo date('d-M-Y', strtotime($eventDate)) ?></td>
      <td> <?php echo $name ; ?></td>
      

      <td><?php echo $depratment; ?></td>
	  <td><?php echo  $venue ; ?></td>
	  <td><?php echo  $time; ?></td>
    </tr>	
									
									
			<?php } ?>
				<tbody>
   
      </tbody>
</table>	