<?php

declare(strict_types=1);

namespace Morbo\React\Loop;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

class ReactLoopTest extends KernelTestCase
{
    public function testDefault()
    {
        self::bootKernel();
        $container = self::$kernel->getContainer();

        $this->assertTrue($container->has('react.loop'), 'React loop extension is loaded');
    }
}

class TestingKernel extends Kernel
{
    public function __construct()
    {
        parent::__construct('test', true);
    }

    public function registerBundles()
    {
        return [
            new ReactLoopBundle(),
        ];
    }

    public function getCacheDir()
    {
        return __DIR__.'/cache/'.spl_object_hash($this);
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
    }
}