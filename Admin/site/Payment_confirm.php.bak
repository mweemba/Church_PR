<?php include 'includes/level1/header.php';?>	
<!-- Header Wrapper End -->
<!-- gc Tittle Wrapper Start -->
<div class="gc_tittle_main_wrapper">
	<div class="gc_tittle_img_overlay"></div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="gc_main_tittle_heading">
		
		</div>
	</div>	
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding_zero">
		<div class="gc_main_tittle_side_nav">
			<ul>
				<li><a href="#">Home</a> &nbsp;&nbsp;&nbsp;&nbsp;></li>
				
			</ul>
		</div>
	</div>
</div>
<!-- gc Tittle Wrapper End -->
<!-- GC map Wrapper Start -->

<!-- GC map Wrapper End -->
<!-- gc causes single contect-form section Start -->
<div class="gc_causes_single_contact_form_wrapper gc_contact_section_form_wrapper">
	<div class="container">
		<div class="row">
		<?php 
// var_dump ( $_POST ); //Uncomment this line if you want to print out every value MyGate sends back.
// Populate PHP variables with the POST back variables MyGate sends
$result = $_POST ['_RESULT'];
$threedsecure = $_POST ["_3DSTATUS"];
$acquirerDateTime = $_POST ["_ACQUIRERDATETIME"];
$price = $_POST ["_AMOUNT"];
$cardCountry = $_POST ["_CARDCOUNTRY"];
$countryCode = $_POST ["_COUNTRYCODE"];
$currencyCode = $_POST ["_CURRENCYCODE"];
$merchantReference = $_POST ["_MERCHANTREFERENCE"];
$transactionIndex = $_POST ["_TRANSACTIONINDEX"];
$payMethod = $_POST ["_PAYMETHOD"];
$errorCode = $_POST ['_ERROR_CODE'];
$errorMessage = $_POST ['_ERROR_MESSAGE'];
$errorDetail = $_POST ['_ERROR_DETAIL'];
$errorSource = $_POST ['_ERROR_SOURCE'];
$bankErrorCode = $_POST ["_BANK_ERROR_CODE"];
$bankErrorMessage = $_POST ["_BANK_ERROR_MESSAGE"];
$servicecharge = $_POST["VARIABLE2"];
$subtotal = $_POST["VARIABLE3"];
$address_id = $_POST["VARIABLE4"];

if ($result >= 0) {
	
	
	
?>
		
	<h3><font color="Green">Thank You, Your Payment was successfull!</font></h3>

<?php
if($member_id){
	
echo '<h3>Click here to see All your Offerring and Givings!</h3>';
}else{
	echo '<h3>Login <a href="Login.php">Here to See all your Transaction</a></h3>';
}
}
else{
?>	
	 <h3><font color="red">There was a Problem, Your Transaction was NOT successfull! Please try again</font></h3>
<?php } ?>
	<div id="loginresponse"></div>
		</div>
	</div>
</div>
<!-- gc causes single contect-form section End -->
<!-- Tweet Feed Wrapper Start -->
<div class="container">
<div class="tc_twtfd_wrapper">
	
		<div class="row">
			<div id="myCarousel" class="vertical-slider carousel vertical slide col-md-12" data-ride="carousel">
				<div class="row">
					<div class="col-md-12 hidden-xs">
						<span data-slide="next" class="btn-vertical-slider fa fa-angle-up tc_up_btn" style="font-size: 28px; top: 0px;"></span>  
					</div>
				</div>
				<br>
				<!-- Carousel items -->
				<div class="carousel-inner">
					<div class="item">
						<div class="row">
							<div class="col-xs-12 col-sm-1 col-md-1">
								<div class="tc_twitter_img_wrapper">
									<img src="images/content/twitter_icon.png" class="twitter icon" alt="twitter icon">
								</div>	
							</div>
							<div class="col-xs-12 col-sm-9 col-md-9">
								<small>- @webstrot </small>
								<p>Font Awesome is always getting a little awesome-er. So here's what's new in the latest version, Font Awesome 4.6.Have some ideas for new features? Help contribute.</p>
								<span class="tc_date_wrapper">29 March 2017</span>
							</div>
						</div>
					</div>
					<div class="item active">
						<div class="row">
							<div class="col-xs-12 col-sm-1 col-md-1">
								<div class="tc_twitter_img_wrapper">
									<img src="images/content/twitter_icon.png" class="twitter icon" alt="twitter icon">
								</div>
							</div>
							<div class="col-xs-12 col-sm-9 col-md-9">
								<small>- @webstrot </small>
								<p>Font Awesome is always getting a little awesome-er. So here's what's new in the latest version, Font Awesome 4.6.Have some ideas for new features? Help contribute.</p>
								<span class="tc_date_wrapper">29 March 2017</span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 hidden-xs">
						<span data-slide="prev" class="btn-vertical-slider fa fa-angle-down tc_down_btn" style="font-size: 28px; top: 0px;"></span>  
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 visible-xs">
						<span data-slide="next" class="btn-vertical-slider fa  fa-angle-right tc_up_btn" style="font-size: 28px; top: 0px;"></span>  
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 visible-xs">
						<span data-slide="prev" class="btn-vertical-slider fa fa-angle-left tc_down_btn" style="font-size: 28px; top: 0px;"></span>  
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
		
<!-- Tweet Feed Wrapper End -->
<!-- GC footer Wrapper Start -->
<?php include 'includes/level1/footer.php';?>