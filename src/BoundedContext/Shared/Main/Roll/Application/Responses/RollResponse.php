<?php

namespace Src\BoundedContext\Shared\Main\Roll\Application\Responses;

class RollResponse
{
    public function __construct(
        public readonly int $total,
        public readonly array $details,
    ) {
    }

    public function toArray(): array
    {
        return [
            'total' => $this->total,
            'details' => $this->details,
        ];
    }
}
