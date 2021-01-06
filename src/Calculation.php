<?php

declare(strict_types=1);

namespace Realforce\Finance;

use Realforce\Finance\Rates\TaxCountryRate;
use Realforce\Finance\Traits\TaxAgeRate;
use Realforce\Finance\Traits\TaxChildrenRate;

/**
 * Class Calculator
 * @package Realforce\Finance
 */
final class Calculation
{
    /**
     * @var Adult
     */
    private Adult $person;

    /**
     * @var Salary
     */
    private Salary $salary;

    /**
     * @return Salary
     */
    public function getSalary(): Salary
    {
        return $this->salary;
    }

    public function setSalary(Salary $salary): self
    {
        $this->salary = $salary;
        return $this;
    }

    /**
     * @return Adult
     */
    public function getPerson(): Adult
    {
        return $this->person;
    }


    public function setPerson(Adult $person): self
    {
        $this->person = $person;
        return $this;
    }


    final public function calc(Salary $salary): float
    {
        $this->setSalary($salary);

        return (new TaxCountryRate())->calc($this);
    }
}
