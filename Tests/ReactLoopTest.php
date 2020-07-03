<?php

declare(strict_types=1);

namespace Morbo\React\Redis;

use Morbo\React\Loop\DependencyInjection\ReactLoopExtension;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class ReactLoopTest extends TestCase
{
    public function testDefault()
    {
        $container = new ContainerBuilder();
        $loader = new ReactLoopExtension();
        $loader->load([[]], $container);

        $this->assertTrue($container->hasDefinition('react.loop'), 'React loop extension is loaded');
    }
}