<?php

declare(strict_types=1);

namespace Realforce\Finance\Interfaces;

use Realforce\Finance\Base\Person;
use Realforce\Finance\Salary;

/**
 * Interface IRate
 * @package Realforce\Finance\Interfaces
 */
interface IRate
{
    public function calc(Person $person, Salary $salary): float;
}
