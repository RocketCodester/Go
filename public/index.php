<?php
// public/index.php
include __DIR__ . '/../vendor/autoload.php'; // use composer's autoloader

// Initialize an application aspect container
$applicationAspectKernel = \Stark\AOP\Kernel::getInstance();
$applicationAspectKernel->init([
    'debug' => true, // use 'false' for production mode
    // Cache directory
    'cacheDir' => __DIR__ . '/../cache'
]);
$fb = new \Stark\Service\Facebook();
$fb->doStuff();