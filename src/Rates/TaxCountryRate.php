<?php

declare(strict_types=1);

namespace Realforce\Finance\Rates;

use Mattiasgeniar\Percentage\Percentage;
use Realforce\Finance\Base\Rate;
use Realforce\Finance\Calculation;
use Realforce\Finance\Traits\TaxAgeRate;
use Realforce\Finance\Traits\TaxChildrenRate;

/**
 * Class TaxCountryRate
 * @package Realforce\Finance\Rates
 */
class TaxCountryRate extends Rate
{
    use TaxAgeRate;
    use TaxChildrenRate;

    /**
     * Country tax rate in %
     * @var float
     */
    private float $tax_rate = 20;
    /**
     * @var Calculation
     */
    private Calculation $calculator;

    public function getTaxRate(): float
    {
        return $this->tax_rate;
    }

    public function setTaxRate(float $tax_rate): self
    {
        $this->tax_rate = $tax_rate;
        return $this;
    }

    public function calc(Calculation $calculator): float
    {
        $this->calculator = $calculator;

        $this->checkAgeRate();
        $this->checkChildrenRate();

        $salaryAmount = $this->calculator->getSalary()->getAmount();
        $taxAmount = Percentage::of($this->getTaxRate(), $salaryAmount);
        return $salaryAmount - $taxAmount;
    }
}
