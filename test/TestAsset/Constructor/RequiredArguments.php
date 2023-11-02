<?php

declare(strict_types=1);

namespace LaminasTest\Di\TestAsset\Constructor;

use ArrayAccess;

class RequiredArguments
{
    /**
     * @psalm-suppress PossiblyUnusedParam
     * @param mixed $anyDep
     */
    public function __construct(NoConstructor $objectDep, ArrayAccess $internalClassDep, $anyDep)
    {
    }
}
