<?php
/**
 * german-web functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package german-web
 */

if ( ! function_exists( 'german_web_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function german_web_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on german-web, use a find and replace
		 * to change 'german-web' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'german-web', get_template_directory() . '/languages' );

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
			'header' => esc_html__( 'Header', 'german-web' ),
			'footer' => esc_html__( 'Footer', 'pegasus' ),
			'footer-menu-1' => __( 'Footer Menu 1' ),
      		'footer-menu-2' => __( 'Footer Menu 2' ),
      		'footer-menu-3' => __( 'Footer Menu 3' )
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
		add_theme_support( 'custom-background', apply_filters( 'german_web_custom_background_args', array(
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
add_action( 'after_setup_theme', 'german_web_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function german_web_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'german_web_content_width', 640 );
}
add_action( 'after_setup_theme', 'german_web_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function german_web_widgets_init() {
	// register_sidebar(array(
	// 	'name' => 'Footer Widget 1',
	// 	'id' => 'footer-1',
	// 	'description' => 'Первая область',
	// 	'before_widget' => '<div class="wsfooterwdget">',
	// 	'after_widget' => '</div>',
	// 	'before_title' => '<h2>',
	// 	'after_title' => '</h2>',
	// 	));
	// 	register_sidebar(array(
	// 	'name' => 'Footer Widget 2',
	// 	'id' => 'footer-2',
	// 	'description' => 'Вторая область',
	// 	'before_widget' => '<div class="wsfooterwdget">',
	// 	'after_widget' => '</div>',
	// 	'before_title' => '<h2>',
	// 	'after_title' => '</h2>',
	// 	));
	// 	register_sidebar(array(
	// 	'name' => 'Footer Widget 3',
	// 	'id' => 'footer-3',
	// 	'description' => 'Третья область',
	// 	'before_widget' => '<div class="wsfooterwdget">',
	// 	'after_widget' => '</div>',
	// 	'before_title' => '<h2>',
	// 	'after_title' => '</h2>',
	// 	));
}
add_action( 'widgets_init', 'german_web_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function german_web_scripts() {
	wp_enqueue_style( 'german-web-style', get_stylesheet_uri() );
	wp_enqueue_style( 'german-web-main', get_template_directory_uri() .'/assets/css/style.css' );

	wp_enqueue_style( 'german-web-font-awesome', get_template_directory_uri() . '/assets/fonts/fontawesome/all.min.css');
	


	wp_enqueue_script( 'german-web-js', get_template_directory_uri() . '/assets/js/script.js', array(), '20151215', true );

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'german-web-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'german-web-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'german_web_scripts' );

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

add_action('init', 'german_web_customPostType_init');
function german_web_customPostType_init(){
	register_post_type('pegasus', array(
		'labels'             => array(
			'name'               => 'Экскурсии', // Основное название типа записи
			'singular_name'      => 'Экскурсии', // отдельное название записи типа Book

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','editor','author','thumbnail','excerpt')
	) );
	
}

