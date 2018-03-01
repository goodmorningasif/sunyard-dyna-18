<?php
/** 
 * Index
 *
 * The main template file
 *
 * @link https://github.com/sdco-partners/Init
 *
 * @package Wordpress
 * @subpackage Index
 * @since 1.0
 * @version 1.0
 */

get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post(); ?>

		<h3 class="date">date: <?php echo get_the_date(); ?></h3>
		<h3 class="title">update: <?php echo get_the_title(); ?></h3>
		
		<?php the_content();
	endwhile;
endif;

get_footer();