<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Realforce\Finance\Adult;
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


        $person = new \Realforce\Finance\Adult('Alice', 26,  [
            new Child('Child1', 3),
            new Child('Child2',5)
        ]);
        $calculator->setPerson($person)->calc(new Salary(6000));

        $person = new \Realforce\Finance\Adult('Bob', 52, []);
        $calculator->setPerson($person)->calc(new Salary(4000));

        $person = new \Realforce\Finance\Adult('Charlie', 36, [
            new Child('Child1', 3),
            new Child('Child2',5),
            new Child('Child2',16)
        ]);
        $calculator->setPerson($person)->calc(new Salary(5000));

    }
}
