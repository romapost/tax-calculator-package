<?php

namespace Realforce\Finance\Exceptions;

use Exception;

/**
 * Class FactoryClassNotFoundException
 * @package Realforce\Finance\Exceptions
 */
class FactoryClassNotFoundException extends Exception
{
    protected $message = 'Factory class not found';
}
