<?php

namespace Tests\Unit\src\Main\Users\Infrastructure\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Mockery;
use Src\BoundedContext\Main\Users\Application\Services\CreateUserService;
use Src\BoundedContext\Main\Users\Domain\Entities\User;
use Src\BoundedContext\Main\Users\Domain\ValueObjects\UserEmail;
use Src\BoundedContext\Main\Users\Domain\ValueObjects\UserName;
use Src\BoundedContext\Main\Users\Domain\ValueObjects\UserPassword;
use Src\BoundedContext\Main\Users\Infrastructure\Controllers\UserRegisterController;
use Src\BoundedContext\Main\Users\Infrastructure\Requests\UserRegisterRequest;
use Src\BoundedContext\Shared\Main\Users\Domain\ValueObjects\UserUuid;
use Tests\TestCase;

class UserRegisterControllerTest extends TestCase
{
    public function testInvoke()
    {
        $createUserServiceMock = Mockery::mock(CreateUserService::class);

        $user = new User(
            new UserUuid('uuid-1234'),
            new UserName('John Doe'),
            new UserEmail('john@example.com'),
            new UserPassword('password')
        );

        $createUserServiceMock->shouldReceive('__invoke')
            ->with(null, 'John Doe', 'john@example.com', Hash::make('password'))
            ->andReturn($user);

        $request = new UserRegisterRequest(['name' => 'John Doe', 'email' => 'john@example.com', 'password' => 'password']);
        $controller = new UserRegisterController($createUserServiceMock);

        $response = $controller->__invoke($request);

        $this->assertInstanceOf(JsonResponse::class, $response);
        $this->assertEquals(201, $response->status());
    }
}
