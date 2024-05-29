<?php

namespace Src\BoundedContext\Shared\Main\Roll\Domain\ValueObjects;

use InvalidArgumentException;
use Src\BoundedContext\Shared\Helpers\Domain\ValueObjects\IntValueObject;

class DiceFaces extends IntValueObject
{
    public function __construct(int $value)
    {
        if ($value < 2) {
            throw new InvalidArgumentException('Dice faces must be at least 2.');
        }
        parent::__construct($value);
    }
}
