<?php

declare(strict_types=1);

namespace LaminasTest\Di\TestAsset;

class ClassDefinitionRedundantUaSortTestDependency
{
    /**
     * @psalm-suppress PossiblyUnusedParam
     * @param mixed $third
     */
    public function __construct(
        string $first,
        int $second,
        $third
    ) {
    }
}
