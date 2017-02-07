<?php
/**
  * The template for displaying image attachments.
 *
 * @package Alleno
 */

 get_header(); ?>

 		<div class="row">

 			<div id="primary" class="col-sm-12 content-area">
 				<div class="row">
 					<main id="main" class="site-main" role="main">

 					<?php
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
 					?>

 					</main><!-- #main -->
 				</div><!-- .row -->
 			</div><!-- #primary -->
 		</div><!-- .row -->

 <?php
 get_sidebar();
 get_footer();
