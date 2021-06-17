<?php
function simple_theme_setup(){
    //Featured image support
    add_theme_support( 'post-thumbnails' ); 

    //MENU SUPPORT
    //==================================
    register_nav_menus(array(
        'primary' => _('Primary Menu')
    ));
}

add_action('after_setup_theme', 'simple_theme_setup');

//Excerpt length
function set_excerpt_length(){
    return 25;
}

add_filter('excerpt_length', 'set_excerpt_length');

//Widget Locations
function init_widgets($id){
    register_sidebar([
        'name'  => 'Sidebar',
        'id'    => 'sidebar',
        'before_widget' => '<div class="side-widget">',
        'after_widget'  => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ]);
}

add_action('widgets_init', 'init_widgets');

?>