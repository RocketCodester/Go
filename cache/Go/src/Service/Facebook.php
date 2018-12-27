<?php
// src/Service/Facebook.php
namespace Stark\Service;

use Stark\Annotation\Custom;

class Facebook__AopProxied
{
    /**
     * @Custom
     */
    public function doStuff()
    {
        echo "Facebook stuff!";
    }
}include_once AOP_CACHE_DIR . '/_proxies/Go\\src\\Service\\Facebook.php';

