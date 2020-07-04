<?php

namespace Morbo\React\Loop\Service;

use React\EventLoop\LoopInterface;

trait LoopAwareTrait
{
    protected LoopInterface $loop;

    public function getLoop(): LoopInterface
    {
        return $this->loop;
    }
}