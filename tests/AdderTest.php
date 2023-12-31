<?php
namespace Kata\Tests;

use Kata\Adder;
use PHPUnit\Framework\TestCase;

class AdderTest extends TestCase
{
    /**
     * @test
     * @dataProvider validSumsProvider
     * @param int $a
     * @param int $b
     * @param $expectedResult
     */
    public function validSums($a, $b, $expectedResult)
    {
        $this->assertEquals(
            $expectedResult,
            (new Adder())->add($a, $b)
        );
    }

    public function testFoo(): void
    {
        $this->assertEquals(
            89,
            (new Adder())->suma(44, 22)
        );
    }

    public function testFooTwo(): void
    {
        $this->assertEquals(
            89,
            (new Adder())->suma(44, 22)
        );
    }
    public function validSumsProvider()
    {
        return [
            [null, null, 0],
            [0, 0, 0],
            [1, 1, 2]
        ];
    }
}