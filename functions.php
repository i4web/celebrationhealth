<?php
/**
 * Celebration Health functions and definitions
 *
 * @package celebrationhealth
 */

 if ( ! function_exists( 'i4_theme_setup' ) ) :
 /**
  * Sets up theme defaults and registers support for various WordPress features.
  *
  * Note that this function is hooked into the after_setup_theme hook, which
  * runs before the init hook. The init hook is too late for some features, such
  * as indicating support for post thumbnails.
  */
 function i4_theme_setup() {
 	/*
 	 * Make theme available for translation.
 	 * Translations can be filed in the /languages/ directory.
 	 * If you're building a theme based on celebrationhealth, use a find and replace
 	 * to change 'celebrationhealth' to the name of your theme in all the template files
 	 */
 	load_theme_textdomain( 'celebrationhealth', get_template_directory() . '/languages' );


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
 	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
 	 */
 	add_theme_support( 'post-thumbnails' );

 	// This theme uses wp_nav_menu() in one location.
 	register_nav_menus( array(
 		'primary' => esc_html__( 'Primary Menu', 'celebrationhealth' ),
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

 	/*
 	 * Enable support for Post Formats.
 	 * See http://codex.wordpress.org/Post_Formats
 	 */
 	add_theme_support( 'post-formats', array(
 		'aside',
 		'image',
 		'video',
 		'quote',
 		'link',
 	) );

 }
 endif; // i4_theme_setup
 add_action( 'after_setup_theme', 'i4_theme_setup' );

 /**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function i4_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'celebrationhealth' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s my-course-wrapper">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'i4_widgets_init' );

/**
 * Enqueue scripts and styles for the theme.
 */
function i4_scripts() {

  //Load the Stylesheets that we'll be using in the theme
  wp_enqueue_style( 'foundation-css', get_template_directory_uri().'/assets/css/foundation.css', array(), '5.5.2' );
  wp_enqueue_style( 'font-awesome-style', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), '4.4.0');
  wp_enqueue_style( 'i4-main-style', get_template_directory_uri().'/style.css', array(), '5.5.2' );

  //Load the scripts that we'll need to use for the theme
  wp_enqueue_script('jquery');
  wp_enqueue_script( 'i4-modernizr', get_template_directory_uri().'/assets/js/vendor/modernizr.js', array(), '2.8.3', false);
  wp_enqueue_script( 'i4-foundation', get_template_directory_uri().'/assets/js/foundation.min.js', array('jquery'), '5.5.2', false);
    wp_enqueue_script( 'i4-stickyFooter', get_template_directory_uri().'/assets/js/vendor/stickyFooter.js', array('jquery'), '2.1', false);


}

add_action( 'wp_enqueue_scripts', 'i4_scripts' );

/**
 * Insert the typkit scripts into the head of the site.
 */
function i4_type_kit() {

  $type_kit_output = '<script src="https://use.typekit.net/zlc5iom.js"></script>
                      <script>try{Typekit.load({ async: true });}catch(e){}</script>';
  echo $type_kit_output;
}

add_action( 'wp_head', 'i4_type_kit' );
