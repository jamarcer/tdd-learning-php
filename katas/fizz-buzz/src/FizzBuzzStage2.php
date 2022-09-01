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
        return $position;
    }
}
