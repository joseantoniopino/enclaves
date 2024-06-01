<?php

namespace Src\BoundedContext\Main\Users\Domain\DTO;

class UserDto
{
    public function __construct(
        public string $uuid,
        public string $name,
        public string $email,
    ) {
    }
}
