<?php 


 $query="SELECT `Church ID`, `Church Name`, `Location`, `Postal Address`, `Conference`, `Union_1`, `Division`, `District_ID`, `Active` FROM `churchdetails` WHERE `Active`='yes'";
      
      $q1=mysqli_query($conn,$query);
        $Church_id="";
           $Church_name="";
       $Church_Conference="";
        
            while ($row = mysqli_fetch_array($q1)) {
            $Church_id=$row['Church ID'];
           $Church_name=$row['Church Name'];
		   $Church_Conference=$row['Conference'];
         
}
      ?>