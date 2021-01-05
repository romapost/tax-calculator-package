<?php

declare(strict_types=1);

namespace Realforce\Finance\Traits;

/**
 * Trait TaxAgeRate
 * @package Realforce\Finance\Traits
 */
trait TaxAgeRate
{
    public function checkAgeRate(): void
    {
        if ($this->calculator->getPerson()->getAge() > 50) {
            $this->calculator->getSalary()->setAmount($this->calculator->getSalary()->getAmount() + ( $this->calculator->getSalary()->getAmount() * 0.07));
        }
    }
}
