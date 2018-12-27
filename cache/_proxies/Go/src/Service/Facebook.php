<?php
namespace Stark\Service;

use Stark\Annotation\Custom as Custom;
/**
 * Class Facebook
 * @package Stark\Service
 */
class Facebook extends Facebook__AopProxied implements \Go\Aop\Proxy
{

    /**
     * Property was created automatically, do not change it manually
     */
    private static $__joinPoints = array();
    
    /**
     * @Custom
     * @return bool|null
     */
    public function doStuff(): ?bool
    {
        return self::$__joinPoints['method:doStuff']->__invoke($this);
    }

    /**
     * @param int $amount
     * @return bool|null
     */
    public function depositMoney(int $amount): ?bool
    {
        return self::$__joinPoints['method:depositMoney']->__invoke($this, array($amount));
    }

    /**
     * @param int $amount
     * @return bool|null
     */
    public function withdrawMoney(int $amount): ?bool
    {
        return self::$__joinPoints['method:withdrawMoney']->__invoke($this, array($amount));
    }
    
}
\Go\Proxy\ClassProxy::injectJoinPoints('Stark\Service\Facebook',array (
  'method' => 
  [
    'doStuff' => 
    [
      0 => 'advisor.Stark\\AOP\\Aspect\\Monitor->beforeMethodExecution',
      1 => 'advisor.Stark\\AOP\\Aspect\\Logging->beforeMethodExecution',
    ],
    'depositMoney' => 
    [
      0 => 'advisor.Stark\\AOP\\Aspect\\Logging->beforeMethodExecution',
    ],
    'withdrawMoney' => 
    [
      0 => 'advisor.Stark\\AOP\\Aspect\\Logging->beforeMethodExecution',
    ],
  ],
));
