<?php
use PHPUnit\Framework\TestCase;

class CalculationTest extends TestCase
{
    public function testCalculateSum()
    {
        $result = calculateSum(2, 3);
        $this->assertEquals(5, $result);
    }
}

function calculateSum($a, $b)
{
    return $a + $b;
}