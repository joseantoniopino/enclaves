<?php

namespace Src\BoundedContext\Main\Users\Application\Services;

use Src\BoundedContext\Main\Users\Application\DTO\UserDto;
use Src\BoundedContext\Main\Users\Domain\Exceptions\InvalidCredentialsException;
use Src\BoundedContext\Main\Users\Domain\Repositories\UserRepository;

class FindUserByEmailService
{
    public function __construct(
        private readonly UserRepository $repository
    ) {}

    /**
     * @throws InvalidCredentialsException
     */
    public function __invoke(string $email): UserDto
    {
        $user = $this->repository->findByEmail($email);

        if (!$user) {
            throw new InvalidCredentialsException('The provided credentials are incorrect.');
        }

        return new UserDto(
            $user->uuid->value,
            $user->name->value,
            $user->email->value,
        );
    }
}
