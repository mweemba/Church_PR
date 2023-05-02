	<?php
	include '../../sessions.php';
		
	//$message_id=$_POST['message_id'];
$message_id=1;
	
	
	  $propertySQL="SELECT `email_id`, `subject`, `message`, `sender_member_id`, `sender_iname`, `sender_email`, `reciever_email`, 
	 `sent_date`, `sent_time`, `status` FROM `emails` WHERE `email_id`=:message_id";
											$stmt = $conn2->prepare($propertySQL);
											$stmt->bindParam(":message_id",$message_id);
											$stmt->execute();
											
											while($row5 = $stmt->fetch()){
												
											
	?>
	
	<div class="message-header clearfix">
										<div class="pull-left">
											<span class="blue bigger-125"> <?php echo $row5['subject'] ?> </span>

											<div class="space-4"></div>

											<i class="ace-icon fa fa-star orange2"></i>

											&nbsp;
											<img class="middle" alt="John's Avatar" src="assets/images/avatars/avatar.png" width="32" />
											&nbsp;
											<a href="#" class="sender"><?php echo $row5['sender_iname'] ?> </a>

											&nbsp;
											<i class="ace-icon fa fa-clock-o bigger-110 orange middle"></i>
											<span class="time grey"><?php echo $row5['sent_time'] ?></span>
										</div>

										<div class="pull-right action-buttons">
											<a href="#">
												<i class="ace-icon fa fa-reply green icon-only bigger-130"></i>
											</a>

											<a href="#">
												<i class="ace-icon fa fa-mail-forward blue icon-only bigger-130"></i>
											</a>

											<a href="#">
												<i class="ace-icon fa fa-trash-o red icon-only bigger-130"></i>
											</a>
										</div>
									</div>

									<div class="hr hr-double"></div>

									<div class="message-body" id="messageMain">
										<p>
											<?php echo $row5['message'] ?>
										</p>

										<p>
									
									</div>

									<div class="hr hr-double"></div>

									<div class="message-attachment clearfix">
									

										
	<?php  $propertySQL="SELECT `id`, `file`, `email_id` FROM `email_attachments` WHERE `id`=:message_id";
											$stmt = $conn2->prepare($propertySQL);
											$stmt->bindParam(":message_id",$message_id);
											$stmt->execute();
											
											while($row = $stmt->fetch()){
												
											
	?>
										<ul class="attachment-list pull-left list-unstyled">
											<li>
												<a href="#" class="attached-file">
													<i class="ace-icon fa fa-file-o bigger-110"></i>
													<span class="attached-name"><?php echo $row['file'] ?></span>
												</a>

												<span class="action-buttons">
													<a href="/Files/Emails/<?php echo $row['file'] ?>">
														<i class="ace-icon fa fa-download bigger-125 blue"></i>
													</a>

													
												</span>
											</li>

										
										</ul>
											<?php } ?>

									
									</div>
									
											<?php
											}
											 ?>
							