<?php
/**
  * The template for displaying image attachments.
 *
 * @package Alleno
 */

 get_header(); ?>

 			<div id="primary" class="col-sm-12 content-area">
 					<main id="main" class="site-main" role="main">

 					<?php
 					while ( have_posts() ) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">

                <?php the_title( '<h2 class="entry-title">', '</a></h2>' );


              if ( 'post' === get_post_type() ) : ?>
              <div class="entry-meta">
                <?php alleno_cv_posted_on(); ?>
              </div><!-- .entry-meta -->
              <?php
              endif; ?>

              <nav role="navigation" id="image-navigation" class="navigation-image nav-links">
								<div class="nav-previous"><?php previous_image_link( false, __( '&larr;&nbsp;&nbsp;Previous', 'sparkling' ) ); ?></div>
								<div class="nav-next"><?php next_image_link( false, __( 'Next&nbsp;&nbsp;&rarr;', 'sparkling' ) ); ?></div>
							</nav><!-- #image-navigation -->
            </header><!-- .entry-header -->

            <div class="entry-content">

							<div class="entry-attachment">
								<div class="attachment">
									<?php
										/**
										 * Grab the IDs of all the image attachments in a gallery so we can get the URL of the next adjacent image in a gallery,
										 * or the first image (if we're looking at the last image in a gallery), or, in a gallery of one, just the link to that image file
										 */
										$attachments = array_values( get_children( array(
											'post_parent'    => $post->post_parent,
											'post_status'    => 'inherit',
											'post_type'      => 'attachment',
											'post_mime_type' => 'image',
											'order'          => 'ASC',
											'orderby'        => 'menu_order ID'
										) ) );
										foreach ( $attachments as $k => $attachment ) {
											if ( $attachment->ID == $post->ID )
												break;
										}
										$k++;
										// If there is more than 1 attachment in a gallery
										if ( count( $attachments ) > 1 ) {
											if ( isset( $attachments[ $k ] ) )
												// get the URL of the next image attachment
												$next_attachment_url = get_attachment_link( $attachments[ $k ]->ID );
											else
												// or get the URL of the first image attachment
												$next_attachment_url = get_attachment_link( $attachments[ 0 ]->ID );
										} else {
											// or, if there's only 1 image, get the URL of the image
											$next_attachment_url = wp_get_attachment_url();
										}
									?>

									<a href="<?php echo $next_attachment_url; ?>" title="<?php the_title_attribute(); ?>" rel="attachment"><?php
										$attachment_size = apply_filters( 'alleno_cv_attachment_size', array( 1200, 1200 ) ); // Filterable image size.
										echo wp_get_attachment_image( $post->ID, $attachment_size );
									?></a>
								</div><!-- .attachment -->

								<?php if ( ! empty( $post->post_excerpt ) ) : ?>
								<div class="entry-caption">
									<?php the_excerpt(); ?>
								</div><!-- .entry-caption -->
								<?php endif; ?>
							</div><!-- .entry-attachment -->

							<?php the_content();

              wp_link_pages( array(
        				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'alleno-cv' ),
        				'after'  => '</div>',
        			) );
              ?>

						</div><!-- .entry-content -->

            <footer class="entry-footer">
          		<?php alleno_cv_single_footer(); ?>
          	</footer><!-- .entry-footer -->
          </article><!-- #post-## -->

          <?php
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
 			</div><!-- #primary -->

    </div><!-- #content -->
  </div><!-- .container -->


 <?php
 get_sidebar();
 get_footer();
