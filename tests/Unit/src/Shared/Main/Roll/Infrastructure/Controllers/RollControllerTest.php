<?php

namespace Tests\Unit\src\Shared\Main\Roll\Infrastructure\Controllers;

use Illuminate\Http\JsonResponse;
use Mockery;
use Random\RandomException;
use Src\BoundedContext\Shared\Main\Roll\Application\Services\RollService;
use Src\BoundedContext\Shared\Main\Roll\Domain\DTO\RollDto;
use Src\BoundedContext\Shared\Main\Roll\Infrastructure\Controllers\RollController;
use Src\BoundedContext\Shared\Main\Roll\Infrastructure\Requests\RollRequest;
use Tests\TestCase;

class RollControllerTest extends TestCase
{
    /**
     * @throws RandomException
     */
    public function testInvoke()
    {
        $serviceMock = Mockery::mock(RollService::class);
        $serviceMock->shouldReceive('__invoke')->andReturn(new RollDto(18, 2, [['dice' => 'D6', 'result' => 3]]));

        $controller = new RollController($serviceMock);

        $request = new RollRequest(['dices' => ['2d6']]);
        $response = $controller->__invoke($request);

        $this->assertInstanceOf(JsonResponse::class, $response);
        $this->assertEquals(200, $response->status());
        $this->assertJson($response->getContent());
    }
}
