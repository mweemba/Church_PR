		<?php include '../../sessions.php';
		$Year=$_POST['Year'];
		$Month=$_POST['Month'];
		
		
		  $month=date('m');
								$year=date('Y');
								 $sql="SELECT * FROM `transaction` WHERE MONTH(`date`)='$Month' AND YEAR(`date`)='$Year' AND `IDnumber`='$member_id' AND `type`='income'"; 
								$q1=mysqli_query($conn,$sql)or die(mysqli_error());
        if(mysqli_num_rows($q1) >1){
		
		?>	
			
			<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">Reciept#</th>
      <th scope="col">Date</th>
      <th scope="col">category</th>
      <th scope="col">Amount</th>
	  <th scope="col">Department</th>
    </tr>
  </thead>
  
								<?php  
                              
        
            while ($row = mysqli_fetch_array($q1)) {
            $reciept=$row['recieptID'];
           $date=$row['date'];
            $amount = $row['Amount'];
            $Naraion=$row['Naration'];
			$Category =$row['Category'];
            
								
								?>
								
								
							 <tr>
      <td> <?php echo $reciept ; ?></td>
      <td><?php echo date('d-M-Y', strtotime($date)) ?></td>

      <td><?php echo $Category; ?></td>
	  <td>ZMW <?php echo  $amount ; ?></td>
	  <td><?php echo  $Naraion ; ?></td>
    </tr>	
									
									
			<?php } ?>
				<tbody>
   
      </tbody>
</table>

		<?php } 
		else {   echo 0; };
		?>