<?php
   /**
    * Template Name: Home Template
    */

get_header();
 ?>
 <div class="main">
 		<div class="home-mobile-section1 w-100">
			<div>
				<img src="<?php echo get_field('banner_image'); ?>" alt="" class="w-100">
			</div>
		</div>
		<div class="bg-white text-center home-mobile-section1-content shadow-sm">
			<h1>
				<?php echo get_field('banner_title');?>
			</h1>
			<p>
				<?php echo get_field('banner_content');?>
			</p>
			<a href="<?php echo get_field('button_link');?>" type="button" class="btn btn-outline-custom"><?php echo get_field('button_title');?></a>
		</div>
		<div class="home-desktop-section1" style="background-image: url(<?php echo get_field('banner_image'); ?>);">
			<div class="bg-white home-desktop-section1-content position-relative">
				<div class="vertical-center home-desktop-section1-text">
					<h1>
						<?php echo get_field('banner_title');?>
					</h1>
					<p>
						<?php echo get_field('banner_content');?>
					</p>
					<?php $link =  get_field('button_link');
					if(!$link) {
						$link = "javascript:void(0)";
					}  ?>
					<a href="<?php echo $Link; ?>" type="button" class="btn btn-outline-custom"><?php echo get_field('button_title');?></a>
				</div>
			</div>
		</div>
		<div class="home-section2 bg-white">
			<div class="home-section2-header">
				<?php
					wp_nav_menu(
					array(
						'menu_id'        => 'home-page',
					)
				);?>
			</div>
			<div class="home-section2-main d-flex">
				<div class="col-lg-8 row home-section2-main-left"><?php 
					$first = get_field('first');?>
						<div class="col-lg-6 col-md-6 col-sm-12 home-section2-card mb-40">
							<div>
								<img src="<?php echo $first['image'];?>" alt="" class="w-100">
							</div>
							<div class="shadow-sm home-section2-card-text">
								<p><?php echo $first['description']?></p>
								<?php $link = $first['link'];
								if(!$link) {
									$link = "javascript:void(0)";
								} ?>
								<a href="<?php echo $link;?>">
									<?php echo $first['link_text']; ?>
								</a>
							</div>
						</div><?php
					$second = get_field('second');?>
						<div class="col-lg-6 col-md-6 col-sm-12 home-section2-card mb-40">
							<div>
								<img src="<?php echo $second['image'];?>" alt="" class="w-100">
							</div>
							<div class="shadow-sm home-section2-card-text">
								<p><?php echo $second['description']?></p>
								<?php $link = $second['link'];
								if(!$link) {
									$link = "javascript:void(0)";
								} ?>
								<a href="<?php echo $link;?>">
									<?php echo $second['link_text']; ?>
								</a>
							</div>
						</div><?php 
					$third = get_field('third'); ?>
						<div class="col-lg-6 col-md-6 col-sm-12 home-section2-card">
							<div>
								<img src="<?php echo $third['image'];?>" alt="" class="w-100">
							</div>
							<div class="shadow-sm home-section2-card-text">
								<p><?php echo $third['description']?></p>
								<?php $link = $third['link'];
								if(!$link) {
									$link = "javascript:void(0)";
								} ?>
								<a href="<?php echo $link;?>">
									<?php echo $third['link_text']; ?>
								</a>
							</div>
						</div><?php 
					$fourth = get_field('fourth'); ?>
						<div class="col-lg-6 col-md-6 col-sm-12 home-section2-card">
							<div>
								<img src="<?php echo $fourth['image'];?>" alt="" class="w-100">
							</div>
							<div class="shadow-sm home-section2-card-text">
								<p><?php echo $fourth['description']?></p>
								<?php $link = $fourth['link'];
								if(!$link) {
									$link = "javascript:void(0)";
								} ?>
								<a href="<?php echo $link;?>">
									<?php echo $fourth['link_text']; ?>
								</a>
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
					$id = get_the_id();?>
						<div class="col-lg-4 position-relative p-0 home-section2-main-right">
							<div class="w-100 position-relative home-section2-covid-img">

								<img src="<?php echo get_field('home_page_image',$id);?>" alt="" class="w-100">
								<p class="latest-update">Latest Update</p>
							</div>
							<div class="w-100 home-section2-covid">
								<?php the_excerpt(); ?>
								<a href="<?php echo get_permalink();?>" class="more-info"><b>More Info</b></a>
							</div>
						</div><?php 
					endwhile; wp_reset_query();
				endif; ?>
			</div>
			<hr class="custom-line">
			<div class="section2-footer">
				<h2 class="mr-30"><?php echo get_field('contact_us_title');?></h2>
				<a href="<?php echo get_field('contact_us_link');?>" type="button" class="btn btn-outline-custom"><?php echo get_field('contact_us_button')?></a>
			</div>
		</div>
	</div>
<?php 
get_footer();