<?php

namespace Src\BoundedContext\Shared\Main\Roll\Domain\Entities;

use Src\BoundedContext\Shared\Main\Roll\Domain\ValueObjects\DiceFaces;
use Src\BoundedContext\Shared\Main\Roll\Domain\ValueObjects\DiceQuantity;

class Dice
{
    public function __construct(
        public readonly DiceQuantity $quantity,
        public readonly DiceFaces $faces,
    ) {
    }
}
