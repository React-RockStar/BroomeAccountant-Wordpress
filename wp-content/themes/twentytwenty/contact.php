<?php
/*
Template Name: Contact
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact</title>
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
							<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
								<a class="nav-link" href="../single">UPDATES</a>
							</li>
							<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 mobile-contact active">
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
		<div class="contact-mobile-section1 w-100">
			<div>
				<img src="<?php echo home_url();?>/assets/images/contact_img.png" alt="" class="w-100">
			</div>
		</div>
		<div class="bg-white text-center contact-mobile-section1-content shadow-sm">
			<p>
				Contact us
			</p>
			<h1>
				We are always here to help.
			</h1>
		</div>
		<div class="contact-desktop-section1">
			<div class="bg-white contact-desktop-section1-content position-relative">
				<div class="vertical-center contact-desktop-section1-text">
					<p>
						Contact us
					</p>
					<h1>
						We are always here to help.
					</h1>
				</div>
			</div>
		</div>
		<div class="contact-section2 bg-white">
			<form class="contact-form mb-500">
				<div class="form-group d-flex contact-form-input">
					<input type="email" class="form-control" id="email" aria-describedby="emailHelp">
					<input type="password" class="form-control" id="password">
				</div>
				<div class="form-group d-flex contact-form-input">
					<input type="email" class="form-control" id="email" aria-describedby="emailHelp">
					<input type="password" class="form-control" id="password">
				</div>
				<div class="form-group contact-form-textarea">
					<textarea class="form-control" rows="5" id="comment"></textarea>
				</div>
			</form>
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