<?php

declare(strict_types=1);

namespace Realforce\Finance\Base;

use Realforce\Finance\Calculator;
use Realforce\Finance\Interfaces\IRate;

abstract class Rate implements IRate
{
    abstract public function calc(Calculator $calculator): float;
}
