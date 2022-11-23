<?php

    namespace ANDREW_THEME\Inc;
    use ANDREW_THEME\Inc\Traits\Singleton;

    class Menus 
    {
        use Singleton;
        

        public function __construct()
        {
            $this->setHooks();
        }

        public function setHooks()
        {
            add_action('init', [$this, 'register_andrew_menus']);
        }

        public function  register_andrew_menus()
        {
            $locations = array(
                'primary' => 'Desktop Sidebar Menu',
                'footer' => 'Footer Menu'
            );

            register_nav_menus($locations);
        }
    }