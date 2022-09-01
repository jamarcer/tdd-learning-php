<?php

declare(strict_types=1);

namespace FizzBuzz;

class FizzBuzzStage2
{
    public function elementAtPosition(int $position): int|string
    {
        if (0 === $position % 15) {
            return 'FizzBuzz';
        }
        if (0 === $position % 3) {
            return 'Fizz';
        }
        if (0 === $position % 5) {
            return 'Buzz';
        }
        $positionString = (string)$position;
        for ($i = 0, $iMax = strlen($positionString); $i < $iMax; $i++) {
            if ('3' === $positionString[$i]) {
                return 'Fizz';
            }
            if ('5' === $positionString[$i]) {
                return 'Buzz';
            }
        }

        return $position;
    }
}
