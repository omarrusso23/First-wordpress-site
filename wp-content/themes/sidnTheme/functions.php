<?php

function load_css()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.scss');
}

add_action('wp_enqueue_scripts', 'load_css');

function load_js()
{
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'load_js');


function add_Main_Nav()
{
    register_nav_menu('header-menu', __('Header Menu'));
}

add_action('init', 'add_Main_Nav');

function add_widget_support()
{
    register_sidebar(
        array(
            'name' => 'Sidebar',
            'id' => 'sidebar',
            'before_widget' => '<div>',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
        ));
}

add_action('widgets_init', 'add_widget_support');