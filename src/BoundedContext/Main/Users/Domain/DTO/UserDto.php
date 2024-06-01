<?php

namespace Src\BoundedContext\Main\Users\Domain\DTO;

readonly class UserDto
{
    public function __construct(
        public string $uuid,
        public string $name,
        public string $email,
        public ?string $password = null,
        public ?string $token = null,
    ) {
    }
}
