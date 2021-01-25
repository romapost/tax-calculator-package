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

    public function __set($name, $value)
    {
        throw new \BadMethodCallException("Cannot add new property \$$name to instance of " . __CLASS__);
    }

    private function __clone()
    {
        throw new \BadMethodCallException("Cannot clone object of instance " . __CLASS__);
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
     * @return Immutable
     */
    public static function withProperty(string $property): self
    {
        return new self($property);
    }
}
