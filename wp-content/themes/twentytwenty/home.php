<?php
/*
Template Name: Home
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
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
							<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
								<a class="nav-link" href="../home" role="button" aria-haspopup="true" aria-expanded="false">HOME</a>
							</li>
							<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
								<a class="nav-link" href="../sub">ABOUT US</a>
							</li>
							<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
								<a class="nav-link" href="../archive">OUR SERIVICES</a>
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
		<div class="home-mobile-section1 w-100">
			<div>
				<img src="<?php echo home_url();?>/assets/images/home_img1.jpg" alt="" class="w-100">
			</div>
		</div>
		<div class="bg-white text-center home-mobile-section1-content shadow-sm">
			<h1>We understand.</h1>
			<p>Broome Accountants is the leading accounting firm located in Broome.
				At Broome Accountants, we take great pride in our knowledge and personalised confidential service.
			</p>
			<button type="button" class="btn btn-outline-custom">More about us</button>
		</div>
		<div class="home-desktop-section1">
			<div class="bg-white home-desktop-section1-content position-relative">
				<div class="vertical-center home-desktop-section1-text">
					<h1>We understand.</h1>
					<p>Broome Accountants is the leading accounting firm located in Broome.
						At Broome Accountants, we take great pride in our knowledge and personalised confidential service.
					</p>
					<button type="button" class="btn btn-outline-custom">More about us</button>
				</div>
			</div>
		</div>
		<div class="home-section2 bg-white">
			<div class="home-section2-header">
				<ul>
					<li class="home-section2-header-item">Individuals</li>
					<li class="home-section2-header-item">Business</li>
					<li class="home-section2-header-item">Latest updates</li>
					<li class="home-section2-header-item">Contact us</li>
				</ul>
			</div>
			<div class="home-section2-main d-flex">
				<div class="col-lg-8 row home-section2-main-left">
					<div class="col-lg-6 col-md-6 col-sm-12 home-section2-card mb-40">
						<div>
							<img src="<?php echo home_url();?>/assets/images/home_img2.png" alt="" class="w-100">
						</div>
						<div class="shadow-sm home-section2-card-text">
							<p>Full range of taxation services and advice for individuals</p>
							<p>Help for individuals</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 home-section2-card mb-40">
						<div>
							<img src="<?php echo home_url();?>/assets/images/home_img3.png" alt="" class="w-100">
						</div>
						<div class="shadow-sm home-section2-card-text">
							<p>Working and helping businesses with accounting and taxation services</p>
							<p>Help for individuals</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 home-section2-card">
						<div>
							<img src="<?php echo home_url();?>/assets/images/home_img4.png" alt="" class="w-100">
						</div>
						<div class="shadow-sm home-section2-card-text">
							<p>Helping you maximise monetary rewards for business efforts and financial independence</p>
							<p>Help for individuals</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 home-section2-card">
						<div>
							<img src="<?php echo home_url();?>/assets/images/home_img5.png" alt="" class="w-100">
						</div>
						<div class="shadow-sm home-section2-card-text">
							<p>In depth guidance purchasing an Investment property</p>
							<p>Help for individuals</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 position-relative p-0 home-section2-main-right">
					<div class="w-100 position-relative home-section2-covid-img">
						<img src="<?php echo home_url();?>/assets/images/home_img6.png" alt="" class="w-100">
						<p class="latest-update">Latest Update</p>
					</div>
					<div class="w-100 home-section2-covid">
						<p>Due to covid-19, no personal appointments can be made. Our office operates 
							as normal. All contract will be via phone or email only.</p>
					</div>
				</div>
			</div>
			<hr class="custom-line">
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