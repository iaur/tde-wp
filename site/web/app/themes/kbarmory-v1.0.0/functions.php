<?php
/* this where styles and script are pulled - mandatory*/

function kbarmory_resources() {
    
    
    wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'kbarmory_resources');

function kbarmory_setup() {
    
    // WP Navigation Panes Registration
    
    register_nav_menus(array(
        'primary'   =>  __( 'Primary Menu'),
        'footer'    =>  __( 'Footer Menu'),
    ));

    //Add widget support
    function ourWidgetsInit() {
        register_sidebar( array(
            'name' => 'Sidebar',
            'id' => 'sidebar1',
            'before_widget' => '<div class="widget-item">',
            'after_widget' =>'</div>',
            'before_title' =>'<h4 class="widget-title">',
            'after_title' =>'</h4>'
        ));
        register_sidebar( array(
            'name' => 'Footer Area 1',
            'id' => 'footer1',
            'before_widget' => '<div class="footer-widget-item">',
            'after_widget' =>'</div>',
            'before_title' =>'<h4 class="footer-widget-title">',
            'after_title' =>'</h4>'
        ));
        register_sidebar( array(
            'name' => 'Footer Area 2',
            'id' => 'footer2',
            'before_widget' => '<div class="footer-widget-item">',
            'after_widget' =>'</div>',
            'before_title' =>'<h4 class="footer-widget-title">',
            'after_title' =>'</h4>'
        ));
        
        register_sidebar( array(
            'name' => 'Footer Area 3',
            'id' => 'footer3',
            'before_widget' => '<div class="footer-widget-item">',
            'after_widget' =>'</div>',
            'before_title' =>'<h4 class="footer-widget-title">',
            'after_title' =>'</h4>'
        ));
    }
    
    add_action('widgets_init','ourWidgetsInit');
}
add_action('after_setup_theme', 'kbarmory_setup');

/* rce function */
// Archive's readmore for content excerpt
function custom_excerpt_length() {
    return 25;
}
add_filter('excerpt_length', 'custom_excerpt_length');

// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
    global $post;
    return '<a class="moretag" href="'. get_permalink($post->ID) . '"> ..more</a>';
}
add_filter('excerpt_more', 'new_excerpt_more'); 

