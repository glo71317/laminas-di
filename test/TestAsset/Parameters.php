<?php

declare(strict_types=1);

namespace LaminasTest\Di\TestAsset;

class Parameters
{
    /**
     * @param mixed  $a
     * @param string $c
     * @psalm-suppress PossiblyUnusedParam
     */
    public function general($a, B $b, $c = 'something')
    {
    }

    /**
     * @psalm-suppress PossiblyUnusedParam
     */
    public function typehintRequired(A $foo)
    {
    }

    /**
     * @psalm-suppress PossiblyUnusedParam
     * @param mixed $bar
     */
    public function typelessRequired($bar)
    {
    }

    /**
     * @psalm-suppress PossiblyUnusedParam
     */
    public function typehintOptional(?A $fooOpt = null)
    {
    }

    /**
     * @psalm-suppress PossiblyUnusedParam
     * @param bool $flag
     */
    public function typelessOptional($flag = false)
    {
    }
}
