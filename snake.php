<?php
/*
* Plugin Name:ascii_snake
* Description:A cool snake game with a shortcode
*/

define( 'SNAKE_PLUGIN_FILE', __FILE__ );
define( 'SNAKE_PLUGIN_NAME', 'ascii_snake');
define( 'SNAKE_PLUGIN_PATH', untrailingslashit( plugins_url(SNAKE_PLUGIN_NAME) ));
define( 'SNAKE_PLUGIN_URL', plugins_url(SNAKE_PLUGIN_NAME));

if(! class_exists('ascii_snake')){
    class snake {
        function __construct(){
            $this->init_hooks();
        }

        function init_hooks(){
            register_activation_hook(__FILE__,array("ascii_snake",'install_tables'));
            add_action('admin_menu', array($this, 'customer_menu_pages'));
            add_shortcode('snake', array($this, "snake"));
        }

        function customer_menu_pages(){
            add_menu_page( 'Snake', 'Snake', 'manage_options', 'snake', array($this, 'customer_admin_page'), 'dashicons-games', 0);
        }
        
        function snake(){
            wp_enqueue_script('snake_js',SNAKE_PLUGIN_PATH."/snake/script.js", ['jquery']);
            wp_enqueue_style('snake_css',SNAKE_PLUGIN_PATH."/snake/style.css");
            $snakehtml = $snakehtml = file_get_contents("https://owenpalmer.com/wp-content/plugins/ascii_snake/snakecontent.html");
            return $snakehtml;
        }

        function customer_admin_page(){

        }

    }
}
$GLOBALS['ascii_snake'] = new snake();
?>