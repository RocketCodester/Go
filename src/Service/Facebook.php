<?php
// src/Service/Facebook.php
namespace Stark\Service;

use Stark\Annotation\Custom;

/**
 * Class Facebook
 * @package Stark\Service
 */
class Facebook
{
    /**
     * @var int
     */
    protected $amount = 0;

    /**
     * @Custom
     * @return void
     */
    public function doStuff()
    {
        echo "Facebook stuff!";
    }

    /**
     * @param int $amount
     * @return void
     */
    public function depositMoney($amount)
    {
        $this->amount += $amount;
    }

    /**
     * @param int $amount
     * @return void
     */
    public function withdrawMoney($amount)
    {
        $this->amount -= $amount;
    }
}