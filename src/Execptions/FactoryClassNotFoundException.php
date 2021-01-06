<?php

namespace Realforce\Finance\Exceptions;

/**
 * Class FactoryClassNotFoundException
 * @package Realforce\Finance\Exceptions
 */
class FactoryClassNotFoundException extends \Exception
{
    protected $message = 'Factory class not found';
}
