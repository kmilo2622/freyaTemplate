<?php

function load_theme() {
    wp_register_style('theme_style', get_stylesheet_uri(), '', null, 'all');
    wp_register_style('main_style',get_template_directory_uri() .'/second.css', array(), null, 'all' );
    wp_register_script( 'first', get_template_directory_uri() . '/scripts/first.js' );
    // wp_register_style('font_awesome',get_template_directory_uri() .'/styles/font-awesome.min.css', array(), null, 'all' );
    // wp_register_style('color_style',get_template_directory_uri() .'/styles/color.css', array(), null, 'all' );
    // wp_register_style('bootstrap_style',get_template_directory_uri() .'/styles/bootstrap.css', array(), null, 'all' );
    // wp_register_style('fonts_styles',get_template_directory_uri() .'/styles/fonts.css', array(), null, 'all' );
    // wp_register_style('flaticon_styles',get_template_directory_uri() .'/styles/flaticon.css', array(), null, 'all' );
    // wp_register_style('animate_styles',get_template_directory_uri() .'/styles/animate.css', array(), null, 'all' );

    wp_enqueue_style('theme_style');
    wp_enqueue_style('main_style');
    wp_enqueue_script('first');
    // wp_enqueue_style('font_awesome');
    // wp_enqueue_style('color_style');
    // wp_enqueue_style('bootstrap_style');
    // wp_enqueue_style('fonts_styles');
    // wp_enqueue_style('flaticon_styles');
    // wp_enqueue_style('animate_styles');
}

function register_sidebar_freya() {
    register_sidebar(array(
        'name' => __('Sidebar Principal', 'freya'),
        //Si Quisiera que se mostrara en pantalla sería _e('Palabra',  'domain')
        'id' => 'main_sidebar',
        'description' => __('Este es el Sidebar Principal para los Widgets', 'freya'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="property_view_h">',
        'after_title' => '</h3>',
    ));
}
/**/
add_action('wp_enqueue_scripts', 'load_theme');
add_action('init', 'register_sidebar_freya');
