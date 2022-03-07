<?php

declare (strict_types=1);
namespace RectorPrefix20220307;

use Rector\Symfony\Rector\MethodCall\RedirectToRouteRector;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\Rector\Symfony\Rector\MethodCall\RedirectToRouteRector::class);
};
