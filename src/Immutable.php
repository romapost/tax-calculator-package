<?php

declare(strict_types=1);

namespace Realforce\Finance;

/**
 * Class Immutable
 * @package Realforce\Finance
 */
final class Immutable
{
    private string $property;

    /**
     * Immutable constructor.
     */
    private function __construct(string $property)
    {
        $this->property = $property;
    }


    public function getProperty(): string
    {
        return $this->property;
    }

    /**
     * @return static
     */
    public static function withProperty(string $property): self
    {
        return new self($property);
    }
}
