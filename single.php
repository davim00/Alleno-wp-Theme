<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Alleno
 */

get_header(); ?>

<div id="primary" class="col-sm-12 content-area">
	<main id="main" class="site-main alleno-page" role="main">

					<?php
					if ( in_category('portfolio')) {
						include 'single-portfolio.php';
					} else {
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', get_post_format() );

							the_post_navigation( array(
								'prev_text' => '&larr;&nbsp;&nbsp;%title',
								'next_text' => '%title&nbsp;&nbsp;&rarr;',
							) );


						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
				};
					?>

					</main><!-- #main -->
			</div><!-- #primary -->

		</div><!-- #content -->
	</div><!-- .container -->


<?php
get_sidebar();
get_footer();
