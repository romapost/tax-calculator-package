<?php

declare(strict_types=1);

namespace Realforce\Finance;

use Realforce\Finance\Traits\TaxAgeRate;
use Realforce\Finance\Traits\TaxChildrenRate;

/**
 * Class Calculator
 * @package Realforce\Finance
 */
final class Calculator
{
    use TaxAgeRate;
    use TaxChildrenRate;

    private float $tax_rate = 0.2;

    private Adult $person;

    private Salary $salary;


    public function getSalary(): Salary
    {
        return $this->salary;
    }


    public function setSalary(Salary $salary): self
    {
        $this->salary = $salary;
        return $this;
    }


    public function getPerson(): Adult
    {
        return $this->person;
    }


    public function setPerson(Adult $person): self
    {
        $this->person = $person;
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

    public function calc(Salary $salary) : float
    {
        $this->salary = $salary;
        $this->checkAgeRate();
        $this->checkChildrenRate();

        return $this->salary->getAmount() * $this->getTaxRate();
    }
}
