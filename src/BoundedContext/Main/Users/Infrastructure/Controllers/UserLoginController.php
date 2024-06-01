<?php

namespace Src\BoundedContext\Main\Users\Infrastructure\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Src\BoundedContext\Main\Users\Application\Responses\UserResponse;
use Src\BoundedContext\Main\Users\Application\Services\UserLoginService;
use Src\BoundedContext\Main\Users\Domain\Exceptions\InvalidCredentialsException;
use Src\BoundedContext\Main\Users\Infrastructure\Models\User;
use Src\BoundedContext\Main\Users\Infrastructure\Requests\UserLoginRequest;

class UserLoginController extends Controller
{
    public function __construct(
        private readonly UserLoginService $service
    ) {
    }

    /**
     * @throws InvalidCredentialsException
     */
    public function __invoke(UserLoginRequest $request): JsonResponse
    {
        $user = $this->service->__invoke($request->email);

        $requestPassword = $request->password;
        $eloquentUser = $this->getEloquentUser($user->uuid);
        $userPassword = $eloquentUser->password;

        $this->checkPassword($requestPassword, $userPassword);

        $token = $this->generateToken($eloquentUser);

        $response = new UserResponse(
            $user->uuid,
            $user->name,
            $user->email,
        );

        return response()->json(array_merge($response->toArray(), ['token' => $token]));
    }

    private function checkPassword(string $requestPassword, string $userPassword): void
    {
        if (!Hash::check($requestPassword, $userPassword)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
    }

    private function getEloquentUser(string $uuid): User
    {
        return User::whereUuid($uuid)->first();
    }

    private function generateToken(User $user): string
    {
        return $user->createToken('auth_token')->plainTextToken;
    }
}
