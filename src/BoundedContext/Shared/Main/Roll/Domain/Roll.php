<?php

namespace Src\BoundedContext\Shared\Main\Roll\Domain;

use Random\RandomException;

class Roll
{
    /**
     * @param Dice[] $dices
     */
    public function __construct(
        private readonly array $dices,
    ) {
    }

    /**
     * @throws RandomException
     */
    public function result(): int
    {
        $result = 0;
        foreach ($this->dices as $dice) {
            for ($i = 0; $i < $dice->quantity->value; $i++) {
                $result += random_int(1, $dice->faces->value);
            }
        }

        return $result;
    }
}
