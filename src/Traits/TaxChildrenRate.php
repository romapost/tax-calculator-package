<?php

declare(strict_types=1);

namespace Realforce\Finance\Traits;

use Mattiasgeniar\Percentage\Percentage;

/**
 * Trait TaxChildrenRate
 * @package Realforce\Finance\Traits
 */
trait TaxChildrenRate
{
    public function checkChildrenRate(): void
    {
        if (count($this->getPerson()->getChildren()) > 2) {
            $newTaxRate = $this->getTaxRate() - Percentage::of(2, $this->getTaxRate());
            $this->setTaxRate($newTaxRate);
        }
    }
}
