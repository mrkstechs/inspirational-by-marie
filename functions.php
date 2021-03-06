<?php
/**
 * Inspirational By Marie functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Inspirational_By_Marie
 */

/**
 * Admin Page Fucntions
 */
require get_template_directory() . '/inc/function-admin.php';
require get_template_directory() . '/inc/enqueue.php';

if ( ! function_exists( 'inspirational_by_marie_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function inspirational_by_marie_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Inspirational By Marie, use a find and replace
		 * to change 'inspirational-by-marie' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'inspirational-by-marie', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'inspirational-by-marie' ),
			'social-menu' => __('Social Menu'),
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
		add_theme_support( 'custom-background', apply_filters( 'inspirational_by_marie_custom_background_args', array(
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
	}
endif;
add_action( 'after_setup_theme', 'inspirational_by_marie_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function inspirational_by_marie_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'inspirational_by_marie_content_width', 640 );
}
add_action( 'after_setup_theme', 'inspirational_by_marie_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function inspirational_by_marie_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'inspirational-by-marie' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'inspirational-by-marie' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'inspirational_by_marie_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function inspirational_by_marie_scripts() {
	wp_enqueue_style( 'inspirational-by-marie-style', get_stylesheet_uri() );

	if(is_front_page()){
		//wp_enqueue_script( 'home-js', get_template_directory_uri().'/public/js/home.js', array() , true );
		wp_enqueue_script( 'home-js', 'http://localhost:8080/home.js', array() , true );
	}

	//wp_enqueue_style( 'by-marie-style', get_template_directory_uri().'/public/css/app.css');

	//wp_enqueue_script( 'by-marie-js', get_template_directory_uri().'/public/js/app.js', array() , true );

	wp_enqueue_script( 'by-marie-js', 'http://localhost:8080/app.js', array() , true );

	if(is_page('community')){
		//wp_enqueue_script( 'community-js', get_template_directory_uri().'/public/js/community.js', array() , true );
		wp_enqueue_script( 'community-js', 'http://localhost:8080/community.js', array() , true );
	}

	wp_enqueue_script( 'inspirational-by-marie-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'inspirational-by-marie-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'inspirational_by_marie_scripts' );

function load_fb_js_sdk(){
	?>
		<!--<script type="text/javascript" src="<?php //echo get_template_directory_uri() . '/public/js/fbSdk.js;'?>"></script>-->
		<script type="text/javascript" src="http://localhost:8080/fbSdk.js"></script>
		<script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>
	<?php
}
add_action( 'load_fb_sdk', 'load_fb_js_sdk' );

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
	require get_template_directory() . '/inc/woocommerce.php';
}
