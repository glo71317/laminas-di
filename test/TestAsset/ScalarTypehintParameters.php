<?php

declare(strict_types=1);

namespace LaminasTest\Di\TestAsset;

class ScalarTypehintParameters
{
    /**
     * @psalm-suppress PossiblyUnusedParam
     */
    public function intType(int $p)
    {
    }

    /**
     * @psalm-suppress PossiblyUnusedParam
     */
    public function boolType(bool $p)
    {
    }

    /**
     * @psalm-suppress PossiblyUnusedParam
     */
    public function stringType(string $p)
    {
    }

    /**
     * @psalm-suppress PossiblyUnusedParam
     */
    public function floatType(float $p)
    {
    }
}
