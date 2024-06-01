<?php

namespace Src\BoundedContext\Shared\Main\Roll\Domain\DTO;

class RollDto
{
    /**
     * @param  array[]  $details
     */
    public function __construct(
        public readonly int $total,
        public readonly int $modifier,
        public readonly array $details,
    ) {
    }
}
