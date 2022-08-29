<?php

declare(strict_types=1);

namespace FizzBuzz\Tests;

use FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function test_that_first_element_in_the_outout_is_1(): void
    {
        $this->assertEquals(1, $this->kata()->elementAtPosition(1));
    }

    public function test_that_second_element_in_the_outout_is_2(): void
    {
        $this->assertEquals(2, $this->kata()->elementAtPosition(2));
    }

    public function test_that_third_element_in_the_outout_is_fizz(): void
    {
        $this->assertEquals('Fizz', $this->kata()->elementAtPosition(3));
    }

    private function kata(): FizzBuzz
    {
        return new FizzBuzz();
    }
}

