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
		<div class="col-sm-12 site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'alleno-cv' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'alleno-cv' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'alleno-cv' ), 'alleno-cv', '<a href="https://automattic.com/" rel="designer">Matt Davis</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	</div><!-- .alleno-page -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
