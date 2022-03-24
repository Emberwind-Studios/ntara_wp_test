<?php

/**
 * The functions.php file allows me to add custom features and 
 * hook into wordpress's core features to enhance my theme. 
 * 
 */
	
if ( ! function_exists( 'ntaratheme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function ntaratheme_setup() {
 
    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( 'ntaratheme', get_template_directory() . '/languages' );
 
    /**
     * Add default posts and comments RSS feed links to &lt;head>.
     */
    add_theme_support( 'automatic-feed-links' );
 
    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-thumbnails' );
 
    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'ntaratheme' ),
        'secondary' => __('Secondary Menu', 'ntaratheme' )
    ) );
 
    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

    	
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
endif; // ntaratheme_setup
add_action( 'after_setup_theme', 'ntaratheme_setup' );


