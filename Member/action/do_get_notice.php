
<?php 
include'../../Dbconnect.php';
$DetailID=$_POST['messageID'];


                        
 $propertySQL="SELECT `Notice_id`, `Subject`, `Content`, `attachment`, `attachment2`, `attachment3`, `sentby`, `date_time`, `NoticeStatus` FROM `dashboard_notices` WHERE `Notice_id`='$DetailID'";
											$results=mysqli_query($conn,$propertySQL);
											$row=mysqli_fetch_assoc($results);
											
											 
   if($results){
   	?>
<h2 id="notice_subject"><?php echo $row['Subject'] ?></h2>

												<div class="timeline-content" id="messagecontent">

													<?php echo $row['Content'] ?>

												</div>
												<?php if($row['attachment']){ ?>
												<div id="attachment1"><i class="icon-paper-clip"><a href="../Uploaded_docs/MessageAttachments/<?php echo $row['attachment'] ?>"></i>Attachment  <i class="icon-download"></i></a></div>

											<?php } ?>
												
												<?php if($row['attachment2']){ ?>
												<div id="attachment1"><i class="icon-paper-clip"><a href="../Uploaded_docs/MessageAttachments/<?php echo $row['attachment2'] ?>"></i>Attachment  <i class="icon-download"></i></a></div>

											<?php } ?>

											<?php if($row['attachment3']){ ?>
												<div id="attachment1"><i class="icon-paper-clip"><a href="../Uploaded_docs/MessageAttachments/<?php echo $row['attachment3'] ?>"></i>Attachment  <i class="icon-download"></i></a></div>

											<?php } ?>



											<?php 
                                          

										}	?>