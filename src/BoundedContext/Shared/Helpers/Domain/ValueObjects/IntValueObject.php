<?php

namespace Src\BoundedContext\Shared\Helpers\Domain\ValueObjects;

abstract class IntValueObject
{
    public function __construct(
        public readonly int $value,
    ) {
    }
}
