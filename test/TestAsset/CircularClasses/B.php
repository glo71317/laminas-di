<?php

declare(strict_types=1);

namespace LaminasTest\Di\TestAsset\CircularClasses;

class B
{
    /**
     * @psalm-suppress PossiblyUnusedParam
     */
    public function __construct(A $a)
    {
    }
}
