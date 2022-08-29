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
        return '';
    }
}
