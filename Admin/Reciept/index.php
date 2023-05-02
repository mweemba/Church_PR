
<?php 
include '../../sessions.php';
; ?>


<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Receipt </title>

  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  
  <div id="invoice-POS">
    
    <center id="top">
      <img src="logo.png" height="120">
      <div class="info"> 
      <h5><?php
      echo  $Church_Conference;
      ?>
      <h5>
      <h6><?php echo $Church_name; ?> Congregation</h6>
		<h2>Reciept</h2>
		 
      </div><!--End Info-->

    </center><!--End InvoiceTop-->
    <?php  echo "<h5>Receipt No ".$recieptID=$_SESSION['reciept']."</h5></b>"; ?>
    <div id="mid">
      <div class="info">
        <p> 
		<?php 
		
		
		 $query="SELECT * FROM `reciept` INNER JOIN  `churchmember` ON `reciept`.`memberID`= `churchmember`.`ID Number` WHERE  `reciept`.`recieptID`='$recieptID'";
      
      $q1=mysqli_query($conn,$query)or die(mysqli_error());
        
        
            while ($row = mysqli_fetch_array($q1)) {
            
            $fname=$row['First Name'];
           $lname=$row['Last Name'];
            $semail = $row['Email'];
             $username = $row['username'];
			 $contactNo=$row['Cellphone'];
			 $address1 = $row['Physical Address 1'];
			  $address2 = $row['Physical Address 2'];
			   $address3 = $row['Physical Address 2'];
			   $trandate=$row['Date'];
			
            


?> 
	   Recieved from: <?php echo $fname; ?> <?php echo $lname; ?></br>
            Address : <?php echo $address1; ?> <?php echo $address2; ?> <?php echo $address3; ?></br>
            Email   : <?php echo $semail; ?></br>
            Phone   : +260<?php echo $contactNo; ?></br>

            Date  : <?php echo $trandate; ?></br>
			<?php } ?>
        </p>
      </div>
    </div><!--End Invoice Mid-->
    
    <div id="bot">

					<div id="table">
						<table>
							<tr class="tabletitle">
								<td class="item"><h2>Details</h2></td>
								
								<td class="Rate"><h2>Amount(ZMK )</h2></td>
							</tr>
							<?php 
							$GrandTotal='';
											 $userqry="SELECT * FROM `transaction`  INNER JOIN `revenue_types` ON `revenue_types`.`Revenue_id`=`transaction`.`type` INNER JOIN `account_reciepts_tran` ON `account_reciepts_tran`.`tran_id` = `transaction`.`transactionID` INNER JOIN `accounts` ON `accounts`.`acc_id`=`account_reciepts_tran`.`accont_id` WHERE `recieptID`='$recieptID'";
											$results=mysqli_query($conn,$userqry);
											
											while($row5=mysqli_fetch_array($results)){
											
											?>
							<tr class="service">
								<td class="tableitem"><p class="itemtext"><?php echo $row5['Revenue_name'];?>-<?php echo $row5['account_name'];?></p></td>
								
								<td class="tableitem"><p class="itemtext"><?php echo $row5['Amount'];?></p></td>
							</tr>

											<?php
$GrandTotal+= $row5['Amount'];






											} ?>

                                  
							

							<tr class="tabletitle">
								
								<td class="Rate"><h2>Total</h2></td>
								<td class="payment"><h2>ZMK <?php echo $GrandTotal ;?> </h2></td>
							</tr>

						</table>
					</div><!--End Table-->

					

					<div id="legalcopy">
						<p class="legal"><strong>Thank you for your giving!</strong> 
						</p>
					</div>
					<p class="legal"><i>Receipted By:<?php echo $firstname. ' '.$lastname; ?></i></p>

				</div><!--End InvoiceBot-->
  </div><!--End Invoice-->
  
  

</body>
<?php


 ?>
</html>
