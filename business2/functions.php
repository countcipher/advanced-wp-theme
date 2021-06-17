<?php
require_once('wp_bootstrap_navwalker.php');

//Theme support
function business2_theme_setup(){
    //Logo Support
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'primary'   =>  __('Primary Menu')
    ));
}

add_action('after_setup_theme', 'business2_theme_setup');

//MODIFYING CUSTOMIZER

function business_customize_register($wp_customize){
    //ADD IN THE BANNER SECTION
    $wp_customize->add_section('banner', array(
		'title'	=> __('Banner', 'business'),
		'description'	=> sprintf(__('Options for homepage banner', 'business')),
		'priority'	=> 130
	));

	// Heading Setting
	$wp_customize->add_setting('banner_heading', array(
		'default'		=> _x('Banner Heading', 'business'),
		'type'			=> 'theme_mod'
	));

	// Heading Control
	$wp_customize->add_control('banner_heading', array(
		'label'			=> __('Heading', 'business'),
		'section'		=> 'banner',
		'priority'		=> 20
	));

    //TEXT SETTING
    $wp_customize->add_setting('banner_text', array(
        'default'   =>  _x('This is just some text', 'business2'), //'_x()' is a translate function
        'type'      =>  'theme_mod'
    ));

    //TEXT CONTROL
    $wp_customize->add_control('banner_text', array(
        'label'   =>  __('Text', 'business2'),
        'section'   =>  'banner',
        'priority'  =>  20
    ));

    //BUTTON TEXT SETTING
    $wp_customize->add_setting('banner_btn_text', array(
        'default'   =>  _x('Button Text', 'business2'), //'_x()' is a translate function
        'type'      =>  'theme_mod'
    ));

    //BUTTON TEXT CONTROL
    $wp_customize->add_control('banner_btn_text', array(
        'label'   =>  __('Button Text', 'business2'),
        'section'   =>  'banner',
        'priority'  =>  20
    ));

    //BUTTON URL SETTING
    $wp_customize->add_setting('banner_btn_url', array(
        'default'   =>  _x('https:www.cyberleviathan.com', 'business2'), //'_x()' is a translate function
        'type'      =>  'theme_mod'
    ));

    //BUTTON URL CONTROL
    $wp_customize->add_control('banner_btn_url', array(
        'label'   =>  __('Button URL', 'business2'),
        'section'   =>  'banner',
        'priority'  =>  20
    ));

    //BACKGROUND IMAGE SETTING
    $wp_customize->add_setting('banner_image', array(
        'default'   =>  get_bloginfo('template_directory').'/img/banner.jpg',
        'type'      =>  'theme_mod'
    ));

    //BACKGROUND IMAGE CONTROL
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_image', array(
        'label' =>  __('Background Image', 'business2'),
        'section'   =>  'banner',
        'settings'  =>  'banner_image'
    )));

    //=====================
    //MINE: ADD AN IMAGE
    //=====================

    //SECTION ON CUSTOMIZER
    $wp_customize->add_section('added_image', array(
        'title' =>  __('Added Image', 'business2'),
        'description'   =>  __('Added image goes here'),
        'priority'  =>  200
    ));

    //SETTING
    $wp_customize->add_setting('added_image', array(
        'default'   =>  get_bloginfo('template_directory').'/img/banner.jpg',
        'type'      =>  'theme_mod'
    ));

    //CONTROL
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'added_image', array(
        'label' =>  __('Added Image', 'business2'),
        'section'   =>  'added_image',
        'settings'  =>  'added_image'
    )));
}

add_action('customize_register', 'business_customize_register');

// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Tests', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Test', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Test CPT', 'text_domain' ),
		'name_admin_bar'        => __( 'Test CPT', 'text_domain' ),
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
	);
	$args = array(
		'label'                 => __( 'Test', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-image-filter',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
        //CHANGES EDITOR TO GUTENBERG VERSION
        // 'show_in_rest'          =>  true,
        // 'supports'              =>  array('editor')
	);
	register_post_type( 'test', $args );

}
add_action( 'init', 'custom_post_type', 0 );