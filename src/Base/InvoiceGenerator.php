<?php

declare(strict_types=1);

namespace Realforce\Finance\Base;

use Realforce\Finance\Interfaces\IInvoiceGenerator;

abstract class InvoiceGenerator implements IInvoiceGenerator
{
    /**
     * InvoiceGenerator constructor.
     */
    public function __construct()
    {
    }
}
