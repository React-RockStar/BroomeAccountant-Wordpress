<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Broome_Accountants
 */

?>
<div class="footer">
		<div class="row footer-section1">
			<div class="col-lg-3 col-md-12 d-flex align-items-center footer-section1-info">
				<div class="footer-section1-icon">
					<img src="<?php echo get_option('call-us-image',$default);?>" alt="">
				</div>
				<div>
					<p class="font-weight-bold"><?php echo get_option('call-us-title',$default);?></p>
					<p><?php echo get_option('call-us-number',$default);?></p>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 d-flex align-items-center justify-content-center footer-section1-info">
				<div class="footer-section1-icon">
					<img src="<?php echo get_option('email-image',$default)?>" alt="">
				</div>
				<div>
					<p class="font-weight-bold"><?php echo get_option('email-title',$default)?></p>
					<p><?php echo get_option('email',$default)?></p>
				</div>
			</div>
			<div class="col-lg-3 col-md-12 d-flex align-items-center footer-section1-info">
				<div class="footer-section1-icon">
					<img src="<?php echo get_option('address-image',$default) ?>" alt="">
				</div>
				<div>
					<p class="font-weight-bold"><?php echo get_option('address-title',$default) ?></p>
					<p><?php echo get_option('address',$default) ?></p>
				</div>
			</div>
		</div>
		<div class="footer-section2">
			<h2 class="desktop-footer-section2-text text-align-left"><?php echo get_option('description',$default) ?></h2>
			<h2 class="mobile-footer-section2-text text-center">
				<?php echo get_option('description',$default) ?>
			</h2>
			<div class="d-flex justify-content-end align-items-center">
				<img src="<?php  echo get_option('support-image',$default); ?>" alt="">
				<img src="<?php echo get_option('support-image2',$default); ?>" alt="">
			</div>
		</div>
		<div class="footer-section3 d-flex justify-content-between">
			<p>
				<?php echo get_option('text',$default); ?>
			</p>
			<p>
				<?php echo get_option('copyright',$default); ?>
			</p>
		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>