<?php

namespace Src\BoundedContext\Shared\Main\Roll\Domain\Factories;

use Src\BoundedContext\Shared\Main\Roll\Domain\Entities\Dice;
use Src\BoundedContext\Shared\Main\Roll\Domain\ValueObjects\DiceFaces;
use Src\BoundedContext\Shared\Main\Roll\Domain\ValueObjects\DiceQuantity;

class DiceFactory
{
    /**
     * @param string[] $diceDefinitions
     * @return Dice[]
     */
    public static function createFromDefinitions(array $diceDefinitions): array
    {
        $dices = [];
        foreach ($diceDefinitions as $dice) {
            list($quantity, $faces) = explode('d', $dice);

            $dices[] = new Dice(
                new DiceQuantity($quantity),
                new DiceFaces($faces)
            );
        }
        return $dices;
    }
}
