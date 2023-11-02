<?php

declare(strict_types=1);

namespace LaminasTest\Di\TestAsset\CircularClasses;

class A
{
    /**
     * @psalm-suppress PossiblyUnusedParam
     */
    public function __construct(B $b)
    {
    }
}
