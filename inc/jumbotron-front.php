<?php

  if( ! defined( 'ABSPATH') ) exit;

  /**
   * Jumbotron for the home page
   *
   * Since 1.0
   */

   if( ! function_exists( 'alleno_cv_hero' ) ) {
     function alleno_cv_hero() {

      if( is_front_page() ) : ?>

            <!-- Jumbotron -->
            <div class="hero">
              <div class="jumbotron jumbotron-front" style="background-image: linear-gradient(rgba(0,0,0,0.35), rgba(0,0,0,0.35)), url(<?php echo get_template_directory_uri(); ?>/images/hero.jpg); background-position: left;">
                <div class="container">
                  <h2 style="color: #FFFFFF;">Great design should be accessible to everyone</h2>
                </div><!-- .container -->
              </div><!-- .jumbotron -->
            </div><!-- .hero -->

        <?php endif;

    }
  }

   add_action( 'alleno_cv_hero_action', 'alleno_cv_hero', 10 ); ?>
