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

    /**
     * @return InvoiceGenerator|null
     */
    public function getInvoiceGenerator(): ?InvoiceGenerator
    {
        return $this->invoiceGenerator;
    }

    /**
     * @param InvoiceGenerator|null $invoiceGenerator
     * @return Client
     */
    public function setInvoiceGenerator(?InvoiceGenerator $invoiceGenerator): Client
    {
        $this->invoiceGenerator = $invoiceGenerator;
        return $this;
    }

    public function saveInvoice(): Invoice
    {
        return $this->invoiceGenerator->make();
    }
}
