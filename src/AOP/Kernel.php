<?php

namespace Stark\AOP;

use Go\Core\{AspectContainer, AspectKernel};
use Stark\AOP\Aspect\{Logging, Monitor};

class Kernel extends AspectKernel
{
    /**
     * Configure an AspectContainer with advisors, aspects and pointcuts
     *
     * @param AspectContainer $container
     *
     * @return void
     */
    protected function configureAop(AspectContainer $container): void
    {
        $container->registerAspect(new Monitor());
        $container->registerAspect(new Logging());
    }
}
