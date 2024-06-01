<?php

namespace Src\BoundedContext\Main\Users\Infrastructure\Services;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Src\BoundedContext\Main\Users\Infrastructure\Models\User as EloquentUser;

class AuthService
{
    /**
     * @throws ValidationException
     */
    public function authenticate(string $email, string $password): EloquentUser
    {
        $user = EloquentUser::where('email', $email)->first();

        if (!$user || !Hash::check($password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return $user;
    }

    public function createToken(EloquentUser $user): string
    {
        return $user->createToken('auth_token')->plainTextToken;
    }
}
