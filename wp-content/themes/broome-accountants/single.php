<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Broome_Accountants
 */

get_header();
while ( have_posts() ) : the_post();?>
<div class="main">
	<div class="single-mobile-section1 w-100">
		<div>
			<img src="<?php echo get_field('update_page_image');?>" alt="" class="w-100">
		</div>
	</div>
	<div class="bg-white text-center single-mobile-section1-content shadow-sm">
		<p><?php echo get_the_date();?>
		</p>
		<h1><?php echo get_the_title();?>
		</h1>
	</div>
	<div class="single-desktop-section1" style="background-image: url(<?php echo get_field('update_page_image'); ?>);">
		<div class="bg-white single-desktop-section1-content position-relative">
			<div class="vertical-center single-desktop-section1-text">
				<p><?php echo get_the_date();?></p>
				<h1><?php echo get_the_title();?></h1>
			</div>
		</div>
	</div>
	<div class="single-section2 bg-white">
		<div class="single-section2-article d-flex align-items-center">
			<div class="single-section2-article-text">
					<p><?php the_content();?></p>
			</div>
			<div class="single-section2-article-img">
				<img src="<?php echo get_the_post_thumbnail_url();?>" alt="" class="w-100">
			</div>
		</div><?php 
endwhile; ?>
<h3 class="single-previous-updates">Previous updates</h3>
<?php 
$date = get_the_date('Y-m-d H:i:s');
$args = array(
	'posts_per_page' => 2,
    'date_query' => array(
        array(
            'before' => $date
        ),
    ),
);
$query = new WP_Query( $args );
if($query->have_posts()) :
	while($query->have_posts()) : $query->the_post() ;?>
		
		<div class="single-section2-category mt-50">
			<p class="single-section2-category-date"><?php echo get_the_date();?></p>
			<div class="d-flex justify-content-between align-items-center">
				<div class="single-section2-category-title">
					<h5 class="mb-0 hidden-text"><?php echo get_the_title();?></h5>
				</div>
				<div class="single-section2-category-detail">
					
					<p class="mb-0 hidden-text"><?php  echo wp_trim_words( get_the_content(), 15 ); ?></p>
			
				</div>
				<div  class="post_link"><a href="<?php echo get_permalink();?>" type="button" class="btn archive-btn">Read more</a></div>
			</div>
		</div><?php 
	endwhile; wp_reset_query();
endif;
	?>
		<div class="section2-footer">
			<h2 class="mr-30"><?php echo get_field('contact_us_title',33);?></h2>
				<a href="<?php echo get_field('contact_us_link',33);?>" type="button" class="btn btn-outline-custom"><?php echo get_field('contact_us_button',33)?></a>
		</div>
	</div>
</div>
<?php

get_footer();