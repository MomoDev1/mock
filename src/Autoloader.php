<?php


class Autoloader
{
    static function register()
    {
        spl_autoload_register([__CLASS__, 'autoload']);
    }

    static function autoload(string $class)
    {
        $class = str_replace('App\\', 'src/', $class);
        $class = str_replace('\\', '/', $class);
        require_once $class . '.php';
    }
}