<?php

namespace Tests\Unit\src\Shared\Main\Roll\Application\Services;

use Random\RandomException;
use Src\BoundedContext\Shared\Main\Roll\Application\DTO\RollDto;
use Src\BoundedContext\Shared\Main\Roll\Application\Services\RollService;
use Src\BoundedContext\Shared\Main\Roll\Domain\Exceptions\InvalidDiceDefinitionException;
use Tests\TestCase;

class RollServiceTest extends TestCase
{
    /**
     * @throws RandomException|InvalidDiceDefinitionException
     */
    public function testInvoke()
    {
        $service = new RollService();
        $definitions = ['2d6', '1d20'];
        $modifier = 2;

        $result = $service->__invoke($definitions, $modifier);

        $this->assertInstanceOf(RollDto::class, $result);
        $this->assertIsInt($result->total);
        $this->assertIsArray($result->details);
        $this->assertEquals($modifier, $result->modifier);

        $this->assertGreaterThan(0, $result->total);

        $expectedDetailsCount = 3;
        $this->assertCount($expectedDetailsCount, $result->details);
    }
}
