<?php

namespace Src\BoundedContext\Main\Users\Application\Responses;

class UserResponse
{
    public function __construct(
        public string $uuid,
        public string $name,
        public string $email,
        public ?string $password = null,
        public ?string $token = null,
    ) {
    }

    public function toArray(): array
    {
        $tokenArray = [];
        $passwordArray = [];
        $response = [
            'uuid' => $this->uuid,
            'name' => $this->name,
            'email' => $this->email,
        ];

        if ($this->token) {
            $tokenArray = ['token' => $this->token];
        }

        if ($this->password) {
            $passwordArray = ['password' => $this->password];
        }

        return array_merge($response, $tokenArray, $passwordArray);
    }
}
