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

<div class="footer-container">

	<div class="footer">
			<div class="footer-contact">
				<div class="title">Contact</div>
				<div class="statement">If you would like to contact me then please feel free to get in touch.</div>
				<div class="button"><a href "mailto:hello@handcraftingpixels.co.uk">Email</a></div>
			</div>

			<div class="footer-social">
				<div class="title">Connect</div>
				<div class="statement"><a href "https://twitter.com/carlrutherford/" target="_blank">Read my Tweets</a></div>
				<div class="statement"><a href "https://www.instagram.com/carlrutherford/" target="_blank">View my Photos</a></div>
			</div>

			<div class="clear"></div>

			<div class="footer-copyright">&copy; <?php echo date("Y") ?> Handcrafiting Pixels <a href "#">Privacy</a> &#9632; <a href "#">Terms</a></div>

	</div>

</div>

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
