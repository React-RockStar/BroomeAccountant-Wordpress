<?php
/*
Template Name: Single
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Single</title>
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
							<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
								<a class="nav-link" href="../sub">ABOUT US</a>
							</li>
							<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
								<a class="nav-link" href="../archive">OUR SERVICES</a>
							</li>
							<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
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
		<div class="single-mobile-section1 w-100">
			<div>
				<img src="<?php echo home_url();?>/assets/images/single_img1.png" alt="" class="w-100">
			</div>
		</div>
		<div class="bg-white text-center single-mobile-section1-content shadow-sm">
			<p>
				12 May 2020
			</p>
			<h1>
				A covid-19 update from us at Broome Accountants
			</h1>
			<button type="button" class="btn btn-outline-custom">Contact us</button>
		</div>
		<div class="single-desktop-section1">
			<div class="bg-white single-desktop-section1-content position-relative">
				<div class="vertical-center single-desktop-section1-text">
					<p>
						12 May 2020
					</p>
					<h1>
						A covid-19 update from us at Broome Accountants
					</h1>
				</div>
			</div>
		</div>
		<div class="single-section2 bg-white">
			<div class="single-section2-article d-flex align-items-center">
				<div class="single-section2-article-text">
					<p>
						Due to covid-19, no personal appointments can be made. Our office operates
						as normal. All contact will be via phone or email only.
						<br>
						<br>
						Contrary to popular belief, Lorem Ipsum is not simply random text.
						It has roots in a piece of classical Latin literature from 45 BC, marking
						it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney
						College in Virginia.
						<br>
						<br>
						Looked up one of the more obscure Latin words, consecteur, from a Lorem Ipsum
						passage, and going through the cites of the word in classical literature, 
						discovered the undoubtable source. Lorem Ipsum comes from sections
					</p>
				</div>
				<div class="single-section2-article-img">
					<img src="<?php echo home_url();?>/assets/images/single_img2.png" alt="" class="w-100">
				</div>
			</div>
			<h3 class="single-previous-updates">Previous updates</h3>
			<div class="single-section2-category mt-50">
				<p class="single-section2-category-date">1 January 2020</p>
				<div class="d-flex justify-content-between align-items-center">
					<div class="single-section2-category-title">
						<h5 class="mb-0 hidden-text">Wishing everyone a happy</h5>
						<h5 class="mb-0 hidden-text">new year for 2020</h5>
					</div>
					<div class="single-section2-category-detail">
						<p class="mb-0 hidden-text">It is a long established fact that a reader will</p>
						<p class="mb-0 hidden-text">be distracted by the readable content...</p>
					</div>
					<button type="button" class="btn single-btn">Read more</button>	
				</div>
			</div>
			<div class="single-section2-category mt-50 mb-500">
				<p class="single-section2-category-date">05 June 2019</p>
				<div class="d-flex justify-content-between align-items-center">
					<div class="single-section2-category-title">
						<h5 class="mb-0 hidden-text">Need help minimising your</h5>
						<h5 class="mb-0 hidden-text">tax for 2018/2019?</h5>
					</div>
					<div class="single-section2-category-detail">
						<p class="mb-0 hidden-text">There are many variations of passages of</p>
						<p class="mb-0 hidden-text">Lorem Ipsum available variations of...</p>
					</div>
					<button type="button" class="btn single-btn">Read more</button>	
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