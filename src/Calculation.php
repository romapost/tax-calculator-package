<?php

declare(strict_types=1);

namespace Realforce\Finance;

use Realforce\Finance\Rates\TaxCountryRate;

/**
 * Class Calculator
 * @package Realforce\Finance
 */
final class Calculation
{
    /**
     * Tax country class
     */
    private const TAX_RATE_CLASS = TaxCountryRate::class;


    private Adult $person;


    public function getPerson(): Adult
    {
        return $this->person;
    }

    /**
     * @return $this
     */
    public function setPerson(Adult $person): self
    {
        $this->person = $person;
        return $this;
    }

    /**
     * Calc method
     */
    final public function calc(Salary $salary): float
    {
        $className = self::TAX_RATE_CLASS;
        return (new TaxFactory())->build($className)->calc($this->getPerson(), $salary);
    }
}
