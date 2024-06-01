<?php

namespace Src\BoundedContext\Main\Users\Infrastructure\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Src\BoundedContext\Main\Users\Infrastructure\Services\AuthService;

class UserLogoutController extends Controller
{
    public function __construct(
        private readonly AuthService $authService
    ) {
    }

    public function __invoke(): JsonResponse
    {
        $this->authService->logout();
        return response()->json(['message' => 'User logged out. Your token has been revoked. Login again to get a new token.']);
    }
}
