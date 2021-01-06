<?php

declare(strict_types=1);

namespace Realforce\Finance\Interfaces;

use Realforce\Finance\Calculation;

/**
 * Interface IRate
 * @package Realforce\Finance\Interfaces
 */
interface IRate
{
    public function calc(Calculation $calculator): float;
}
