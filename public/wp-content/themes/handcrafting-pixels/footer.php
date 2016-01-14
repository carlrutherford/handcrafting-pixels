<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package handcrafting-pixels
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'handcrafting-pixels' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'handcrafting-pixels' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'handcrafting-pixels' ), 'handcrafting-pixels', '<a href="http://underscores.me/" rel="designer">Carl Rutherford</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
$(document).ready(function() {
	  $('.menu-trigger').click(function() {
	    $('nav ul').slideToggle(500);
		$(this).text($(this).text() == 'Show Menu' ? 'Hide Menu' : 'Show Menu');
	  });//end slide toggle

	  $(window).resize(function() {
			if (  $(window).width() > 500 ) {
				$('nav ul').removeAttr('style');
			 }
		});//end resize



	});//end ready
</script>

</body>
</html>
