<?php
   /**
    * Template Name: service Template
    */

get_header();?>
<div class="main">
		<div class="archive-mobile-section1 w-100">
			<div>
				<img src="<?php echo get_field('banner_image');?>" alt="" class="w-100">
			</div>
		</div>
		<div class="bg-white text-center archive-mobile-section1-content shadow-sm">
			<h1><?php echo get_field('banner_title');?>
		</h1>
			<p>
				<?php echo get_field('banner_content');?>
			</p>
			<a href="<?php echo get_field('button_link');?>" type="button" class="btn btn-outline-custom"><?php echo get_field('button_title');?></a>
		</div>
		<div class="archive-desktop-section1" style="background-image: url(<?php echo get_field('banner_image'); ?>);">
			<div class="bg-white archive-desktop-section1-content position-relative">
				<div class="vertical-center archive-desktop-section1-text">
					<h1><?php echo get_field('banner_title');?></h1>
					<p>
						<?php echo get_field('banner_content');?>.
					</p>
					<a href="<?php echo get_field('button_link');?>" type="button" class="btn btn-outline-custom"><?php echo get_field('button_title');?></a>
				</div>
			</div>
		</div>
		<div class="archive-section2 bg-white"><?php 
			$args = array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' => -1,
				'order' => 'DESC',
			);
			$result = new WP_Query($args);
			if($result->have_posts()) :
				$i =1; 
				while($result->have_posts()) : $result->the_post() ;
				$id = get_the_id();?>
					<div class="archive-section2-category <?php if($i != 1) { ?>mt-50 <?php } ?>">
						<p class="archive-section2-category-date"><?php echo get_the_date();?></p>
						<div class="d-flex justify-content-between align-items-center">
							<div class="archive-section2-category-title">
								<h5 class="mb-0 hidden-text"><?php echo get_the_title();?></h5>
							</div>
							<div class="archive-section2-category-detail">
								<p class="mb-0 hidden-text"><?php  echo wp_trim_words( get_the_content(), 15 ); ?></p>
							
							</div>
							<div class="post_link"><a href="<?php echo get_permalink();?>" type="button" class="btn archive-btn">Read more</a></div>	
						</div>
					</div><?php 
					$i++;
				endwhile;
			endif; wp_reset_query(); ?>
			<div class="section2-footer">
				<h2 class="mr-30"><?php echo get_field('contact_us_title');?></h2>
				<a href="<?php echo get_field('contact_us_link');?>" type="button" class="btn btn-outline-custom"><?php echo get_field('contact_us_button')?></a>
			</div>
		</div>
	</div>
<?php 
get_footer();
?>