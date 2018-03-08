<?php
/**
 *
 * Template Name: Basic
 *
 */
$_DIR = get_template_directory_uri();

get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		the_content(); ?>

		<?php if( is_front_page() ) : ?>
			<!-- stars -->
			<figure class="stars stars-1 plane-1">
				<?php echo file_get_contents( $_DIR . "/assets/svg/svg_coverimg-stars.svg"); ?>
			</figure>
			<figure class="stars stars-2 plane-1">
				<?php echo file_get_contents( $_DIR . "/assets/svg/svg_stars-middle.svg"); ?>
			</figure>
			<figure class="stars stars-3 plane-1">
				<?php echo file_get_contents( $_DIR . "/assets/svg/svg_stars-behind-pic.svg"); ?>
			</figure>
			<figure class="stars stars-4 plane-1">
				<?php echo file_get_contents( $_DIR . "/assets/svg/svg_stars-behind-bathtub.svg"); ?>
			</figure>
			<figure class="stars stars-5 plane-1">
				<?php echo file_get_contents( $_DIR . "/assets/svg/svg_stars-belowcopy.svg"); ?>
			</figure>
			<figure class="stars stars-6 plane-1">
				<?php echo file_get_contents( $_DIR . "/assets/svg/svg_stars-last.svg"); ?>
			</figure>
			<figure class="stars stars-7 plane-1">
				<?php echo file_get_contents( $_DIR . "/assets/svg/svg_stars-final-last.svg"); ?>
			</figure>
			<!-- icons -->
			<figure class="svg svg-1 plane-4">
				<?php echo file_get_contents( $_DIR . "/assets/svg/svg_sunflower.svg"); ?>
			</figure>
			<figure class="svg svg-2 plane-4">
				<?php echo file_get_contents( $_DIR . "/assets/svg/svg_sun-burst.svg"); ?>
			</figure>
			<figure class="svg svg-3 plane-4">
				<?php echo file_get_contents( $_DIR . "/assets/svg/svg_foliage.svg"); ?>
			</figure>
			<figure class="svg svg-4 plane-4">
				<?php echo file_get_contents( $_DIR . "/assets/svg/svg_orange-vine.svg"); ?>
			</figure>
		<?php endif;
	endwhile;
endif;

get_footer();