<?php

declare(strict_types=1);

namespace FizzBuzz\Tests;

use FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function test_that_first_element_in_the_outout_is_1()
    {
        $this->assertEquals(1, $this->kata()->elementAtPosition(1));
    }

    private function kata(): FizzBuzz
    {
        return new FizzBuzz();
    }
}

