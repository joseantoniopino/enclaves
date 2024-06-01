<?php

namespace Src\BoundedContext\Main\Users\Domain\ValueObjects;

use Src\BoundedContext\Shared\Helpers\Domain\ValueObjects\StringValueObject;

final class UserPassword extends StringValueObject
{
    public function __construct(string $value)
    {
        parent::__construct($value);
    }
}
