<?php
$siteurl = get_option('siteurl');
$themeurl = $siteurl.'/wp-content/themes/'.get_option('template');

if ( version_compare( $GLOBALS['wp_version'], '4.1-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}
if ( ! function_exists( 'npktheme_setup' ) ) :

	//adding css
	function npktheme_setup() {

		load_theme_textdomain( 'npktheme', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 825, 510, true );

		register_nav_menus( array(
			'header-menu' => __( 'Header Nav', 'Menu di Header' ),
			'footer-menu'  => __( 'Footer Nav', 'Menu di Footer' ),
			) );

		add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
			) );

		add_theme_support( 'post-formats', array(
			'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
			) );

	// $color_scheme  = npktheme_get_color_scheme();
	// $default_color = trim( $color_scheme[0], '#' );

		add_theme_support( 'custom-background', apply_filters( 'npktheme_custom_background_args', array(
			'default-color'      => $default_color,
			'default-attachment' => 'fixed',
			) ) );

		add_editor_style( array( 'css/editor-style.css' ) );
	}
endif; // npktheme_setup
add_action( 'after_setup_theme', 'npktheme_setup' );

function npktheme_widgets_init() {
	if (function_exists('register_sidebar')) {
		register_sidebar( array(
			'name'          => __( 'Widget Slider', 'npktheme' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your sidebar.', 'npktheme' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
			));
		register_sidebar( array(
			'name'          => __( 'Widget Box Green', 'npktheme' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Add widgets here to appear in your sidebar.', 'npktheme' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
			));
		register_sidebar( array(
			'name'          => __( 'Widget Footer Left', 'npktheme' ),
			'id'            => 'footer-1',
			'description'   => __( 'Add widgets here to appear in your sidebar.', 'npktheme' ),
			'before_widget' => '<div class="widget-menu">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widget-title"><h6>',
			'after_title'   => '</h6></div>',
			));
		register_sidebar( array(
			'name'          => __( 'Widget Footer Middle', 'npktheme' ),
			'id'            => 'footer-2',
			'description'   => __( 'Add widgets here to appear in your sidebar.', 'npktheme' ),
			'before_widget' => '<div class="widget-menu">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widget-title"><h6>',
			'after_title'   => '</h6></div>',
			));
		register_sidebar( array(
			'name'          => __( 'Widget Footer Right', 'npktheme' ),
			'id'            => 'footer-3',
			'description'   => __( 'Add widgets here to appear in your sidebar.', 'npktheme' ),
			'before_widget' => '<div class="widget-menu">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widget-title"><h6>',
			'after_title'   => '</h6></div>',
			));
		register_sidebar( array(
			'name'          => __( 'Widget Sidebar Post', 'npktheme' ),
			'id'            => 'sidebar-4',
			'description'   => __( 'Add widgets here to appear in your sidebar.', 'npktheme' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
			));
		register_sidebar( array(
			'name'          => __( 'Widget Home Comment', 'npktheme' ),
			'id'            => 'sidebar-5',
			'description'   => __( 'Add widgets here to appear in your sidebar.', 'npktheme' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
			));
		register_sidebar( array(
			'name'          => __( 'Widget Header Top', 'npktheme' ),
			'id'            => 'header-top',
			'description'   => __( 'Add widgets here to appear in your sidebar.', 'npktheme' ),
			'before_widget' => '<aside id="%1$s" style="display:inline-block">',
			'after_widget'  => '</aside>',
			'before_title'  => '',
			'after_title'   => '',
			));

	}
}
add_action( 'widgets_init', 'npktheme_widgets_init' );

function npktheme_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.2' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.3.0' );

	// Load our main stylesheet.
	wp_enqueue_style( 'npktheme-style', get_stylesheet_uri() );

	if(!is_admin()){
		wp_deregister_script('jquery' );
		wp_register_script('jquery',get_template_directory_uri() . '/js/jquery-1.11.2.min.js', false, '1.11.2', true);
		wp_enqueue_script('jquery');
	}

	wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.2', true );

}
add_action( 'wp_enqueue_scripts', 'npktheme_scripts' );

// Register Theme Features
function custom_theme_features()  {

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails' );
}

function npktheme_customizer_register($wp_customize){
	//change logo
	$wp_customize->add_section('npktheme_images',array(
		'title' => __('Logo','npktheme'),
		'description' => 'Modify the logos'
	));
	$wp_customize->add_setting('logo_image', array(
		'default' => get_template_directory_uri().'/img/logos.png',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'logo_image', array(
		'label' => __('Edit logo image', 'npktheme'),
		'section' => 'npktheme_images',
		'settings' => 'logo_image'
	)));

	//change copyright
	$wp_customize->add_section('npktheme_copyright',array(
		'title' => __('Copyright Details','npktheme'),
		'description' => 'Modify the copyright'
	));
	$wp_customize->add_setting('copyright_details', array(
		'default' => '&copy Copyrights 2015 <a target="_blank" href="#">PT. Ghaly Roelies Indonesia</a> Allright reserved',
	));
	$wp_customize->add_control($wp_customize,'copyright_details', array(
		'label' => __('Copyright Information', 'npktheme'),
		'section' => 'npktheme_copyright',
		'settings' => 'copyright_details'
	));

}

add_action('customize_register', 'npktheme_customizer_register' );

// Hook into the 'after_setup_theme' action
add_action( 'after_setup_theme', 'custom_theme_features' );
?>