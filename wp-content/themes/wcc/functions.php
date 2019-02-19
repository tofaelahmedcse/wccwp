<?php
/**
 * _rebase functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _rebase
 */

if ( ! function_exists( '_rebase_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function _rebase_setup() {

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', '_rebase' ),
		'footer_social' => esc_html__( 'Footer Social', '_rebase' ),
		'utility' => esc_html__( 'Utility', '_rebase' ),
		'mobile' => esc_html__( 'Mobile', '_rebase' ),
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
}
endif;
add_action( 'after_setup_theme', '_rebase_setup' );

/**
 * Enqueue scripts and styles.
 */
function _rebase_scripts() {

  wp_deregister_script('jquery');

	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', array(), null, true);

	wp_enqueue_style( '_rebase-style', get_stylesheet_uri(), array(), null, 'screen' );

	wp_enqueue_script( 'google-map',  'https://maps.googleapis.com/maps/api/js?key=AIzaSyBUOQpwsMubEWxbdknMKn1qMR8tl6XpkaA', array('jquery'), null, true );

    wp_enqueue_script('custom-map', get_template_directory_uri() . '/js/map.js', array('jquery'), null, true);


    //owl carousel. remove it if you are not going to use it.
    wp_enqueue_style( 'owl-css', get_template_directory_uri().'/js/lib/OwlCarousel/assets/owl.carousel.min.css', array(), null, 'screen' );

    wp_enqueue_style( 'owl-default-css', get_template_directory_uri().'/js/lib/OwlCarousel/assets/owl.theme.default.min.css', array(), null, 'screen' );

    wp_enqueue_script( 'owl-js', get_template_directory_uri() . '/js/lib/OwlCarousel/owl.carousel.min.js', array('jquery'), null, true );

    wp_enqueue_script( 'modernizr-js', get_template_directory_uri() . '/js/lib/modernizr.js', array('jquery'), null, true );

	wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/js/lib/popper.min.js', array('jquery'), null, true );

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/lib/bootstrap.min.js', array('jquery'), null, true );

	wp_enqueue_script( 'equal-height-js', get_template_directory_uri() . '/js/lib/jquery.matchHeight-min.js', array('jquery'), null, true );

	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', '_rebase_scripts' );

/**
 * Load Shortcodes.
 */
require_once get_template_directory() . '/inc/wpurl-shortcodes.php';

// Register Custom Navigation Walker
require_once('inc/class-wp-bootstrap-navwalker.php');

/**
 * Create function to add ACF Options page at wp-admin. Should be modified for general purposes */
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page('Site Settings');

    $args = array(

        /* (string) The title displayed on the options page. Required. */
        'page_title' => 'Global Content',

        /* (int|string) The position in the menu order this menu should appear.
        WARNING: if two menu items use the same position attribute, one of the items may be overwritten so that only one item displays!
        Risk of conflict can be reduced by using decimal instead of integer values, e.g. '63.3' instead of 63 (must use quotes).
        Defaults to bottom of utility menu items */
        'position' => 20,

        /* (string) The icon class for this menu. Defaults to default WordPress gear.
	Read more about dashicons here: https://developer.wordpress.org/resource/dashicons/ */
        'icon_url' => 'dashicons-admin-site',
    );
    acf_add_options_page( $args );

}

add_filter('show_admin_bar', '__return_false');

//ACF Goggle Map key
function my_acf_init()
{

    acf_update_setting('google_api_key', 'AIzaSyBUOQpwsMubEWxbdknMKn1qMR8tl6XpkaA');
}

add_action('acf/init', 'my_acf_init');

// Change # of words in 'the excerpt'
function wpdocs_custom_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


function isPlaceHolder($text){
    return strpos($text,'Lorem Ipsum') !== false;
}

/* Customize API */

function theme_customize($theme_section){
    
  
    /* Social Option */
    
    $theme_section->add_section('social_icon', array(
        'title' => 'Social Icon',
        'priority' => 30
    ));
    
    $theme_section->add_setting('facebook_icon', array(
        'default' => '',
        'transport' => 'refresh'
    ));

    $theme_section->add_control('facebook_icon', array(
        'label' => 'Facebook',
        'section' => 'social_icon',
        'type' => 'text'
    ));
    
    $theme_section->add_setting('linkedin_icon', array(
        'default' => '',
        'transport' => 'refresh'
    ));

    $theme_section->add_control('linkedin_icon', array(
        'label' => 'Linkedin',
        'section' => 'social_icon',
        'type' => 'text'
    ));
    
     $theme_section->add_setting('twitter_icon', array(
        'default' => '',
        'transport' => 'refresh'
    ));

    $theme_section->add_control('twitter_icon', array(
        'label' => 'Twitter',
        'section' => 'social_icon',
        'type' => 'text'
    ));
   
    
}
add_action('customize_register', 'theme_customize');