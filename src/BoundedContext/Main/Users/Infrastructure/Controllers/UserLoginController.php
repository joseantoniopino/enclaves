<?php

namespace Src\BoundedContext\Main\Users\Infrastructure\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Src\BoundedContext\Main\Users\Application\Responses\UserResponseConverter;
use Src\BoundedContext\Main\Users\Application\Services\FindUserByEmailService;
use Src\BoundedContext\Main\Users\Domain\Exceptions\InvalidCredentialsException;
use Src\BoundedContext\Main\Users\Infrastructure\Interfaces\AuthServiceInterface;
use Src\BoundedContext\Main\Users\Infrastructure\Requests\UserLoginRequest;

class UserLoginController extends Controller
{
    public function __construct(
        private readonly FindUserByEmailService $findUserByEmailService,
        private readonly AuthServiceInterface $authService,
    ) {}

    /**
     * @throws ValidationException
     * @throws InvalidCredentialsException
     */
    public function __invoke(UserLoginRequest $request): JsonResponse
    {
        $user = $this->findUserByEmailService->__invoke($request->email);

        $eloquentUser = $this->authService->authenticate($request->email, $request->password);

        $token = $this->authService->createToken($eloquentUser);

        $response = (new UserResponseConverter())->__invoke($user);

        return response()->json(array_merge($response->toArray(), ['token' => $token]));
    }
}
