<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Alleno
 */

						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', 'portfolio' );


						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.

				?>
					<?php
					$category_ID = get_cat_ID( "Portfolio");
					$category_link = get_category_link( $category_ID ); ?>
					<a href="<?php echo esc_url( $category_link ); ?>" class="back-to-portfolio button button-standard text-center"><?php esc_html_e( 'Back to Portfolio', 'alleno-cv' ); ?></a>
