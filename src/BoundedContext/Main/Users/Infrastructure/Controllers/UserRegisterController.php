<?php

namespace Src\BoundedContext\Main\Users\Infrastructure\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Src\BoundedContext\Main\Users\Application\Responses\UserResponseConverter;
use Src\BoundedContext\Main\Users\Application\Services\CreateUserService;
use Src\BoundedContext\Main\Users\Infrastructure\Requests\UserRegisterRequest;

class UserRegisterController extends Controller
{
    public function __construct(
        private readonly CreateUserService $service
    ) {}

    public function __invoke(UserRegisterRequest $request): JsonResponse
    {
        $user = $this->service->__invoke(
            $request->uuid ?? null,
            $request->name,
            $request->email,
            Hash::make($request->password),
        );

        $response = (new UserResponseConverter())->__invoke($user);

        return response()->json($response->toArray(), 201);
    }
}
