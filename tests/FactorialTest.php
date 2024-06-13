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
}
