<?php

namespace Src\BoundedContext\Shared\Main\Roll\Application\Services;

use Random\RandomException;
use Src\BoundedContext\Shared\Main\Roll\Domain\DTO\RollDto;
use Src\BoundedContext\Shared\Main\Roll\Domain\Factories\DiceFactory;
use Src\BoundedContext\Shared\Main\Roll\Domain\Services\Roll;

class RollService
{
    /**
     * @param string[] $diceDefinitions
     * @return RollDto
     * @throws RandomException
     */
    public function __invoke(array $diceDefinitions): RollDto
    {
        $dices = DiceFactory::createFromDefinitions($diceDefinitions);

        $rollData = (new Roll($dices))->__invoke();

        return new RollDto($rollData['total'], $rollData['details']);
    }
}
