<?php

namespace Tests\Unit\src\Main\Users\Application\DTO;


use Src\BoundedContext\Main\Users\Application\DTO\UserDto;
use Tests\TestCase;

class UserDtoTest extends TestCase
{
    public function testUserDtoCreation()
    {
        $userDto = new UserDto('uuid-1234', 'John Doe', 'john@example.com');

        $this->assertEquals('uuid-1234', $userDto->uuid);
        $this->assertEquals('John Doe', $userDto->name);
        $this->assertEquals('john@example.com', $userDto->email);
    }
}
