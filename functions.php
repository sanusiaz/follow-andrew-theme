<?php
    define('STYLE_VERSION', filemtime(get_stylesheet_directory() . '/style.css'));

    function follow_andrew_theme_support()
    {
        add_theme_support('html5', [
            'search_form',
            'contact_form',
            'comment_list',
            'gallery',
            'script',
            'style',
            'caption'
        ]);
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('align-wide');
        add_theme_support( 'wp-block-styles' );

        add_theme_support( 'custom-logo', array(
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => array( 'site-title', 'site-description' ),
            'unlink-homepage-logo' => true,
        ) );

        add_theme_support( 'automatic-feed-links' );
        add_editor_style();

    }

    add_action("after_setup_theme", 'follow_andrew_theme_support' );

    function follow_andrew_register_styles()
    {
        wp_enqueue_style('bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", [], '4.4.1', 'all');

        wp_enqueue_style('main-style', get_stylesheet_directory().'/style.css', ['bootstrap'], STYLE_VERSION, 'all');

        // Theme additional styling
        wp_enqueue_style('theme-style', get_stylesheet_directory().'/assets/css/style.css', ['bootstrap'], STYLE_VERSION, 'all');

        wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', ['bootstrap'], '5.13.0', 'all');
    }


    function follow_andrew_register_scripts()
    {
        wp_enqueue_script('follow-andrew-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', [], '3.4.1', true);

        wp_enqueue_script('follow-andrew-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', ['follow-andrew-jquery'], '1.16.0', true);

        wp_enqueue_script('follow-andrew-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', ['follow-andrew-jquery'], '4.4.1', true);

        wp_enqueue_script('follow-andrew-main-js', get_template_directory() . '/assets/js/main.js', ['follow-andrew-jquery'], STYLE_VERSION, true);
    } 

    add_action('wp_enqueue_scripts', 'follow_andrew_register_styles' );
    add_action('wp_enqueue_scripts', 'follow_andrew_register_scripts' );
?>