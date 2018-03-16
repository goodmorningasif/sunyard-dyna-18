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

$_DIR = get_template_directory_uri();

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
    <div class="box" id="prime">
        <header id="head">
            <nav id="nav">
                <div class="menu-item">
                    <a href="/"><span class="a">a</span>b<span class="o">o</span>u&nbsp;t</a>
                </div>
                <div class="menu-item">
                    <a href="/faq">fAq</a>
                </div>
                <div class="menu-item">
                    <a href="/updates">proje&nbsp;<span class="c">c</span>t pr&nbsp;ogre&nbsp;ss <span class="u">u</span>pd&nbsp;ate</a>
                </div>
            </nav>
            <section id="feat-logo">
                <div class="svg hanging-ferns">
                    <?php echo file_get_contents( $_DIR . "/assets/animate/animate_hangingfern-1.svg"); ?>
                    <?php // echo file_get_contents( $_DIR . "/assets/animate/animate_hangingfern-2.svg"); ?>
                    <?php // echo file_get_contents( $_DIR . "/assets/animate/animate_hangingfern-3.svg"); ?>
                    <?php // echo file_get_contents( $_DIR . "/assets/animate/animate_hangingfern-4.svg"); ?>
                </div>
                <div class="svg sun-ferns">
                    <?php echo file_get_contents( $_DIR . "/assets/animate/animate_sunfern-1.svg"); ?>
                    <?php // echo file_get_contents( $_DIR . "/assets/animate/animate_sunfern-2.svg"); ?>
                    <?php // echo file_get_contents( $_DIR . "/assets/animate/animate_sunfern-3.svg"); ?>
                </div>
                <div class="svg mermaid">
                    <?php echo file_get_contents( $_DIR . "/assets/animate/animate_mermaid-1.svg"); ?>
                    <?php // echo file_get_contents( $_DIR . "/assets/animate/animate_mermaid-2.svg"); ?>
                    <?php // echo file_get_contents( $_DIR . "/assets/animate/animate_mermaid-3.svg"); ?>
                    <?php // echo file_get_contents( $_DIR . "/assets/animate/animate_mermaid-4.svg"); ?>
                </div>
                <div class="svg main-logo">
                    <?php echo file_get_contents( $_DIR . "/assets/svg/svg_logo.svg"); ?>
                </div>
                <div class="svg super-star">
                    <?php echo file_get_contents( $_DIR . "/assets/svg/svg_super-star.svg"); ?>
                </div>
            </section>
        </header>

        <div class="content" id="container">
