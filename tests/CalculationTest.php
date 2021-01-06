<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Realforce\Finance\Adult;
use Realforce\Finance\Calculation;
use Realforce\Finance\Child;
use Realforce\Finance\Salary;

class CalculationTest extends TestCase
{
    /**
     * @var Calculation
     */
    private $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculation();
    }

    protected function tearDown(): void
    {
    }

    public function testCalc(): void
    {

        $person = new Adult('Alice', 26, [new Child('Child1', 3), new Child('Child2', 5)]);
        $salary = $this->calculator->setPerson($person)->calc(new Salary(6000));

        $this->assertIsFloat($salary);
        $this->assertEqualsWithDelta(4800, $salary, 0.001);

        dump($salary);

        $person = new Adult('Bob', 52, []);
        $salary = $this->calculator->setPerson($person)->calc(new Salary(4000));
        $this->assertIsFloat($salary);
        $this->assertEqualsWithDelta(3424, $salary, 0.001);

        dump($salary);

        $person = new Adult('Charlie', 36, [
            new Child('Child1', 3),
            new Child('Child2', 5),
            new Child('Child2', 16),
        ]);
        $salary = $this->calculator->setPerson($person)->calc(new Salary(5000));
        $this->assertIsFloat($salary);
        $this->assertEqualsWithDelta(4020, $salary, 0.001);

        dump($salary);
    }

    public function testCalcCompanyCar(): void
    {

        $person = new Adult('Alice', 26, [new Child('Child1', 3), new Child('Child2', 5)]);
        $person->setUseCompanyCar(true);
        $salary = $this->calculator->setPerson($person)->calc(new Salary(6000));

        $this->assertIsFloat($salary);
        $this->assertEqualsWithDelta(4400, $salary, 0.001);

        dump($salary);

        $person = new Adult('Bob', 52, []);
        $person->setUseCompanyCar(true);
        $salary = $this->calculator->setPerson($person)->calc(new Salary(4000));
        $this->assertIsFloat($salary);
        $this->assertEqualsWithDelta(3024, $salary, 0.001);

        dump($salary);

        $person = new Adult('Charlie', 36, [
            new Child('Child1', 3),
            new Child('Child2', 5),
            new Child('Child2', 16),
        ]);
        $person->setUseCompanyCar(true);
        $salary = $this->calculator->setPerson($person)->calc(new Salary(5000));
        $this->assertIsFloat($salary);
        $this->assertEqualsWithDelta(3618, $salary, 0.001);

        dump($salary);
    }
}
