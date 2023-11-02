<?php

declare(strict_types=1);

namespace LaminasTest\Di\TestAsset\CircularClasses;

class C
{
    /**
     * @psalm-suppress PossiblyUnusedParam
     */
    public function __construct(D $d)
    {
    }
}
