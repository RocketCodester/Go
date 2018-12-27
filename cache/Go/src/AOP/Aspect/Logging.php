<?php

namespace Stark\AOP\Aspect;

use Go\Aop\Aspect;
use Go\Aop\Intercept\{FieldAccess, MethodInvocation};
use Go\Lang\Annotation\{After, Before, Around, Pointcut};
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
     * @return void
     */
    public function beforeMethodExecution(MethodInvocation $invocation): void
    {
        $logger = new Logger('my_app');
        $logger->info("Executing " . $invocation->getMethod()->name, $invocation->getArguments());
    }
}
