<?php

namespace Tests\Unit\src\Main\Users\Application\Services;

use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;
use Src\BoundedContext\Main\Users\Application\DTO\UserDto;
use Src\BoundedContext\Main\Users\Application\Services\FindUserByEmailService;
use Src\BoundedContext\Main\Users\Domain\Entities\User;
use Src\BoundedContext\Main\Users\Domain\Exceptions\InvalidCredentialsException;
use Src\BoundedContext\Main\Users\Domain\Repositories\UserRepository;
use Src\BoundedContext\Main\Users\Domain\ValueObjects\UserEmail;
use Src\BoundedContext\Main\Users\Domain\ValueObjects\UserName;
use Src\BoundedContext\Shared\Main\Users\Domain\ValueObjects\UserUuid;

class FindUserByEmailServiceTest extends TestCase
{
    /**
     * @throws InvalidCredentialsException
     * @throws Exception
     */
    public function testInvokeUserFound()
    {
        $userRepositoryMock = $this->createMock(UserRepository::class);

        $user = new User(
            new UserUuid(Uuid::uuid4()->toString()),
            new UserName('John Doe'),
            new UserEmail('john@example.com'),
        );

        $userRepositoryMock
            ->expects(self::once())
            ->method('findByEmail')
            ->with('john@example.com')
            ->willReturn($user);

        $service = new FindUserByEmailService($userRepositoryMock);
        $result = $service->__invoke('john@example.com');

        $this->assertInstanceOf(UserDto::class, $result);
        $this->assertEquals($user->uuid->value, $result->uuid);
        $this->assertEquals($user->name->value, $result->name);
        $this->assertEquals($user->email->value, $result->email);
    }

    /**
     * @throws InvalidCredentialsException
     * @throws Exception
     */
    public function testInvokeUserNotFound()
    {
        $this->expectException(InvalidCredentialsException::class);

        $userRepositoryMock = $this->createMock(UserRepository::class);
        $userRepositoryMock
            ->expects(self::once())
            ->method('findByEmail')
            ->with('john@example.com')
            ->willReturn(null);

        $service = new FindUserByEmailService($userRepositoryMock);
        $service->__invoke('john@example.com');
    }
}
