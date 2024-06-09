<?php

namespace Src\BoundedContext\Main\Users\Application\Responses;

use Src\BoundedContext\Main\Users\Application\DTO\UserDto;

class UserResponseConverter
{
    public function __invoke(UserDto $user): UserResponse
    {
        return new UserResponse(
            $user->uuid,
            $user->name,
            $user->email,
        );
    }
}
