<?php

namespace Src\BoundedContext\Main\Users\Application\DTO;

readonly class UserDto
{
    public function __construct(
        public string $uuid,
        public string $name,
        public string $email,
    ) {
    }
}
