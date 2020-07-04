<?php

declare(strict_types=1);

namespace Morbo\React\Loop\Tests;

use Morbo\React\Loop\Service\Loop;
use ReflectionClass;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ReactLoopTest extends KernelTestCase
{
    public function setUp(): void
    {
        self::bootKernel();
    }

    public function testDependencyInjection()
    {
        $this->assertTrue(self::$container->has('react.loop'), '"react.loop" is loaded');
        $this->assertTrue(self::$container->has(Loop::class), '"Loop::class" is loaded');
    }

    public function testTrait()
    {
        $this->assertTrue(method_exists(self::$container->get(Loop::class), 'getLoop'));
    }
}