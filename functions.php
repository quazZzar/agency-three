<?php
/******************************************************************************/
/*     			         Including the Framework             			            */
/******************************************************************************/
require_once( get_template_directory(). '/csframework/cs-framework.php' );

/******************************************************************************/
/*                      Styles Enqueue                                                             */
/******************************************************************************/
function goodies_enqueue(){
	#Styles
	wp_enqueue_style( 'bootstrapcss',  get_template_directory_uri().'/assets/css/bootstrap.css', array(), false, 'all'  );
	wp_enqueue_style( 'main-styles',  get_template_directory_uri().'/assets/css/style.css', array(), false, 'all'  );
	wp_enqueue_style( 'postslayout', get_template_directory_uri().'/assets/css/post-layout.css', array(), false, 'all' );
	//wp_enqueue_style( 'fontawesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), false, 'all' );
	wp_enqueue_style( 'GFonts', 'https://fonts.googleapis.com/css?family=Karla:400,700|Source+Sans+Pro:300,400,700', array( ), false, 'all' );
	
	if(is_singular( 'events' )) {
		wp_enqueue_style( 'events', get_template_directory_uri().'/assets/css/event-page.css', array(), false, 'all' );
		wp_enqueue_script( 'gmap', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCnjCTk-fTAVxyPADepxbBvTEdFt1qZ0qA', array(), false, false );
	}		
	#Scripts
	wp_enqueue_script( 'bootstrapjs', get_template_directory_uri().'/assets/js/bootstrap.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'customjs', get_template_directory_uri().'/assets/js/custom.js', array( 'jquery' ), false, true );

}
add_action( 'wp_enqueue_scripts', 'goodies_enqueue' );

function create_posttypes() {
 	add_image_size('archive_thumbnail', 700, 400, array('center', 'center'));
 	
	$labels = array(
		'name'               => _x( 'Services', 'post type general name', 'agency-three' ),
		'singular_name'      => _x( 'Service', 'post type singular name', 'agency-three' ),
		'menu_name'          => _x( 'Services', 'admin menu', 'agency-three' ),
		'name_admin_bar'     => _x( 'Service', 'add new on admin bar', 'agency-three' ),
		'add_new'            => _x( 'Add New', 'service', 'agency-three' ),
		'add_new_item'       => __( 'Add New Service', 'agency-three' ),
		'new_item'           => __( 'New Service', 'agency-three' ),
		'edit_item'          => __( 'Edit Service', 'agency-three' ),
		'view_item'          => __( 'View Service', 'agency-three' ),
		'all_items'          => __( 'All Services', 'agency-three' ),
		'search_items'       => __( 'Search Services', 'agency-three' ),
		'parent_item_colon'  => __( 'Parent Services:', 'agency-three' ),
		'not_found'          => __( 'No services found.', 'agency-three' ),
		'not_found_in_trash' => __( 'No services found in Trash.', 'agency-three' )
	);
	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'agency-three' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'services' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 102,
		'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' )
	);
	register_post_type( 'services', $args );

	$labels = array(
		'name'               => _x( 'Staff Members', 'post type general name', 'agency-three' ),
		'singular_name'      => _x( 'Staff', 'post type singular name', 'agency-three' ),
		'menu_name'          => _x( 'Staff', 'admin menu', 'agency-three' ),
		'name_admin_bar'     => _x( 'Staff', 'add new on admin bar', 'agency-three' ),
		'add_new'            => _x( 'Add New', 'staff member', 'agency-three' ),
		'add_new_item'       => __( 'Add New Staff', 'agency-three' ),
		'new_item'           => __( 'New Staff', 'agency-three' ),
		'edit_item'          => __( 'Edit Staff', 'agency-three' ),
		'view_item'          => __( 'View Staff', 'agency-three' ),
		'all_items'          => __( 'All Staff Members', 'agency-three' ),
		'search_items'       => __( 'Search Staff Members', 'agency-three' ),
		'parent_item_colon'  => __( 'Parent Staff:', 'agency-three' ),
		'not_found'          => __( 'No Staff found.', 'agency-three' ),
		'not_found_in_trash' => __( 'No Staff found in Trash.', 'agency-three' )
	);
	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'agency-three' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'staff' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 101,
		'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' )
	);
	register_post_type( 'staff', $args );

	register_post_type( 'media',
		array(
			'labels' => array(
				'name' => __( 'In The Media' ),
				'singular_name' => __( 'In The Media' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'media'),
			'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail'  )			
		)		
	);
	$labels = array(
		'name'               => _x( 'Articles', 'post type general name', 'agency-three' ),
		'singular_name'      => _x( 'Article', 'post type singular name', 'agency-three' ),
		'menu_name'          => _x( 'Articles', 'admin menu', 'agency-three' ),
		'name_admin_bar'     => _x( 'Article', 'add new on admin bar', 'agency-three' ),
		'add_new'            => _x( 'Add New', 'service', 'agency-three' ),
		'add_new_item'       => __( 'Add New Article', 'agency-three' ),
		'new_item'           => __( 'New Article', 'agency-three' ),
		'edit_item'          => __( 'Edit Article', 'agency-three' ),
		'view_item'          => __( 'View Article', 'agency-three' ),
		'all_items'          => __( 'All Articles', 'agency-three' ),
		'search_items'       => __( 'Search Articles', 'agency-three' ),
		'parent_item_colon'  => __( 'Parent Articles:', 'agency-three' ),
		'not_found'          => __( 'No articles found.', 'agency-three' ),
		'not_found_in_trash' => __( 'No articles found in Trash.', 'agency-three' )
	);
	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'agency-three' ),
		'public'             => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'article' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 100,
		'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' )
	);
	register_post_type( 'article', $args );	

	$labels = array(
		'name'               => _x( 'Events', 'post type general name', 'agency-three' ),
		'singular_name'      => _x( 'Event', 'post type singular name', 'agency-three' ),
		'menu_name'          => _x( 'Events', 'admin menu', 'agency-three' ),
		'name_admin_bar'     => _x( 'Event', 'add new on admin bar', 'agency-three' ),
		'add_new'            => _x( 'Add New', 'service', 'agency-three' ),
		'add_new_item'       => __( 'Add New Event', 'agency-three' ),
		'new_item'           => __( 'New Event', 'agency-three' ),
		'edit_item'          => __( 'Edit Event', 'agency-three' ),
		'view_item'          => __( 'View Event', 'agency-three' ),
		'all_items'          => __( 'All Events', 'agency-three' ),
		'search_items'       => __( 'Search Events', 'agency-three' ),
		'parent_item_colon'  => __( 'Parent Events:', 'agency-three' ),
		'not_found'          => __( 'No events found.', 'agency-three' ),
		'not_found_in_trash' => __( 'No events found in Trash.', 'agency-three' )
	);
	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'agency-three' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'events' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 103,
		'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' )
	);
	register_post_type( 'events', $args );		
	
}
add_action( 'init', 'create_posttypes' );

