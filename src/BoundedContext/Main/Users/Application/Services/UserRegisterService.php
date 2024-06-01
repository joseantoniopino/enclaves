<?php

namespace Src\BoundedContext\Main\Users\Application\Services;

use Src\BoundedContext\Main\Users\Domain\DTO\UserDto;
use Src\BoundedContext\Main\Users\Domain\Factories\UserFactory;
use Src\BoundedContext\Main\Users\Domain\Repositories\UserRepository;
use Src\BoundedContext\Shared\Main\Users\Domain\ValueObjects\UserUuid;

readonly class UserRegisterService
{
    public function __construct(
        private UserRepository $repository
    ) {
    }

    public function __invoke(?string $uuid, string $name, string $email, string $password): UserDto
    {
        $user = UserFactory::fromPrimitives(
            $uuid ?? UserUuid::random(),
            $name,
            $email,
            $password,
        );

        $this->repository->save($user);

        return new UserDto(
            $user->uuid->value,
            $user->name->value,
            $user->email->value,
        );
    }
}
