<?php

use App\IntegerRecreateOne;
use PHPUnit\Framework\TestCase;

class IntegerRecreateOneTest extends TestCase
{
    /**
     * @test
     * @dataProvider squaredDivisors
     */
    public function sum_of_squared_divisors ($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }

    public function squaredDivisors() {

        $integerRecreateOne = new IntegerRecreateOne();

        return [
                [$integerRecreateOne->listSquared(1, 246), [[1, 1], [42, 2500], [246, 84100]]],
                [$integerRecreateOne->listSquared(1, 250), [[1, 1], [42, 2500], [246, 84100]]],
                [$integerRecreateOne->listSquared(42, 250), [[42, 2500], [246, 84100]]],
                [$integerRecreateOne->listSquared(250, 500), [[287, 84100]]],
                [$integerRecreateOne->listSquared(300, 600), []]
            ];
    }
}
