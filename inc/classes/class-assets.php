<?php 
    /**
     * Assets Class
     * 
     * @package Follow_Andrew
    */
    namespace ANDREW_THEME\Inc;
    use ANDREW_THEME\Inc\Traits\Singleton;
    
    class Assets {
        use Singleton;

        public function __construct()
        {
            $this->setHooks();
        }

        public function setHooks()
        {
            add_action('wp_enqueue_scripts', [$this, 'load_classes'] );
            add_action('wp_enqueue_scripts', [$this, 'load_scripts'] );
        }

        public function load_classes()
        {
            wp_enqueue_style('bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", [], '', 'all');

            wp_enqueue_style('main-style', get_template_directory_uri().'/style.css', ['bootstrap'], FOLLOW_ANDREW_STYLE_VERSION, 'all');
    
            wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', ['bootstrap'], '', 'all');
        }

        public function load_scripts()
        {
            wp_enqueue_script('follow-andrew-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', [], '3.4.1', true);

            wp_enqueue_script('follow-andrew-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', ['follow-andrew-jquery'], '1.16.0', true);
    
            wp_enqueue_script('follow-andrew-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', ['follow-andrew-jquery'], '4.4.1', true);
    
            wp_enqueue_script('follow-andrew-main-js', get_template_directory_uri() . '/assets/js/main.js', ['follow-andrew-jquery'], FOLLOW_ANDREW_STYLE_VERSION, true);
        }
    }

?>