<?php

declare(strict_types=1);

namespace Realforce\Finance\Interfaces;

use Realforce\Finance\Adult;
use Realforce\Finance\Salary;

/**
 * Interface IRate
 * @package Realforce\Finance\Interfaces
 */
interface IRate
{
    public function calc(Adult $person, Salary $salary): float;
}
