<?php

namespace Tests\Unit\src\Shared\Main\Roll\Domain\Factories;

use Src\BoundedContext\Shared\Main\Roll\Domain\Exceptions\InvalidDiceDefinitionException;
use Src\BoundedContext\Shared\Main\Roll\Domain\Factories\DiceFactory;
use Src\BoundedContext\Shared\Main\Roll\Domain\ValueObjects\Dice;
use Tests\TestCase;

class DiceFactoryTest extends TestCase
{
    /**
     * @throws InvalidDiceDefinitionException
     */
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

    /**
     * @throws InvalidDiceDefinitionException
     */
    public function testCreateFromInvalidDefinitions()
    {
        $this->expectException(InvalidDiceDefinitionException::class);

        $definitions = ['2d-6', '1d20']; // Definición inválida
        DiceFactory::createFromDefinitions($definitions);
    }

    /**
     * @throws InvalidDiceDefinitionException
     */
    public function testCreateFromEmptyDefinitions()
    {
        $definitions = [];
        $dices = DiceFactory::createFromDefinitions($definitions);

        $this->assertCount(0, $dices);
    }
}
