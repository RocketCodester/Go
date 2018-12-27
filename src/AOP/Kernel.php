<?php
// src/AOP/Kernel.php
namespace Stark\AOP;

use Go\Core\AspectKernel;
use Go\Core\AspectContainer;
use Stark\AOP\Aspect\Logging;
use Stark\AOP\Aspect\Monitor;

class Kernel extends AspectKernel
{
    /**
     * Configure an AspectContainer with advisors, aspects and pointcuts
     *
     * @param AspectContainer $container
     *
     * @return void
     */
    protected function configureAop(AspectContainer $container)
    {
        $container->registerAspect(new Monitor());
        $container->registerAspect(new Logging());
    }
}
