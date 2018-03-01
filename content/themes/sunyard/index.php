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
		the_post();
			the_content();
	endwhile;
endif;

get_footer();