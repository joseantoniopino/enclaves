<?php

namespace Src\BoundedContext\Shared\Helpers\Domain\ValueObjects;

abstract class StringValueObject
{
    public function __construct(
        public readonly string $value,
    ) {}
}
