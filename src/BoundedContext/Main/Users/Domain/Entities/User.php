<?php

namespace Src\BoundedContext\Main\Users\Domain\Entities;

use Src\BoundedContext\Main\Users\Domain\ValueObjects\UserEmail;
use Src\BoundedContext\Main\Users\Domain\ValueObjects\UserName;
use Src\BoundedContext\Main\Users\Domain\ValueObjects\UserPassword;
use Src\BoundedContext\Shared\Main\Users\Domain\ValueObjects\UserUuid;

class User
{
    public function __construct(
        public readonly UserUuid $uuid,
        public readonly UserName $name,
        public readonly UserEmail $email,
        public readonly ?UserPassword $password = null,
    ) {
    }
}
