<?php

namespace ANDREW_THEME\Inc;
use ANDREW_THEME\Inc\Traits\Singleton;


class Support
{
    use Singleton;

    public function __construct()
    {
        add_action("after_setup_theme", [$this, 'setHooks']);
    }


    public function setHooks()
    {
        $this->__html5();
        $this->__posts_N_Pages();
        $this->__customLogo();
    }

    protected function __customLogo()
    {
        add_theme_support( 'custom-logo', array(
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => array( 'site-title', 'site-description' ),
            'unlink-homepage-logo' => true,
        ) );

    }


    protected function __html5()
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

    }

    protected function __posts_N_Pages()
    {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('align-wide');
    }


    protected function __editors_N_Widgets()
    {
        add_theme_support( 'wp-block-styles' );
        add_theme_support( 'automatic-feed-links' );
        add_editor_style();
    }


}