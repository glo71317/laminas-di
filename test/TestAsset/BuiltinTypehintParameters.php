<?php

declare(strict_types=1);

namespace LaminasTest\Di\TestAsset;

class BuiltinTypehintParameters
{
    /**
     * @psalm-suppress PossiblyUnusedParam
     */
    public function callableType(callable $p)
    {
    }

    /**
     * @psalm-suppress PossiblyUnusedParam
     */
    public function arrayType(array $r)
    {
    }
}
