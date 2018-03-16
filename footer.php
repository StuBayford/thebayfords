<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$facebook = get_theme_mod( 'facebook' );
$twitter = get_theme_mod( 'twitter' );
$instagram = get_theme_mod( 'instagram' );
?>

</div><!-- wrapper end -->

<div class="bg-dark">

	<?php get_sidebar( 'footerfull' ); ?>

	<div id="footer" class="container bg-dark">
		<div class="row">
			<div class="col-md-12">
				<footer id="colophon" class="site-footer">
					<div id="social" class="text-center">
						<!-- Facebook -->
            <?php if ( $facebook ): ?>
   			   		<a class="social-icon" href="https://www.facebook.co.uk/<?php echo $facebook; ?>" target="_blank">
                <i class="fab fa-facebook fa-2x"></i>
							</a>
            <?php endif; ?>
						<!-- Twitter -->
            <?php if ( $twitter ): ?>
   			   		<a class="social-icon" href="https://www.twitter.co.uk/<?php echo $twitter; ?>" target="_blank">
                <i class="fab fa-twitter-square fa-2x"></i>
							</a>
            <?php endif; ?>
            <!-- Instagram -->
            <?php if ( $instagram ): ?>
   			   		<a class="social-icon" href="https://www.instagram.co.uk/<?php echo $instagram; ?>" target="_blank">
                <i class="fab fa-instagram fa-2x"></i>
							</a>
            <?php endif; ?>
					</div>
					<div class="site-info text-light text-center">
						Powered by <a href="http://wordpress.org/" target="_blank">WordPress</a>
						<span class="sep mx-3"> | </span>
						Developed by <a href="https://www.stuartbayford.co.uk" target="_blank">Stu Bayford</a>
					</div><!-- .site-info -->
				</footer><!-- #colophon -->
			</div><!--col end -->
		</div><!-- row end -->
	</div><!-- #page we need this extra closing tag here -->

	<?php wp_footer(); ?>

</div>
</body>

</html>