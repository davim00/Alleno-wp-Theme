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

	<?php if ( is_single() ) : ?>
	<header class="entry-header">

			<?php the_title( '<h2 class="entry-title">', '</a></h2>' ); ?>
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

<?php endif; ?>

	<div class="entry-content">
		<?php if ( ! is_single() ) : ?>
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
		<?php endif; ?>
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<?php
	if ( ! is_single() ) : ?>
		<a href="<?php echo get_permalink() ?>" class="button button-standard read-more"><?php esc_html_e( 'Read more', 'alleno-cv' ); ?></a>

  <?php
	else : ?>

	<footer class="entry-footer">
		<?php alleno_cv_single_footer(); ?>
	</footer><!-- .entry-footer -->
	<?php
	endif; ?>
</article><!-- #post-## -->
