<?php

declare(strict_types=1);

namespace Realforce\Finance\Base;

use Realforce\Finance\Adult;
use Realforce\Finance\Interfaces\IRate;
use Realforce\Finance\Salary;

/**
 * Class Rate
 * @package Realforce\Finance\Base
 */
abstract class Rate implements IRate
{
    abstract public function calc(Adult $person, Salary $salary): float;
}
