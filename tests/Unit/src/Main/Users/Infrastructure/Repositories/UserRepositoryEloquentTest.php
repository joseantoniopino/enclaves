<?php

namespace Tests\Unit\src\Main\Users\Infrastructure\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Nonstandard\Uuid;
use Src\BoundedContext\Main\Users\Domain\Entities\User;
use Src\BoundedContext\Main\Users\Domain\ValueObjects\UserEmail;
use Src\BoundedContext\Main\Users\Domain\ValueObjects\UserName;
use Src\BoundedContext\Main\Users\Domain\ValueObjects\UserPassword;
use Src\BoundedContext\Main\Users\Infrastructure\Models\User as UserModel;
use Src\BoundedContext\Main\Users\Infrastructure\Repositories\UserRepositoryEloquent;
use Src\BoundedContext\Shared\Main\Users\Domain\ValueObjects\UserUuid;
use Tests\TestCase;

class UserRepositoryEloquentTest extends TestCase
{
    use RefreshDatabase;

    public function testSave()
    {
        $userRepository = new UserRepositoryEloquent();
        $uuid = Uuid::uuid4()->toString();

        $user = new User(
            new UserUuid($uuid),
            new UserName('John Doe'),
            new UserEmail('john@example.com'),
            new UserPassword('password')
        );

        $userRepository->save($user);

        $this->assertDatabaseHas('users', [
            'uuid' => $uuid,
            'name' => 'John Doe',
            'email' => 'john@example.com',
        ]);

        $this->assertTrue(Hash::check('password', UserModel::whereUuid($uuid)->first()->password));
    }

    public function testFindByEmail()
    {
        $userRepository = new UserRepositoryEloquent();
        $uuid = Uuid::uuid4()->toString();

        UserModel::factory()->create([
            'uuid' => $uuid,
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => 'password',
        ]);

        $user = $userRepository->findByEmail('john@example.com');

        $this->assertInstanceOf(User::class, $user);
        $this->assertEquals($uuid, $user->uuid->value);
        $this->assertEquals('John Doe', $user->name->value);
        $this->assertEquals('john@example.com', $user->email->value);
    }
}
