<?php

declare(strict_types=1);

namespace FizzBuzz;

class FizzBuzzStage2
{
    public function elementAtPosition(int $position): int|string
    {
        if (0 === $position % 3) {
            return 'Fizz';
        }
        $positionString = (string)$position;
        for ($i = 0, $iMax = strlen($positionString); $i < $iMax; $i++) {
            if ('3' === $positionString[$i]) {
                return 'Fizz';
            }
        }

        return $position;
    }
}
