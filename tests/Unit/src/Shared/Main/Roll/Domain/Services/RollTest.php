<?php

namespace Tests\Unit\src\Shared\Main\Roll\Domain\Services;

use Tests\TestCase;
use Random\RandomException;
use Src\BoundedContext\Shared\Main\Roll\Domain\Entities\Dice;
use Src\BoundedContext\Shared\Main\Roll\Domain\Services\Roll;
use Src\BoundedContext\Shared\Main\Roll\Domain\ValueObjects\DiceFaces;
use Src\BoundedContext\Shared\Main\Roll\Domain\ValueObjects\DiceQuantity;

class RollTest extends TestCase
{
    /**
     * @throws RandomException
     */
    public function testInvoke()
    {
        $dices = [
            new Dice(new DiceQuantity(2), new DiceFaces(6)),
            new Dice(new DiceQuantity(1), new DiceFaces(20))
        ];

        $roll = new Roll($dices);
        $result = $roll->__invoke();

        $this->assertArrayHasKey('total', $result);
        $this->assertArrayHasKey('details', $result);
        $this->assertIsInt($result['total']);
        $this->assertIsArray($result['details']);
        $this->assertCount(3, $result['details']); // 2 dice with 6 faces and 1 dice with 20 faces
    }
}
