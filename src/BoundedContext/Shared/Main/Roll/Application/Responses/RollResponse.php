<?php

namespace Src\BoundedContext\Shared\Main\Roll\Application\Responses;

class RollResponse
{
    /**
     * @param int $total
     * @param array[] $details
     * @param int $modifier
     */
    public function __construct(
        public readonly int $total,
        public readonly int $modifier,
        public readonly array $details,
    ) {
    }

    public function toArray(): array
    {
        return [
            'total' => $this->total,
            'modifier' => $this->modifier,
            'details' => $this->details,
        ];
    }
}
