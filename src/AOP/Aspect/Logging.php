<?php
// src/AOP/Aspect/Logging.php
namespace Stark\AOP\Aspect;

use Go\Aop\Aspect;
use Go\Aop\Intercept\FieldAccess;
use Go\Aop\Intercept\MethodInvocation;
use Go\Lang\Annotation\After;
use Go\Lang\Annotation\Before;
use Go\Lang\Annotation\Around;
use Go\Lang\Annotation\Pointcut;
use Monolog\Logger;

/**
 * Monitor aspect
 */
class Logging implements Aspect
{
    /**
     * @var Logger
     */
    private $logger;
    /**
     * Method that will be called before real method
     *
     * @param MethodInvocation $invocation Invocation
     * @Before("execution(public Stark\Service\Facebook->*(*))")
     */
    public function beforeMethodExecution(MethodInvocation $invocation)
    {
        $logger = new Logger('my_app');
        $logger->info("Executing " . $invocation->getMethod()->name, $invocation->getArguments());
    }
}
