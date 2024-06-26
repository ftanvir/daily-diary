<?php

/**
 * daily-diary Theme Assets
 * 
 * @package daily-diary
 */

namespace daily_diary\inc;

use daily_diary\inc\traits\Singleton;

class Assets{
    use Singleton;

    protected function __construct()
    {
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        /**
         * Actions
         */
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }


    public function register_styles() {

        // echo "Hello from register_styles() method<br>";
        //Register Styles
        wp_register_style('bootstrap-css', DAILY_DIARY_BUILD_LIB_URI . '/css/bootstrap.min.css', [], false, 'all');
        

        //Enqueue Styles
        wp_enqueue_style('bootstrap-css');

    }

    public function register_scripts() {
        //Register Scripts
        wp_register_script('bootstrap-js', DAILY_DIARY_BUILD_LIB_URI . '/js/bootstrap.min.js', ['jquery'], false, true);

        //Enqueue Scripts

        wp_enqueue_script('bootstrap-js');
    }
}

