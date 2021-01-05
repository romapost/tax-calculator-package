<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Realforce\Finance\Adult;
use Realforce\Finance\Calculator;
use Realforce\Finance\Child;
use Realforce\Finance\Salary;

class CalculatorTest extends TestCase
{
    protected function setUp(): void
    {
    }

    protected function tearDown(): void
    {
    }

    public function testCalc(): void
    {
        $calculator = new Calculator();

        $person = new Adult('Alice', 26, [new Child('Child1', 3), new Child('Child2', 5)]);
        $calculator->setPerson($person)->calc(new Salary(6000));

        $person = new Adult('Bob', 52, []);
        $calculator->setPerson($person)->calc(new Salary(4000));

        $person = new Adult('Charlie', 36, [
            new Child('Child1', 3),
            new Child('Child2', 5),
            new Child('Child2', 16),
        ]);
        $calculator->setPerson($person)->calc(new Salary(5000));

        //TODO: везде if (preg_match('/^[0-9]{9}$/', $number) !== 1) {
        //            throw new \DomainException('Invalid SIREN number');
        //         }
    }
}
