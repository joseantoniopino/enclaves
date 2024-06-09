<?php

namespace Src\BoundedContext\Main\Users\Infrastructure\Services;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Src\BoundedContext\Main\Users\Infrastructure\Interfaces\AuthServiceInterface;
use Src\BoundedContext\Main\Users\Infrastructure\Models\User;

class AuthService implements AuthServiceInterface
{
    /**
     * @throws ValidationException
     */
    public function authenticate(string $email, string $password): User
    {
        $user = User::where('email', $email)->first();

        if (!$user || !Hash::check($password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return $user;
    }

    public function createToken(User $user): string
    {
        return $user->createToken('auth_token')->plainTextToken;
    }

    public function logout(): void
    {
        auth()->user()->tokens()->delete();
    }
}
