<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alleno
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'alleno-cv' ); ?></a>

	<div class="container alleno-page">

		<div class="row">
			<header id="masthead" class="col-sm-12 site-header" role="banner">
				<div class="site-branding">


						<?php alleno_cv_custom_logo() ?>
						<?php if (!has_custom_logo()) {
							$description = get_bloginfo( 'description', 'display' );
							if ( $description || is_customize_preview() ) : ?>
								<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
							<?php
							endif;
							} ?>
				</div><!-- .site-branding -->



				<nav id="site-navigation" class="main-navigation" role="navigation">
					<!--<ul class="nav nav-pills alleno-nav">
					  <li role="presentation" class="active"><a href="#">Home</a></li>
					  <li role="presentation"><a href="#">Profile</a></li>
					  <li role="presentation"><a href="#">Messages</a></li>
					</ul>-->
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary', 'menu_class' => 'nav nav-pills alleno-nav' ) ); ?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->
		</div><!-- .row -->

		<div id="content" class="row site-content">
