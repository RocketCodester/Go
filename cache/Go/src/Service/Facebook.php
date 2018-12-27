<?php
// src/Service/Facebook.php
namespace Stark\Service;

use Stark\Annotation\Custom;

/**
 * class Facebook__AopProxied
 * @package Stark\Service
 */
class Facebook__AopProxied
{
    /**
     * @var int
     */
    protected $amount = 0;

    /**
     * @Custom
     */
    public function doStuff()
    {
        echo "Facebook stuff!";
    }

    /**
     * @param int $amount
     */
    public function depositMoney(int $amount)
    {
        $this->amount += $amount;
    }

    /**
     * @param int $amount
     */
    public function withdrawMoney(int $amount)
    {
        $this->amount -= $amount;
    }
}include_once AOP_CACHE_DIR . '/_proxies/Go\\src\\Service\\Facebook.php';

