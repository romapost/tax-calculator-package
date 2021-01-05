<?php

declare(strict_types=1);

namespace Realforce\Finance\Interfaces;

use Realforce\Finance\Calculator;

interface IRate
{
    public function calc(Calculator $calculator): float;
}
