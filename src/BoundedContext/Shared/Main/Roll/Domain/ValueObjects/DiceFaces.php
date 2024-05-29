<?php

namespace Src\BoundedContext\Shared\Main\Roll\Domain\ValueObjects;

use Src\BoundedContext\Shared\Helpers\Domain\ValueObjects\IntValueObject;
use Src\BoundedContext\Shared\Main\Roll\Domain\Exceptions\InvalidDiceDefinitionException;

class DiceFaces extends IntValueObject
{
    /**
     * @throws InvalidDiceDefinitionException
     */
    public function __construct(int $value)
    {
        if ($value < 2) {
            throw new InvalidDiceDefinitionException('Dice faces must be at least 2.');
        }
        parent::__construct($value);
    }
}
