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
              <div class="jumbotron jumbotron-front">
                <div class="container">
                  <h2>Great design should be accessible to everyone</h2>
                </div><!-- .container -->
              </div><!-- .jumbotron -->
            </div><!-- .hero -->

        <?php endif;

    }
  }

   add_action( 'alleno_cv_hero_action', 'alleno_cv_hero', 10 ); ?>
