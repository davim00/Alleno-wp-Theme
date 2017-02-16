<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alleno
 */

?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
		  <div class="row">
				<div class="col-sm-12 site-social-links">
			 		<?php dynamic_sidebar( 'footer-1' ); ?>
				</div>
			</div>
			<div class="row">
			  <div class="col-sm-12 site-info">
					<?php echo alleno_cv_copyright(); ?>
					<?php printf( esc_html__( ' by %1$s.', 'alleno-cv' ), '<a href="http://mattdavisdesign.com" rel="designer">Matt Davis</a>' ); ?>
				</div><!-- .site-info -->
			</div><!-- .row -->
		</div><!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
