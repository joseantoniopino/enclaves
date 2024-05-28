<?php

namespace Src\BoundedContext\Shared\Main\Roll\Domain\DTO;

class RollDto
{
    /**
     * @param int $total
     * @param string[] $details
     */
    public function __construct(
        public readonly int $total,
        public readonly array $details,
    ) {
    }
}
