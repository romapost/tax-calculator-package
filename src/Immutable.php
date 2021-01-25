<?php

declare(strict_types=1);

namespace Realforce\Finance;

/**
 * Class Immutable
 * @package Realforce\Finance
 */
final class Immutable
{
    /**
     * @var string
     */
    private string $property;

    /**
     * Immutable constructor.
     * @param string $property
     */
    private function __construct(string $property)
    {
        $this->property = $property;
    }

    /**
     * @return string
     */
    public function getProperty(): string
    {
        return $this->property;
    }

    /**
     * @param string $property
     * @return static
     */
    public static function withProperty(string $property): Immutable
    {
        return new self($property);
    }
}
