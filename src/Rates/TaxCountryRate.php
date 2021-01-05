<?php

declare(strict_types=1);

namespace Realforce\Finance\Rates;

use Realforce\Finance\Base\Rate;
use Realforce\Finance\Calculator;
use Realforce\Finance\Traits\TaxAgeRate;
use Realforce\Finance\Traits\TaxChildrenRate;

class TaxCountryRate extends Rate
{
    use TaxAgeRate;
    use TaxChildrenRate;

    private float $tax_rate = 0.2;
    /**
     * @var Calculator
     */
    private Calculator $calculator;

    public function getTaxRate(): float
    {
        return $this->tax_rate;
    }

    public function setTaxRate(float $tax_rate): self
    {
        $this->tax_rate = $tax_rate;
        return $this;
    }

    public function calc(Calculator $calculator): float
    {
        $this->calculator = $calculator;

        $this->checkAgeRate();
        $this->checkChildrenRate();

        return $this->calculator->getSalary()->getAmount() * $this->getTaxRate();
    }
}
