<?php

namespace Tests\Unit\src\Main\Users\Infrastructure\Controllers;

use Illuminate\Http\JsonResponse;
use Mockery;
use Src\BoundedContext\Main\Users\Infrastructure\Controllers\UserLogoutController;
use Src\BoundedContext\Main\Users\Infrastructure\Services\AuthService;
use Tests\TestCase;

class UserLogoutControllerTest extends TestCase
{
    public function testInvoke()
    {
        $authServiceMock = Mockery::mock(AuthService::class);

        $authServiceMock->shouldReceive('logout')
            ->once();

        $controller = new UserLogoutController($authServiceMock);

        $response = $controller->__invoke();

        $this->assertInstanceOf(JsonResponse::class, $response);
        $this->assertEquals(200, $response->status());
        $this->assertEquals(['message' => 'User logged out. Your token has been revoked. Login again to get a new token.'], $response->getData(true));
    }
}
