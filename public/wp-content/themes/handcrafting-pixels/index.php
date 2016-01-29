<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package handcrafting-pixels
 */

get_header(); ?>

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,600italic,300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=PT+Serif:400,700' rel='stylesheet' type='text/css'>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

				<div class="posts-container">
					<div class="blog-post">
						<div class="blog-date">01 January 2016</div>
						<div class="blog-title"><a href "#">Introducing Handcrafting Pixels: The journal of a designer in a digital world</a></div>
						<div class="blog-categories">In this post: A review on starting this blog</div>
						<div class="clear"></div>
					</div>

					<div class="blog-post">
						<div class="blog-date">01 January 2016</div>
						<div class="blog-title"><a href "#">Introducing Handcrafting Pixels: The journal of a designer in a digital world</a></div>
						<div class="blog-categories">In this post: A review on starting this blog</div>
						<div class="clear"></div>
					</div>

					<div class="blog-post">
						<div class="blog-date">01 January 2016</div>
						<div class="blog-title"><a href "#">Introducing Handcrafting Pixels: The journal of a designer in a digital world</a></div>
						<div class="blog-categories">In this post: A review on starting this blog</div>
						<div class="clear"></div>
					</div>
				</div>

		<?php
		/*
		if ( have_posts() ) :

			// Start the Loop
			while ( have_posts() ) : the_post();

			endwhile;

			the_posts_navigation();

		else :

		endif; */
		?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
