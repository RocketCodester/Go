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
     * @return void
     */
    public function doStuff()
    {
        return self::$__joinPoints['method:doStuff']->__invoke($this);
    }
    
    /**
     * @param int $amount
     * @return void
     */
    public function depositMoney($amount)
    {
        return self::$__joinPoints['method:depositMoney']->__invoke($this, array($amount));
    }
    
    /**
     * @param int $amount
     * @return void
     */
    public function withdrawMoney($amount)
    {
        return self::$__joinPoints['method:withdrawMoney']->__invoke($this, array($amount));
    }
    
}
\Go\Proxy\ClassProxy::injectJoinPoints('Stark\Service\Facebook',array (
  'method' => 
  array (
    'doStuff' => 
    array (
      0 => 'advisor.Stark\\AOP\\Aspect\\Monitor->beforeMethodExecution',
      1 => 'advisor.Stark\\AOP\\Aspect\\Logging->beforeMethodExecution',
    ),
    'depositMoney' => 
    array (
      0 => 'advisor.Stark\\AOP\\Aspect\\Logging->beforeMethodExecution',
    ),
    'withdrawMoney' => 
    array (
      0 => 'advisor.Stark\\AOP\\Aspect\\Logging->beforeMethodExecution',
    ),
  ),
));