<?php

namespace Realforce\Finance\Base;

use Realforce\Finance\Child;

abstract class Person
{
    protected int $age;

    protected string $name;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Person
     */
    public function setName(string $name): Person
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Child constructor.
     * @param string $name
     * @param int $age
     */
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     * @return Child
     */
    public function setAge(int $age): Person
    {
        $this->age = $age;
        return $this;
    }

    public function __toString()
    {
        return "{$this->name}, {$this->age}";
    }
}
