<?php

declare(strict_types=1);

namespace Morbo\React\Loop\Service;

use React\EventLoop\Factory;
use Symfony\Component\DependencyInjection\ContainerInterface;

class Loop
{
    use LoopAwareTrait;

    protected ContainerInterface $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->loop = Factory::create();
    }
}