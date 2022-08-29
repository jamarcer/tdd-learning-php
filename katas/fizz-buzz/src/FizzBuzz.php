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
        if (3 === $position) {
            return 'Fizz';
        }

        return '';
    }
}
