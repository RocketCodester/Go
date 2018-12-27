<?php

namespace PublicFolder;

use Stark\Service\Facebook;
use Stark\AOP\Kernel;

include __DIR__ . '/../vendor/autoload.php'; // use composer's autoloader

// Initialize an application aspect container
$applicationAspectKernel = Kernel::getInstance();
$applicationAspectKernel->init([
    'debug' => true, // use 'false' for production mode
    // Cache directory
    'cacheDir' => __DIR__ . '/../cache'
]);
$fb = new Facebook();
$fb->doStuff();
$fb->depositMoney(5);
$fb->withdrawMoney(2);
