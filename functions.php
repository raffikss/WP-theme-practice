<?php
function wunder_hello_scripts() {
    wp_enqueue_style( 'wunder-hello-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'wunder_hello_scripts' );

function mytheme_register_menus() {
    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'mytheme' ),
        )
    );
}
add_action( 'after_setup_theme', 'mytheme_register_menus' );
function hero_slider(){
    get_template_part('hero_section');
}
function register_projects_cpt() {
    $labels = array(
        'name' => 'Projects',
        'singular_name' => 'Project',
        'menu_name' => 'Projects',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'projects'),
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_in_rest' => true,
    );

    register_post_type('projects', $args);
}
add_action('init', 'register_projects_cpt');

add_action('init', 'register_projects_cpt');

function add_project_url_meta_box() {
    add_meta_box(
        'project_url',
        'Project URL',
        'project_url_meta_box_html',
        'projects',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_project_url_meta_box');

function project_url_meta_box_html($post) {
    $value = get_post_meta($post->ID, '_project_url', true);
    echo '<input type="url" name="project_url" value="' . esc_attr($value) . '" style="width:100%" placeholder="https://example.com">';
}

function save_project_url_meta($post_id) {
    if (isset($_POST['project_url'])) {
        update_post_meta($post_id, '_project_url', esc_url($_POST['project_url']));
    }
}
add_action('save_post', 'save_project_url_meta');

if ( function_exists( 'wp_enqueue_block_template_skip_link' ) ) {
    add_action( 'wp_enqueue_scripts', 'wp_enqueue_block_template_skip_link', 0 );
}
