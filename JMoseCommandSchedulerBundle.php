<?php

namespace JMose\CommandSchedulerBundle;

use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class JMoseCommandSchedulerBundle extends Bundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        $class = $this->getContainerExtensionClass();

        return new $class();
    }
}
