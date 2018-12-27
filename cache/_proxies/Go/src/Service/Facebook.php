<?php
namespace Stark\Service;


class Facebook extends Facebook__AopProxied implements \Go\Aop\Proxy
{

    /**
     * Property was created automatically, do not change it manually
     */
    private static $__joinPoints = array();
    
    
    public function doStuff()
    {
        return self::$__joinPoints['method:doStuff']->__invoke($this);
    }
    
}
\Go\Proxy\ClassProxy::injectJoinPoints('Stark\Service\Facebook',array (
  'method' => 
  array (
    'doStuff' => 
    array (
      0 => 'advisor.Stark\\AOP\\Aspect\\Monitor->beforeMethodExecution',
    ),
  ),
));