/******************************************************************************/
/*                      Favicon                                               */
/******************************************************************************/
function theme_favicon() {
	if( function_exists( 'wp_site_icon' ) && has_site_icon() ) {
		wp_site_icon();
	} else if(cs_get_option( 'site_favicon')){
		echo "\r\n" . sprintf( '<link rel="shortcut icon" href="%s">', cs_get_option( 'site_favicon') ) . "\r\n";
	}
}
add_action( 'wp_head', 'theme_favicon');


/***********************************************************************************************/
/*                                      Add Menus                                              */
/***********************************************************************************************/

function register_menus($return = false){
	$menus = array(
		'main_menu'    => __('Main menu', 'dashboard'),
		'footer_menu'    => __('Footer menu', 'dashboard'),
	);
	if($return)
		return $menus;
	register_nav_menus($menus);
}
add_action('init', 'register_menus');

/******************************************************************************/
/*                    Theme Supports                                                           */
/******************************************************************************/
#post-thumbnails
add_theme_support('post-thumbnails');
#add  html5 support
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'caption' ));
#title tag
 add_theme_support( 'title-tag' );

 /***********************************************************************************************/
/* Add Sidebar Support */
/***********************************************************************************************/
function reg_sideb(){
	if (function_exists('register_sidebar')) {
		register_sidebar(
			array(
				'name'           => esc_html__('Main Sidebar', 'agency-three'),
				'id'             => 'main-sidebar',
				'description'    => esc_html__('Main Sidebar Area', 'agency-three'),
				'before_widget'  => '<div class="widget %2$s">',
				'after_widget'   => '</div>',
				'before_title'   => '<h4 class="widget-title">',
				'after_title'    => '</h4>'
			)
		);
		register_sidebar(
			array(
				'name'           => esc_html__('Contact Page Sidebar', 'agency-three'),
				'id'             => 'contact-page-sidebar',
				'description'    => esc_html__('Contact Page Sidebar Area', 'agency-three'),
				'before_widget'  => '<div class="widget %2$s">',
				'after_widget'   => '</div>',
				'before_title'   => '<h4 class="widget-title">',
				'after_title'    => '</h4>'
			)
		);
		register_sidebar(
			array(
				'name'           => esc_html__('Contact Form Sidebar', 'agency-three'),
				'id'             => 'contact-form-sidebar',
				'description'    => esc_html__('Contact Form Sidebar Area', 'agency-three'),
				'before_widget'  => '<div class="widget %2$s">',
				'after_widget'   => '</div>',
				'before_title'   => '<h4 class="widget-title">',
				'after_title'    => '</h4>'
			)
		);
		register_sidebar(
			array(
				'name'           => esc_html__('About Page Sidebar', 'agency-three'),
				'id'             => 'about-page-sidebar',
				'description'    => esc_html__('About Page Sidebar Area', 'agency-three'),
				'before_widget'  => '<div class="widget %2$s">',
				'after_widget'   => '</div>',
				'before_title'   => '<h4 class="widget-title">',
				'after_title'    => '</h4>'
			)
		);
		register_sidebar(
			array(
				'name'           => esc_html__('Event Sidebar', 'agency-three'),
				'id'             => 'event-sidebar',
				'description'    => esc_html__('Event post Sidebar Area', 'agency-three'),
				'before_widget'  => '<div class="widget %2$s">',
				'after_widget'   => '</div>',
				'before_title'   => '<h4 class="widget-title">',
				'after_title'    => '</h4>'
			)
		);
	}
}
add_action('widgets_init','reg_sideb');

function _go($option){
	return cs_get_option($option);
}
function _eo($option){
	echo cs_get_option($option);
}

/***********************************************************************************************/
/* 					Excerpt filter 							   */
/***********************************************************************************************/
function at_excerpt_more( $more ) {
	esc_html__(' ...', 'agency-four');
}
add_filter( 'excerpt_more', 'at_excerpt_more' );

function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );