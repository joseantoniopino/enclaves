<?php

namespace Src\BoundedContext\Shared\Main\Roll\Domain\DTO;

class RollDto
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
}
