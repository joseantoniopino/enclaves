<?php

namespace Src\BoundedContext\Shared\Helpers\Domain\ValueObjects;

use Ramsey\Uuid\Uuid as RamseyUuid;
class Uuid implements \Stringable
{

    public function __construct(
        public readonly string $value
    ) {
        $this->ensureIsValidUuid($value);
    }

    public static function random(): static
    {
        return new static(RamseyUuid::uuid4()->toString());
    }

    public function equals(Uuid $other): bool
    {
        return $this->value === $other->value;
    }

    public function __toString(): string
    {
        return $this->value;
    }

    private function ensureIsValidUuid(string $id): void
    {
        if (!RamseyUuid::isValid($id)) {
            throw new \InvalidArgumentException(sprintf('<%s> does not allow the value <%s>.', static::class, $id));
        }
    }

    public static function checkIsValidUuid(string $id): bool
    {
        return RamseyUuid::isValid($id);
    }

}
