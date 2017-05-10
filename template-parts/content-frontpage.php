<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Alleno
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

			<?php if ( get_edit_post_link() ) :
						edit_post_link(
							sprintf(
								/* translators: %s: Name of current post */
								esc_html__( 'Edit %s', 'alleno-cv' ),
								the_title( '<span class="screen-reader-text">"', '"</span>', false )
							),
							'<span class="edit-link">',
							'</span>'
						);
			endif; ?>

<?php
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php alleno_cv_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
		<?php
			the_content();


			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'alleno-cv' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php
	if ( ! is_single() ) : ?>
		<a href="<?php echo get_permalink() ?>" class="button button-standard read-more"><?php esc_html_e( 'Read more', 'alleno-cv' ); ?></a>

	<footer class="entry-footer">
		<?php alleno_cv_entry_footer(); ?>
	</footer><!-- .entry-footer -->

  <?php
	else : ?>

	<footer class="entry-footer">
		<?php alleno_cv_single_footer(); ?>
	</footer><!-- .entry-footer -->
	<?php
	endif; ?>
</article><!-- #post-## -->
