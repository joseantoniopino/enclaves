<?php

namespace Tests\Unit\src\Shared\Main\Roll\Domain\Factories;

use Tests\TestCase;
use Src\BoundedContext\Shared\Main\Roll\Domain\Entities\Dice;
use Src\BoundedContext\Shared\Main\Roll\Domain\Factories\DiceFactory;

class DiceFactoryTest extends TestCase
{
    public function testCreateFromDefinitions()
    {
        $definitions = ['2d6', '1d20'];
        $dices = DiceFactory::createFromDefinitions($definitions);

        $this->assertCount(2, $dices);
        $this->assertInstanceOf(Dice::class, $dices[0]);
        $this->assertEquals(2, $dices[0]->quantity->value);
        $this->assertEquals(6, $dices[0]->faces->value);
        $this->assertEquals(1, $dices[1]->quantity->value);
        $this->assertEquals(20, $dices[1]->faces->value);
    }

    public function testCreateFromEmptyDefinitions()
    {
        $definitions = [];
        $dices = DiceFactory::createFromDefinitions($definitions);

        $this->assertCount(0, $dices);
    }
}
