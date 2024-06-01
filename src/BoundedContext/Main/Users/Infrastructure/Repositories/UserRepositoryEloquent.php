<?php

namespace Src\BoundedContext\Main\Users\Infrastructure\Repositories;

use Src\BoundedContext\Main\Users\Domain\Entities\User;
use Src\BoundedContext\Main\Users\Domain\Factories\UserFactory;
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

    public function findByEmail(string $email): ?User
    {
        $userModel = UserModel::whereEmail($email)->first();

        if (!$userModel) {
            return null;
        }

        return $this->toDomainEntity($userModel, true);
    }

    private function toDomainEntity(UserModel $userModel): User
    {
        return UserFactory::fromPrimitives(
            $userModel->uuid,
            $userModel->name,
            $userModel->email,
        );
    }
}
