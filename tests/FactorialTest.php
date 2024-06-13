<?php
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\CoversFunction;
use PHPUnit\Framework\Attributes\UsesClass;

require './src/Factorial.php';


#[UsesClass(Factorial::class)]
#[CoversFunction('Factorial::calculate')]
class FactorialTest extends TestCase
{
    #[Test]
    public function testFactorialOfZeroShouldBeOne()
    {
        $factorial = new Factorial();
        $this->assertEquals(1, $factorial->calculate(0));
    }
    #[Test]
    public function testFactorialOfOneShouldBeOne()
    {
        $factorial = new Factorial();
        $this->assertEquals(1, $factorial->calculate(1));
    }

    #[Test]
    public function testFactorialOfFiveShouldBe120()
    {
        $factorial = new Factorial();
        $this->assertEquals(120, $factorial->calculate(5));
    }
}
