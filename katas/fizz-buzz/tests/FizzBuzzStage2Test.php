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

    private function kata(): FizzBuzzStage2
    {
        return new FizzBuzzStage2();
    }

}
