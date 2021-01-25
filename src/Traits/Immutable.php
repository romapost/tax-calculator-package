<?php

declare(strict_types=1);

namespace Realforce\Finance\Traits;

/**
 * Trait Immutable
 * @package Realforce\Finance\Traits
 */
trait Immutable
{
    private function __construct()
    {
    }

    public function __set($name, $value)
    {
        throw new \BadMethodCallException("Cannot add new property \$$name to instance of " . __CLASS__);
    }

    public function __clone()
    {
        throw new \BadMethodCallException("Cannot clone object of instance " . __CLASS__);
    }
}
