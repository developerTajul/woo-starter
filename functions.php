<?php
/**
 * Woo Starter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Woo_Starter
 */

if ( ! function_exists( 'woostarter_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function woostarter_setup() {
<<<<<<< HEAD

		/**
		* Theme All Supports
		*/

		if( file_exists( dirname(__FILE__).'/inc/theme_all_supports.php') ){

			require_once( dirname(__FILE__).'/inc/theme_all_supports.php');
			
		}

=======
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Woo Starter, use a find and replace
		 * to change 'woostarter' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'woostarter', get_template_directory() . '/languages' );

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
>>>>>>> 1601eac1ef3b6c676b5edde10f8b5930c86b5424

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'woostarter' ),
		) );

<<<<<<< HEAD

		
=======
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
		add_theme_support( 'custom-background', apply_filters( 'woostarter_custom_background_args', array(
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
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
>>>>>>> 1601eac1ef3b6c676b5edde10f8b5930c86b5424
	}
endif;
add_action( 'after_setup_theme', 'woostarter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function woostarter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'woostarter_content_width', 640 );
}
add_action( 'after_setup_theme', 'woostarter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function woostarter_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'woostarter' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'woostarter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'woostarter_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
<<<<<<< HEAD
if( file_exists( dirname(__FILE__).'/inc/theme_all_files.php' ) ){
	
	require_once( dirname(__FILE__).'/inc/theme_all_files.php');

}

=======
function woostarter_scripts() {
	wp_enqueue_style( 'woostarter-style', get_stylesheet_uri() );

	wp_enqueue_script( 'woostarter-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'woostarter-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'woostarter_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
>>>>>>> 1601eac1ef3b6c676b5edde10f8b5930c86b5424

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

<<<<<<< HEAD


/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}


/**
* CMB2 Metabox
*/

if( file_exists( dirname(__FILE__).'/libs/cmb2/custom-cmb2.php') ){

	require_once( dirname(__FILE__).'/libs/cmb2/custom-cmb2.php');
	
}



/**
* Redux Framework
*/

// framework file
if( file_exists( dirname(__FILE__).'/libs/redux/ReduxCore/framework.php') ){

	require_once( dirname(__FILE__).'/libs/redux/ReduxCore/framework.php');

}

// barebones-config file
if( file_exists( dirname(__FILE__).'/libs/redux/sample/barebones-config.php') ){

	require_once( dirname(__FILE__).'/libs/redux/sample/barebones-config.php');

=======
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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
>>>>>>> 1601eac1ef3b6c676b5edde10f8b5930c86b5424
}
