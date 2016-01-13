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

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="header-container">
	<div class="handcrafting-logo">
		<a href="index.php">Handcrafting Pixels</a>
	</div>

	<div class="primary-navigation">
		<ul>
	   		<li><a href="">Blog</a></li>
	   		<li><a href="">About</a></li>
   		</ul>
	</div>

	<div class="nav-trigger">
    	<span>Menu</span>
	</div>

	<nav class="nav-mobile"></nav>

</div>
