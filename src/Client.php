<?php

declare(strict_types=1);

namespace Realforce\Finance;

use Realforce\Finance\Interfaces\IInvoiceGenerator;

class Client
{
    private ?IInvoiceGenerator $invoiceGenerator;

    /**
     * Client constructor.
     */
    public function __construct(?IInvoiceGenerator $invoiceGenerator)
    {
        $this->invoiceGenerator = $invoiceGenerator;
    }

    public function saveInvoice(): Invoice
    {
        return $this->invoiceGenerator->make();
    }
}
