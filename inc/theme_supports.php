<?php 

/*
 * Make theme available for translation.
 * Translations can be filed in the /languages/ directory.
 * If you're building a theme based on Woo Starter, use a find and replace
 * to change 'woo-starter' to the name of your theme in all the template files.
 */
load_theme_textdomain( 'woo-starter', get_template_directory() . '/languages' );



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
add_theme_support( 'custom-background', apply_filters( 'woo_starter_custom_background_args', array(
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


/*
* Enable support for Post Formats.
*
* See: https://codex.wordpress.org/Post_Formats
*/
add_theme_support( 'post-formats', array(
'aside',
'image',
'video',
'quote',
'link',
'gallery',
'audio',
) );


/**
* custom image size
* @param name, width, height, true
*
*/
add_image_size('image-name', 300, 250, true);