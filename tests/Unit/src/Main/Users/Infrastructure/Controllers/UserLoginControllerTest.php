<?php

namespace Tests\Unit\src\Main\Users\Infrastructure\Controllers;

use Illuminate\Http\JsonResponse;
use Mockery;
use Ramsey\Uuid\Uuid;
use Src\BoundedContext\Main\Users\Application\DTO\UserDto;
use Src\BoundedContext\Main\Users\Application\Services\FindUserByEmailService;
use Src\BoundedContext\Main\Users\Domain\Exceptions\InvalidCredentialsException;
use Src\BoundedContext\Main\Users\Infrastructure\Controllers\UserLoginController;
use Src\BoundedContext\Main\Users\Infrastructure\Interfaces\AuthServiceInterface;
use Src\BoundedContext\Main\Users\Infrastructure\Models\User;
use Src\BoundedContext\Main\Users\Infrastructure\Requests\UserLoginRequest;
use Tests\TestCase;

class UserLoginControllerTest extends TestCase
{
    /**
     * @throws InvalidCredentialsException
     */
    public function testInvoke()
    {
        $findUserByEmailServiceMock = Mockery::mock(FindUserByEmailService::class);
        $authServiceMock = Mockery::mock(AuthServiceInterface::class);
        $uuid = Uuid::uuid4()->toString();

        $userDto = new UserDto($uuid, 'John Doe', 'john@example.com');

        $findUserByEmailServiceMock->shouldReceive('__invoke')
            ->with('john@example.com')
            ->andReturn($userDto);

        $authServiceMock->shouldReceive('authenticate')
            ->with('john@example.com', 'password')
            ->andReturn(new User);

        $authServiceMock->shouldReceive('createToken')
            ->andReturn('token-1234');

        $request = new UserLoginRequest(['email' => 'john@example.com', 'password' => 'password']);
        $controller = new UserLoginController($findUserByEmailServiceMock, $authServiceMock);

        $response = $controller->__invoke($request);

        $this->assertInstanceOf(JsonResponse::class, $response);
        $this->assertEquals(200, $response->status());
    }

    public function testInvokeInvalidCredentials()
    {
        $this->expectException(InvalidCredentialsException::class);

        $findUserByEmailServiceMock = Mockery::mock(FindUserByEmailService::class);
        $authServiceMock = Mockery::mock(AuthServiceInterface::class);

        $findUserByEmailServiceMock->shouldReceive('__invoke')
            ->with('john@example.com')
            ->andThrow(new InvalidCredentialsException);

        $request = new UserLoginRequest(['email' => 'john@example.com', 'password' => 'password']);
        $controller = new UserLoginController($findUserByEmailServiceMock, $authServiceMock);

        $controller->__invoke($request);
    }
}
