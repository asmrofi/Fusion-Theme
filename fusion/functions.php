<?php

/* 
TGM plugins required
*/
require_once get_template_directory().'/inc/tgm.php';

/* 
CMB2 plugins required
*/
require_once get_template_directory().'/inc/cmb2-b.php';

/*
custom services required
*/
require_once get_template_directory().'/inc/custom-services.php';

/*
custom team required
*/
require_once get_template_directory().'/inc/custom-team.php';

/*
custom pricing required
*/
require_once get_template_directory().'/inc/custom-pricing.php';

/*
custom custom testimonial required
*/
require_once get_template_directory().'/inc/custom-testimonial.php';
/**
 * fusion functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fusion
 */

if ( ! function_exists( 'fusion_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function fusion_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on fusion, use a find and replace
		 * to change 'fusion' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'fusion', get_template_directory() . '/languages' );

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
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
         add_image_size("fusion-portrait",400,400,true);
        
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'fusion' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'fusion_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 60,
			'width'       => 200,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'fusion_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fusion_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'fusion_content_width', 640 );
}
add_action( 'after_setup_theme', 'fusion_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fusion_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Widget One', 'fusion' ),
		'id'            => 'widget-1',
		'description'   => esc_html__( 'Add widgets here.', 'fusion' ),
		'before_widget' => '<div class="contact-block">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Widget Two', 'fusion' ),
		'id'            => 'widget-2',
		'description'   => esc_html__( 'Add widgets here.', 'fusion' ),
		'before_widget' => '<div class="map">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
    
    
    register_sidebar( array(
		'name'          => esc_html__( 'Footer One', 'fusion' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'fusion' ),
		'before_widget' => ' <div class="textwidget">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Two', 'fusion' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'fusion' ),
		'before_widget' => ' <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-titel">',
		'after_title'   => '</h3>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Three', 'fusion' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'fusion' ),
		'before_widget' => ' <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-titel">',
		'after_title'   => '</h3>',
	) );
    
    
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Four', 'fusion' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'fusion' ),
		'before_widget' => ' <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-titel">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'fusion_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function fusion_scripts() {
	wp_enqueue_style( 'fusion-style', get_stylesheet_uri() );

	wp_enqueue_style( 'fusion-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.1', 'all');
	wp_enqueue_style( 'fusion-line-icons', get_template_directory_uri() . '/assets/fonts/line-icons.css', array(), '1.1', 'all');
	wp_enqueue_style( 'fusion-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.1', 'all');
	wp_enqueue_style( 'fusion-theme', get_template_directory_uri() . '/assets/css/owl.theme.css', array(), '1.1', 'all');
	wp_enqueue_style( 'fusion-animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.1', 'all');
	wp_enqueue_style( 'fusion-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.1', 'all');
	wp_enqueue_style( 'fusion-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.1', 'all');
	wp_enqueue_style( 'fusion-nivo-lightbox', get_template_directory_uri() . '/assets/css/nivo-lightbox.css', array(), '1.1', 'all');
	wp_enqueue_style( 'fusion-magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.1', 'all');
	wp_enqueue_style( 'fusion-google-fonts', get_template_directory_uri() . '/https://fonts.googleapis.com/css?family=Arvo:700|Open+Sans', array(), '1.1', 'all');
       
    wp_enqueue_script( 'fusion-jquery-min', get_template_directory_uri() . '/assets/js/jquery-min.js', array ( 'jquery' ), 1.2, true);
    wp_enqueue_script( 'fusion-popper', get_template_directory_uri() . '/assets/js/popper.min.js', array ( 'jquery' ), 1.2, true);
    wp_enqueue_script( 'fusion-bootstrap2', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), 1.2, true);
    wp_enqueue_script( 'fusion-owl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array ( 'jquery' ), 1.2, true);
    wp_enqueue_script( 'fusion-wow', get_template_directory_uri() . '/assets/js/wow.js', array ( 'jquery' ), 1.2, true);
    wp_enqueue_script( 'fusion-nav', get_template_directory_uri() . '/assets/js/jquery.nav.js', array ( 'jquery' ),1.2, true);
    wp_enqueue_script( 'fusion-scrolling', get_template_directory_uri() . '/assets/js/scrolling-nav.js', array ( 'jquery' ), 1.2, true);
    wp_enqueue_script( 'fusion-easing', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array ( 'jquery' ), 1.2, true);
    wp_enqueue_script( 'fusion-main-js', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), 1.2, true);
    wp_enqueue_script( 'fusion-from', get_template_directory_uri() . '/assets/js/form-validator.min.js', array ( 'jquery' ), 1.2, true);
    wp_enqueue_script( 'fusion-contact-form-script', get_template_directory_uri() . '/assets/js/contact-form-script.min.js', array ( 'jquery' ), 1.2, true);
    wp_enqueue_script( 'fusion-magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array ( 'jquery' ), 1.2, true);
    wp_enqueue_script( 'fusion-nivo-lightbox', get_template_directory_uri() . '/assets/js/nivo-lightbox.js', array ( 'jquery' ), 1.2, true);
    
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fusion_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
