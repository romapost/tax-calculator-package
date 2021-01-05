<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Realforce\Finance\Person;
use Realforce\Finance\Child;
use Realforce\Finance\Salary;
use Realforce\Finance\Calculator;

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

        $children = [
            new Child(2),
            new Child(5)
        ];

        $person = new \Realforce\Finance\Person(38, $children);
        $calculator->setPerson($person)->calc(new Salary(1000));
    }
}
