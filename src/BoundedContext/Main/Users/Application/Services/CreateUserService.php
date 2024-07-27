<?php

namespace Src\BoundedContext\Main\Users\Application\Services;

use Src\BoundedContext\Main\Users\Application\DTO\UserDto;
use Src\BoundedContext\Main\Users\Domain\Factories\UserFactory;
use Src\BoundedContext\Main\Users\Domain\Repositories\UserRepository;
use Src\BoundedContext\Shared\Main\Users\Domain\ValueObjects\UserUuid;

class CreateUserService
{
    public function __construct(
        private readonly UserRepository $repository
    ) {}

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
