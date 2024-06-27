<?php
/**
 * 
 * Bootstraps the theme
 * 
 * @package daily-diary
 */

namespace daily_diary\inc;

use daily_diary\inc\traits\Singleton;


class daily_diary{
    use Singleton;

    protected function __construct()
    {
        //load class
        Assets::get_instance();



        $this->setup_hooks();
    }

    protected function setup_hooks() {
        /**
         * 
         * Actions
         * 
         */

    }

    
}




