<?php
/*
Template Name: Sub
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sub</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?php echo home_url();?>/assets/css/main.css">
</head>
<body>

	<div class="navigation-wrap bg-light start-header start-style">
		<div class="row">
			<div class="col-12">
				<nav class="navbar navbar-expand-md navbar-light">				

					<div class="logo text-center">
						<a class="navbar-brand" href="#" target="_blank">
							<img src="<?php echo home_url();?>/assets/images/LOGO.jpg" alt="">
						</a>
					</div>	

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav py-4 py-md-0 w-100">
							<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
								<a class="nav-link" href="../home" role="button" aria-haspopup="true" aria-expanded="false">HOME</a>
							</li>
							<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
								<a class="nav-link" href="../sub">ABOUT US</a>
							</li>
							<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
								<a class="nav-link" href="../archive">OUR SERVICES</a>
							</li>
							<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
								<a class="nav-link" href="../single">UPDATES</a>
							</li>
							<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 mobile-contact">
								<a class="nav-link" href="../contact">CONTACT</a>
							</li>
						</ul>
					</div>
					<div class="ml-auto desktop-contact text-right">
						<a href="../contact">
							<button type="button" class="btn btn-link rounded-0 text-decoration-none">CONTACT</button>
						</a>
					</div>
				</nav>		
			</div>
		</div>
	</div>
	<div class="main">
		<div class="sub-mobile-section1 w-100">
			<div>
				<img src="<?php echo home_url();?>/assets/images/sub_img1.jpg" alt="" class="w-100">
			</div>
		</div>
		<div class="bg-white text-center sub-mobile-section1-content shadow-sm">
			<h1>We understand.</h1>
			<p>Broome Accountants is the leading accounting firm located in Broome.
				At Broome Accountants, we take great pride in our knowledge and personalised confidential service.
			</p>
			<button type="button" class="btn btn-outline-custom">More about us</button>
		</div>
		<div class="sub-desktop-section1">
			<div class="bg-white sub-desktop-section1-content position-relative">
				<div class="vertical-center sub-desktop-section1-text">
					<h1>About our firm</h1>
					<p>Our goals are to help you achieve your full tax entitlements, maximise monetary rewards for
						business effort and financial independence.
					</p>
					<button type="button" class="btn btn-outline-custom">Contact us</button>
				</div>
			</div>
		</div>
		<div class="sub-section2 bg-white">
			<div class="sub-section2-content1 d-flex align-items-center">
				<div class="sub-section2-left col-lg-6">
					<h2 class="mb-40">Helping you achieve your full tax entitlements</h2>
					<p class="mb-40">We do this by providing excellent service and maintaining up to date knowledge
						by adhering to CPA professional development standards.
					</p>
					<p class="mb-40">
						We have over 25years' experience in public accounting &amp; taxation obtained
						by working across mining, construction, travel and government industries.
					</p>
					<p>
						We are proud of the reputation for the high standards and integrity we have
						gained with our clients who appreciate confidentiality, attention to detail
						and innovative advice.
					</p>
				</div>
				<div class="sub-section2-right col-lg-6">
					<div>
						<img src="<?php echo home_url();?>/assets/images/sub_img2.png" alt="" class="w-100">
					</div>
					<div class="w-100 d-flex mt-50 sub-section2-card-part">
						<div class="col-lg-6 col-md-6 col-sm-12 mb-40 pl-0">
							<div>
								<img src="<?php echo home_url();?>/assets/images/sub_img3.png" alt="" class="w-100">
							</div>
							<div class="shadow-sm sub-section2-card bg-white">
								Help for individuals
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 mb-40 pr-0">
							<div>
								<img src="<?php echo home_url();?>/assets/images/sub_img4.png" alt="" class="w-100">
							</div>
							<div class="shadow-sm sub-section2-card bg-white">
								Help for businesses
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-12 sub-section2-covid-part d-flex mt-50">
				<div class="col-lg-7 sub-section2-covid-img pr-0 pl-0">
					<img src="<?php echo home_url();?>/assets/images/sub_img5.png" alt="" class="w-100">
					<p class="sub-latest-update">Latest Update</p>
				</div>
				<div class="col-lg-5 sub-section2-covid">
					<p class="vertical-center">Due to covid-19, no personal appointments can be made. Our office operates 
						as normal. All contract will be via phone or email only.
						<br>
						<br>
						<a href="#" class="more-info"><b>More Info</b></a>
					</p>
				</div>
			</div>
			<hr class="custom-line mt-70">
			<div class="section2-footer">
				<h2 class="mr-30">Call to action here?</h2>
				<button type="button" class="btn btn-outline-custom">Contact us</button>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="row footer-section1">
			<div class="col-lg-3 col-md-12 d-flex align-items-center footer-section1-info">
				<div class="footer-section1-icon">
					<img src="<?php echo home_url();?>/assets/images/Phone icon.png" alt="">
				</div>
				<div>
					<p class="font-weight-bold">Call us at</p>
					<p>(08) 9193 5128</p>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 d-flex align-items-center justify-content-center footer-section1-info">
				<div class="footer-section1-icon">
					<img src="<?php echo home_url();?>/assets/images/@.png" alt="">
				</div>
				<div>
					<p class="font-weight-bold">Send emails to</p>
					<p>contact@broomeaccountants.com.au</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-12 d-flex align-items-center footer-section1-info">
				<div class="footer-section1-icon">
					<img src="<?php echo home_url();?>/assets/images/House icon.png" alt="">
				</div>
				<div>
					<p class="font-weight-bold">Locate us</p>
					<p>1 Robinson St(Fredrick & Robinson Sts) Broome WA 6725</p>
				</div>
			</div>
		</div>
		<div class="footer-section2">
			<h2 class="desktop-footer-section2-text text-align-left">We can help you achieve your full tax <br> entitlements, monetary rewards
			for effort and financial independence.</h2>
			<h2 class="mobile-footer-section2-text text-center">
				We can help you achieve your full tax entitlements, monetary rewards for effort and financial independence.
			</h2>
			<div class="d-flex justify-content-end align-items-center">
				<img src="<?php echo home_url();?>/assets/images/footer_logo1.png" alt="">
				<img src="<?php echo home_url();?>/assets/images/footer_logo2.png" alt="">
			</div>
		</div>
		<div class="footer-section3 d-flex justify-content-between">
			<p>
				It is a long established fact that a reader will be distracted by the readable.
			</p>
			<p>
				&copy; Copyright 2020 Broome Accountants &nbsp;&nbsp;|&nbsp;&nbsp; Website by Websmith Studio
			</p>
		</div>
	</div>
</body>
</html>