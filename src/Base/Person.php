<?php

declare(strict_types=1);

namespace Realforce\Finance\Base;

use Realforce\Finance\Child;

/**
 * Class Person
 * @package Realforce\Finance\Base
 */
abstract class Person
{
    protected int $age;

    protected string $name;

    /**
     * Constructor.
     * @param string $name
     * @param int $age
     */
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "{$this->name}, {$this->age}";
    }


    public function getName(): string
    {
        return $this->name;
    }


    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }


    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     * @return self
     */
    public function setAge(int $age): self
    {
        $this->age = $age;
        return $this;
    }
}
