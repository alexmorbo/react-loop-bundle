<?php

declare(strict_types=1);

namespace Morbo\React\Loop\Service;

use React\EventLoop\Factory;
use React\EventLoop\LoopInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class Loop
{
    protected ContainerInterface $container;

    protected LoopInterface $loop;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->loop = Factory::create();
    }

    public function getLoop(): LoopInterface
    {
        return $this->loop;
    }
}