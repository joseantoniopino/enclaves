<?php

namespace Tests\Unit\src\Main\Users\Domain\Factories;

use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;
use Src\BoundedContext\Main\Users\Domain\Entities\User;
use Src\BoundedContext\Main\Users\Domain\Factories\UserFactory;

class UserFactoryTest extends TestCase
{
    public function testFromPrimitives()
    {
        $uuid = Uuid::uuid4()->toString();
        $user = UserFactory::fromPrimitives($uuid, 'John Doe', 'john@example.com', 'password');

        $this->assertInstanceOf(User::class, $user);
        $this->assertEquals($uuid, $user->uuid->value);
        $this->assertEquals('John Doe', $user->name->value);
        $this->assertEquals('john@example.com', $user->email->value);
        $this->assertEquals('password', $user->password->value);
    }
}
