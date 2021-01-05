<?php

declare(strict_types=1);

namespace Realforce\Finance;

final class Salary
{
    private float $salary;

    /**
     * Salary constructor.
     * @param float $salary
     */
    public function __construct(float $salary)
    {
        $this->salary = $salary;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }

    public function setSalary(float $salary): self
    {
        $this->salary = $salary;
        return $this;
    }
}
