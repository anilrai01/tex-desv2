<?php

/**
 * Buziness functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Buziness
 */

if (!function_exists('buziness_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function buziness_setup()
	{
		/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Buziness, use a find and replace
	 * to change 'buziness' to the name of your theme in all the template files.
	 */
		load_theme_textdomain('buziness', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
		add_theme_support('title-tag');

		/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
		add_theme_support('post-thumbnails');
		add_image_size('buziness-blog', 360, 270, true);

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(array(
			'primary' => esc_html__('Primary', 'buziness'),
		));

		// Enable support for custom logo.
		add_theme_support('custom-logo', array(
			'height'		=> 45,
			'width'			=> 45,
			'flex-height'	=> true,
			'flex-width'	=> true,
		));

		/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
		add_theme_support('html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		// Set up the WordPress core custom background feature.
		add_theme_support('custom-background', apply_filters('buziness_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		// Gutenberg support
		add_theme_support('editor-color-palette', array(
			array(
				'name' => esc_html__('Blue', 'buziness'),
				'slug' => 'blue',
				'color' => '#4d6de6',
			),
			array(
				'name' => esc_html__('Black', 'buziness'),
				'slug' => 'black',
				'color' => '#000',
			),
			array(
				'name' => esc_html__('Grey', 'buziness'),
				'slug' => 'grey',
				'color' => '#7a7a7a',
			),
		));

		add_theme_support('align-wide');
		add_theme_support('editor-font-sizes', array(
			array(
				'name' => esc_html__('small', 'buziness'),
				'shortName' => esc_html__('S', 'buziness'),
				'size' => 12,
				'slug' => 'small'
			),
			array(
				'name' => esc_html__('regular', 'buziness'),
				'shortName' => esc_html__('M', 'buziness'),
				'size' => 16,
				'slug' => 'regular'
			),
			array(
				'name' => esc_html__('larger', 'buziness'),
				'shortName' => esc_html__('L', 'buziness'),
				'size' => 36,
				'slug' => 'larger'
			),
			array(
				'name' => esc_html__('huge', 'buziness'),
				'shortName' => esc_html__('XL', 'buziness'),
				'size' => 48,
				'slug' => 'huge'
			)
		));
		add_theme_support('wp-block-styles');
	}
endif;
add_action('after_setup_theme', 'buziness_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function buziness_content_width()
{
	$GLOBALS['content_width'] = apply_filters('buziness_content_width', 640);
}
add_action('after_setup_theme', 'buziness_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function buziness_widgets_init()
{
	register_sidebar(array(
		'name'          => esc_html__('Sidebar', 'buziness'),
		'id'            => 'sidebar-1',
		'description'   => esc_html__('Add widgets here.', 'buziness'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
	register_sidebar(array(
		'name'          => sprintf(esc_html__('Footer %d', 'buziness'), 1),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
	register_sidebar(array(
		'name'          => sprintf(esc_html__('Footer %d', 'buziness'), 2),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
	register_sidebar(array(
		'name'          => sprintf(esc_html__('Footer %d', 'buziness'), 3),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
	register_sidebar(array(
		'name'          => sprintf(esc_html__('Footer %d', 'buziness'), 4),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}
add_action('widgets_init', 'buziness_widgets_init');

/**
 * Register custom fonts.
 */
function buziness_fonts_url()
{
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
	if ('off' !== _x('on', 'Montserrat font: on or off', 'buziness')) {
		$fonts[] = 'Montserrat:300,400,500,600,700';
	}

	/* translators: If there are characters in your language that are not supported by Roboto Slab, translate this to 'off'. Do not translate into your own language. */
	if ('off' !== _x('on', 'Raleway: on or off', 'buziness')) {
		$fonts[] = 'Raleway:300,400,500,600,700';
	}

	if ($fonts) {
		$fonts_url = add_query_arg(array(
			'family' => urlencode(implode('|', $fonts)),
			'subset' => urlencode($subsets),
		), 'https://fonts.googleapis.com/css');
	}

	return esc_url_raw($fonts_url);
}

/**
 * Enqueue scripts and styles.
 */
function buziness_scripts()
{
	$min = defined('SCRIPT_DEBUG') && SCRIPT_DEBUG ? '' : '.min';
	$fonts_url = buziness_fonts_url();
	$primary_color = buziness_get_option('primary_color');
	if (!empty($fonts_url)) {
		wp_enqueue_style('buziness-google-fonts', $fonts_url, array(), null);
	}

	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome' . $min . '.css', '', '4.7.0');

	wp_enqueue_style('slick-theme-css', get_template_directory_uri() . '/assets/css/slick-theme' . $min . '.css', '', 'v2.2.0');

	wp_enqueue_style('slick-css', get_template_directory_uri() . '/assets/css/slick' . $min . '.css', '', 'v1.8.0');

	wp_enqueue_style('blocks-css', get_template_directory_uri() . '/assets/css/blocks' . $min . '.css',	 '');

	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap' . $min . '.css', '');

	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style' . '.css', '');

	wp_enqueue_style('style-about', get_template_directory_uri() . '/assets/css/style-about' . '.css', '');

	wp_enqueue_style('buziness-style', get_stylesheet_uri());


	wp_enqueue_script('jquery-slick', get_template_directory_uri() . '/assets/js/slick' . $min . '.js', array('jquery'), '2017417', true);

	wp_enqueue_script('jquery-match-height', get_template_directory_uri() . '/assets/js/jquery.matchHeight' . $min . '.js', array('jquery'), '2017417', true);

	wp_enqueue_script('buziness-navigation', get_template_directory_uri() . '/assets/js/navigation' . $min . '.js', array(), '20151215', true);

	wp_enqueue_script('buziness-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix' . $min . '.js', array(), '20151215', true);

	wp_enqueue_script('buziness-custom-js', get_template_directory_uri() . '/assets/js/custom' . $min . '.js', array('jquery'), '20151215', true);

	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap' . $min . '.js', '', '', true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'buziness_scripts');

/**
 * Load init.
 */
require_once get_template_directory() . '/inc/init.php';

/**
 * TGM plugin additions.
 */
require get_template_directory() . '/inc/tgm-plugin/tgm-hook.php';

/**
 * Register a custom menu page.
 */
// function wpdocs_register_my_custom_menu_page() {
//     add_menu_page(
//         __( 'Activity Menu Title', 'textdomain' ),
//         'Activities',
//         'manage_options',
//         'myplugin/myplugin-admin.php',
// 		'',
// 		'',
//         6
//     );
// }
// add_action( 'admin_menu', 'wpdocs_register_my_custom_menu_page' );


function fire_activity_post_type() {
    register_post_type('fire_activity',
                       array(
                           'labels'      => array(
                               'name'          => __( 'Activities', 'textdomain' ),
							   'singular_name' => __( 'Acitivity', 'textdomain' ),
							   'archives'              => __( 'Item Archives', 'text_domain' ),
							   'attributes'            => __( 'Item Attributes', 'text_domain' ),
							   'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
							   'all_items'             => __( 'All Items', 'text_domain' ),
							   'add_new_item'          => __( 'Add New Item', 'text_domain' ),
							   'add_new'               => __( 'Add New', 'text_domain' ),
							   'new_item'              => __( 'New Item', 'text_domain' ),
							   'edit_item'             => __( 'Edit Item', 'text_domain' ),
							   'update_item'           => __( 'Update Item', 'text_domain' ),
							   'view_item'             => __( 'View Item', 'text_domain' ),
							   'view_items'            => __( 'View Items', 'text_domain' ),
							   'search_items'          => __( 'Search Item', 'text_domain' ),
							   'not_found'             => __( 'Not found', 'text_domain' ),
							   'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
							   'featured_image'        => __( 'Featured Image', 'text_domain' ),
							   'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
							   'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
							   'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
							   'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
							   'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
							   'items_list'            => __( 'Items list', 'text_domain' ),
							   'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
							   'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
                           ),
                           'public'      => true,
						   'has_archive' => true,
						   'supports'    => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
						   'rewrite'     => array( 'slug' => 'activities' ), // my custom slug
						   'taxonomies'            => array( 'category', 'post_tag' ),
						   'hierarchical'          => false,
						   'public'                => true,
						   'show_ui'               => true,
						   'show_in_menu'          => true,
						   'menu_position'         => 5,
						   'show_in_admin_bar'     => true,
						   'show_in_nav_menus'     => true,
						   'can_export'            => true,
						   'has_archive'           => true,        
						   'exclude_from_search'   => false,
						   'publicly_queryable'    => true
                       )
    );
}
add_action('init', 'fire_activity_post_type');

function fire_custom_post_type() {
    register_post_type('fire_faculty',
                       array(
                           'labels'      => array(
                               'name'          => __( 'Faculties', 'textdomain' ),
							   'singular_name' => __( 'Faculty', 'textdomain' ),
							   'archives'              => __( 'Item Archives', 'text_domain' ),
							   'attributes'            => __( 'Item Attributes', 'text_domain' ),
							   'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
							   'all_items'             => __( 'All Items', 'text_domain' ),
							   'add_new_item'          => __( 'Add New Item', 'text_domain' ),
							   'add_new'               => __( 'Add New', 'text_domain' ),
							   'new_item'              => __( 'New Item', 'text_domain' ),
							   'edit_item'             => __( 'Edit Item', 'text_domain' ),
							   'update_item'           => __( 'Update Item', 'text_domain' ),
							   'view_item'             => __( 'View Item', 'text_domain' ),
							   'view_items'            => __( 'View Items', 'text_domain' ),
							   'search_items'          => __( 'Search Item', 'text_domain' ),
							   'not_found'             => __( 'Not found', 'text_domain' ),
							   'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
							   'featured_image'        => __( 'Featured Image', 'text_domain' ),
							   'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
							   'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
							   'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
							   'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
							   'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
							   'items_list'            => __( 'Items list', 'text_domain' ),
							   'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
							   'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
                           ),
                           'public'      => true,
						   'has_archive' => true,
						   'supports'    => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
						   'rewrite'     => array( 'slug' => 'faculties' ), // my custom slug
						   'hierarchical'          => false,
						   'public'                => true,
						   'show_ui'               => true,
						   'show_in_menu'          => true,
						   'menu_position'         => 6,
						   'show_in_admin_bar'     => true,
						   'show_in_nav_menus'     => true,
						   'can_export'            => true,
						   'has_archive'           => true,        
						   'exclude_from_search'   => false,
						   'publicly_queryable'    => true,
						   'query_var' => true,
						   'capability_type' => 'post'
                       )
    );
}
add_action('init', 'fire_custom_post_type');

function create_faculty_taxonomies() {
    $labels = array(
        'name'              => _x( 'Categories', 'taxonomy general name' ),
        'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Categories' ),
        'all_items'         => __( 'All Categories' ),
        'parent_item'       => __( 'Parent Category' ),
        'parent_item_colon' => __( 'Parent Category:' ),
        'edit_item'         => __( 'Edit Category' ),
        'update_item'       => __( 'Update Category' ),
        'add_new_item'      => __( 'Add New Category' ),
        'new_item_name'     => __( 'New Category Name' ),
        'menu_name'         => __( 'Categories' ),
    );

    $args = array(
        'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'categories' ),
    );

    register_taxonomy( 'faculty_categories', array( 'fire_faculty' ), $args );
}
add_action( 'init', 'create_faculty_taxonomies', 0 );
function fire_news_post_type() {
    register_post_type('fire_news',
                       array(
                           'labels'      => array(
                               'name'          => __( 'News', 'textdomain' ),
							   'singular_name' => __( 'News', 'textdomain' ),
							   'archives'              => __( 'Item Archives', 'text_domain' ),
							   'attributes'            => __( 'Item Attributes', 'text_domain' ),
							   'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
							   'all_items'             => __( 'All Items', 'text_domain' ),
							   'add_new_item'          => __( 'Add New Item', 'text_domain' ),
							   'add_new'               => __( 'Add New', 'text_domain' ),
							   'new_item'              => __( 'New Item', 'text_domain' ),
							   'edit_item'             => __( 'Edit Item', 'text_domain' ),
							   'update_item'           => __( 'Update Item', 'text_domain' ),
							   'view_item'             => __( 'View Item', 'text_domain' ),
							   'view_items'            => __( 'View Items', 'text_domain' ),
							   'search_items'          => __( 'Search Item', 'text_domain' ),
							   'not_found'             => __( 'Not found', 'text_domain' ),
							   'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
							   'featured_image'        => __( 'Featured Image', 'text_domain' ),
							   'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
							   'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
							   'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
							   'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
							   'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
							   'items_list'            => __( 'Items list', 'text_domain' ),
							   'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
							   'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
                           ),
                           'public'      => true,
						   'has_archive' => true,
						   'supports'    => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
						   'rewrite'     => array( 'slug' => 'news' ), // my custom slug
						   'taxonomies'            => array( 'category', 'post_tag' ),
						   'hierarchical'          => false,
						   'public'                => true,
						   'show_ui'               => true,
						   'show_in_menu'          => true,
						   'menu_position'         => 7,
						   'show_in_admin_bar'     => true,
						   'show_in_nav_menus'     => true,
						   'can_export'            => true,
						   'has_archive'           => true,        
						   'exclude_from_search'   => false,
						   'publicly_queryable'    => true
                       )
    );
}
add_action('init', 'fire_news_post_type');
function fire_events_post_type() {
    register_post_type('fire_events',
                       array(
                           'labels'      => array(
                               'name'          => __( 'Events', 'textdomain' ),
							   'singular_name' => __( 'Event', 'textdomain' ),
							   'archives'              => __( 'Item Archives', 'text_domain' ),
							   'attributes'            => __( 'Item Attributes', 'text_domain' ),
							   'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
							   'all_items'             => __( 'All Items', 'text_domain' ),
							   'add_new_item'          => __( 'Add New Item', 'text_domain' ),
							   'add_new'               => __( 'Add New', 'text_domain' ),
							   'new_item'              => __( 'New Item', 'text_domain' ),
							   'edit_item'             => __( 'Edit Item', 'text_domain' ),
							   'update_item'           => __( 'Update Item', 'text_domain' ),
							   'view_item'             => __( 'View Item', 'text_domain' ),
							   'view_items'            => __( 'View Items', 'text_domain' ),
							   'search_items'          => __( 'Search Item', 'text_domain' ),
							   'not_found'             => __( 'Not found', 'text_domain' ),
							   'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
							   'featured_image'        => __( 'Featured Image', 'text_domain' ),
							   'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
							   'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
							   'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
							   'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
							   'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
							   'items_list'            => __( 'Items list', 'text_domain' ),
							   'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
							   'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
                           ),
                           'public'      => true,
						   'has_archive' => true,
						   'supports'    => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
						   'rewrite'     => array( 'slug' => 'events' ), // my custom slug
						   'taxonomies'            => array( 'category', 'post_tag' ),
						   'hierarchical'          => false,
						   'public'                => true,
						   'show_ui'               => true,
						   'show_in_menu'          => true,
						   'menu_position'         => 7,
						   'show_in_admin_bar'     => true,
						   'show_in_nav_menus'     => true,
						   'can_export'            => true,
						   'has_archive'           => true,        
						   'exclude_from_search'   => false,
						   'publicly_queryable'    => true
                       )
    );
}
add_action('init', 'fire_events_post_type');

function fire_slider_post_type() {
    register_post_type('fire_slider',
                       array(
                           'labels'      => array(
                               'name'          => __( 'Sliders', 'textdomain' ),
							   'singular_name' => __( 'Slider', 'textdomain' ),
							   'archives'              => __( 'Item Archives', 'text_domain' ),
							   'attributes'            => __( 'Item Attributes', 'text_domain' ),
							   'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
							   'all_items'             => __( 'All Items', 'text_domain' ),
							   'add_new_item'          => __( 'Add New Item', 'text_domain' ),
							   'add_new'               => __( 'Add New', 'text_domain' ),
							   'new_item'              => __( 'New Item', 'text_domain' ),
							   'edit_item'             => __( 'Edit Item', 'text_domain' ),
							   'update_item'           => __( 'Update Item', 'text_domain' ),
							   'view_item'             => __( 'View Item', 'text_domain' ),
							   'view_items'            => __( 'View Items', 'text_domain' ),
							   'search_items'          => __( 'Search Item', 'text_domain' ),
							   'not_found'             => __( 'Not found', 'text_domain' ),
							   'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
							   'featured_image'        => __( 'Featured Image', 'text_domain' ),
							   'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
							   'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
							   'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
							   'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
							   'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
							   'items_list'            => __( 'Items list', 'text_domain' ),
							   'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
							   'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
                           ),
                           'public'      => true,
						   'has_archive' => true,
						   'supports'    => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
						   'rewrite'     => array( 'slug' => 'sliders' ), // my custom slug
						   'taxonomies'            => array( 'category', 'post_tag' ),
						   'hierarchical'          => false,
						   'public'                => true,
						   'show_ui'               => true,
						   'show_in_menu'          => true,
						   'menu_position'         => 8,
						   'show_in_admin_bar'     => true,
						   'show_in_nav_menus'     => true,
						   'can_export'            => true,
						   'has_archive'           => true,        
						   'exclude_from_search'   => false,
						   'publicly_queryable'    => true
                       )
    );
}
add_action('init', 'fire_slider_post_type');

function custom_meta_box_markup($object)
{
    wp_nonce_field(basename(__FILE__), "meta-box-nonce");

    ?>
        <div>
            <label for="meta-box-month">Month</label>
            <input name="meta-box-month" type="text" value="<?php echo get_post_meta($object->ID, "meta-box-month", true); ?>">

			<br>
			<br>
            <label for="meta-box-day">Day</label>
            <input name="meta-box-day" type="text" value="<?php echo get_post_meta($object->ID, "meta-box-day", true); ?>">
            <!-- <label for="meta-box-dropdown">Dropdown</label>
            <select name="meta-box-dropdown">
                <?php 
                    // $option_values = array(1, 2, 3);

                    // foreach($option_values as $key => $value) 
                    // {
                    //     if($value == get_post_meta($object->ID, "meta-box-dropdown", true))
                    //     {
                            ?>
                                <option selected><?php //echo $value; ?></option>
                            <?php    
                        //}
                        //else
                        //{
                            ?>
                                <option><?php //echo $value; ?></option>
                            <?php
                       // }
                   // }
                ?>
            </select>

            <br>

            <label for="meta-box-checkbox">Check Box</label>
            <?php
                // $checkbox_value = get_post_meta($object->ID, "meta-box-checkbox", true);

                // if($checkbox_value == "")
                // {
                    ?>
                        <input name="meta-box-checkbox" type="checkbox" value="true">
                    <?php
                // }
                // else if($checkbox_value == "true")
                // {
                    ?>  
                        <input name="meta-box-checkbox" type="checkbox" value="true" checked>
                    <?php
                // }
            ?> -->
        </div>
    <?php  
}

function add_custom_meta_box()
{
    add_meta_box("demo-meta-box", "Event Day and date", "custom_meta_box_markup", "fire_events", "side", "high", null);
}

add_action("add_meta_boxes", "add_custom_meta_box");

function save_custom_meta_box($post_id, $post, $update)
{
    if (!isset($_POST["meta-box-nonce"]) || !wp_verify_nonce($_POST["meta-box-nonce"], basename(__FILE__)))
        return $post_id;

    if(!current_user_can("edit_post", $post_id))
        return $post_id;

    if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
        return $post_id;

    $slug = "fire_events";
    if($slug != $post->post_type)
        return $post_id;

	$meta_box_month_value = "";
    $meta_box_day_value = "";

    if(isset($_POST["meta-box-month"]))
    {
        $meta_box_month_value = $_POST["meta-box-month"];
    }   
    update_post_meta($post_id, "meta-box-month", $meta_box_month_value);

    if(isset($_POST["meta-box-day"]))
    {
        $meta_box_day_value = $_POST["meta-box-day"];
    }   
    update_post_meta($post_id, "meta-box-day", $meta_box_day_value);
}

add_action("save_post_fire_events", "save_custom_meta_box", 10, 3);



function xxxx_render_image_attachment_box($post) {


	if($post->ID == 85) {
    // See if there's an existing image. (We're associating images with posts by saving the image's 'attachment id' as a post meta value)
    // Incidentally, this is also how you'd find any uploaded files for display on the frontend.
    $existing_image_id = get_post_meta($post->ID,'_xxxx_attached_image', true);
    if(is_numeric($existing_image_id)) {

        echo '<div>';
            $arr_existing_image = wp_get_attachment_image_src($existing_image_id, 'large');
            $existing_image_url = $arr_existing_image[0];
            echo '<img src="' . $existing_image_url . '" />';
        echo '</div>';

    }

    // If there is an existing image, show it
    if($existing_image_id) {

        echo '<div>Attached Image ID: ' . $existing_image_id . '</div>';

    } 

    echo 'Upload an image: <input type="file" name="xxxx_image" id="xxxx_image" />';

    // See if there's a status message to display (we're using this to show errors during the upload process, though we should probably be using the WP_error class)
    $status_message = get_post_meta($post->ID,'_xxxx_attached_image_upload_feedback', true);

    // Show an error message if there is one
    if($status_message) {

        echo '<div class="upload_status_message">';
            echo $status_message;
        echo '</div>';

    }

    // Put in a hidden flag. This helps differentiate between manual saves and auto-saves (in auto-saves, the file wouldn't be passed).
    echo '<input type="hidden" name="xxxx_manual_save_flag" value="true" />';
	}
}



function xxxx_setup_meta_boxes($post) {

    // Add the box to a particular custom content type page
    add_meta_box('xxxx_image_box', 'Upload Image', 'xxxx_render_image_attachment_box', 'page', 'side', 'high');

}
add_action('admin_init','xxxx_setup_meta_boxes');

function xxxx_update_post($post_id, $post) {

    // Get the post type. Since this function will run for ALL post saves (no matter what post type), we need to know this.
    // It's also important to note that the save_post action can runs multiple times on every post save, so you need to check and make sure the
    // post type in the passed object isn't "revision"
    $post_type = $post->post_type;

    // Make sure our flag is in there, otherwise it's an autosave and we should bail.
    if($post_id && isset($_POST['xxxx_manual_save_flag'])) { 

        // Logic to handle specific post types
        switch($post_type) {

            // If this is a post. You can change this case to reflect your custom post slug
            case 'page':

                // HANDLE THE FILE UPLOAD

                // If the upload field has a file in it
                if(isset($_FILES['xxxx_image']) && ($_FILES['xxxx_image']['size'] > 0)) {

                    // Get the type of the uploaded file. This is returned as "type/extension"
                    $arr_file_type = wp_check_filetype(basename($_FILES['xxxx_image']['name']));
                    $uploaded_file_type = $arr_file_type['type'];

                    // Set an array containing a list of acceptable formats
                    $allowed_file_types = array('image/jpg','image/jpeg','image/gif','image/png');

                    // If the uploaded file is the right format
                    if(in_array($uploaded_file_type, $allowed_file_types)) {

                        // Options array for the wp_handle_upload function. 'test_upload' => false
                        $upload_overrides = array( 'test_form' => false ); 

                        // Handle the upload using WP's wp_handle_upload function. Takes the posted file and an options array
                        $uploaded_file = wp_handle_upload($_FILES['xxxx_image'], $upload_overrides);

                        // If the wp_handle_upload call returned a local path for the image
                        if(isset($uploaded_file['file'])) {

                            // The wp_insert_attachment function needs the literal system path, which was passed back from wp_handle_upload
                            $file_name_and_location = $uploaded_file['file'];

                            // Generate a title for the image that'll be used in the media library
                            $file_title_for_media_library = 'your title here';

                            // Set up options array to add this file as an attachment
                            $attachment = array(
                                'post_mime_type' => $uploaded_file_type,
                                'post_title' => 'Uploaded image ' . addslashes($file_title_for_media_library),
                                'post_content' => '',
                                'post_status' => 'inherit'
                            );

                            // Run the wp_insert_attachment function. This adds the file to the media library and generates the thumbnails. If you wanted to attch this image to a post, you could pass the post id as a third param and it'd magically happen.
                            $attach_id = wp_insert_attachment( $attachment, $file_name_and_location );
                            require_once(ABSPATH . "wp-admin" . '/includes/image.php');
                            $attach_data = wp_generate_attachment_metadata( $attach_id, $file_name_and_location );
                            wp_update_attachment_metadata($attach_id,  $attach_data);

                            // Before we update the post meta, trash any previously uploaded image for this post.
                            // You might not want this behavior, depending on how you're using the uploaded images.
                            $existing_uploaded_image = (int) get_post_meta($post_id,'_xxxx_attached_image', true);
                            if(is_numeric($existing_uploaded_image)) {
                                wp_delete_attachment($existing_uploaded_image);
                            }

                            // Now, update the post meta to associate the new image with the post
                            update_post_meta($post_id,'_xxxx_attached_image',$attach_id);

                            // Set the feedback flag to false, since the upload was successful
                            $upload_feedback = false;


                        } else { // wp_handle_upload returned some kind of error. the return does contain error details, so you can use it here if you want.

                            $upload_feedback = 'There was a problem with your upload.';
                            update_post_meta($post_id,'_xxxx_attached_image',$attach_id);

                        }

                    } else { // wrong file type

                        $upload_feedback = 'Please upload only image files (jpg, gif or png).';
                        update_post_meta($post_id,'_xxxx_attached_image',$attach_id);

                    }

                } else { // No file was passed

                    $upload_feedback = false;

                }

                // Update the post meta with any feedback
                update_post_meta($post_id,'_xxxx_attached_image_upload_feedback',$upload_feedback);

            break;

            default:

        } // End switch

    return;

} // End if manual save flag

    return;

}
add_action('save_post_page','xxxx_update_post',1,2);