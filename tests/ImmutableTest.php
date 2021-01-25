<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Realforce\Finance\Immutable;

class ImmutableTest extends TestCase
{

    public function testImmutable(): void
    {
        $class = Immutable::withProperty('test');
        $this->assertEquals('test', $class->getProperty());
    }
}
