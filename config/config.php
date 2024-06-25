<?php

define('ROOT_PATH', dirname(__DIR__));
define('BASEURL', 'http://localhost/personal/php-starter/web');

// DB
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'phpmvc');


spl_autoload_register(function ($class_name) {
    $file = ROOT_PATH . '/app/helpers/' . $class_name . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});
