<?php

namespace Src\BoundedContext\Shared\Main\Roll\Infrastructure\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Random\RandomException;
use Src\BoundedContext\Shared\Main\Roll\Application\Responses\RollResponseConverter;
use Src\BoundedContext\Shared\Main\Roll\Application\Services\RollService;
use Src\BoundedContext\Shared\Main\Roll\Domain\Exceptions\InvalidDiceDefinitionException;
use Src\BoundedContext\Shared\Main\Roll\Infrastructure\Requests\RollRequest;

class RollController extends Controller
{
    public function __construct(
        private readonly RollService $rollService,
    ) {}

    /**
     * @throws RandomException|InvalidDiceDefinitionException
     */
    public function __invoke(RollRequest $request): JsonResponse
    {
        $roll = $this->rollService->__invoke($request->dices, $request->modifier);
        $response = (new RollResponseConverter())->__invoke($roll);

        return response()->json($response->toArray());
    }
}
