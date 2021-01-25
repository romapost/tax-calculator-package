<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Realforce\Finance\Client;
use Realforce\Finance\Immutable;
use Realforce\Finance\Invoices\InvoicePdfGenerator;

class ImmutableTest extends TestCase
{
    public function testImmutable(): void
    {
        $class = Immutable::withProperty('test');
        $this->assertSame('test', $class->getProperty());

        try {
            // Try setter property
            $class->property = 'test';
            $this->exceptException(\BadMethodCallException::class);

            // Try clone immutable object
            $clone = clone $class;
            $this->exceptException(\BadMethodCallException::class);

        } catch (\BadMethodCallException $exception) {

        }
    }
}
