<?php
/**
 * Autoloader for the theme
 * @package daily-diary
 */

namespace daily_diary\inc\helpers;

/**
 * Autoloader function
 * @param string $resource Source namespace
 * @return void
 */

function autoloader($resource = '') {

    $resource_path = false;

    $namespace_root = 'daily_diary\\';
    $resource = trim($resource, '\\');

    if (empty($resource) || strpos($resource, '\\') === false || strpos($resource, $namespace_root) !== 0) {
        return;
    }

    $resource = str_replace($namespace_root, '', $resource);

    $path = explode(
        '\\',
        str_replace('_', '-', strtolower($resource))
    );

    if (empty($path[0]) || empty($path[1])) {
        return;
    }

    $directory = '';
    $file_name = '';

    if ('inc' === $path[0]) {
        switch ($path[1]) {
            case 'traits':
                $directory = 'traits';
                $file_name = sprintf('trait-%s', trim(strtolower($path[2])));
                break;

            case 'widgets':
            case 'blocks':
                if (!empty($path[2])) {
                    $directory = $path[1];
                    $file_name = sprintf('%s-class', trim(strtolower($path[2])));
                } else {
                    $directory = 'inc';
                    $file_name = sprintf('class-%s', trim(strtolower($path[1])));
                }
                break;

            default:
                $directory = 'inc';
                $file_name = sprintf('class-%s', trim(strtolower($path[1])));
                break;
        }
    }

    $resource_path = trailingslashit(
        get_template_directory() . "/inc/{$directory}/{$file_name}.php"
    );

    if (!empty($resource_path) && file_exists($resource_path)) {

        require_once $resource_path;
    }

}

spl_autoload_register('daily_diary\inc\helpers\autoloader');

