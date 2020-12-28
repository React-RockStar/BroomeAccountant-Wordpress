<?php 
  /**
    * Template Name: Contact template
    */

get_header();
?>
<div class="main">
		<div class="contact-mobile-section1 w-100">
			<div>
				<img src="<?php echo get_field('banner_image'); ?>" alt="" class="w-100">
			</div>
		</div>
		<div class="bg-white text-center contact-mobile-section1-content shadow-sm">
			<p>
				<?php echo get_field('banner_title');?>
			</p>
			<h1>
				<?php echo get_field('banner_content');?>
			</h1>
		</div>
		<div class="contact-desktop-section1" style="background-image: url(<?php echo get_field('banner_image'); ?>);">
			<div class="bg-white contact-desktop-section1-content position-relative">
				<div class="vertical-center contact-desktop-section1-text">
					<p>
						<?php echo get_field('banner_title');?>
					</p>
					<h1>
						<?php echo get_field('banner_content');?>
					</h1>
				</div>
			</div>
		</div>
		<div class="contact-section2 bg-white">
			<form class="contact-form mb-500">
				<?php echo do_shortcode('[contact-form-7 id="209" title="Contact form 1"]');?>
			</form>
			<hr class="custom-line mt-70">
			<div class="section2-footer">
				<h2 class="mr-30"><?php echo get_field('contact_us_title');?></h2>
				<a href="<?php echo get_field('contact_us_link');?>" type="button" class="btn btn-outline-custom"><?php echo get_field('contact_us_button')?></a>			
			</div>
		</div>
	</div>
	<?php 
get_footer(); ?>