<?php

declare(strict_types=1);

namespace FizzBuzz\Tests;

use FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function test_it_should_assert_something()
    {
        $kata = new FizzBuzz();
        $this->assertInstanceOf(FizzBuzz::class, $kata);
    }
}

