<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Alleno
 */

get_header(); ?>

		<section id="primary" class="col-sm-12 content-area">
			<main id="main" class="site-main" role="main">

			<?php
			if ( have_posts() ) : ?>

				<header class="page-header">
					<h4 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'alleno-cv' ), '<span>' . get_search_query() . '</span>' ); ?></h4>
				</header><!-- .page-header -->

				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'search' );

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
		</section><!-- #primary -->

	</div><!-- #content -->
</div><!-- .container -->

<?php
get_sidebar();
get_footer();
