<?php

    /**
     * Theme Functions
     * 
     * @package Andrew
     */

    if ( !defined('FOLLOW_ANDREW_STYLE_VERSION') ) {
        define('FOLLOW_ANDREW_STYLE_VERSION', filemtime(get_stylesheet_directory() . '/style.css'));
    }

    if ( !defined('FOLLOW_ANDREW_DIR_PATH') )
    {
        define('FOLLOW_ANDREW_DIR_PATH', untrailingslashit( get_template_directory() ));
    }

    if ( !defined('FOLLOW_ANDREW_DIR_PATH_URI') )
    {
        define('FOLLOW_ANDREW_DIR_PATH_URI', untrailingslashit( get_template_directory() ));
    }


    require_once FOLLOW_ANDREW_DIR_PATH . '/inc/helpers/autoloader.php';

    function follow_andrew_get_theme_instance() 
    {
        // load the main follow andrew class
        \ANDREW_THEME\Inc\ANDREW_THEME::get_instance();
    }

    follow_andrew_get_theme_instance();
    
?>