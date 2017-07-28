<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Alleno
 */

 get_header(); ?>


 <div id="primary" class="col-sm-12 content-area">
 	<main id="main" class="site-main alleno-page" role="main">

 						<?php
 						if ( have_posts() ) :

 							if ( is_home() && ! is_front_page() ) : ?>
 								<header>
 									<h2 class="page-title screen-reader-text"><?php single_post_title(); ?></h2>
 								</header>

 							<?php
 							endif;

 							/* Start the Loop */
 							while ( have_posts() ) : the_post();

 								/*
 								 * Include the Post-Format-specific template for the content.
 								 * If you want to override this in a child theme, then include a file
 								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
 								 */
 								get_template_part( 'template-parts/content', get_post_format() );

 							endwhile;



 							the_posts_pagination( array(
 								'mid_size'  => 2,
 								'prev_text' => '&larr;&nbsp;&nbsp;Previous<span class="screen-reader-text">' . __( 'Previous page', 'alleno_cv' ) . '</span>',
 								'next_text' => 'Next&nbsp;&nbsp;&rarr;<span class="screen-reader-text">' . __( 'Next page', 'alleno_cv' ) . '</span>',
 								'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'alleno_cv' ) . ' </span>',
 							) );

 						else :

 							get_template_part( 'template-parts/content', 'none' );

 						endif; ?>

 						</main><!-- #main -->

 				</div><!-- #primary -->

 			</div><!-- #content -->
 		</div><!-- .container -->


 <?php
 get_sidebar();
 get_footer();
