<?php
// src/Service/Facebook.php
namespace Stark\Service;

use Stark\Annotation\Custom;

class Facebook
{
    /**
     * @Custom
     */
    public function doStuff()
    {
        echo "Facebook stuff!";
    }
}