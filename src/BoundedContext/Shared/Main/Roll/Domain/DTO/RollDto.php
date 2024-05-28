<?php

namespace Src\BoundedContext\Shared\Main\Roll\Domain\DTO;

class RollDto
{
    public function __construct(
        public readonly int $total,
        public readonly array $details,
    ) {
    }
}
