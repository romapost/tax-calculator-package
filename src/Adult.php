<?php

declare(strict_types=1);

namespace Realforce\Finance;

use Realforce\Finance\Base\Person;

/**
 * Class Adult
 * @package Realforce\Finance
 */
final class Adult extends Person
{
    /**
     * @var Child[]
     */
    private array $children;

    /**
     * @var bool
     */
    private bool $use_company_car = false;

    /**
     * @return bool
     */
    public function isUseCompanyCar(): bool
    {
        return $this->use_company_car;
    }

    /**
     * @param bool $use_company_car
     * @return Adult
     */
    public function setUseCompanyCar(bool $use_company_car): Adult
    {
        $this->use_company_car = $use_company_car;
        return $this;
    }

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
    public function setChildren(array $children): self
    {
        $this->children = $children;
        return $this;
    }


    public function getAge(): int
    {
        return $this->age;
    }


    public function setAge(int $age): self
    {
        $this->age = $age;
        return $this;
    }
}
