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

<div class="header-container">

	<div class="primary-navigation">
		<nav>
  			<a href="#" class="menu-trigger">Show Menu</a>
  				<ul>
    				<li><a class="hvr-sweep-to-bottom" href="#">Blog</a></li>
    				<li><a class="hvr-sweep-to-bottom" href="#">About</a></li>
    				<li><a class="hvr-sweep-to-bottom" href="#">Podcasts</a></li>
    				<li><a class="hvr-sweep-to-bottom" href="#">Shop</a></li>
  				</ul>
		</nav>
	</div>

	<div class="handcrafting-logo">
		Handcrafting Pixels
	</div>

</div>
