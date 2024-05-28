<?php

namespace Src\BoundedContext\Shared\Main\Roll\Application\Services;

use Random\RandomException;
use Src\BoundedContext\Shared\Main\Roll\Domain\Dice;
use Src\BoundedContext\Shared\Main\Roll\Domain\Roll;
use Src\BoundedContext\Shared\Main\Roll\Domain\ValueObjects\DiceFaces;
use Src\BoundedContext\Shared\Main\Roll\Domain\ValueObjects\DiceQuantity;

class RollService
{
    /**
     * @param string[] $diceDefinitions
     * @return int
     * @throws RandomException
     */
    public function __invoke(array $diceDefinitions): int
    {
        $dices = [];
        foreach ($diceDefinitions as $dice) {
            list($quantity, $faces) = explode('d', $dice);

            $dices[] = new Dice(
                new DiceQuantity($quantity),
                new DiceFaces($faces)
            );
        }

        return (new Roll($dices))->result();
    }
}
