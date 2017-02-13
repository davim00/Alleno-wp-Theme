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

	<footer id="colophon" class="row site-footer" role="contentinfo">
		<div class="col-sm-12 site-social-links">
			 <?php dynamic_sidebar( 'footer-1' ); ?>
		</div>
		<div class="col-sm-12 site-info">
			<?php echo alleno_cv_copyright(); ?>
			<?php printf( esc_html__( ' by %1$s.', 'alleno-cv' ), '<a href="http://salmo150.com/portfolio/" rel="designer">Matt Davis</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	</div><!-- .alleno-page -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
