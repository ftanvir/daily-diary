<?php
/**
 * Theme Functions.
 * 
 * @package daily-diary
 */


if ( ! defined( 'DAILY_DIARY_DIR_PATH' ) ) {
    define( 'DAILY_DIARY_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'DAILY_DIARY_DIR_URI' ) ) {
    define( 'DAILY_DIARY_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

if ( ! defined( 'DAILY_DIARY_BUILD_URI' ) ) {
    define( 'DAILY_DIARY_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build' );
}

if ( ! defined( 'DAILY_DIARY_BUILD_PATH' ) ) {
    define( 'DAILY_DIARY_BUILD_PATH', untrailingslashit( get_template_directory() ) . '/assets/build' );
}


if(!defined('DAILY_DIARY_BUILD_LIB_URI')){
    define('DAILY_DIARY_BUILD_LIB_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build/library');
}

require_once DAILY_DIARY_DIR_PATH . '/inc/helpers/autoloader.php';
// require_once DAILY_DIARY_DIR_PATH . '/inc/classes/class-daily-diary-theme.php';
//instanciate the daily_diary_theme class
function daily_diary_get_theme_instance() {
    daily_diary\inc\daily_diary::get_instance();
}

daily_diary_get_theme_instance();

