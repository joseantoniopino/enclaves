<?php

namespace Src\BoundedContext\Shared\Main\Roll\Application\Responses;

use Src\BoundedContext\Shared\Main\Roll\Application\DTO\RollDto;

class RollResponseConverter
{
    public function __invoke(RollDto $rollDto): RollResponse
    {
        return new RollResponse(
            $rollDto->total,
            $rollDto->modifier,
            $rollDto->details,
        );
    }
}
