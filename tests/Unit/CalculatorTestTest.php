<?php

namespace Tests\Unit;


use App\Http\Controllers\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTestTest extends TestCase
{
    /**
     * @test
     */
    public function it_adds_two_numbers()
    {
        $result = Calculator::add(1, 2);
        $this->assertEquals($result, 3);
    }

    /**
     * @test
     */
    public function it_subtracts_two_numbers()
    {
        $result = Calculator::subtract(2, 1);
        $this->assertEquals($result, 1);
    }

    /**
     * @test
     */
    public function it_multiplies_two_numbers()
    {
        $result = Calculator::multiply(2, 2);
        $this->assertEquals($result, 4);
    }

    /**
     * @test
     */
    public function it_divides_two_numbers()
    {
        $result = Calculator::divide(4, 2);
        $this->assertEquals($result, 2);
    }

    /**
     * @test
     */
    public function it_returns_a_fraction()
    {
        $result = Calculator::divide(1, 2);
        $this->assertEquals($result, 0.5);
    }

    /**
     * @test
     */
    public function it_throws_error_division_by_zero()
    {
        $this->expectException(\DivisionByZeroError::class);
        $result = Calculator::divide(4, 0);
    }

}
