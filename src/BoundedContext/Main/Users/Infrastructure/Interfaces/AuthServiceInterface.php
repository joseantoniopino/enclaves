<?php

namespace Src\BoundedContext\Main\Users\Infrastructure\Interfaces;

use Src\BoundedContext\Main\Users\Infrastructure\Models\User;

interface AuthServiceInterface
{
    public function authenticate(string $email, string $password): User;

    public function createToken(User $user): string;
}
