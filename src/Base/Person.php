<?php

declare(strict_types=1);

namespace Realforce\Finance\Base;

use Realforce\Finance\Child;

abstract class Person
{
    protected int $age;

    protected string $name;

    /**
     * Child constructor.
     */
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __toString()
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
     * @return Child
     */
    public function setAge(int $age): self
    {
        $this->age = $age;
        return $this;
    }
}
