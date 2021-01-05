<?php

declare(strict_types=1);

namespace Realforce\Finance\Traits;

trait TaxAgeRate
{
    public function checkAgeRate(): void
    {
        if ($this->getPerson()->getAge() > 50) {
            $this->salary->setAmount($this->salary->getAmount() + ($this->salary->getAmount() * 0.07));
        }
    }
}
