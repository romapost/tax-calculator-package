<?php

declare(strict_types=1);

namespace Realforce\Finance;

use Realforce\Finance\Base\Person;

final class Adult extends Person
{
    /**
     * @var Child[]
     */
    private array $children;

    public function __construct(string $name, int $age, array $children)
    {
        parent::__construct($name, $age);
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
     * @return Adult
     */
    public function setChildren(array $children): Adult
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
     * @return Adult
     */
    public function setAge(int $age): Adult
    {
        $this->age = $age;
        return $this;
    }
}
