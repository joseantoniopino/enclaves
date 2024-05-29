<?php

namespace Src\BoundedContext\Shared\Main\Roll\Domain\Services;

use Random\RandomException;
use Src\BoundedContext\Shared\Main\Roll\Domain\Entities\Dice;

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
     * @return array<string, int|array[]>
     * @throws RandomException
     */
    public function __invoke(): array
    {
        $total = 0;
        $details = [];
        foreach ($this->dices as $dice) {
            for ($i = 0; $i < $dice->quantity->value; $i++) {
                $result = random_int(1, $dice->faces->value);
                $total += $result;
                $details[] = [
                    'dice' => "D{$dice->faces->value}",
                    'result' => $result,
                ];
            }
        }

        return [
            'total' => $total,
            'details' => $details
        ];
    }
}
