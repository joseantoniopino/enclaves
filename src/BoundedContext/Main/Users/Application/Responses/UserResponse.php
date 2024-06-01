<?php

namespace Src\BoundedContext\Main\Users\Application\Responses;

class UserResponse
{
    public function __construct(
        public string $uuid,
        public string $name,
        public string $email,
        public ?string $token = null,
    ) {
    }

    public function toArray(): array
    {
        $tokenArray = [];
        $response = [
            'uuid' => $this->uuid,
            'name' => $this->name,
            'email' => $this->email,
        ];

        if (null !== $this->token) {
            $tokenArray = ['token' => $this->token];
        }

        return array_merge($response, $tokenArray);
    }
}
