<?php
/**
 * Woo Starter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Woo_Starter
 */

if ( ! function_exists( 'woo_starter_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function woo_starter_setup() {

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'main-menu' => esc_html__( 'Main Menu', 'woo-starter' ),
		'footer-menu' => esc_html__( 'Footer Menu', 'woo-starter' ),
	) );
	

	// all theme supports
	include_once('inc/theme_supports.php');

	}
endif;
add_action( 'after_setup_theme', 'woo_starter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function woo_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'woo_starter_content_width', 640 );
}
add_action( 'after_setup_theme', 'woo_starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

if( file_exists( dirname(__FILE__).'/inc/theme_all_widgets.php' ) ){
	
	require_once( dirname(__FILE__).'/inc/theme_all_widgets.php');
}


/**
* comet theme css, js and conditional js files
*/



if( file_exists( dirname(__FILE__).'/inc/theme_all_files.php' ) ){
	
	require_once( dirname(__FILE__).'/inc/theme_all_files.php');

}



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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce-functions.php';
}



/**
*
* CMB2 Metabox
*
*/
if( file_exists( dirname(__FILE__).'/libs/cmb2/init.php') ){

	require_once( dirname(__FILE__).'/libs/cmb2/init.php');	
}


if( file_exists( dirname(__FILE__).'/libs/cmb2-config.php') ){

	require_once( dirname(__FILE__).'/libs/cmb2-config.php');	
}





/**
*
* Redux Framework
*
*/

// framework file
if( file_exists( dirname(__FILE__).'/libs/redux/ReduxCore/framework.php') ){

	require_once( dirname(__FILE__).'/libs/redux/ReduxCore/framework.php');
}

// barebones-config file
if( file_exists( dirname(__FILE__).'/libs/redux-config.php') ){

	require_once( dirname(__FILE__).'/libs/redux-config.php');
}






