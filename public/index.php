<?php
if (PHP_SAPI == 'cli-server') {
    // To help the built-in PHP dev server, check if the request was actually for
    // something which should probably be served as a static file
    $file = __DIR__ . $_SERVER['REQUEST_URI'];
    if (is_file($file)) {
        return false;
    }
}

$classLoader = __DIR__ . '/../vendor/autoload.php';

session_start();

// Instantiate the app
$settings = require __DIR__ . '/../src/settings.php';
$app = new \Slim\App($settings);

$module = new \MartynBiz\Slim3Module\Module($classLoader, $app, [
    'autoload' => [ // <--- list of modules to autoload
        'hello',
    ],
    'modules_path' => '/path/to/modules',
]);

// Run app
$app->run();
