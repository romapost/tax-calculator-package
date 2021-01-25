<?php

declare(strict_types=1);

namespace Realforce\Finance\Interfaces;

use Realforce\Finance\Invoice;

interface IInvoiceGenerator
{
    public function make(): Invoice;
}
