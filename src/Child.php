<?php

declare(strict_types=1);

namespace Realforce\Finance;


final class Child
{
    private int $age;

    /**
     * Child constructor.
     * @param int $age
     */
    public function __construct(int $age)
    {
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
    public function setAge(int $age): Child
    {
        $this->age = $age;
        return $this;
    }
}
