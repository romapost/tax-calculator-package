<?php

declare(strict_types=1);

namespace Realforce\Finance;

final class Calculator
{
    private Person $person;
    private int $tax_country = 20;

    /**
     * @return Person
     */
    public function getPerson(): Person
    {
        return $this->person;
    }

    /**
     * @param Person $person
     * @return Calculator
     */
    public function setPerson(Person $person): Calculator
    {
        $this->person = $person;
        return $this;
    }

    /**
     * @return int
     */
    public function getTaxCountry(): int
    {
        return $this->tax_country;
    }

    /**
     * @param int $tax_country
     * @return Calculator
     */
    public function setTaxCountry(int $tax_country): Calculator
    {
        $this->tax_country = $tax_country;
        return $this;
    }

    public function calc(Salary $oSalary)
    {
        return $oSalary->getSalary() * (1 - $this->getTaxCountry() / 100);
    }
}
