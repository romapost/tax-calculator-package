<?php

namespace Realforce\Finance;

use Realforce\Finance\Base\Rate;
use Realforce\Finance\Exceptions\FactoryClassNotFoundException;

/**
 * Class TaxFactory
 * @package Realforce\Finance
 */
class TaxFactory
{
    public function build(string $className): Rate
    {
        return self::newClass($className);
    }

    protected static function newClass(string $className): Rate
    {
        if (!class_exists($className)) {
            throw new FactoryClassNotFoundException();
        }

        return new $className();
    }
}
