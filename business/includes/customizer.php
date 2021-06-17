<?php
//CUSTOMIZING THE CUSTOMIZER API
//===================================
function business_customize_register($wp_customize){

    //CREATE A BANNER SECTION
    //=======================
    $wp_customize->add_section('banner',[
        'title' =>  __('Banner', 'business'),
        'description'   =>  sprintf(__('Options for homepage banner'), 'business'),
        'priority'  =>  130
    ]);

    //HEADING SETTING
    //======================
    $wp_customize->add_setting('banner_heading', [
        'default'   =>  _x('Banner Heading', 'business'),
        'type'      =>  'theme_mod'
    ]);

    //HEADING CONTROL
    //=======================
    $wp_customize->add_control('banner_heading', [
        'label'   =>  __('Heading', 'business'),
        'section'      =>  'banner',
        'priority'      =>  20
    ]);

    //TEXT SETTING
    //======================
    $wp_customize->add_setting('banner_text', [
        'default'   =>  _x('Welcome to the WordPress Business Theme.', 'business'),
        'type'      =>  'theme_mod'
    ]);

    //TEXT CONTROL
    //=======================
    $wp_customize->add_control('banner_text', [
        'label'   =>  __('Text', 'business'),
        'section'      =>  'banner',
        'priority'      =>  20
    ]);

     //BUTTON SETTING
    //======================
    $wp_customize->add_setting('banner_btn_text', [
        'default'   =>  _x('Sign Up', 'business'),
        'type'      =>  'theme_mod'
    ]);

    //BUTTON CONTROL
    //=======================
    $wp_customize->add_control('banner_btn_text', [
        'label'   =>  __('Button Text', 'business'),
        'section'      =>  'banner',
        'priority'      =>  20
    ]);

    //BUTTON URL SETTING
    //======================
    $wp_customize->add_setting('banner_btn_url', [
        'default'   =>  _x('https://www.google.com', 'business'),
        'type'      =>  'theme_mod'
    ]);

    //BUTTON URL CONTROL
    //=======================
    $wp_customize->add_control('banner_btn_url', [
        'label'   =>  __('Button URL', 'business'),
        'section'      =>  'banner',
        'priority'      =>  20
    ]);

    //BACKGROUND IMAGE SETTING
    //======================
    $wp_customize->add_setting('banner_image', [
        'default'   =>  get_bloginfo('template_directory').'/img/banner.jpg',
        'type'      =>  'theme_mod'
    ]);

    //BACKGROUND IMAGE CONTROL
    //=======================
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_image', array(

        'label'     =>      __('Background Image', 'business'),
        'section'   =>      'banner',
        'settings'  =>      'banner_image'

    )));

    //BOXES SECTION
    //======================
    $wp_customize->add_section('boxes', array(
        'title' =>  __('Boxes', 'business'),
        'description'   =>  sprintf(__('Options for homepage boxes', 'business')),
        'priority'  =>  130
    ));

    //BOX 1 HEADING SETTING
    //===========================
    $wp_customize->add_setting('box1_heading',[
        'default'   =>  _x('Box 1 Heading', 'business'),
        'type'  =>  'theme_mod'
    ]);

    //BOX 1 HEADING CONTROL
    //=============================
    $wp_customize->add_control('box1_heading', [
        'label' =>  __('Box 1 Heading', 'business'),
        'section'   =>  'boxes',
        'priority'  =>  20
    ]);

    //BOX 1 TEXT SETTING
    //======================
    $wp_customize->add_setting('box1_text', array(
        'default'   =>  _x('This is some sample text', 'business'),
        'type'      =>  'theme_mod'
    ));

    //BOX 1 TEXT CONTROL
    //=======================
    $wp_customize->add_control('box1_text', [
        'label'   =>  __('Box 1 Text', 'business'),
        'section'      =>  'boxes',
        'priority'      =>  20
    ]);

    //BOX 1 ICON SETTING
    //========================
    $wp_customize->add_setting('box1_icon', array(
        'default'   =>  _x('bar-chart', 'business'),
        'type'  =>  'theme_mod'
    ));

    //BOX 1 ICON CONTROL
    //=======================
    $wp_customize->add_control('box1_icon', [
        'label'   =>  __('Box 1 Icon', 'business'),
        'section'      =>  'boxes',
        'priority'      =>  20
    ]);

     //BOX 2 HEADING SETTING
    //======================
    $wp_customize->add_setting('box_2', array(
        'default'   =>  _x('Box 2 Heading', 'business'),
        'type'      =>  'theme_mod'
    ));

    //BOX 2 HEADING CONTROL
    //=======================
    $wp_customize->add_control('box_2', [
        'label'   =>  __('Box 2 Heading', 'business'),
        'section'      =>  'boxes',
        'priority'      =>  20
    ]);

    //BOX 2 TEXT SETTING
    //======================
    $wp_customize->add_setting('box2_text', array(
        'default'   =>  _x('This is some sample text', 'business'),
        'type'      =>  'theme_mod'
    ));

    //BOX 2 TEXT CONTROL
    //=======================
    $wp_customize->add_control('box2_text', [
        'label'   =>  __('Box 2 Text', 'business'),
        'section'      =>  'boxes',
        'priority'      =>  20
    ]);

    //BOX 2 ICON SETTING
    //========================
    $wp_customize->add_setting('box2_icon', array(
        'default'   =>  _x('bar-chart', 'business'),
        'type'  =>  'theme_mod'
    ));

    //BOX 2 ICON CONTROL
    //=======================
    $wp_customize->add_control('box2_icon', [
        'label'   =>  __('Box 2 Icon', 'business'),
        'section'      =>  'boxes',
        'priority'      =>  20
    ]);

     //BOX 3 HEADING SETTING
    //======================
    $wp_customize->add_setting('box_3', array(
        'default'   =>  _x('Box 3 Heading', 'business'),
        'type'      =>  'theme_mod'
    ));

    //BOX 3 HEADING CONTROL
    //=======================
    $wp_customize->add_control('box_3', [
        'label'   =>  __('Box 3 Heading', 'business'),
        'section'      =>  'boxes',
        'priority'      =>  20
    ]);

    //BOX 3 TEXT SETTING
    //======================
    $wp_customize->add_setting('box3_text', array(
        'default'   =>  _x('This is some sample text', 'business'),
        'type'      =>  'theme_mod'
    ));

    //BOX 3 TEXT CONTROL
    //=======================
    $wp_customize->add_control('box3_text', [
        'label'   =>  __('Box 3 Text', 'business'),
        'section'      =>  'boxes',
        'priority'      =>  20
    ]);

    //BOX 3 ICON SETTING
    //========================
    $wp_customize->add_setting('box3_icon', array(
        'default'   =>  _x('bar-chart', 'business'),
        'type'  =>  'theme_mod'
    ));

    //BOX 3 ICON CONTROL
    //=======================
    $wp_customize->add_control('box3_icon', [
        'label'   =>  __('Box 3 Icon', 'business'),
        'section'      =>  'boxes',
        'priority'      =>  20
    ]);
}

add_action('customize_register', 'business_customize_register');