<?php

declare(strict_types=1);

namespace FizzBuzz;

class FizzBuzz
{
    public function elementAtPosition(int $position): string
    {
        if (1 === $position) {
            return '1';
        }
        if (2 === $position) {
            return '2';
        }
        if ((0 === $position % 3) && (0 === $position % 5)) {
            return 'FizzBuzz';
        }
        if (0 === $position % 3) {
            return 'Fizz';
        }
        if (0 === $position % 5) {
            return 'Buzz';
        }

        return '';
    }
}
