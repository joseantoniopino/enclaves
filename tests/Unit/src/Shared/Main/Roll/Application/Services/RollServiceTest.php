<?php

namespace Tests\Unit\src\Shared\Main\Roll\Application\Services;

use Tests\TestCase;
use Random\RandomException;
use Src\BoundedContext\Shared\Main\Roll\Application\Services\RollService;
use Src\BoundedContext\Shared\Main\Roll\Domain\DTO\RollDto;

class RollServiceTest extends TestCase
{
    /**
     * @throws RandomException
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

        // Verificar que el total es correcto (al menos mayor que 0)
        $this->assertGreaterThan(0, $result->total);

        // Verificar que los detalles contienen el número correcto de resultados
        $expectedDetailsCount = 3; // 2d6 + 1d20 = 3 tiradas
        $this->assertCount($expectedDetailsCount, $result->details);
    }
}
