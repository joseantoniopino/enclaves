<?php

namespace Tests\Unit\src\Shared\Main\Roll\Domain\Services;

use Src\BoundedContext\Shared\Main\Roll\Domain\Exceptions\InvalidDiceDefinitionException;
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
     * @throws InvalidDiceDefinitionException
     */
    public function testInvoke()
    {
        $dices = [
            new Dice(new DiceQuantity(2), new DiceFaces(6)),
            new Dice(new DiceQuantity(1), new DiceFaces(20))
        ];

        $modifier = 2;

        $roll = new Roll($dices, $modifier);
        $result = $roll->__invoke();

        $totalFromDetails = 0;

        foreach ($result['details'] as $detail) {
            $totalFromDetails += $detail['result'];
        }

        $this->assertEquals($result['total'], $totalFromDetails + $modifier);
        $this->assertArrayHasKey('total', $result);
        $this->assertArrayHasKey('details', $result);
        $this->assertArrayHasKey('modifier', $result);
        $this->assertIsInt($result['total']);
        $this->assertIsArray($result['details']);
        $this->assertIsInt($result['modifier']);
        $this->assertCount(3, $result['details']);
    }
}
