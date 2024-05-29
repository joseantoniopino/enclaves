<?php

namespace Src\BoundedContext\Shared\Main\Roll\Domain\Exceptions;

class InvalidDiceDefinitionException extends \Exception
{
    protected $message = 'Invalid dice definition provided.';
}
