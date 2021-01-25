<?php

declare(strict_types=1);

namespace Realforce\Finance\Invoices;

use Realforce\Finance\Base\InvoiceGenerator;
use Realforce\Finance\Invoice;

class InvoiceTxtGenerator extends InvoiceGenerator
{
    public function make(): Invoice
    {
        return new Invoice();
    }
}
