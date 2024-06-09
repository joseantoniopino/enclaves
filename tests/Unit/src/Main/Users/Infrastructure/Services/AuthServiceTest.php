<?php

namespace Tests\Unit\src\Main\Users\Infrastructure\Services;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Src\BoundedContext\Main\Users\Infrastructure\Models\User;
use Src\BoundedContext\Main\Users\Infrastructure\Services\AuthService;
use Tests\TestCase;

class AuthServiceTest extends TestCase
{
    use RefreshDatabase;

    public function testAuthenticateValidCredentials()
    {
        $authService = new AuthService();

        User::factory()->create([
            'email' => 'john@example.com',
            'password' => Hash::make('password'),
        ]);

        $user = $authService->authenticate('john@example.com', 'password');

        $this->assertInstanceOf(User::class, $user);
        $this->assertEquals('john@example.com', $user->email);
    }

    public function testAuthenticateInvalidCredentials()
    {
        $this->expectException(ValidationException::class);

        $authService = new AuthService();

        User::factory()->create([
            'email' => 'john@example.com',
            'password' => Hash::make('password'),
        ]);

        $authService->authenticate('john@example.com', 'wrongpassword');
    }

    public function testCreateToken()
    {
        $authService = new AuthService();

        $user = User::factory()->create([
            'email' => 'john@example.com',
            'password' => Hash::make('password'),
        ]);

        $token = $authService->createToken($user);

        $this->assertIsString($token);
    }

    public function testLogout()
    {
        $authService = new AuthService();

        $user = User::factory()->create();

        $this->actingAs($user, 'sanctum');
        $authService->logout();

        $this->assertTrue(auth()->user()->tokens()->get()->isEmpty());
    }
}
