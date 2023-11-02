<?php

declare(strict_types=1);

namespace LaminasTest\Di\TestAsset\Constructor;

class Php7
{
    /**
     * @psalm-suppress PossiblyUnusedParam
     */
    public function __construct(string $stringDep, int $numDep, callable $callbacDep)
    {
    }
}
