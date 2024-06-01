<?php

namespace Src\BoundedContext\Main\Users\Domain\Factories;

use Src\BoundedContext\Main\Users\Domain\Entities\User;
use Src\BoundedContext\Main\Users\Domain\ValueObjects\UserEmail;
use Src\BoundedContext\Main\Users\Domain\ValueObjects\UserName;
use Src\BoundedContext\Main\Users\Domain\ValueObjects\UserPassword;
use Src\BoundedContext\Shared\Main\Users\Domain\ValueObjects\UserUuid;

readonly class UserFactory
{
    public static function fromPrimitives(
        string $uuid,
        string $name,
        string $email,
        ?string $password = null,
    ): User {
        return new User(
            new UserUuid($uuid),
            new UserName($name),
            new UserEmail($email),
            $password ? new UserPassword($password) : null,
        );
    }
}
