<?php
/**
 * The header for Handcrafting Pixels.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package handcrafting-pixels
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="section-container">

	<div class="primary-navigation">
        <a class="handcrafting-logo">
            Handcrafting Pixels
        </a>

		<nav>
  			<a href="#" class="menu-trigger">Show Menu</a>
  				<ul>
    				<li><a href="index.php">Blog</a></li><li><a href="about.php">About</a></li></li>
  				</ul>
		</nav>

		<div class="social-icons">
	        <a href="https://twitter.com/carlrutherford/" target="_blank" class="twitter">
	            Twitter
	        </a>

	        <a href="https://www.instagram.com/carlrutherford/" target="_blank" class="instagram">
	            Instagram
	        </a>
		</div>

        <div class="clear"></div>
	</div>

</div>
