<?php

namespace Src\BoundedContext\Shared\Main\Roll\Domain\ValueObjects;

class Dice
{
    public function __construct(
        public readonly DiceQuantity $quantity,
        public readonly DiceFaces $faces,
    ) {}
}
