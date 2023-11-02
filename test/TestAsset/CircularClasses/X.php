<?php

// phpcs:disable

declare(strict_types=1);

namespace LaminasTest\Di\TestAsset\CircularClasses;

class X
{
    /**
     * @psalm-suppress PossiblyUnusedParam
     */
    // @codingStandardsIgnoreStart
    public function __construct(X $x)
    {
    }
}
