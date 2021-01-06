<?php

declare(strict_types=1);

namespace Realforce\Finance\Traits;

use Mattiasgeniar\Percentage\Percentage;

/**
 * Trait TaxAgeRate
 * @package Realforce\Finance\Traits
 */
trait TaxAgeRate
{
    public function checkAgeRate(): void
    {
        if ($this->calculator->getPerson()->getAge() > 50) {
            $oldAmount = $this->calculator->getSalary()->getAmount();
            $newAmount = $oldAmount + Percentage::of(7, $oldAmount);
            $this->calculator->getSalary()->setAmount($newAmount);
        }
    }
}
