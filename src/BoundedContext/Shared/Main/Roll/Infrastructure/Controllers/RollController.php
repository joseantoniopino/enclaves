<?php

namespace Src\BoundedContext\Shared\Main\Roll\Infrastructure\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Random\RandomException;
use Src\BoundedContext\Shared\Main\Roll\Application\Responses\RollResponse;
use Src\BoundedContext\Shared\Main\Roll\Application\Services\RollService;
use Src\BoundedContext\Shared\Main\Roll\Infrastructure\Requests\RollRequest;

class RollController extends Controller
{
    public function __construct(
        private readonly RollService $rollService,
    ) {
    }

    /**
     * @throws RandomException
     */
    public function __invoke(RollRequest $request): JsonResponse
    {
        $roll = $this->rollService->__invoke($request->dices);
        return response()->json((new RollResponse($roll->total, $roll->details))->toArray());
    }
}
