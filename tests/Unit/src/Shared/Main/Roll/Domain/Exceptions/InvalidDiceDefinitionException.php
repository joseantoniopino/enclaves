<?php

namespace Tests\Unit\src\Shared\Main\Roll\Domain\Exceptions;

class InvalidDiceDefinitionException extends \Exception
{
    protected $message = 'Invalid dice definition provided.';
}
