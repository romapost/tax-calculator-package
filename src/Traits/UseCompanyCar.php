<?php

declare(strict_types=1);

namespace Realforce\Finance\Traits;

trait UseCompanyCar
{
    public function checkUseCompanyCar(): void
    {
        if ($this->getPerson()->isUseCompanyCar() === true) {
            $oldAmount = $this->getSalary()->getAmount();
            $newAmount = $oldAmount - 500;
            $this->getSalary()->setAmount($newAmount);
        }
    }
}
