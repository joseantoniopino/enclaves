<?php

namespace Src\BoundedContext\Main\Users\Application\Responses;

class UserResponse
{
    public function __construct(
        public string $uuid,
        public string $name,
        public string $email,
    ) {}

    public function toArray(): array
    {
        return [
            'uuid' => $this->uuid,
            'name' => $this->name,
            'email' => $this->email,
        ];
    }
}
