<?php

use Phalcon\Loader;

$loader = new Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerNamespaces([
    'Test\Controllers' => $config->application->controllersDir,
    'Test\Models'      => $config->application->modelsDir,
    'Test\Forms'       => $config->application->formsDir,
    'Test\Library'             => $config->application->libraryDir
]);




$loader->registerClasses([
    'Services' => APP_PATH . 'app/Services.php'
]);
$loader->register();


// Use composer autoloader to load vendor classes
require_once BASE_PATH . '/vendor/autoload.php';
