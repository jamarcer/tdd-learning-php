<?php

declare(strict_types=1);

namespace FizzBuzz;

class FizzBuzz
{
    public function elementAtPosition(int $position): int|string
    {
        if (0 === $position % 15) return 'FizzBuzz';
        if (0 === $position % 3)  return 'Fizz';
        if (0 === $position % 5)  return 'Buzz';

        return $position;
    }

    public function forTheRange(int $initialPosition, int $finalPosition): array
    {
        return array_map([$this, 'elementAtPosition'], range($initialPosition,$finalPosition));
    }
}
