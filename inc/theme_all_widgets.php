<?php 

function woo_starter_widgets_init() {
	// blog-sidebar
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'woo-starter' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'woo-starter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	// shop page widget
	register_sidebar( array(
		'name'          => esc_html__( 'Shop Sidebar', 'woo-starter' ),
		'id'            => 'shop-sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'woo-starter' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s single-sidebar-amar-bazar">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title site-bar-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'woo_starter_widgets_init' );