<?php
/**
 * Alleno functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Alleno
 */

if ( ! function_exists( 'alleno_cv_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function alleno_cv_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Alleno, use a find and replace
	 * to change 'alleno-cv' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'alleno-cv', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for custom logo.
	 */
		add_theme_support( 'custom-logo', array(
			'height'      => 216,
			'width'       => 350,
			'flex-width'  => true,
		) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	/*
	 * Enable support for Post Formats.
	 *
	 * @link https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'gallery',
		'link',
		'image',
		'quote',
		'status',
		'video',
		'audio',
		'chat'
	) );

	// Register Custom Navigation Walker
	require_once('inc/wp-bootstrap-navwalker.php');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Nav', 'alleno-cv' ),
	) );



	// Apply "active" class to current menu item
	function alleno_cv_nav_active ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
	}
	add_filter('nav_menu_css_class' , 'alleno_cv_nav_active' , 10 , 2);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption'
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'alleno_cv_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'alleno_cv_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function alleno_cv_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'alleno_cv_content_width', 903 );
}
add_action( 'after_setup_theme', 'alleno_cv_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function alleno_cv_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Bottom Left', 'alleno-cv' ),
		'id'            => 'bottom-1',
		'description'   => esc_html__( 'Add widgets here.', 'alleno-cv' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Bottom Middle', 'alleno-cv' ),
		'id'            => 'bottom-2',
		'description'   => esc_html__( 'Add widgets here.', 'alleno-cv' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Bottom Right', 'alleno-cv' ),
		'id'            => 'bottom-3',
		'description'   => esc_html__( 'Add widgets here.', 'alleno-cv' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Top', 'alleno-cv' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'alleno-cv' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'alleno_cv_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function alleno_cv_scripts() {
	wp_enqueue_style( 'alleno-cv-style', get_stylesheet_uri() );

	wp_enqueue_style( 'alleno-cv-lato', 'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i,900,900i', false );

	wp_enqueue_style( 'alleno-cv-ostrich', 'https://fonts.googleapis.com/css?family=BenchNine:400,700', false );

	wp_enqueue_style( 'alleno-cv-fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', false );

	wp_enqueue_script( 'alleno-cv-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

  wp_enqueue_script( 'alleno-cv-functions', get_template_directory_uri() . '/js/functions.js', array('jquery') );

	wp_enqueue_script( 'alleno-cv-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'alleno_cv_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Custom Front Page Hero.
 */
require get_template_directory() . '/inc/jumbotron-front.php';
