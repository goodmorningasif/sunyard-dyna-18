<?php
/**
 * Header
 *
 * Contains header assets.
 *
 * @link https://github.com/sdco-partners/Init
 *
 * @package Wordpress
 * @subpackage Header
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
  <script type="text/javascript">
	document.documentElement.setAttribute("data-browser", navigator.userAgent);
  </script>

  <!-- Remove on launch -->
  <script src="//localhost:35729/livereload.js"></script>


  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
  <title><?php wp_title( '-', true, 'right' ); ?></title>
	
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div class="content" id="container">
    <header id="head">
      <div class="menu-item">
        <a href=""><span class="a">a</span>b<span class="o">o</span>u&nbsp;t</a>
      </div>
      <div class="menu-item">
        <a href="">fAq</a>
      </div>
      <div class="menu-item">
        <a href="">proje&nbsp;<span class="c">c</span>t pr&nbsp;ogress <span class="u">u</span>pd&nbsp;ate</a>
      </div>
    </header>
  </div>
