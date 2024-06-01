<?php

namespace Src\BoundedContext\Shared\Main\Roll\Domain\Services;

use Random\RandomException;
use Src\BoundedContext\Shared\Main\Roll\Domain\Entities\Dice;

class Roll
{
    /**
     * @param  Dice[]  $dices
     */
    public function __construct(
        private readonly array $dices,
        private readonly ?int $modifier,
    ) {
    }

    /**
     * @return array<string, int|array[]>
     *
     * @throws RandomException
     */
    public function __invoke(): array
    {
        $total = 0;
        $details = [];
        foreach ($this->dices as $dice) {
            for ($i = 0; $i < $dice->quantity->value; $i++) {
                $result = $this->randomInt(1, $dice->faces->value);
                $total += $result;
                $details[] = [
                    'dice' => "D{$dice->faces->value}",
                    'result' => $result,
                ];
            }
        }

        return [
            'total' => $total + $this->modifier ?? 0,
            'modifier' => $this->modifier ?? 0,
            'details' => $details,
        ];
    }

    /**
     * Wrapper around the random_int function to allow mocking in tests.
     *
     * @throws RandomException
     */
    protected function randomInt(int $min, int $max): int
    {
        return random_int($min, $max);
    }
}
