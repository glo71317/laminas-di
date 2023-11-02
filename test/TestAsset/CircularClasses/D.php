<?php

declare(strict_types=1);

namespace LaminasTest\Di\TestAsset\CircularClasses;

class D
{
    /**
     * @psalm-suppress PossiblyUnusedParam
     */
    public function __construct(E $e)
    {
    }
}
