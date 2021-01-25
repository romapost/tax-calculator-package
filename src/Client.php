<?php

declare(strict_types=1);

namespace Realforce\Finance;

use Realforce\Finance\Base\InvoiceGenerator;

class Client
{
    private ?InvoiceGenerator $invoiceGenerator;

    /**
     * Client constructor.
     * @param InvoiceGenerator|null $invoiceGenerator
     */
    public function __construct(?InvoiceGenerator $invoiceGenerator)
    {
        $this->invoiceGenerator = $invoiceGenerator;
    }

    public function saveInvoice(): Invoice
    {
        return $this->invoiceGenerator->make();
    }
}
