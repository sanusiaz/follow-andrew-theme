<?php 
    /**
     * Follow Andrew Base Class
     * 
     * @package Follow_Andrew
     */
    namespace ANDREW_THEME\Inc;
    use ANDREW_THEME\Inc\Traits\Singleton;

    class ANDREW_THEME  {
        use Singleton;

        public function __construct()
        {
            Assets::get_instance();
            Support::get_instance();
            Menus::get_instance();
        }
    }

?>