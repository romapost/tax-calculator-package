<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Realforce\Finance\Adult;
use Realforce\Finance\Calculation;
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
        $calculator = new Calculation();

        $person = new Adult('Alice', 26, [new Child('Child1', 3), new Child('Child2', 5)]);
        $salary = $calculator->setPerson($person)->calc(new Salary(6000));

        dump($salary);

        $person = new Adult('Bob', 52, []);
        $salary = $calculator->setPerson($person)->calc(new Salary(4000));

        dump($salary);

        $person = new Adult('Charlie', 36, [
            new Child('Child1', 3),
            new Child('Child2', 5),
            new Child('Child2', 16),
        ]);
        $salary = $calculator->setPerson($person)->calc(new Salary(5000));

        dump($salary);
    }
}
