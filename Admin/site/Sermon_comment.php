
<?php 
include('Dbconnect.php');
$sermonID=$_POST['SID'];
$name=$_POST['name'];
$email=$_POST['email'];
$comment=$_POST['comment'];
$comment_Date=date('Y-m-d h:i:sa');
$userqry="INSERT INTO `sermon_comments`(`Id`, `Date_time`, `Email`, `Name`, `Comment`, `Sermon_ID`) VALUES ('','$comment_Date','$email','$name','$comment','$sermonID')";
											$results=mysqli_query($conn,$userqry);
											
											if($results){
											
											?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="blog_single_comment_wrapper">
									<div class="blog_single_comment_heading_wrapper">
									<?php $userqry="SELECT * FROM `sermon_comments` WHERE `Sermon_ID`='$sermonID'";
											$results=mysqli_query($conn,$userqry);
											
											 $numbe=mysqli_num_rows($results);
										
											
											?>
										<div class="blog_single_comment_heading">
											<h4>Comments (<?php echo $numbe ;?>)</h4>
										</div>
										<?php ?>
									</div>
									
									<?php 
											$userqry="SELECT * FROM `sermon_comments` WHERE `Sermon_ID`='$sermonID'";
											$results=mysqli_query($conn,$userqry);
											
											while($row=mysqli_fetch_array($results)){
											
											?>
									<div class="blog_comment1_wrapper">
										<div class="blog_comment1_img">
											<img src="images/ProfileImages/user.png" alt="comment_img" class="img-responsive img-circle"/>
										</div>
										<div class="blog_comment1_cont">
											<h3><?php echo $row['Name'] ?><i class="fa fa-circle"></i> <span><?php echo $Time_Date=date('d-M-Y', strtotime($row['Date_time']));?> </span></h3>
											<p><?php echo $row['Comment'] ?></p>
										</div>
									</div>
									<?php }?>
								</div>
							</div>
							
						</div>
					</div>
											<?php }?>