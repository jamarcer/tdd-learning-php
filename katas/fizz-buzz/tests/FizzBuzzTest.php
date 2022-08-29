<?php

declare(strict_types=1);

namespace FizzBuzz\Tests;

use FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function test_that_the_first_element_in_the_outout_is_1(): void
    {
        $this->assertEquals(1, $this->kata()->elementAtPosition(1));
    }

    public function test_that_the_second_element_in_the_outout_is_2(): void
    {
        $this->assertEquals(2, $this->kata()->elementAtPosition(2));
    }

    public function test_that_the_third_element_in_the_outout_is_fizz(): void
    {
        $this->assertEquals('Fizz', $this->kata()->elementAtPosition(3));
    }

    public function test_that_the_fifth_element_in_the_outout_is_buzz(): void
    {
        $this->assertEquals('Buzz', $this->kata()->elementAtPosition(5));
    }

    public function test_that_the_fifteenth_element_in_the_outout_is_fizzbuzz(): void
    {
        $this->assertEquals('FizzBuzz', $this->kata()->elementAtPosition(15));
    }

    public function test_that_if_position_number_is_multiple_of_three_print_fizz(): void
    {
        $this->assertEquals('Fizz', $this->kata()->elementAtPosition(9));
    }

    public function test_that_if_position_number_is_multiple_of_five_print_buzz(): void
    {
        $this->assertEquals('Buzz', $this->kata()->elementAtPosition(10));
    }

    public function test_that_if_position_number_is_multiple_of_five_and_a_multiple_of_five__print_fizzbuzz(): void
    {
        $this->assertEquals('FizzBuzz', $this->kata()->elementAtPosition(30));
    }

    public function test_that_the_output_of_the_first_twenty_elements_is_correct(): void
    {
        $this->assertEquals($this->expectedOutputForTheFistTwentyElements(), $this->kata()->forTheRange(1, 20))
;    }

    private function kata(): FizzBuzz
    {
        return new FizzBuzz();
    }

    private function expectedOutputForTheFistTwentyElements(): array
    {
        return [
            1, 2, 'Fizz', 4, 'Buzz', 'Fizz', 7, 8, 'Fizz', 'Buzz', 11, 'Fizz', 13, 14, 'FizzBuzz', 16, 17, 'Fizz', 19, 'Buzz',
        ];
    }
}

