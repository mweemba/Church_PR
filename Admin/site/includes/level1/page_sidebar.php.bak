	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 gc_blog_category_right_section_main">
				<div class="row">
					
					
					<?php $userqry="SELECT * FROM `sermons` ORDER BY `Date_Preached` DESC LIMIT 1";
											$results=mysqli_query($conn,$userqry);
											
											while($row=mysqli_fetch_array($results)){
											
											?>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="gc_serm_cont_main_wrapper gc_sermon_index_section">
								<h5>- May 10 - 11, 2017</h5>
								<h6><?php echo $row['Subject']?></h6>
								<h4><?php echo $row['Tittle']?></h4>
								<p><?php echo $row['Description']?>.  <a href="#">Read More</a></p>
								<ul>
									<li><a href="#"><i class="fa fa-microphone"></i></a></li>
									<li><a href="Single_Sermon.php?SID=<?php echo $row['Sermon_Id'] ?>" ><i class="fa fa-youtube-play"></i></a></li>
									<li><a href="#"><i class="fa fa-cloud-download"></i></a></li>
									<li><a href="#"><i class="fa fa-file-text-o"></i></a></li>
									<li><a href="#"><i class="fa fa-share-alt"></i></a></li>
								</ul>
								<div class="gc_serm_img_wrapper">
									<img src="Admin/<?php echo $row['Sermon_pic']?>" class="img-responsive" style="height: 50px;" alt="serm_img"/>
									<h2>- by <span><?php echo $row['Preacher']?></span></h2>
								</div>
							</div>
						</div>
											<?php }?>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="gc_right_blog_category_wrapper">
							<h4>Archives</h4>
							<div class="gc_right_blog_category_list_wrapper">
								<ul>
									<li><i class="fa fa-hand-o-right"></i> <a href="#">January 2017</a></li>
									<li><i class="fa fa-hand-o-right"></i> <a href="#">February 2017</a></li>
									<li><i class="fa fa-hand-o-right"></i> <a href="#">March 2017</a></li>
									<li><i class="fa fa-hand-o-right"></i> <a href="#">April 2017</a></li>
								</ul>
							</div>
						</div>	
					</div>
					
						
				</div>
			</div>
		</div>
	</div>
</div>