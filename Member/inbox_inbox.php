<table class="table table-striped table-advance table-hover">
	<thead>
		<tr>
			<th colspan="3">
				<input type="checkbox" class="mail-checkbox mail-group-checkbox">
				<div class="btn-group">
					<a class="btn mini blue" href="#" data-toggle="dropdown">
					More
					<i class="icon-angle-down "></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#"><i class="icon-pencil"></i> Mark as Read</a></li>
						<li><a href="#"><i class="icon-ban-circle"></i> Spam</a></li>
						<li class="divider"></li>
						<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
					</ul>
				</div>
			</th>
			<th class="text-right" colspan="3">
				<ul class="unstyled inline inbox-nav">
					<li><span>1-30 of 789</span></li>
					<li><i class="icon-angle-left  pagination-left"></i></li>
					<li><i class="icon-angle-right pagination-right"></i></li>
				</ul>
			</th>
		</tr>
	</thead>
	<tbody>		<?php 	include '../sessions.php';									/*	 $userqry="SELECT `messageID`, `datesent`, `Sender_id`, `RecieverID`, `Subject`, `Message`, 											`status`, `datercieved`, `Church ID`, `BroadCast` FROM `messages` WHERE `BroadCast`='Yes' AND `Church ID`='$church_id'";											$results=mysqli_query($conn,$userqry); */																						while($row=mysqli_fetch_array($results)){																						?>
		<tr class="unread">
			<td class="inbox-small-cells">
				<input type="checkbox" class="mail-checkbox">
			</td>
			<td class="inbox-small-cells"><i class="icon-star"></i></td>
			<td class="view-message  hidden-phone">Petronas IT</td>
			<td class="view-message ">New server for datacenter needed</td>
			<td class="view-message  inbox-small-cells"><i class="icon-paper-clip"></i></td>
			<td class="view-message  text-right">16:30 PM</td>
		</tr>				<?php } ?>
		
	</tbody>
</table>