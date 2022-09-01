<?php

declare(strict_types=1);

namespace FizzBuzz\Tests;

use FizzBuzz\FizzBuzzStage2;
use PHPUnit\Framework\TestCase;

class FizzBuzzStage2Test extends TestCase
{
    public function test_that_if_position_number_is_multiple_of_three_print_fizz(): void
    {
        $this->assertEquals('Fizz', $this->kata()->elementAtPosition(9));
    }

    private function kata(): FizzBuzzStage2
    {
        return new FizzBuzzStage2();
    }

    public function test_that_if_position_number_has_a_three_in_it_print_fizz(): void
    {
        $this->assertEquals('Fizz', $this->kata()->elementAtPosition(13));
    }

    public function test_that_if_position_number_is_multiple_of_five_print_buzz(): void
    {
        $this->assertEquals('Buzz', $this->kata()->elementAtPosition(5));
    }

    public function test_that_if_position_number_has_a_five_in_it_print_fizz(): void
    {
        $this->assertEquals('Buzz', $this->kata()->elementAtPosition(56));
    }

    public function test_that_if_position_number_is_multiple_of_three_and_a_multiple_of_five_print_fizzbuzz(): void
    {
        $this->assertEquals('FizzBuzz', $this->kata()->elementAtPosition(15));
    }

    public function test_that_the_output_of_several_elements_is_correct(): void
    {
        $expectedList = $this->expectedOutputForSeveralElements();

        $expected = [];
        $obtained = [];
        foreach ($expectedList as $position => $value) {
            $expected[$position] = $value;
            $obtained[$position] = $this->kata()->elementAtPosition($position);
        }

        $this->assertEquals($expected, $obtained);
    }

    private function expectedOutputForSeveralElements(): array
    {
        return [
            1 => 1,
            2 => 2,
            3 => 'Fizz',
            4 => 4,
            5 => 'Buzz',
            6 => 'Fizz',
            7 => 7,
            8 => 8,
            9 => 'Fizz',
            10 => 'Buzz',
            11 => 11,
            12 => 'Fizz',
            13 => 'Fizz',
            14 => 14,
            15 => 'FizzBuzz',
            16 => 16,
            17 => 17,
            18 => 'Fizz',
            19 => 19,
            20 => 'Buzz',
            30 => 'FizzBuzz',
            31 => 'Fizz',
            32 => 'Fizz',
            33 => 'Fizz',
            34 => 'Fizz',
            35 => 'Buzz',
            36 => 'Fizz',
            37 => 'Fizz',
            38 => 'Fizz',
            39 => 'Fizz',
            50 => 'Buzz',
            51 => 'FizzBuzz',
            52 => 'Buzz',
            53 => 'FizzBuzz',
            54 => 'FizzBuzz',
            55 => 'Buzz',
            56 => 'Buzz',
            57 => 'FizzBuzz',
            58 => 'Buzz',
            59 => 'Buzz',
        ];
    }
}
