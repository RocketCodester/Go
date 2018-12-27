<?php

namespace App;

use Go\Core\{AspectKernel, AspectContainer};
use Aspect\MonitorAspect;

/**
 * Application Aspect Kernel
 */
class ApplicationAspectKernel extends AspectKernel
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
        $container->registerAspect(new MonitorAspect());
    }
}
