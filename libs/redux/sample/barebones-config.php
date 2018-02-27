<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "comet";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Theme Options', 'redux-framework-demo' ),
        'page_title'           => __( 'Theme Options', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => false,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'redux-framework-demo' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-demo' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'redux-framework-demo' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Basic Fields
    Redux::setSection( $opt_name, array(
        'title'     => 'Header Section',
        'desc'      => 'Manage Header Section',
        'id'        => 'header-section',
        'icon'      => 'el el-home'
    ));


    Redux::setSection( $opt_name, array(
        'title'         => 'Manage Header',
        'desc'          => 'Manage Header Section',
        'id'            => 'manage-header',
        'subsection'    => true,
        'fields'        => array(
            array(
                'title'     => 'Upload Your Logo',
                'subtitle'  => 'Manage your logo',
                'desc'      => 'Logo upload from here',
                'id'        => 'upload-logo',
                'type'      => 'media',
                'default'   => array(
                    'url'       =>  get_template_directory_uri().'/assets/images/logo/logo.png'
                )
            ),  
            array(
                'title'     => 'Upload Favicon',
                'subtitle'  => 'Manage your favicon',
                'desc'      => 'facicon upload from here',
                'id'        => 'upload-favicon',
                'type'      => 'media',
                'default'   => array(
                    'url'       =>  get_template_directory_uri().'/assets/images/favicon.ico'
                )
            ),
            array(
                'title'     => 'Phone Number',
                'subtitle'  => 'Add Phone Number',
                'desc'      => 'Add Your Phone Number',
                'id'        => 'phone-number',
                'type'      => 'text',
                'default'   => '01961926400'
            ),

            array(
                'title'     => 'Email Address',
                'subtitle'  => 'Add Your Email Address',
                'desc'      => 'You can change or modify your email address',
                'id'        => 'email-address',
                'type'      => 'text',
                'default'   => 'developer.tajul@gmail.com'
            ),
            array(
                'id'       => 'opt-gallery',
                'type'     => 'gallery',
                'title'    => 'Gallery Photos',
                'subtitle' =>  'Manage Gallery',
                'desc'     => 'You can use gallery from here',
            )
            
        )
    ));


    /**
    *
    *
    * about section
    *
    */

    Redux::setSection( $opt_name, array(
        'title'     => 'About Section',
        'desc'      => 'Manage About Section',
        'id'        => 'about-section',
        'icon'      => 'el el-address-book'
    ));


    Redux::setSection( $opt_name, array(
        'title'     => 'Manage About Section',
        'desc'      => 'Add Manage About Section',
        'id'        => 'manage-about',
        'subsection' => true,
        'fields'    => array(
            array(
                'title'     => 'Section title',
                'subtitle'  => 'Add Section Title',
                'desc'      => 'You can add section Title From Here',
                'id'        => 'section-title',
                'type'      => 'text',
                'default'   => 'About Us'
            ),
            array(
                'title'     => 'Section Description',
                'subtitle'  => 'Add Section Description',
                'desc'      => 'You can add section description From Here',
                'id'        => 'section-desc',
                'type'      => 'editor',
                'default'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas excepturi natus at, laboriosam autem cupiditate, neque magni id nam dicta ipsam impedit consectetur magnam qui, voluptatibus expedita officia repellat reprehenderit.'
            ),
            array(
                'title'     => 'Video Url',
                'subtitle'  => 'Add Your Video Here',
                'desc'      => 'You can add a video about yourself',
                'id'        => 'video-link',
                'type'      => 'text',
                'default'   => 'https://www.youtube.com/watch?v=G0dzLanYW1E'
            ),

            array(
                'title'     => 'Video Preview Image',
                'subtitle'  => 'Add Preview Image',
                'desc'      => 'You can add a video preview image',
                'id'        => 'video-image',
                'type'      => 'media',
                'default'   => array(
                    'url'       =>  get_template_directory_uri().'/assets/images/about/about.jpg'
                )
            ),
            array(
                'title'     => 'Button Text',
                'subtitle'  => 'Manage Button Text',
                'desc'      => 'You can add or modify button text from here',
                'id'        => 'button-text',
                'type'      => 'text',
                'default'   => 'See More'
            ),

            array(
                'title'     => 'Video Preview Image',
                'subtitle'  => 'Add Preview Image',
                'desc'      => 'You can add a video preview image',
                'id'        => 'button-url',
                'type'      => 'text',
                'default'   => '#'
            ),


        )

    ));


 /**
    *
    *
    * services section
    *
    */

    Redux::setSection( $opt_name, array(
        'title'         => 'Service Section',
        'id'            => 'service-section',
        'desc'          => 'Manage Service Section',
        'icon'          => 'el el-leaf'
    ));


    Redux::setSection( $opt_name, array(
        'title'     => 'Manage Services',
        'id'        => 'manage-services',
        'desc'      => 'Manage Service Section from here',
        'subsection'=> true,
        'fields'    => array(
            array(
                'title'     => 'Service Section Title',
                'id'        => 'ss-title',
                'subtitle'  => 'Modify or Change Title',
                'desc'      => 'You can modify or change service title',
                'type'      => 'text',
                'default'   => 'Services'
            ),
            array(
                'title'     => 'Service Section Background',
                'subtitle'  => 'Manage Service Section Background',
                'desc'      => 'You can add service section background image',
                'id'        => 'service-bg',
                'type'      => 'media',
                'default'   => array(
                    'url'       =>  get_template_directory_uri().'/assets/images/sec-img/sbg.png'
                )
            ),
            array(
            'title' => __('Add Service Title', 'school'),
            'subtitle' => __('Add Service Icon', 'school'),
            'desc' => __('You can add service description', 'school'),
            'id' => 'service_items',
            'type' => 'slides',
            'placeholder' => array(
                'title' => __('Add Service Title Here', 'school'),
                'desc' => __('Add Services Content Here', 'school'),
                'url' => __('Service Icon', 'school'),
                
            )
        ),
        )
    ));


 /**
    *
    *
    * services section
    *
    */

    Redux::setSection( $opt_name, array(
        'title'         => 'Clients Section',
        'id'            => 'clients-section',
        'desc'          => 'Manage Clients Section',
        'icon'          => 'el el-leaf'
    ));


    Redux::setSection( $opt_name, array(
        'title'     => 'Manage Clients',
        'id'        => 'manage-clients',
        'desc'      => 'Manage Client Section from here',
        'subsection'=> true,
        'fields'    => array(
           
            array(
            'title' => __('Add Clients Info', 'school'),
            'subtitle' => __('Manage Your Clients Info', 'school'),
            'desc' => __('You can add clients info from here', 'school'),
            'id' => 'client_items',
            'type' => 'slides',
            'placeholder' => array(
                'title' => __('Add Client Type', 'school'),
                'desc' => __('Add Clients Number', 'school'),
                'url' => __('Leave it blank', 'school'),
                
                )
            ),
        )
    ));

 /**
    *
    *
    * event section
    *
    */

    Redux::setSection( $opt_name, array(
        'title'         => 'Event Section',
        'id'            => 'event-section',
        'desc'          => 'Manage Event Section',
        'icon'          => 'el el-foursquare'
    ));


    Redux::setSection( $opt_name, array(
        'title'     => 'Manage Events',
        'id'        => 'manage-events',
        'desc'      => 'Manage Event Section from here',
        'subsection'=> true,
        'fields'    => array(
            array(
                'title'     => 'Event Section Title',
                'id'        => 'es-title',
                'subtitle'  => 'Modify or Change Title',
                'desc'      => 'You can modify or change event title',
                'type'      => 'text',
                'default'   => 'Events'
            )
        )
    ));



    /**
    *
    *
    * gallery section
    *
    */

    Redux::setSection( $opt_name, array(
        'title'         => 'Gallery Section',
        'id'            => 'gallery-section',
        'desc'          => 'Manage Gallery Section',
        'icon'          => 'el el-graph-alt'
    ));


    Redux::setSection( $opt_name, array(
        'title'     => 'Manage Gallery',
        'id'        => 'manage-gallery',
        'desc'      => 'Manage Gallery Section from here',
        'subsection'=> true,
        'fields'    => array(
            array(
                'title'     => 'Gallery Section Title',
                'id'        => 'gs-title',
                'subtitle'  => 'Modify or Change Title',
                'desc'      => 'You can modify or change event title',
                'type'      => 'text',
                'default'   => 'Photo Gallery'
            )
        )
    ));




    /**
    *
    *
    * Testimonial section
    *
    */

    Redux::setSection( $opt_name, array(
        'title'         => 'Testimonial Section',
        'id'            => 'testimonail-section',
        'desc'          => 'Manage Testimonial Section',
        'icon'          => 'el el-road'
    ));


    Redux::setSection( $opt_name, array(
        'title'     => 'Manage Testimonial',
        'id'        => 'manage-testimonail',
        'desc'      => 'Manage Testimonial Section from here',
        'subsection'=> true,
        'fields'    => array(
            array(
                'title'     => 'Testimonial Section Title',
                'id'        => 'gs-testimonail',
                'subtitle'  => 'Modify or Change Title',
                'desc'      => 'You can modify or change testimonial title',
                'type'      => 'text',
                'default'   => 'Testimonial'
            ),
            array(
            'title' => __('Tajul Testimonials', 'school'),
            'subtitle' => __('Add Service Item', 'school'),
            'desc' => __('You can add unlimitted service items', 'school'),
            'id' => 'hi_er_tajul_testi',
            'type' => 'slides',
            'placeholder' => array(
                'title' => __('Add Service Title Here', 'school'),
                'desc' => __('Add Services Content Here', 'school'),
                'url' => __('Leave it blank', 'school'),
                
            )
        ),
        )
    ));


    /**
    *
    *
    * Blog section
    *
    */

    Redux::setSection( $opt_name, array(
        'title'         => 'Blog Section',
        'id'            => 'blog-section',
        'desc'          => 'Manage Blog Section',
        'icon'          => 'el el-wheelchair'
    ));


    Redux::setSection( $opt_name, array(
        'title'     => 'Manage Blog',
        'id'        => 'manage-blog',
        'desc'      => 'Manage Blog Section from here',
        'subsection'=> true,
        'fields'    => array(
            array(
                'title'     => 'Blog Section Title',
                'id'        => 'bs-blog',
                'subtitle'  => 'Modify or Change Title',
                'desc'      => 'You can modify or change testimonial title',
                'type'      => 'text',
                'default'   => 'Blog'
            )
        )
    ));


    /**
    *
    *
    * footer section
    *
    */

    Redux::setSection( $opt_name, array(
        'title'         => 'Footer Section',
        'id'            => 'footer-section',
        'desc'          => 'Manage Footer Section',
        'icon'          => 'el el-magic'
    ));


    Redux::setSection( $opt_name, array(
        'title'     => 'Manage Footer',
        'id'        => 'manage-footer',
        'desc'      => 'Manage Footer Section from here',
        'subsection'=> true,
        'fields'    => array(
            array(
                'title'     => 'Footer Section Title',
                'id'        => 'fs-footer-logo',
                'subtitle'  => 'Modify or Change Title',
                'desc'      => 'You can modify or change testimonial title',
                'type'      => 'media',
                'default'   => array(
                    'url'       =>  get_template_directory_uri().'/assets/images/logo/logo.png'
                )
            ),
            array(
                'title'     => 'Footer Section Title',
                'id'        => 'fs-footer-text',
                'subtitle'  => 'Modify or Change Title',
                'desc'      => 'You can modify or change testimonial title',
                'type'      => 'editor',
                'default'   => 'Claritas est etiam processus dynamicus qui sequitur mutationem consuetudium lec. Mirum est notare quam littera gothica quam nunc putamus parum claram'
            ),
            array(
                'title'     => 'Copyright Text',
                'id'        => 'fs-copyright',
                'subtitle'  => 'Modify or Change Title',
                'desc'      => 'You can modify or change Copyright Text',
                'type'      => 'editor',
                'default'   => 'All rights reserved to Spellbit'
            ),
            array(
                'title'     => 'Company Name',
                'id'        => 'fs-company-name',
                'subtitle'  => 'Modify or Change Company Name',
                'desc'      => 'You can modify or change Company Name Text',
                'type'      => 'editor',
                'default'   => 'Spellbit'
            ),
            array(
                'title'     => 'Company URL',
                'id'        => 'fs-company-url',
                'subtitle'  => 'Modify or Change Company URL',
                'desc'      => 'You can modify or change Company URL Text',
                'type'      => 'text',
                'default'   => 'http://spellbit.com'
            ),


        )
    ));









