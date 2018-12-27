<?php
// src/AOP/Aspect/Monitor.php
namespace Stark\AOP\Aspect;

use Go\Aop\Aspect;
use Go\Aop\Intercept\{FieldAccess, MethodInvocation};
use Go\Lang\Annotation\{After, Before, Around, Pointcut};

/**
 * Monitor aspect
 */
class Monitor implements Aspect
{
    /**
     * Method that will be called before real method
     *
     * @param MethodInvocation $invocation Invocation
     * @Before("@annotation(Stark\Annotation\Custom)")
     * @return void
     */
    public function beforeMethodExecution(MethodInvocation $invocation): void
    {
        $obj = $invocation->getThis();
        echo 'Calling Before Interceptor for method: ',
        is_object($obj) ? get_class($obj) : $obj,
        $invocation->getMethod()->isStatic() ? '::' : '->',
        $invocation->getMethod()->getName(),
        '()',
        "<br>\n";
    }
}
