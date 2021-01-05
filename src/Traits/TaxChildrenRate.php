<?php

declare(strict_types=1);

namespace Realforce\Finance\Traits;

/**
 * Trait TaxChildrenRate
 * @package Realforce\Finance\Traits
 */
trait TaxChildrenRate
{
    public function checkChildrenRate(): void
    {
        if (count($this->getPerson()->getChildren()) > 2) {
            $this->setTaxRate($this->getTaxRate() - ($this->getTaxRate() * 0.02));
        }
    }
}
