<?php

require_once('wp_bootstrap_navwalker.php');

//THEME SUPPORT
//==============================
function business_theme_setup(){

    //REGISTER MENU
    //==============================
    register_nav_menus(array(
        'primary'   =>  'Primary Menu'
    ));

    //LOGO SUPPORT
    //===============================
    add_theme_support('custom-logo');

    //THUMBNAIL SUPPORT
    //===============================
    add_theme_support('post-thumbnails');
}

//FIRES THEME SUPPORT FUNCTIONS
//======================================
add_action('after_setup_theme', 'business_theme_setup');

//ADD CUSTOMIZER FUNCTIONS/FILES
require get_template_directory().'/includes/customizer.php';

//WIDGET LOCATIONS
//========================================
function init_widgets($id){
    
    register_sidebar([ //use 'register_sidebar even if it isn't an actual sidebar
        'name'  =>  'Content Region 1',
        'id'    =>  'content-region-1',
        'before_widget' =>  '<section class="row content-region-1 pt50 pb40">
                                <div class="container">
                                <div class="col-md-12">',
        'after_widget' =>       '</div>
                                </div>
                            </section>',
        'before_title' =>  '<h1>',
        'after_title' =>  '</h1>',
    ]);

    register_sidebar([ //use 'register_sidebar even if it isn't an actual sidebar
        'name'  =>  'Content Region 2',
        'id'    =>  'content-region-2',
        'before_widget' =>  '<section class="row content-region-2 pt40 pb40">
                                <div class="container">',
        'after_widget' =>   '</div>
                            </section>',
        'before_title' =>  '<h1>',
        'after_title' =>  '</h1>',
    ]);

    register_sidebar([ //use 'register_sidebar even if it isn't an actual sidebar
        'name'  =>  'Footer 1',
        'id'    =>  'footer-1',
        'before_widget' =>  '',
        'after_widget' =>   '',
        'before_title' =>  '<h4>',
        'after_title' =>  '</h4>',
    ]);

    register_sidebar([ //use 'register_sidebar even if it isn't an actual sidebar
        'name'  =>  'Footer 2',
        'id'    =>  'footer-2',
        'before_widget' =>  '',
        'after_widget' =>   '',
        'before_title' =>  '<h4>',
        'after_title' =>  '</h4>',
    ]);

    register_sidebar([ //use 'register_sidebar even if it isn't an actual sidebar
        'name'  =>  'Footer 3',
        'id'    =>  'footer-3',
        'before_widget' =>  '',
        'after_widget' =>   '',
        'before_title' =>  '<h4>',
        'after_title' =>  '</h4>',
    ]);

    register_sidebar([ //use 'register_sidebar even if it isn't an actual sidebar
        'name'  =>  'Sidebar',
        'id'    =>  'sidebar',
        'before_widget' =>  '<div class="panel panel-default sidebar-widget',
        'after_widget' =>   '</div></div>',
        'before_title' =>  '<div class="panel-heading"><h3 class="panel-title">',
        'after_title' =>  '</h3></div><div class="panel-body">'
    ]);
}

add_action('widgets_init', 'init_widgets');