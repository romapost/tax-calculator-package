<?php

declare(strict_types=1);

namespace Realforce\Finance;


class Person
{
    private int $age;

    /**
     * @var Child[]
     */
    private array $children;

    public function __construct(int $age, array $children)
    {
        $this->age  = $age;
        $this->children = $children;
    }

    /**
     * @return Child[]
     */
    public function getChildren(): array
    {
        return $this->children;
    }

    /**
     * @param Child[] $children
     * @return Person
     */
    public function setChildren(array $children): Person
    {
        $this->children = $children;
        return $this;
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
     * @return Person
     */
    public function setAge(int $age): Person
    {
        $this->age = $age;
        return $this;
    }
}
