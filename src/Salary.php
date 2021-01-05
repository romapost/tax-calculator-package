<?php

declare(strict_types=1);

namespace Realforce\Finance;

final class Salary
{
    private float $amount;

    private string $currency = 'USD';

    /**
     * Salary constructor.
     */
    public function __construct(float $salary)
    {
        $this->amount = $salary;
    }

    public function __toString()
    {
        return "{$this->amount}, {$this->currency}";
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): self
    {
        $this->amount = $amount;
        return $this;
    }
}
