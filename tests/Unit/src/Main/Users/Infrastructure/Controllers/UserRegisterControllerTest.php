<?php

namespace Tests\Unit\src\Main\Users\Infrastructure\Controllers;

use Illuminate\Http\JsonResponse;
use Mockery;
use Ramsey\Uuid\Uuid;
use Src\BoundedContext\Main\Users\Application\DTO\UserDto;
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
        $uuid = Uuid::uuid4()->toString();

        $user = new User(
            new UserUuid($uuid),
            new UserName('John Doe'),
            new UserEmail('john@example.com'),
            new UserPassword('password')
        );

        $userDto = new UserDto(
            $user->uuid->value,
            $user->name->value,
            $user->email->value
        );

        $createUserServiceMock->shouldReceive('__invoke')
            ->withArgs(function ($arg1, $arg2, $arg3, $arg4) {
                return $arg1 === null && $arg2 === 'John Doe' && $arg3 === 'john@example.com' && $arg4 !== null;
            })
            ->andReturn($userDto); // Devolvemos el UserDto en lugar del User

        $request = new UserRegisterRequest(['name' => 'John Doe', 'email' => 'john@example.com', 'password' => 'password']);
        $controller = new UserRegisterController($createUserServiceMock);

        $response = $controller->__invoke($request);

        $this->assertInstanceOf(JsonResponse::class, $response);
        $this->assertEquals(201, $response->status());
    }
}
