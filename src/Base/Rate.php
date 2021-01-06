<?php

declare(strict_types=1);

namespace Realforce\Finance\Base;

use Realforce\Finance\Calculation;
use Realforce\Finance\Interfaces\IRate;

/**
 * Class Rate
 * @package Realforce\Finance\Base
 */
abstract class Rate implements IRate
{
    abstract public function calc(Calculation $calculator): float;
}
