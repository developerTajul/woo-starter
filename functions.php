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

		/**
		* Theme All Supports
		*/

		if( file_exists( dirname(__FILE__).'/inc/theme_all_supports.php') ){

			require_once( dirname(__FILE__).'/inc/theme_all_supports.php');
			
		}


		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'woostarter' ),
		) );


		
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
if( file_exists( dirname(__FILE__).'/inc/theme_all_files.php' ) ){
	
	require_once( dirname(__FILE__).'/inc/theme_all_files.php');

}


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';



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

}
