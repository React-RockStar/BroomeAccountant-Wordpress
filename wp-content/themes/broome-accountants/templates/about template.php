<?php
   /**
    * Template Name: About Template
    */

get_header();
 ?>
<div class="main">
		<div class="sub-mobile-section1 w-100">
			<div>
				<img src="<?php echo get_field('banner_image');?>" alt="" class="w-100">
			</div>
		</div>
		<div class="bg-white text-center sub-mobile-section1-content shadow-sm">
			<h1><?php echo get_field('banner_title');?></h1>
			<p><?php echo get_field('banner_content');?>
			</p>
			<a href="<?php echo get_field('banner_button_link');?>" type="button" class="btn btn-outline-custom"><?php echo get_field('banner_button');?></a>
		</div>
		<div class="sub-desktop-section1" style="background-image: url(<?php echo get_field('banner_image'); ?>);">
			<div class="bg-white sub-desktop-section1-content position-relative">
				<div class="vertical-center sub-desktop-section1-text">
					<h1><?php echo get_field('banner_title');?></h1>
					<p><?php echo get_field('banner_content');?>
					</p>
					<a href="<?php echo get_field('banner_button_link');?>" type="button" class="btn btn-outline-custom"><?php echo get_field('banner_button');?></a>
				</div>
			</div>
		</div>
		<div class="sub-section2 bg-white">
			<div class="sub-section2-content1 d-flex align-items-center">
				<div class="sub-section2-left col-lg-6">
					<h2 class="mb-40"><?php echo get_field('content_title');?></h2>
					<p class="mb-40"><?php echo get_field('content_description'); ?>
					</p>
				</div>
				<div class="sub-section2-right col-lg-6">
					<div>
						<img src="<?php echo get_field('content_image');?>" alt="" class="w-100">
					</div><?php 
					$first = get_field('first'); ?>
					<div class="w-100 d-flex mt-50 sub-section2-card-part">
						<div class="col-lg-6 col-md-6 col-sm-12 mb-40 pl-0">
							<div>
								<img src="<?php echo $first['image'];?>" alt="" class="w-100">
							</div>
							<?php $link = $first['link'];
								if(!$link) {
									$link = "javascript:void(0)";
								} ?>
							<a href="<?php echo $link;?>">
								<div class="shadow-sm sub-section2-card bg-white">
									<?php echo $first['link_text'];?>
								</div>
							</a>
						</div>
						<?php $second = get_field('second'); ?>
						<div class="col-lg-6 col-md-6 col-sm-12 mb-40 pr-0">
							<div>
								<img src="<?php echo $second['image'];?>" alt="" class="w-100">
							</div>
							<?php $link = $second['link'];
								if(!$link) {
									$link = "javascript:void(0)";
								} ?>
							<a href="<?php echo $link;?>">
								<div class="shadow-sm sub-section2-card bg-white">
									<?php echo $second['link_text'];?>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div><?php 
			$args = array(
				 'posts_per_page' => 1,
				'post_type' => 'post',
				'post_status' => 'publish',
			);
			$result = new WP_Query($args);
			if($result->have_posts()) :
				while($result->have_posts()) : $result->the_post() ; 
					$id = get_the_id(); ?>
					<div class="col-lg-12 sub-section2-covid-part d-flex mt-50">
						<div class="col-lg-7 sub-section2-covid-img pr-0 pl-0">
							<img src="<?php echo get_field('about_page_image',$id);?>" alt="" class="w-100">
							<p class="sub-latest-update">Latest Update</p>
						</div>
						<div class="col-lg-5 sub-section2-covid">
							<div class="vertical-center"><?php the_excerpt();?>
								<br>
								<a href="<?php echo get_permalink();?>" class="more-info"><b>More Info</b></a>
							</div>
						</div>
					</div><?php 
				endwhile; wp_reset_query();
			endif; ?>
			<hr class="custom-line mt-70">
			<div class="section2-footer">
				<h2 class="mr-30"><?php echo get_field('contact_us_title');?></h2>
				<a href="<?php echo get_field('contact_us_link');?>" type="button" class="btn btn-outline-custom"><?php echo get_field('contact_us_button')?></a>
			</div>
		</div>
	</div>
<?php 
get_footer();
?>