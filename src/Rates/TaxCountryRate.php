<?php

declare(strict_types=1);

namespace Realforce\Finance\Rates;

use Mattiasgeniar\Percentage\Percentage;
use Realforce\Finance\Base\Person;
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
    /**
     * @return Person
     */
    public function getPerson(): Person
    {
        return $this->person;
    }

    /**
     * @param Person $person
     * @return TaxCountryRate
     */
    public function setPerson(Person $person): TaxCountryRate
    {
        $this->person = $person;
        return $this;
    }
    use TaxAgeRate;
    use TaxChildrenRate;
    use UseCompanyCar;

    /**
     * Country tax rate in %
     * @var float
     */
    private float $tax_rate = 20;

    /**
     * @var Person
     */
    private Person $person;

    /**
     * @return Salary
     */
    public function getSalary(): Salary
    {
        return $this->salary;
    }

    /**
     * @param Salary $salary
     * @return TaxCountryRate
     */
    public function setSalary(Salary $salary): TaxCountryRate
    {
        $this->salary = $salary;
        return $this;
    }

    /**
     * @var Salary
     */
    private Salary $salary;

    public function getTaxRate(): float
    {
        return $this->tax_rate;
    }

    public function setTaxRate(float $tax_rate): self
    {
        $this->tax_rate = $tax_rate;
        return $this;
    }

    /**
     * @param Person $person
     * @param Salary $salary
     * @return float
     */
    public function calc(Person $person, Salary $salary): float
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
