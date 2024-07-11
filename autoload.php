<?php

class Autoloader
{
    public static function register(): void
    {
        spl_autoload_register(function ($class) {
            $file = str_replace('\\', DIRECTORY_SEPARATOR,  $class) . '.php';
            $file = str_replace('App', 'php', $file);
            
            if (file_exists($file)) {
                require $file;
                return true;
            }

            return false;
        });
    }
}

Autoloader::register();
