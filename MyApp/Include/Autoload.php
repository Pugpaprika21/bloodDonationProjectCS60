<?php

declare(strict_types=1);

namespace MyApp\Include;

// session_start();

class Autoloader
{
    public static $folder_name = '/bloodDonationProjectCS60/'; //<--- config root directory
    /**
     * @return void
     */
    public static function register(): void
    {
        spl_autoload_register(function (string $class_name): bool {
            $file = str_replace('\\', DIRECTORY_SEPARATOR, $class_name) . '.php';
            $root_path = $_SERVER['DOCUMENT_ROOT'] . self::$folder_name . $file;

            if (file_exists($root_path)) {
                include_once $root_path;
                return true;
            }
            return false;
        });
    }
}

// call autoload
Autoloader::register();