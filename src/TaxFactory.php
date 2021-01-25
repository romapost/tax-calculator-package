<?php

declare(strict_types=1);

namespace Realforce\Finance;

use Realforce\Finance\Base\Rate;
use Realforce\Finance\Exceptions\FactoryClassNotFoundException;
use RuntimeException;

/**
 * Class TaxFactory
 * @package Realforce\Finance
 */
class TaxFactory
{
    public function build(string $className): Rate
    {
        try {
            return self::newClass($className);
        } catch (FactoryClassNotFoundException $e) {
            throw  new RuntimeException();
        }
    }

    protected static function newClass(string $className): Rate
    {
        if (! class_exists($className)) {
            throw new FactoryClassNotFoundException();
        }

        return new $className();
    }
}
