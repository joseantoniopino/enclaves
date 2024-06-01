<?php

namespace Src\BoundedContext\Main\Users\Infrastructure\Repositories;

use Src\BoundedContext\Main\Users\Domain\Entities\User;
use Src\BoundedContext\Main\Users\Infrastructure\Models\User as UserModel;
use Src\BoundedContext\Main\Users\Domain\Repositories\UserRepository;

class UserRepositoryEloquent implements UserRepository
{
    public function save(User $user): void
    {
        UserModel::create([
            'uuid' => $user->uuid->value,
            'name' => $user->name->value,
            'email' => $user->email->value,
            'password' => $user->password->value,
        ]);
    }
}
