<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Broome_Accountants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'broome-accountants' ); ?></a> -->

<header id="masthead" class="site-header">
		<div class="navigation-wrap bg-light start-header start-style">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-md navbar-light">				

						<div class="logo text-center">
							<a class="navbar-brand" href="/" title="Go to home page">
								<img src="http://13.55.100.169/wp-content/uploads/2020/06/LOGO.jpg" alt="Broome Accountants">
							</a>
						</div>	
						
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
						
							<ul class="navbar-nav py-4 py-md-0 w-100">
								<?php

									$menuLocations = get_nav_menu_locations();

									$menuID = $menuLocations['menu-1'];

									$primaryNav = wp_get_nav_menu_items($menuID);
									
									if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         							$url = "https://";   
								    else  
								         $url = "http://";   
								    // Append the host(domain name, ip) to the URL.   
								    $url.= $_SERVER['HTTP_HOST'];   
								    
								    // Append the requested resource location to the URL   
								    $url.= $_SERVER['REQUEST_URI'];    
									foreach ( $primaryNav as $navItem ) {
										
										if($url == $navItem->url) {
											$class = "active";
										}else {
											$class= "";
										}
									 ?>
										<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 <?php echo $class;?> "><a class="nav-link" href="<?php echo $navItem->url; ?>" title="<?php echo $navItem->title?>"><?php echo $navItem->title?></a></li> <?php 
										
									}
								?>
							</ul>								
						</div>
						<div class="ml-auto desktop-contact text-right">
							<a href="<?php echo site_url('contact');?>">
								<button type="button" class="btn btn-link rounded-0 text-decoration-none">CONTACT</button>
							</a>
						</div>
					</nav>		
				</div>
			</div>
		</div>
	</header>