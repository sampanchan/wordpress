<?php


include ('includes/post-type-case_study.php');
function mft_theme_setup(){
    register_nav_menus(
        array(
            'primary' => 'Primary Menu',
            'footer' => __('Footer Menu', 'my-first-them')
        )
    );

    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'theme_name' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action('after_setup_theme', 'mft_theme_setup');


function mft_load_scripts(){
    wp_enqueue_style('mft-styles2', get_template_directory_uri() . '/style2.css', array('mft-styles'));
    wp_enqueue_style('mft-styles', get_template_directory_uri() . '/style.css');
    


    wp_enqueue_script('mft-script', get_template_directory_uri() . '/main.js', null, null, true);
}


add_action('wp_enqueue_scripts', 'mft_load_scripts');