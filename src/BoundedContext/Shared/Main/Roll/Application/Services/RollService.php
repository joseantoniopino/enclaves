<?php

namespace Src\BoundedContext\Shared\Main\Roll\Application\Services;

use Random\RandomException;
use Src\BoundedContext\Shared\Main\Roll\Domain\DTO\RollDto;
use Src\BoundedContext\Shared\Main\Roll\Domain\Entities\Dice;
use Src\BoundedContext\Shared\Main\Roll\Domain\Entities\Roll;
use Src\BoundedContext\Shared\Main\Roll\Domain\ValueObjects\DiceFaces;
use Src\BoundedContext\Shared\Main\Roll\Domain\ValueObjects\DiceQuantity;

class RollService
{
    /**
     * @param string[] $diceDefinitions
     * @return RollDto
     * @throws RandomException
     */
    public function __invoke(array $diceDefinitions): RollDto
    {
        $dices = [];
        foreach ($diceDefinitions as $dice) {
            list($quantity, $faces) = explode('d', $dice);

            $dices[] = new Dice(
                new DiceQuantity($quantity),
                new DiceFaces($faces)
            );
        }

        $roll = (new Roll($dices))->__invoke();

        return new RollDto($roll->total, $roll->details);
    }
}
