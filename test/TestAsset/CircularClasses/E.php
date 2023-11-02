<?php

declare(strict_types=1);

namespace LaminasTest\Di\TestAsset\CircularClasses;

class E
{
    /**
     * @psalm-suppress PossiblyUnusedParam
     */
    public function __construct(C $c)
    {
    }
}
