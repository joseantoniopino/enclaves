<?php

namespace Src\BoundedContext\Shared\Helpers\Domain\ValueObjects;


abstract class EmailValueObject
{
    public readonly string $domain;

    public function __construct(
        public readonly string $value,
        public readonly bool   $strict = true,
    ) {
        if ($strict) {
            $this->validateEmail($value);
        }
        $this->domain = substr(strrchr($value, '@'), 1);
    }

    private function validateEmail(string $email): void
    {
        // Remove all illegal characters from email
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        // Validate e-mail
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException(sprintf('The email <%s> is not valid', $email));
        }
    }

}
