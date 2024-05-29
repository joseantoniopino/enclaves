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
     * @param int|null $modifier
     * @return RollDto
     * @throws RandomException
     */
    public function __invoke(array $diceDefinitions, ?int $modifier): RollDto
    {
        $dices = DiceFactory::createFromDefinitions($diceDefinitions);

        $rollData = (new Roll($dices, $modifier))->__invoke();

        return new RollDto($rollData['total'], $rollData['modifier'], $rollData['details']);
    }
}
