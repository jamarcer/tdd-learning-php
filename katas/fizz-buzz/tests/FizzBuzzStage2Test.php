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

}
