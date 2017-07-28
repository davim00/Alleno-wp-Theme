<?php
/**
 * Template Name: Home Page
 *
 * This is a custom template for a home page that does not display
 * the blog index. Use this template as an alternative to a
 * front-page.php file.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package Alleno
 */

 get_header(); ?>

 		<div id="primary" class="col-sm-12 content-area">
 			<main id="main" class="site-main alleno-page" role="main">

 				<?php
 				while ( have_posts() ) : the_post();

 					get_template_part( 'template-parts/content', 'page' );

 				endwhile; // End of the loop.
 				?>

 			</main><!-- #main -->
 		</div><!-- #primary -->

 	</div><!-- #content -->
 </div><!-- .container -->


 <?php
 get_sidebar();
 get_footer();
