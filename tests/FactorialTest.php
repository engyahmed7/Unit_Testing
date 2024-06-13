<?php

use PHPUnit\Framework\TestCase;

require './src/Factorial.php';


class FactorialTest extends TestCase
{
    public function testFactorialOfZeroShouldBeOne()
    {
        $factorial = new Factorial();
        $this->assertEquals(1, $factorial->calculate(0));
    }

    public function testFactorialOfOneShouldBeOne()
    {
        $factorial = new Factorial();
        $this->assertEquals(1, $factorial->calculate(1));
    }

    public function testFactorialOfFiveShouldBe120()
    {
        $factorial = new Factorial();
        $this->assertEquals(120, $factorial->calculate(5));
    }
    
    public function testFactorialGt3()
    {
        $randomNumber = rand(3, 99999);
        $factorial = new Factorial();
        $this->assertEquals($factorial->calculate($randomNumber), $factorial->calculate($randomNumber - 1) * $randomNumber);
    }

    public function testFactorialOfNegThreeShouldBeNull()
    {
        $factorial = new Factorial();
        $this->assertEquals(null, $factorial->calculate(-3));
    }

    public function testFactorialOFOneAndHalfShouldBeNull()
    {
        $factorial = new Factorial();
        $this->assertEquals(null, $factorial->calculate(1.5));
    }

    public function testFactorialOfFalseShouldBeNull()
    {
        $factorial = new Factorial();
        $this->assertEquals(null, $factorial->calculate(false));
    }

    public function testFactorialOfABCShouldBeNull()
    {
        $factorial = new Factorial();
        $this->assertEquals(null, $factorial->calculate('abc'));
    }
}
