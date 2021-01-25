<?php

declare(strict_types=1);

namespace Realforce\Finance\Rates;

use Mattiasgeniar\Percentage\Percentage;
use Realforce\Finance\Adult;
use Realforce\Finance\Base\Rate;
use Realforce\Finance\Salary;
use Realforce\Finance\Traits\TaxAgeRate;
use Realforce\Finance\Traits\TaxChildrenRate;
use Realforce\Finance\Traits\UseCompanyCar;

/**
 * Class TaxCountryRate
 * @package Realforce\Finance\Rates
 */
class TaxCountryRate extends Rate
{
    use TaxAgeRate;
    use TaxChildrenRate;
    use UseCompanyCar;

    /**
     * Country tax rate in %
     */
    private float $tax_rate = 20;


    private Adult $person;


    private Salary $salary;


    public function getPerson(): Adult
    {
        return $this->person;
    }


    public function setPerson(Adult $person): self
    {
        $this->person = $person;
        return $this;
    }


    public function getSalary(): Salary
    {
        return $this->salary;
    }


    public function setSalary(Salary $salary): self
    {
        $this->salary = $salary;
        return $this;
    }

    public function getTaxRate(): float
    {
        return $this->tax_rate;
    }

    public function setTaxRate(float $tax_rate): self
    {
        $this->tax_rate = $tax_rate;
        return $this;
    }


    public function calc(Adult $person, Salary $salary): float
    {
        $this->setPerson($person);
        $this->setSalary($salary);

        $this->checkAgeRate();
        $this->checkChildrenRate();
        // TODO: Deduct from  gross or net salary?
        $this->checkUseCompanyCar();

        $taxAmount = Percentage::of($this->getTaxRate(), $salary->getAmount());

        return $salary->getAmount() - $taxAmount;
    }
}
