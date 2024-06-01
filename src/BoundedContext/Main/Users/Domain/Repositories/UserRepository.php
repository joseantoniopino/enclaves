<?php

namespace Src\BoundedContext\Main\Users\Domain\Repositories;

use Src\BoundedContext\Main\Users\Domain\Entities\User;

interface UserRepository
{
    public function save(User $user): void;
}
