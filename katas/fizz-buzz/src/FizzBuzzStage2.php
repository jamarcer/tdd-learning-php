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
            if ($this->hasDigitWithValue((string)$position, '5')) {
                return 'FizzBuzz';
            }

            return 'Fizz';
        }
        if (0 === $position % 5) {
            if ($this->hasDigitWithValue((string)$position, '3')) {
                return 'FizzBuzz';
            }

            return 'Buzz';
        }
        if ($this->hasDigitWithValue((string)$position, '3') && $this->hasDigitWithValue((string)$position, '5')) {
            return 'FizzBuzz';
        }
        if ($this->hasDigitWithValue((string)$position, '3')) {
            return 'Fizz';
        }
        if ($this->hasDigitWithValue((string)$position, '5')) {
            return 'Buzz';
        }

        return $position;
    }

    private function hasDigitWithValue(string $number, string $digit): bool
    {
        for ($i = 0, $iMax = strlen($number); $i < $iMax; $i++) {
            if ($digit === $number[$i]) {
                return true;
            }
        }

        return false;
    }
}
