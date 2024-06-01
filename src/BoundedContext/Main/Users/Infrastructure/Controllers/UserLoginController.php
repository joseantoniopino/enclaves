<?php

namespace Src\BoundedContext\Main\Users\Infrastructure\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Src\BoundedContext\Main\Users\Application\Responses\UserResponse;
use Src\BoundedContext\Main\Users\Application\Services\FindUserByEmailService;
use Src\BoundedContext\Main\Users\Domain\Exceptions\InvalidCredentialsException;
use Src\BoundedContext\Main\Users\Infrastructure\Requests\UserLoginRequest;
use Src\BoundedContext\Main\Users\Infrastructure\Services\AuthService;

class UserLoginController extends Controller
{
    public function __construct(
        private readonly FindUserByEmailService $findUserByEmailService,
        private readonly AuthService            $authService
    ) {
    }

    /**
     * @throws ValidationException
     * @throws InvalidCredentialsException
     */
    public function __invoke(UserLoginRequest $request): JsonResponse
    {
        $user = $this->findUserByEmailService->__invoke($request->email);

        $eloquentUser = $this->authService->authenticate($request->email, $request->password);

        $token = $this->authService->createToken($eloquentUser);

        $response = new UserResponse(
            $user->uuid,
            $user->name,
            $user->email,
            $token
        );

        return response()->json($response->toArray());
    }
}
