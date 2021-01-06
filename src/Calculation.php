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
     * Tax country class
     */
    private const TAX_RATE_CLASS = TaxCountryRate::class;

    /**
     * @var Adult
     */
    private Adult $person;

    /**
     * @return Adult
     */
    public function getPerson(): Adult
    {
        return $this->person;
    }

    /**
     * @param Adult $person
     * @return $this
     */
    public function setPerson(Adult $person): self
    {
        $this->person = $person;
        return $this;
    }

    /**
     * Calc method
     * @param Salary $salary
     * @return float
     */
    final public function calc(Salary $salary): float
    {
        $className = self::TAX_RATE_CLASS;
        return (new TaxFactory())->build($className)->calc($this->getPerson(), $salary);
    }
}
