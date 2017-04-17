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

	<?php
	endif; ?>
</article><!-- #post-## -->
