<?php

namespace Src\BoundedContext\Main\Users\Domain\Entities;

use Src\BoundedContext\Main\Users\Domain\ValueObjects\UserEmail;
use Src\BoundedContext\Main\Users\Domain\ValueObjects\UserName;
use Src\BoundedContext\Main\Users\Domain\ValueObjects\UserPassword;
use Src\BoundedContext\Shared\Main\Users\Domain\ValueObjects\UserUuid;

readonly class User
{
    public function __construct(
        public UserUuid      $uuid,
        public UserName      $name,
        public UserEmail     $email,
        public ?UserPassword $password,
    ) {
    }
}
